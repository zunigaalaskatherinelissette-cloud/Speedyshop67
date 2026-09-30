



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeedyShop</title>
    <link rel="stylesheet" href="homeV.css">
</head>
<body>
    <header>

        <div class="container-hero">
            <div class="container-hero">
                <div class="customer-support">
                <img src="img/logo2.png" alt="Descripción" width="50" height="50">
                <div class="content-customer-support">
                    <span class="text"></span>
                    <span class="number"></span>
                </div>
                </div>
            </div>
        

            <div class="container-logo">

            <h1 class="logo"><a href="homeV.php">SpeedyShop</a></h1>
            
            </div>

            <div class="container-user">
                <i class=""></i>
                <i class=""></i>
                <div class="container-shopping-cart">
                    <span class="text"></span>
                    <span class="number"></span>
                </div>
            </div>
            <div class="container-user">
                <i class="fa-solid fa-user"></i>
                
              
            </div>
        </div>

        <div class="container-navbar">
        <nav class="navbar container">
          <i class="fa-solid fa-bars" id="menu-toggle"></i>
          <ul class="menu" id="menu">
            
            <li><a href="datos_vendedor/ver_productos.php">Productos</a></li>
            <li><a href="agromercados.php">Agromercados</a></li>
            <li class="perfil-option"><a href="#">Perfil</a></li>

          </ul>
        </nav>
      </div>
    </header>



    <section class="banner">
        <div class="content-banner">
            <p>Toda tu Frescura en un solo lugar</p>
            <h2>SpeedyShop <br>Tu sitio web fresco</h2> 
        </div>
    </section>

     <main class="main-content">
        <section class="container container-features">
            <div class="card-feature">
                <i class="fa-solid fa-city"></i>
                <div class="feature-content">
                    <span>Accesibilidad en todo el pais</span>
                    <p>Disponibilidad en todos los Agromercados.</p>
                </div>
            </div>
            <div class="card-feature">
                <i class="fa-solid fa-spray-can-sparkles"></i>
                <div class="feature-content">
                    <span>Productos de buena calidad</span>
                    <p>Prodcutos siempre nuevos y frescos.</p>
                </div>
            </div>
            <div class="card-feature">
                <i class="fa-solid fa-dumpster"></i>
                <div class="feature-content">
                    <span>Variedad Comercial</span>
                    <p>Encuentras todos los productos que necesitas.</p>
                </div>
            </div>
            </div>
        </section>
      <section class="acciones-rapidas">
  <h2>Acciones Rápidas</h2>
  <p>Todo lo que necesitas para gestionar tu negocio en un solo lugar</p>

  <div class="acciones-grid">
    <a href="datos_vendedor/subirproducto.php" class="accion subir" style="text-decoration: none; color: inherit">
      <div class="icono">↑</div>
      <h3>Subir Producto</h3>
      <p>Agrega nuevos productos a tu catálogo</p>
    </a>

    <a href="datos_vendedor/update.php" class="accion gestionar" style="text-decoration: none; color: inherit">
      <div class="icono">✎</div>
      <h3>Gestionar Productos</h3>
      <p>Edita precios, stock y descripciones</p>
    </a>

    <div class="accion ventas">
      <div class="icono">📊</div>
      <h3>Ver Ventas</h3>
      <p>Revisa tus estadísticas de ventas</p>
    </div>

    <div class="accion soporte">
      <div class="icono">?</div>
      <h3>Soporte</h3>
      <p>Obtén ayuda cuando la necesites</p>
    </div>
  </div>
</section>

<section class="resumen-negocio">
  <h2>Resumen del Negocio</h2>
  <div class="metricas-grid">
    <div class="metrica productos">
      <h3>Productos Activos</h3>
      <p><strong>24</strong> <span>(+3 esta semana)</span></p>
    </div>
    <div class="metrica ventas">
      <h3>Ventas del Mes</h3>
      <p><strong>$2,847</strong> <span>(+12.5% vs mes anterior)</span></p>
    </div>
    <div class="metrica clientes">
      <h3>Clientes Nuevos</h3>
      <p><strong>18</strong> <span>(+6 esta semana)</span></p>
    </div>
    <div class="metrica calificacion">
      <h3>Calificación Promedio</h3>
      <p><strong>4.8</strong> <span>(156 reseñas)</span></p>
    </div>
  </div>
</section>


<section class="productos-recientes">
  <h2>Productos Recientes</h2>
  <div class="productos-grid">

    <div class="producto activo">
      <img src="img/Tomate_rama2_aa1fb01ca1.png" alt="Aguacates Premium">
      <h3>tomates</h3>
      <p>$2,80</p>
      <ul>
        <li>Vendidos: 12</li>
      </ul>
      <div class="acciones">
        <button>Editar</button>
        <button>Ver</button>
      </div>
    </div>

    <div class="producto activo">
      <img src="img/lechuga.jpg" alt="Lechugas Hidropónicas">
      <h3>Lechugas Hidropónicas</h3>
      <p>$2,20</p>
      <ul>
        <li>Vendidos: 8</li>
      </ul>
      <div class="acciones">
        <button>Editar</button>
        <button>Ver</button>
      </div>
    </div>

    <div class="producto bajo-stock">
      <img src="img/fresas.webp" alt="Zanahorias Frescas">
      <h3>Fresas</h3>
      <p>$1,80</p>
      <ul>
        <li>Vendidos: 5</li>
      </ul>
      <div class="acciones">
        <button>Editar</button>
        <button>Ver</button>
      </div>
    </div>

  </div>
</section>



<section class="social-contact">
  <div class="container">
    <h2>Conéctate con nosotros</h2>
    <p>Síguenos en redes sociales o escríbenos directamente en tus plataformas favoritas.</p>

    <div class="social-links">
      <a href="https://www.facebook.com/TuPagina" target="_blank" class="facebook">Facebook=SpeedyShop_SV</a>
        <a href="https://www.facebook.com/TuPagina" target="_blank" class="facebook">Instagram:SpeedyShop_SV503</a>
          <a href="https://www.facebook.com/TuPagina" target="_blank" class="facebook">Gmail:SpeedyShop@gmail.com</a>
    </div>
  </div>
</section>


        
        
    </main>
    
   <script src="https://kit.fontawesome.com/eedf0a907d.js" crossorigin="anonymous"></script>
<script>
document.getElementById('menu-toggle').addEventListener('click', function() {
    document.getElementById('menu').classList.toggle('show');
});
</script>
  
</body>
</html>