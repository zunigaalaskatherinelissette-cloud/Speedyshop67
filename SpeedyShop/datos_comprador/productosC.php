 <?php
require 'database.php';
require 'config.php';

if (!defined('KEY_TOKEN')) define('KEY_TOKEN', 'mi_clave_secreta');

$db = new Database();
$con = $db->conectar();

// Traer productos
$sql = $con->prepare("SELECT id_producto, nombre, precio, imagen FROM productos");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SpeedyShop - Productos</title>
<link rel="stylesheet" href="../css/productosc.css">
<script src="https://kit.fontawesome.com/eedf0a907d.js" crossorigin="anonymous"></script>
</head>
<body>

<header class="header">
  <div class="container-hero">
    <div class="customer-support">
      <img src="../img/logo2.png" alt="Logo" width="50" height="50">
    </div>
    <div class="container-logo">
      <h1 class="logo"><a href="../homeC.php">SpeedyShop</a></h1>
    </div>
  </div>

  <div class="container-navbar">
    <nav class="navbar container">
      <i class="fa-solid fa-bars"></i>
      <ul class="menu">
        <li><a href="#"></a></li>
        <li><a href="../agromercados.php">Agromercados</a></li>
        <li><a href="../categorias/categorias.php">Categoria</a></li>
      </ul>
    </nav>
  </div>
</header>

<section class="products-section">
  <h2 class="title">Nuestros productos más <span>Frescos</span></h2>

  <div class="product-grid">
    <?php foreach ($resultado as $row) { 
      $rutaFisica = __DIR__ . "/../datos_vendedor/imagenes/" . $row['imagen'];
      $imagenWeb = "../datos_vendedor/imagenes/" . $row['imagen'];
      if (!is_file($rutaFisica) || empty($row['imagen'])) {
          $imagenWeb = "../imagenes/no-foto.jpg";
      }
      $precioLimpio = (float) str_replace(['$', ','], '', $row['precio']);
    ?>
    <div class="product-card">
      <img class="product-image" src="<?php echo $imagenWeb; ?>" alt="<?php echo htmlspecialchars($row['nombre']); ?>">
      <h3 class="product-name"><?php echo htmlspecialchars($row['nombre']); ?></h3>
      <p class="price">$<?php echo number_format($precioLimpio, 2, '.', ','); ?></p>

      <div class="product-buttons">
        <a
          href="detallesp.php?id_producto=<?php echo $row['id_producto']; ?>&token=<?php echo hash_hmac('sha1', $row['id_producto'], KEY_TOKEN); ?>"
          class="detalles-btn"
        >Detalles</a>
      </div>
    </div>
    <?php } ?>
  </div>
</section>

<section class="social-contact">
  <div class="container">
    <h2>Conéctate con nosotros</h2>
    <p>Síguenos en redes sociales o escríbenos directamente en tus plataformas favoritas.</p>
    <div class="social-links">
      <a href="https://www.facebook.com/TuPagina" target="_blank" class="facebook">Facebook: SpeedyShop_SV</a>
      <a href="https://www.instagram.com/TuPagina" target="_blank" class="instagram">Instagram: SpeedyShop_SV503</a>
      <a href="mailto:SpeedyShop@gmail.com" class="gmail">Gmail: SpeedyShop@gmail.com</a>
    </div>
  </div>
</section>

</body>
</html>
