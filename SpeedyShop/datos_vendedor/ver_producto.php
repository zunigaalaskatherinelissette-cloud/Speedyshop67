 <?php
session_start();
include "conexionp.php";

// Si no hay sesión activa, redirigimos al login
if (!isset($_SESSION['id_vendedor'])) {
    header("Location: login.php");
    exit();
}

$id_vendedor = $_SESSION['id_vendedor']; // ID del vendedor logueado
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Ver Productos</title>
 <link rel="stylesheet" href="../css/verproducto.css"/>
</head>
<body>





    <div class="container">
        <section class="display_product">
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Si no</th>
                        <th>Imagen del Producto</th>
                        <th>Nombre del Producto</th>
                        <th>Precio</th>
                        <th>Categoría</th>
                        <th>Descripción</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // Consulta con JOIN usando el nombre real de la columna
                $display_product = mysqli_query($conex, "
                    SELECT p.*, c.categoria 
                    FROM productos p
                    INNER JOIN categorias c ON p.id_categoria = c.id_categoria
                    WHERE p.id_vendedores = '$id_vendedor'
                ");

                if (mysqli_num_rows($display_product) > 0) {
                    $contador = 1;
                    while ($row = mysqli_fetch_assoc($display_product)) {
                        echo "<tr>
                            <td>{$contador}</td>
                            <td><img src='imagenes/{$row['imagen']}' width='50'></td>
                            <td>{$row['nombre']}</td>
                            <td>{$row['precio']}</td>
                            <td>{$row['categoria']}</td>
                            <td>{$row['descripcion']}</td>
                            <td>
                                <a href='delete.php?delete={$row['id_producto']}' class='delete_product_btn' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este producto?\");'>Eliminar</a>
                                <a href='update.php?edit={$row['id_producto']}' class='update_product_btn'>Editar</a>
                            </td>
                        </tr>";
                        $contador++;
                    }
                } else {
                    echo "<tr><td colspan='7'>No tienes productos disponibles.</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>