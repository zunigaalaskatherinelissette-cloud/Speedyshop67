<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SpeedyShop | Vendedor</title>

    <link rel="stylesheet" href="homeV.css">
</head>

<body>

<header>

    <!-- =========================
         ENCABEZADO PRINCIPAL
    ========================== -->
    <div class="container-hero">

        <div class="brand-logo">
            <img src="img/logo2.png" alt="Logo de SpeedyShop">
        </div>

        <div class="container-logo">
            <h1 class="logo">
                <a href="homeV.php">SpeedyShop</a>
            </h1>

            <span>Panel del vendedor</span>
        </div>

        <div class="container-user">
            <i class="fa-solid fa-user"></i>
        </div>

    </div>


    <!-- =========================
         NAVEGACIÓN
    ========================== -->
    <div class="container-navbar">

        <nav class="navbar container">

            <i class="fa-solid fa-bars" id="menu-toggle"></i>

            <ul class="menu" id="menu">

                <li>
                    <a href="homeV.php">
                        <i class="fa-solid fa-house"></i>
                        Inicio
                    </a>
                </li>

                <li>
                    <a href="datos_vendedor/ver_productos.php">
                        <i class="fa-solid fa-basket-shopping"></i>
                        Productos
                    </a>
                </li>

                <li>
                    <a href="agromercados.php">
                        <i class="fa-solid fa-store"></i>
                        Agromercados
                    </a>
                </li>

                <li class="perfil-option">
                    <a href="#">
                        <i class="fa-solid fa-user"></i>
                        Perfil
                    </a>
                </li>

            </ul>

        </nav>

    </div>

</header>


<!-- =========================
     BANNER
========================== -->

<section class="banner">

    <div class="banner-overlay"></div>

    <div class="content-banner">

        <span class="banner-tag">
            🌱 Productos frescos y locales
        </span>

        <p>Toda tu frescura en un solo lugar</p>

        <h2>
            Haz crecer tu negocio
            <br>
            con <span>SpeedyShop</span>
        </h2>

        <a href="datos_vendedor/subirproducto.php" class="banner-btn">
            Publicar producto
            <i class="fa-solid fa-arrow-right"></i>
        </a>

    </div>

</section>


