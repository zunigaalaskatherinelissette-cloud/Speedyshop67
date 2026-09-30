
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeedyShop</title>
    <link rel="stylesheet" href="../homepage.css">
</head>
<body>

        <div class="container-hero">
            <div class="container-hero">
                <div class="customer-support">
                <img src="../img/logo2.png" alt="Descripción" width="50" height="50">
                <div class="content-customer-support">
                    <span class="text"></span>
                    <span class="number"></span>
                </div>
                </div>
            </div>
        

            <div class="container-logo">

            <h1 class="logo"><a href="../homeV.php">SpeedyShop</a></h1>
            </div>


      
        <nav class="navbar container">
          <i class="fa-solid fa-bars" id="menu-toggle"></i>
          <ul class="menu" id="menu">
            <li><a href="ver_producto.php">Ver mis productos</a></li>
            <li><a href="HomeV.php">Volver</a></li>
             
          </ul>
        </nav>
      </div>
    </header>

<script>
document.getElementById('menu-toggle').addEventListener('click', function() {
    document.getElementById('menu').classList.toggle('show');
});
</script>  
    
</body>
</html>