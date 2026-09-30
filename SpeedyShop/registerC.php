<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="registerC.css">
</head>
<body>
<div class="container">
    <form method="POST">
        <div class="form-container">
            <img src="img/logo.jpeg" alt="Imagen de perfil" class="profile-img">
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
            <input type="text" name="departamento" placeholder="Departamento">
        </div>

        <div class="input-wrapper">
            <input type="text" name="municipio" placeholder="Municipio">
        </div>

        <input class="btn" type="submit" value="Registrarse ✔" name="registerC" />
    </form>

    <!-- Columna derecha verde -->
    <div class="info-section">
        <h2>Compra inteligente, <br> productos frescos a tu mesa</h2>
        <p>Regístrate para recibir lo mejor de los agromercados directamente en tu hogar. Apoya a productores locales y disfruta calidad garantizada.</p>
        <ul>
            <li>Productos frescos y orgánicos</li>
            <li>Apoyo a productores salvadoreños</li>
            <li>Compras fáciles, rápidas y seguras</li>
        </ul>
    </div>
</div>

<?php
    include("registrar.php")
?>

</body>

</html>