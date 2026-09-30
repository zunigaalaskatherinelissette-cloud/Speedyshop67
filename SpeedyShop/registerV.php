<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="registerV.css">
</head>
<body>
<div class="container">
    <form method="POST">
        <div class="form-container">
            <img src="img/logo2.png" alt="Imagen de perfil" class="profile-img">
        </div><br><br><br>

        <h2>SpeedyShop</h2>
        <h1>Formulario de Registro</h1>

        <div class="input-wrapper">
            <input type="text" name="nombre" placeholder="Nombre">
        </div>

        <div class="input-wrapper">
            <input type="text" name="apellido" placeholder="Apellido">
        </div>

        <div class="input-wrapper">
            <input type="email" name="correo" placeholder="Correo">
        </div>

        <div class="input-wrapper">
            <input type="password" name="contraseña" placeholder="Contraseña">
        </div>

        <div class="input-wrapper">
            <input type="text" name="agromercado" placeholder="Agromercado">
        </div>

        <div class="input-wrapper">
            <input type="text" name="departamento" placeholder="Departamento">
        </div>

        <div class="input-wrapper">
            <input type="text" name="municipio" placeholder="Municipio">
        </div>

        <input class="btn" type="submit" value="Registrarse ✔" name="registerV"/>
    </form>

    <!-- Columna derecha verde -->
    <div class="info-section">
        <h2>Vende Inteligente, <br> Ofrece tus productos frescos a la mesa</h2>
        <p>Regístrate para recibir apoyo en tu negocio. Apoyamos a los vendedores con sus productos de buena calidad.</p>
        <ul>
            <li>Productos frescos y orgánicos</li>
            <li>Apoyo a productores salvadoreños</li>
            <li>Ventas fáciles, rápidas y seguras</li>
        </ul>
    </div>
</div>

<?php
    include("registrarV.php")
?>

</body>

</html>