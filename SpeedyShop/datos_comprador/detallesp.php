 <?php
require 'config.php';
require 'database.php';

// Definir KEY_TOKEN si no está en config
if(!defined('KEY_TOKEN')) define('KEY_TOKEN', 'mi_clave_secreta');

$db = new Database();
$con = $db->conectar();

$id = isset($_GET['id_producto']) ? $_GET['id_producto'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if (empty($id) || empty($token)) {
    die('Error al procesar la petición: Parámetros faltantes');
}

// Validar token
$token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);
if (!hash_equals($token_tmp, $token)) {
    die('Error al procesar la petición: Token inválido');
}

// Verificar que exista el producto
$sql = $con->prepare("SELECT * FROM productos WHERE id_producto = ?");
$sql->execute([$id]);
$row = $sql->fetch(PDO::FETCH_ASSOC);

if (!$row) die('Producto no encontrado');

// Datos del producto
$nombre = $row['nombre'];
$precio = (float) $row['precio'];
$descuento = (float) $row['descuento'];
$id_categoria = $row['id_categoria'];
$descripcion = $row['descripcion'];
$imagen = $row['imagen'];

$precio_desc = $precio - (($precio * $descuento)/100);

// Directorio de imágenes
$dir_images = '../datos_vendedor/imagenes/';
$images = [];

// Imagen principal o por defecto
if (!empty($imagen) && file_exists($dir_images . $imagen)) {
    $images[] = $dir_images . $imagen;
} else {
    $images[] = '../imagenes/no-foto.jpg';
}

