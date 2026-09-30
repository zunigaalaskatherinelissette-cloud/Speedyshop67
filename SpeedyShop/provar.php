 <?php
session_start();

// Verifica que el usuario haya iniciado sesión
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

include("conexion.php");

// Obtener el id del usuario actual
$id_usuario = $_SESSION['id'];

// Consulta para obtener solo los productos del usuario actual
$sql = "SELECT * FROM productos WHERE id_usuario = $id_usuario ORDER BY id_producto DESC";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Productos - SpeedyShop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .productos-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: auto;
        }
        .producto {
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        .producto img {
            max-width: 100%;
            border-radius: 10px;
        }
        .producto h3 {
            margin-top: 10px;
            color: #333;
        }
        .producto p {
            margin: 5px 0;
            color: #555;
        }
    </style>
</head>
<body>

    <h1>Mis Productos</h1>

    <div class="productos-container">
        <?php
        if (mysqli_num_rows($resultado) > 0) {
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<div class='producto'>";
                echo "<img src='ruta/" . htmlspecialchars($row['imagen']) . "' alt='Producto'>";
                echo "<h3>" . htmlspecialchars($row['nombre']) . "</h3>";
                echo "<p><strong>Precio:</strong> $" . htmlspecialchars($row['precio']) . "</p>";
                echo "<p>" . htmlspecialchars($row['descripcion']) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p style='text-align:center;'>Aún no has subido productos.</p>";
        }
        ?>
    </div>

</body>
</html>