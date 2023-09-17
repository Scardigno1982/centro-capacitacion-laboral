<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Centro de capacitacion laboral">
    <meta name="author" content="Sergio Scardigno">

    <title>Centro de Capacitacion Laboral | Fray Luis Beltran</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Themify Icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Elegant Font Icons CSS -->
    <link rel="stylesheet" href="css/elegant-font-icons.css">
    <!-- Elegant Line Icons CSS -->
    <link rel="stylesheet" href="css/elegant-line-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="css/venobox/venobox.css">
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- simpletextrotator CSS -->
    <link rel="stylesheet" href="css/simpletextrotator.css">
    <!-- OWL-Carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>
<body data-spy="scroll" data-target="#navmenu" data-offset="70">
<!--[if lt IE 8]>
<p class="browserupgrade">Estás usando un navegador <strong>obsoleto</strong>. Por favor, <a
    href="http://browsehappy.com/">actualiza tu navegador</a> para mejorar tu experiencia.</p>
<![endif]-->

<div class="site-preloader-wrap">
    <div class="spinner"></div>
</div><!-- Preloader -->

<?php
require('src/layout/header/header.php');
?>


<section id="proposito" class="section hero-content-contacto d-flex align-items-center">
    <div class="container">
        <div class="hero-content text-center">
            <h2>FORMAMOS EL FUTURO DE LA INDUSTRIA »</h2>
        </div>
    </div>
    <div class="down-arrow">
        <a data-scroll href="#about" class="arrow-animated">Desplácese hacia abajo<i class="ti-arrow-down"></i></a>
    </div>
</section><!-- hero-section -->


<section id="nuestro-proposito" class="about-section">
    <div class="container-fluid nuestro-proposito">
        <div class="col-12">
            <h2 style="color: #4D4D4D">CONTACTO </h2>
        </div>
    </div>
</section><!-- about-section -->

<div class="rectangulo"></div>


<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-4">
            <h1 style="color: #1d2124; font-size: 60px;">CCL</h1>
            <h2 style="color: #1d2124; font-size: 20px;">CENTRO DE CAPACITACIÓN LABORAL</h2>
            <p>Acceso Punta Argerich km 2,5 <br>
                (Frente a Porteria 1 Ternium Argentina, Ramallo)<br>
                Provincia de Buenos Aires<br>
                Msj de WhatsApp: 3364 061737<br>
                Cel: 3407 439789</p>
        </div>

        <div class="col-8"></div>
    </div>
</div>

<div class="container">
    <form action="mail.php" method="post">
        <div class="form-group">
            <label for="nombre">Nombre y Apellido:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="empresa">Nombre de la Empresa:</label>
            <input type="text" class="form-control" id="empresa" name="empresa" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="celular">Celular:</label>
                <input type="tel" class="form-control" id="celular" name="celular" required>
            </div>
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-block" style="background-color: orange; color: black; margin-top: 30px">Enviar</button>
            </div>
        </div>
    </form>
</div>







<?php
require('src/layout/footer/footer.php');
?>

<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>

<!-- jQuery Lib -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/vendor/bootstrap.min.js"></script>
<!-- Tether JS -->
<script src="js/vendor/tether.min.js"></script>
<!-- Slicknav JS -->
<script src="js/vendor/jquery.slicknav.min.js"></script>
<!-- OWL-Carousel JS -->
<script src="js/vendor/owl.carousel.min.js"></script>
<!-- Smooth Scroll JS -->
<script src="js/vendor/smooth-scroll.min.js"></script>
<!-- Venobox JS -->
<script src="js/vendor/venobox.min.js"></script>
<!-- Text Rotator JS -->
<script src="js/vendor/jquery.simple-text-rotator.js"></script>
<!-- Wow JS -->
<script src="js/vendor/wow.min.js"></script>
<!-- Google Map JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGm_weV-pxqGWuW567g78KhUd7n0p97RY"></script>
<!-- Contact JS -->
<script src="js/contact.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>



<!--Slider-->
<link rel="stylesheet" type="text/css" href="css/slick.css"/>
<!--// Add the new slick-theme.css if you want the default styling-->
<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
<!--Bootstrap-->
<script src="src/js/bootstrap.bundle.min.js"></script>

<!-- Slider jQuery  Addon -->
<script src="src/js/slick.min.js"></script>

<script src="src/js/jquery.nivo.slider.js"></script>

<script type="text/javascript">
    $('.slider1').slick({
        dots: true,
        prevArrow: '<span id="arrow1" class="fas fa-chevron-left"></span>',
        nextArrow: '<span id="arrow2" class="fas fa-chevron-right"></span>',
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

</script>

<script>
    $('#slider').nivoSlider();
</script>

<script>

    $('i').click(function() {
        $(this).toggleClass('fa-plus-circle').toggleClass('fa-minus-circle');
    });

</script>

<script>
    if (currentURL.endsWith('/servicio.php')) {
        console.log("Estoy en servicio.php");
        var heroSection = document.querySelector('.hero-section');
        heroSection.style.backgroundImage = 'url(../img/prtf-1.jpg)';
    }

    var heroSection = document.querySelector('.hero-section');
    console.log(heroSection);

</script>

</body>
</html>
