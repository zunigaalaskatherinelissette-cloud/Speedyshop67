 <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include "conexionp.php";

// Verificar que el vendedor esté logueado
if (!isset($_SESSION['id_vendedor'])) {
    header("Location: login.php");
    exit();
}

$id_vendedor = $_SESSION['id_vendedor'];
$nombre_vendedor = $_SESSION['nombre_vendedor'] ?? 'Vendedor';

// Añadir producto
if (isset($_POST["add_product"])) {
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_image = $_FILES["product_image"]["name"];
    $product_image_temp_name = $_FILES["product_image"]["tmp_name"];
    $product_image_folder = "imagenes/" . $product_image;
    $id_categoria = $_POST["categoria"];
    $product_descripcion = $_POST["product_descripcion"];
    $product_descuento = $_POST["product_descuento"];

    $insert_query = mysqli_query($conex,
        "INSERT INTO productos (nombre, precio, imagen, id_categoria, descripcion, descuento, id_vendedores)
         VALUES ('$product_name', '$product_price', '$product_image', '$id_categoria', '$product_descripcion', '$product_descuento', '$id_vendedor')");

    if ($insert_query) {
        if (!is_dir('imagenes')) {
            mkdir('imagenes', 0777, true);
        }

        if (move_uploaded_file($product_image_temp_name, $product_image_folder)) {
            $display_message = "✅ ¡Producto insertado exitosamente!";
        } else {
            $display_message = "⚠ Error al mover la imagen al servidor.";
        }
    } else {
        $display_message = "⚠ Error al insertar el producto: " . mysqli_error($conex);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Añadir Producto</title>
  <link rel="stylesheet" href="style_index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
</head>
<body>

<?php include('navbar2.php');?>

<div class="container">

  <?php if(isset($_SESSION['nombre_vendedor'])): ?>
    <p class="welcome_msg">🌿 Bienvenido, <strong><?= $_SESSION['nombre_vendedor'] ?></strong></p>
  <?php endif; ?>

  <?php if(isset($display_message)): ?>
    <div class="display_message">
      <span><?= $display_message ?></span>
      <i class="fas fa-times" onclick="this.parentElement.style.display='none';"></i>
    </div>
  <?php endif; ?>

  <h2 class="heading">Añadir Nuevo Producto</h2>

  <form action="" method="POST" enctype="multipart/form-data" class="form_card">
    <label>📦 Nombre del Producto</label>
    <input type="text" name="product_name" class="input_fields" placeholder="Ej: Lechuga..." required>

    <label>💲 Precio</label>
    <input type="number" name="product_price" class="input_fields" placeholder="Ej: 0.87" step="0.01" required> 

    <label>🖼 Imagen del Producto</label>
    <input type="file" name="product_image" class="input_fields" required>

    <label>📂 Categoría</label>
    <select name="categoria" class="input_fields" required>
      <?php
      $query_cat = mysqli_query($conex, "SELECT * FROM categorias");
      if ($query_cat && mysqli_num_rows($query_cat) > 0) {
          while($row_cat = mysqli_fetch_assoc($query_cat)){
              echo "<option value='".$row_cat['id_categoria']."'>".$row_cat['categoria']."</option>";
          }
      } else {
          echo "<option value='0'>⚠ No hay categorías o error al cargar</option>";
      }
      ?>
    </select>

    <label>📝 Descripción</label>
    <textarea name="product_descripcion" class="input_fields" rows="4" placeholder="Describe el producto..." required></textarea>

    <label>🏷 Descuento (%)</label>
    <input type="number" name="product_descuento" class="input_fields" min="0" max="100" value="0">

    <!-- Botón con animación -->
    <button type="submit" name="add_product" class="submit_btn">➕ Añadir Producto</button>
  </form>

</div>


</body>
</html>