<main class="main-content">


    <!-- =========================
         BENEFICIOS
    ========================== -->

    <section class="container container-features">

        <div class="card-feature">

            <div class="feature-icon">
                <i class="fa-solid fa-location-dot"></i>
            </div>

            <div class="feature-content">
                <span>Accesibilidad nacional</span>
                <p>Disponibilidad en diferentes agromercados del país.</p>
            </div>

        </div>


        <div class="card-feature">

            <div class="feature-icon">
                <i class="fa-solid fa-leaf"></i>
            </div>

            <div class="feature-content">
                <span>Productos frescos</span>
                <p>Ofrece productos frescos y de buena calidad.</p>
            </div>

        </div>


        <div class="card-feature">

            <div class="feature-icon">
                <i class="fa-solid fa-shop"></i>
            </div>

            <div class="feature-content">
                <span>Variedad comercial</span>
                <p>Administra todos tus productos desde un mismo lugar.</p>
            </div>

        </div>

    </section>


    <!-- =========================
         ACCIONES RÁPIDAS
    ========================== -->

    <section class="acciones-rapidas container">

        <div class="section-heading">

            <span class="section-tag">
                Administración
            </span>

            <h2>Acciones rápidas</h2>

            <p>
                Todo lo que necesitas para gestionar tu negocio
                en un solo lugar.
            </p>

        </div>


        <div class="acciones-grid">

            <a href="datos_vendedor/subirproducto.php" class="accion subir">

                <div class="icono">
                    <i class="fa-solid fa-plus"></i>
                </div>

                <h3>Subir producto</h3>

                <p>
                    Agrega nuevos productos a tu catálogo.
                </p>

                <span class="accion-link">
                    Agregar
                    <i class="fa-solid fa-arrow-right"></i>
                </span>

            </a>


            <a href="datos_vendedor/update.php" class="accion gestionar">

                <div class="icono">
                    <i class="fa-solid fa-pen-to-square"></i>
                </div>

                <h3>Gestionar productos</h3>

                <p>
                    Edita precios, stock y descripciones.
                </p>

                <span class="accion-link">
                    Gestionar
                    <i class="fa-solid fa-arrow-right"></i>
                </span>

            </a>


            <div class="accion ventas">

                <div class="icono">
                    <i class="fa-solid fa-chart-line"></i>
                </div>

                <h3>Ver ventas</h3>

                <p>
                    Revisa las estadísticas de tu negocio.
                </p>

                <span class="accion-link">
                    Ver estadísticas
                </span>

            </div>


            <div class="accion soporte">

                <div class="icono">
                    <i class="fa-solid fa-headset"></i>
                </div>

                <h3>Soporte</h3>

                <p>
                    Obtén ayuda cuando la necesites.
                </p>

                <span class="accion-link">
                    Contactar
                </span>

            </div>

        </div>

    </section>


    <!-- =========================
         RESUMEN
    ========================== -->

    <section class="resumen-negocio container">

        <div class="section-heading">

            <span class="section-tag">
                Estadísticas
            </span>

            <h2>Resumen del negocio</h2>

            <p>
                Consulta rápidamente el rendimiento de tu tienda.
            </p>

        </div>


        <div class="metricas-grid">

            <div class="metrica">

                <div class="metrica-top">

                    <div class="metrica-icon">
                        <i class="fa-solid fa-box"></i>
                    </div>

                    <span class="trend positive">
                        +3
                    </span>

                </div>

                <h3>Productos activos</h3>

                <p class="metric-number">
                    24
                </p>

                <span class="metric-detail">
                    +3 esta semana
                </span>

            </div>


            <div class="metrica">

                <div class="metrica-top">

                    <div class="metrica-icon">
                        <i class="fa-solid fa-dollar-sign"></i>
                    </div>

                    <span class="trend positive">
                        +12.5%
                    </span>

                </div>

                <h3>Ventas del mes</h3>

                <p class="metric-number">
                    $2,847
                </p>

                <span class="metric-detail">
                    vs. mes anterior
                </span>

            </div>


            <div class="metrica">

                <div class="metrica-top">

                    <div class="metrica-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>

                    <span class="trend positive">
                        +6
                    </span>

                </div>

                <h3>Clientes nuevos</h3>

                <p class="metric-number">
                    18
                </p>

                <span class="metric-detail">
                    esta semana
                </span>

            </div>


            <div class="metrica">

                <div class="metrica-top">

                    <div class="metrica-icon">
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <span class="trend rating">
                        ★
                    </span>

                </div>

                <h3>Calificación promedio</h3>

                <p class="metric-number">
                    4.8
                </p>

                <span class="metric-detail">
                    156 reseñas
                </span>

            </div>

        </div>

    </section>


    <!-- =========================
         PRODUCTOS RECIENTES
    ========================== -->

    <section class="productos-recientes container">

        <div class="section-heading">

            <span class="section-tag">
                Catálogo
            </span>

            <h2>Productos recientes</h2>

            <p>
                Administra rápidamente tus productos más recientes.
            </p>

        </div>


        <div class="productos-grid">


            <article class="producto">

                <div class="producto-imagen">

                    <span class="estado activo">
                        Disponible
                    </span>

                    <img
                        src="img/Tomate_rama2_aa1fb01ca1.png"
                        alt="Tomates"
                    >

                </div>

                <div class="producto-info">

                    <h3>Tomates</h3>

                    <p class="precio">
                        $2.80
                    </p>

                    <p class="vendidos">
                        <i class="fa-solid fa-bag-shopping"></i>
                        12 vendidos
                    </p>

                    <div class="acciones">

                        <button class="btn-editar">
                            <i class="fa-solid fa-pen"></i>
                            Editar
                        </button>

                        <button class="btn-ver">
                            Ver
                        </button>

                    </div>

                </div>

            </article>


            <article class="producto">

                <div class="producto-imagen">

                    <span class="estado activo">
                        Disponible
                    </span>

                    <img
                        src="img/lechuga.jpg"
                        alt="Lechugas hidropónicas"
                    >

                </div>

                <div class="producto-info">

                    <h3>Lechugas Hidropónicas</h3>

                    <p class="precio">
                        $2.20
                    </p>

                    <p class="vendidos">
                        <i class="fa-solid fa-bag-shopping"></i>
                        8 vendidos
                    </p>

                    <div class="acciones">

                        <button class="btn-editar">
                            <i class="fa-solid fa-pen"></i>
                            Editar
                        </button>

                        <button class="btn-ver">
                            Ver
                        </button>

                    </div>

                </div>

            </article>


            <article class="producto">

                <div class="producto-imagen">

                    <span class="estado bajo">
                        Stock bajo
                    </span>

                    <img
                        src="img/fresas.webp"
                        alt="Fresas"
                    >

                </div>

                <div class="producto-info">

                    <h3>Fresas</h3>

                    <p class="precio">
                        $1.80
                    </p>

                    <p class="vendidos">
                        <i class="fa-solid fa-bag-shopping"></i>
                        5 vendidos
                    </p>

                    <div class="acciones">

                        <button class="btn-editar">
                            <i class="fa-solid fa-pen"></i>
                            Editar
                        </button>

                        <button class="btn-ver">
                            Ver
                        </button>

                    </div>

                </div>

            </article>

        </div>

    </section>


    <!-- =========================
         CONTACTO
    ========================== -->

    <section class="social-contact">

        <div class="container">

            <span class="section-tag">
                SpeedyShop
            </span>

            <h2>Conéctate con nosotros</h2>

            <p>
                Síguenos en redes sociales o escríbenos directamente.
            </p>


            <div class="social-links">

                <a href="#" class="social-btn">

                    <i class="fa-brands fa-facebook-f"></i>

                    <div>
                        <small>Facebook</small>
                        <span>SpeedyShop_SV</span>
                    </div>

                </a>


                <a href="#" class="social-btn">

                    <i class="fa-brands fa-instagram"></i>

                    <div>
                        <small>Instagram</small>
                        <span>SpeedyShop_SV503</span>
                    </div>

                </a>


                <a href="mailto:SpeedyShop@gmail.com" class="social-btn">

                    <i class="fa-solid fa-envelope"></i>

                    <div>
                        <small>Correo</small>
                        <span>SpeedyShop@gmail.com</span>
                    </div>

                </a>

            </div>

        </div>

    </section>

</main>


<script
    src="https://kit.fontawesome.com/eedf0a907d.js"
    crossorigin="anonymous">
</script>


<script>

const menuToggle = document.getElementById("menu-toggle");
const menu = document.getElementById("menu");

menuToggle.addEventListener("click", function () {

    menu.classList.toggle("show");

});

</script>

</body>

</html>