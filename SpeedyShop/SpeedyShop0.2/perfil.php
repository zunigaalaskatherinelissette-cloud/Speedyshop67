
<?php
session_start();
include("conexion.php");

if (!isset($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit();
}

$usuario_id = $_SESSION["usuario_id"];
$query = "SELECT * FROM usuarios WHERE id='$usuario_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<h1>Perfil de <?php echo $row["nombre"]; ?></h1>
<p>Correo: <?php echo $row["correo"]; ?></p>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario - SpeedyShop</title>
    <link rel="stylesheet" href="perfil.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">SpeedyShop</div>
            <div class="user-actions">
                <a href="#">Cerrar sesión</a>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="profile-container">
            <div class="profile-sidebar">
                <img src="dummy_man.jpg" alt="Foto de perfil" class="profile-picture">
                <div class="profile-header">
                    <div class="profile-name">Nombre Apellido</div>
                    <div class="profile-role">Comprador/Vendedor</div>
                </div>
                <div class="profile-stats">
                    <div class="stat">
                        <div class="stat-value">12</div>
                        <div class="stat-label">Compras</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">5</div>
                        <div class="stat-label">Ventas</div>
                    </div>
                </div>
            </div>

            <div class="profile-main">
                <h2>Editar Perfil</h2>
                <form>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" class="form-control" placeholder="Tu nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" class="form-control" placeholder="Tu apellido">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo electrónico</label>
                        <input type="email" id="correo" class="form-control" placeholder="Tu correo">
                    </div>
                    <div class="form-group photo-upload">
                        <label for="foto_perfil">Foto de perfil</label>
                        <input type="file" id="foto_perfil">
                    </div>
                    <button type="submit" class="btn">Guardar cambios</button>
                    <button type="button" class="btn btn-danger">Eliminar foto</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        &copy; 2025 SpeedyShop. Todos los derechos reservados.
    </footer>
      <!-- Enlace al archivo JavaScript -->
    <script src="perfil.css"></script>
</body>
</html>
