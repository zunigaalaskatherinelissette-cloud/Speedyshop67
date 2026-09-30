 <?php
session_start();
include "conexionp.php";

// Verificar conexión
if (!$conex) {
    die("❌ Error de conexión: " . mysqli_connect_error());
}

// Verificar que el vendedor esté logueado
if (!isset($_SESSION['id_vendedor'])) {
    die("❌ No tienes permiso para eliminar este producto. Inicia sesión como vendedor.");
}

$id_vendedor = $_SESSION['id_vendedor']; // ID del vendedor logueado

// Verificar si se recibió el parámetro delete
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);

    if ($id > 0) {
        // Comprobar que el producto pertenece al vendedor logueado
        $check_owner = mysqli_query($conex, "SELECT id_producto FROM productos WHERE id_producto = $id AND id_vendedores = $id_vendedor");

        if (mysqli_num_rows($check_owner) === 0) {
            die("❌ No tienes permiso para eliminar este producto o no existe.");
        }

        // Eliminar el producto
        $delete_query = mysqli_query($conex, "DELETE FROM productos WHERE id_producto = $id AND id_vendedores = $id_vendedor");

        if ($delete_query) {
            header("Location: ver_producto.php");
            exit();
        } else {
            echo "❌ Error al eliminar: " . mysqli_error($conex);
        }
    } else {
        echo "❌ ID de producto no válido.";
    }
} else {
    echo "❌ No se recibió ningún ID para eliminar.";
}
?>
