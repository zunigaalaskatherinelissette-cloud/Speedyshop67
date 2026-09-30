 <?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conexionp.php';

// Verificar si el vendedor está logueado
if (!isset($_SESSION['id_vendedor'])) {
    header("Location: login.php");
    exit();
}

$id_vendedor = $_SESSION['id_vendedor']; // ID del vendedor logueado

// Actualizar datos si se envió el formulario
if (isset($_POST['update'])) {
    $id_producto = intval($_POST['id']);
    $nombre = $_POST['nombre'] ?? '';
    $precio = $_POST['precio'] ?? '';
    $categoria = $_POST['id_categoria'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';

    // Validar que el producto sea del vendedor logueado
    $check_owner = mysqli_query($conex, "SELECT id_producto FROM productos WHERE id_producto = $id_producto AND id_vendedores = $id_vendedor");
    if (mysqli_num_rows($check_owner) === 0) {
        die("No tienes permiso para editar este producto.");
    }

    // Validar campos
    if ($nombre && $precio && $categoria && $descripcion) {
        // Si se subió imagen nueva
        if (!empty($_FILES['imagen']['name'])) {
            $imagen = $_FILES['imagen']['name'];
            $imagen_tmp = $_FILES['imagen']['tmp_name'];
            $imagen_path = "uploaded_img/$imagen";
            move_uploaded_file($imagen_tmp, $imagen_path);

            $update_query = "UPDATE productos 
                             SET nombre='$nombre', precio='$precio', id_categoria='$categoria', descripcion='$descripcion', imagen='$imagen' 
                             WHERE id_producto=$id_producto AND id_vendedores = $id_vendedor";
        } else {
            $update_query = "UPDATE productos 
                             SET nombre='$nombre', precio='$precio', id_categoria='$categoria', descripcion='$descripcion' 
                             WHERE id_producto=$id_producto AND id_vendedores = $id_vendedor";
        }

        mysqli_query($conex, $update_query) or die("Error al actualizar el producto.");
        echo "<script>alert('Producto actualizado correctamente'); window.location.href='ver_producto.php';</script>";
    } else {
        echo "<script>alert('Por favor completa todos los campos requeridos.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Productos</title>
    <link rel="stylesheet" href="../css/editarproducto.css">
</head>
<body>

<section class="edit_container">

<?php
if (isset($_GET['edit'])) {
    $edit_id = intval($_GET['edit']);

    // Solo mostrar el producto si pertenece al vendedor logueado
    $edit_query = mysqli_query($conex, "SELECT * FROM productos WHERE id_producto = $edit_id AND id_vendedores = $id_vendedor");

    if (mysqli_num_rows($edit_query) > 0) {
        $fetch_data = mysqli_fetch_assoc($edit_query);
        $nombre = $fetch_data['nombre'];
        $precio = $fetch_data['precio'];
        $id_categoria = $fetch_data['id_categoria'];
        $descripcion = $fetch_data['descripcion'];
        $imagen = $fetch_data['imagen'];
?>

<form action="" method="post" enctype="multipart/form-data" class="update_product product_container_box">
    <img src="uploaded_img/<?php echo $imagen; ?>" alt="Imagen actual del producto" width="100">

    <input type="hidden" name="id" value="<?php echo $fetch_data['id_producto']; ?>">

    <input type="text" name="nombre" class="input_fields fields" value="<?php echo $nombre; ?>" required>
    <input type="number" name="precio" class="input_fields fields" value="<?php echo $precio; ?>" required>
    <input type="text" name="id_categoria" class="input_fields fields" value="<?php echo $id_categoria; ?>" required>
    <input type="text" name="descripcion" class="input_fields fields" value="<?php echo $descripcion; ?>" required>
    <input type="file" name="imagen" class="input_fields fields" accept="image/png, image/jpg, image/jpeg">
    
    <div class="btns">
        <input type="submit" name="update" class="edit_btn" value="Actualizar">
        <input type="reset" id="close-edit" value="Cancelar" class="cancel_btn">
    </div>
</form>

<?php
    } else {
        echo "<p>No tienes permiso para editar este producto o no existe.</p>";
    }
} else {
    echo "<p>ID de producto no especificado.</p>";
}
?>

<script src="../js/editarproductos.js"></script>
</section>
</body>
</html>