// Otras imágenes del directorio
if (is_dir($dir_images)) {
    foreach(scandir($dir_images) as $archivo) {
        if ($archivo != '.' && $archivo != '..' && $archivo != $imagen && $archivo != 'no-foto.jpg') {
            $images[] = $dir_images . $archivo;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SpeedyShop - <?php echo htmlspecialchars($nombre); ?></title>
<link rel="stylesheet" href="productosc.css">
<script src="https://kit.fontawesome.com/eedf0a907d.js" crossorigin="anonymous"></script>
<style>
/* Slider */
.slider-container { position: relative; max-width:600px; margin:20px auto; overflow:hidden; border-radius:10px; box-shadow:0 6px 15px rgba(0,0,0,0.2);}
.slides { display:flex; transition: transform 0.6s ease-in-out;}
.slides img { width:100%; flex-shrink:0; border-radius:10px; object-fit:cover;}
.slider-arrow { position:absolute; top:50%; transform:translateY(-50%); font-size:2rem; color:#fff; background:rgba(0,0,0,0.5); padding:8px 12px; border-radius:50%; cursor:pointer; z-index:10; transition: background 0.3s;}
.slider-arrow:hover { background: rgba(0,0,0,0.8);}
.slider-arrow.left { left:10px;} .slider-arrow.right { right:10px;}
.thumbnails { display:flex; justify-content:center; gap:10px; margin-top:15px; flex-wrap:wrap;}
.thumbnails img { width:80px; height:80px; object-fit:cover; border-radius:5px; cursor:pointer; border:2px solid transparent; transition: transform 0.3s, border-color 0.3s;}
.thumbnails img:hover { transform: scale(1.05);}
.thumbnails img.active { border-color:#007bff;}
@media(max-width:768px){ .slider-container{ max-width:90%;} .thumbnails img{ width:60px; height:60px;} }

.add-to-cart { padding:10px 15px; background:#FF5722; color:#fff; border:none; border-radius:5px; cursor:pointer; margin-top:10px;}
.add-to-cart:hover { background:#E64A19;}
</style>
</head>
<body>

<header>
<!-- Header idéntico al anterior -->
<div class="container-hero">
<div class="customer-support"><img src="../img/logo2.png" alt="Logo" width="50" height="50"/></div>
<div class="container-logo"><h1 class="logo"><a href="../homeC.php">SpeedyShop</a></h1></div>
<div class="container-user"><i class="fa-solid fa-user"></i><i class="fa-solid fa-basket-shopping"></i>
<div class="container-shopping-cart"><span class="text">Carrito de Compras</span><span class="number">(0)</span></div></div>
</div>
<div class="container-navbar">
<nav class="navbar container">
<i class="fa-solid fa-bars"></i>
<ul class="menu">
<li><a href="categorias/categoria.php">Categorias</a></li>
<li><a href="../agromercadosC.php">Agromercados cerca de tu zona</a></li>
<li><a href="datos_comprador/productosC.php">Productos</a></li>

</ul>
<form class="search-form"><input type="search" placeholder="Buscar..." /><button class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button></form>
</nav>
</div>
</header>

<section class="products-section">
<div class="product-grid">
<div class="product-item order-item-1">
<!-- Slider -->
<div class="slider-container">
<div class="slides">
<?php foreach($images as $img): ?>
<img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($nombre); ?>" />
<?php endforeach; ?>
</div>
<div class="slider-arrow left">&#10094;</div>
<div class="slider-arrow right">&#10095;</div>
<div class="thumbnails">
<?php foreach($images as $index => $img): ?>
<img src="<?php echo htmlspecialchars($img); ?>" data-index="<?php echo $index; ?>" class="<?php echo $index===0?'active':''; ?>" />
<?php endforeach; ?>
</div>
</div>
</div>

<div class="product-item order-item-2">
<h2><?php echo htmlspecialchars($nombre); ?></h2>
<?php if($descuento > 0): ?>
<p><del>Precio: <?php echo MONEDA . number_format($precio,2,'.','.'); ?></del></p>
<h2><?php echo MONEDA . number_format($precio_desc,2,'.','.'); ?> <small class="text-success"><?php echo $descuento; ?>% Descuento</small></h2>
<?php else: ?>
<h2><?php echo MONEDA . number_format($precio,2,'.','.'); ?></h2>
<?php endif; ?>
<p>Categoría: <?php echo htmlspecialchars($id_categoria); ?></p>
<p>Descripción: <?php echo nl2br(htmlspecialchars($descripcion)); ?></p>
<button class="add-to-cart">Añadir al carrito</button>
</div>
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

<script>
// Slider JS
const slides = document.querySelector('.slides');
const slideImages = document.querySelectorAll('.slides img');
const thumbs = document.querySelectorAll('.thumbnails img');
const leftArrow = document.querySelector('.slider-arrow.left');
const rightArrow = document.querySelector('.slider-arrow.right');

let currentIndex = 0;
const totalSlides = slideImages.length;
let autoPlayInterval;

function updateSlidePosition() {
    slides.style.transform = 'translateX(' + (-currentIndex * 100) + '%)';
    thumbs.forEach(t => t.classList.remove('active'));
    if (thumbs[currentIndex]) thumbs[currentIndex].classList.add('active');
}

function nextSlide() { currentIndex = (currentIndex+1)%totalSlides; updateSlidePosition(); }
function prevSlide() { currentIndex = (currentIndex-1+totalSlides)%totalSlides; updateSlidePosition(); }
function showSlide(index){ currentIndex=index; updateSlidePosition(); resetAutoPlay(); }
function startAutoPlay(){ autoPlayInterval = setInterval(nextSlide,3000); }
function resetAutoPlay(){ clearInterval(autoPlayInterval); startAutoPlay(); }

leftArrow.addEventListener('click', ()=>{ prevSlide(); resetAutoPlay(); });
rightArrow.addEventListener('click', ()=>{ nextSlide(); resetAutoPlay(); });
thumbs.forEach((thumb,index)=>{ thumb.addEventListener('click',()=>showSlide(index)); });

// Swipe
let startX=0,endX=0,threshold=50;
slides.addEventListener('touchstart',e=>{ startX=e.touches[0].clientX; });
slides.addEventListener('touchmove',e=>{ endX=e.touches[0].clientX; });
slides.addEventListener('touchend',()=>{ 
    const diffX=endX-startX; 
    if(Math.abs(diffX)>threshold){ 
        if(diffX>0) prevSlide(); else nextSlide(); 
    } 
    startX=0; endX=0; resetAutoPlay();
});

updateSlidePosition();
startAutoPlay();
</script>

</body>
</html>
