

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="loginC.css">
</head>
<body>
<div class="container">
    <form method="POST">
        <div class="form-container">
            <img src="img/logo2.png" alt="Imagen de perfil" class="profile-img">
        </div><br><br><br>

        <h2>SpeedyShop</h2>
        <h1>Inicia sesion</h1>

        <div class="input-wrapper">
            <input type="email" name="correo" placeholder="Correo">
        </div>

        <div class="input-wrapper">
            <input type="password" name="contraseña" placeholder="Contraseña">
        </div>

        <input class="btn" type="submit" value="Inicia Sesion ✔" name="login" />
    </form>

    <!-- Columna derecha verde -->
<div class="info-sectionn">

  <div class="text-container">
    <h2>Compra inteligente<br>Productos frescos a tu mesa</h2> <br> 
    <p>Inicia sesion para encontrar los mejores productos a los mejores precios</p>
    <ul>
      <li>Productos frescos</li>
      <li>Apoya agricultores locales</li>
      <li>Comodidad y accesibilidad</li>
    </ul>
  </div>
</div>
<?php
    include("loginConex2.php")
?>





</body>

</html>