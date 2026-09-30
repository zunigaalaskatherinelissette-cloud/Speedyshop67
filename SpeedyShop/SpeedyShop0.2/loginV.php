



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="loginV.css">
</head>
<body>
<div class="container">
    <form method="POST">
        <div class="form-container">
            <img src="img/logo2.png" alt="Imagen de perfil" class="profile-img">
        </div><br><br><br>

        <h2>SpeedyShop</h2>
        <h1>Inicio de sesion</h1> <br><br>

        <div class="input-wrapper">
            <input type="email" name="correo" placeholder="Correo">
        </div>

        <div class="input-wrapper">
            <input type="password" name="contraseña" placeholder="Contraseña">
        </div>

        <input class="btn" type="submit" value="Inicia Sesion " name="login" />
    </form>

    <!-- Columna derecha verde -->
 <div class="info-section">

  <div class="text-container">
    <h2>Vende inteligente<br> mejora tus ventas en un click</h2>
    <p>Inicia sesion para recibir los mejores beneficios y oportunidades de crecer tu negocio</p>
    <ul>
      <li>Interfaz amigable</li>
      <li>Precios actualizados</li>
      <li>Comodidad y accesibilidad</li>
    </ul>
  </div>
</div>




<?php
    include("loginConex.php")
?>

</body>

</html>