<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="fitweb live">
    <meta name="keywords" content="Gym, fitweb live colombia, fitweb, live, colombia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Css Styles -->


    <link rel="stylesheet" href="frontendlandingpage/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="frontendlandingpage/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="frontendlandingpage/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="frontendlandingpage/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="frontendlandingpage/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="frontendlandingpage/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="frontendlandingpage/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="frontendlandingpage/css/materialdesignicons.min.css" type="text/css">
    <link rel="stylesheet" href="frontendlandingpage/css/app.css" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="funcionalidades">Funcionalidades</a></li>
                <li><a href="contactanos">Contáctanos</a></li>
                <li><a href="sobre-nosotros">Sobre nosotros</a></li>
                <li><a href="login">Soy FitWeb</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>

    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="landingpage.inicio">
                            <img src="frontendlandingpage/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="/">Inicio</a></li>
                            <li><a href="funcionalidades">Funcionalidades</a></li>
                            <li><a href="sobre-nosotros">Sobre nosotros</a></li>
                            <li><a href="contactanos">Contáctanos</a></li>
                            <li><a href="login">Soy FitWeb</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->


    @yield('content')
    @include('landingpage.footer')

</body>

</html>