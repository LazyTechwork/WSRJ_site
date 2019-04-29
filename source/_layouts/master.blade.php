<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>WorldSkills | IT-лицей КФУ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="icon" type="image/png" href="@yield('fileprefix', '../')img/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="@yield('fileprefix', '../')css/fonts.css" rel="stylesheet">
    <link href="@yield('fileprefix', '../')css/style.css" rel="stylesheet">
</head>

<body id="body">
<div class="preloader"></div>

<!--==========================
Top Bar
============================-->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info float-left">
            <i class="fa fa-envelope-o"></i> <a href="mailto:wsrj.itl@gmail.com">wsrj.itl@gmail.com</a>
            <i class="fa fa-phone"></i> +7 (917) 890 51 22
            <i class="fa fa-vk"></i> <a href="//vk.com/wsrj_itl">@WSRJ_ITL</a>
        </div>
        <div class="social-links float-right">
            <span>Специализированный центр компетенций «Молодые профессионалы IT-лицея КФУ‎»</span>
            <!--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>-->
        </div>
    </div>
</section>

<!--==========================
Header
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="@yield('fileprefix', '../')index.html" class="scrollto"><img src="@yield('fileprefix', '../')img/logo.svg" alt="" height="50" class="headerlogo">&nbsp;&nbsp;<span
                            class="headertext">WorldSkills | IT-лицей КФУ</span></a></h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu"><a href="@yield('fileprefix', '../')index.html">Главная</a></li>
                <li><a href="@yield('fileprefix', '../')index.html#about">О нас</a></li>
                <li{{-- class="menu-has-children"--}}><a href="@yield('fileprefix', '../')index.html#projects">Чемпионаты</a>
                    {{--<ul>
                        <li><a href="rch17rt.html">Региональный чемпионат в РТ 2017</a></li>
                        <li><a href="vos18msk.html">Отборочные соревнования 2018</a></li>
                        <li><a href="rch18rt.html">Региональный чемпионат в РТ 2018</a></li>
                        <li><a href="os19.html">Отборочные соревнования 2019</a></li>
                        <li><a href="final19.html">Финал VII Национального чемпионата 2019</a></li>
                    </ul>--}}
                </li>
                <li><a href="@yield('fileprefix', '../')index.html#team" class="scrollto">Команда</a></li>
                <li><a href="@yield('fileprefix', '../')index.html#contact" class="scrollto">Связаться</a></li>

            </ul>
        </nav>
        <!-- #nav-menu-container -->
    </div>
</header>
<!-- #header -->

<!--==========================
Intro Section
============================-->
<section id="intro">

    <div class="intro-content">
        <!--<h2>Движение <span>WorldSkills</span> в <span>IT-лицее КФУ</span></h2>
        <div>
            <a href="#projects" class="btn-carousel scrollto">Чемпионаты</a>
        </div>-->
    </div>

    <div id="intro-carousel" class="owl-carousel">
        <div class="item"
             style="background-image: url('https://pp.userapi.com/c850536/v850536392/d8ea4/rDuC3qrpWW0.jpg'); background-position: top;"></div>
        <div class="item"
             style="background-image: url('https://pp.userapi.com/c850536/v850536392/d8e18/ptFDkV-BDW4.jpg'); background-position: top;"></div>
        <div class="item"
             style="background-image: url('https://pp.userapi.com/c850536/v850536392/d8ddc/pkVNei5Vl7Y.jpg');"></div>
        <div class="item"
             style="background-image: url('https://pp.userapi.com/c849320/v849320468/bfa6a/iIzDrnhvAac.jpg');"></div>
        <div class="item"
             style="background-image: url('https://pp.userapi.com/c851136/v851136964/49a6b/QdrcJ_6O-Kc.jpg');"></div>
        <div class="item"
             style="background-image: url('https://pp.userapi.com/c847124/v847124466/1317c3/Xo8_nxkWHbs.jpg');"></div>
    </div>

</section>
<!-- #intro -->

<main id="main">

    @yield('body')

</main>

<!--==========================
Footer
============================-->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            <p>Специализированный центр компетенций «Молодые профессионалы IT-лицея КФУ‎». <br> Разработка сайта,
                логотипа, оформления - участник WorldSkills в компетенции «Веб-дизайн и разработка» <a
                        href="//vk.com/ipetrovofficial"> Петров Иван</a>.</p>
            <p class="logotypes"><img src="./img/logo.svg" alt=""><img src="@yield('fileprefix', '../')img/logo_ws.svg" alt=""><img
                        src="@yield('fileprefix', '../')img/logo_crpk.svg" alt=""><img src="@yield('fileprefix', '../')img/logo_itl.svg" alt=""><img
                        src="@yield('fileprefix', '../')img/logo_hile.svg" alt=""></p>
        </div>
    </div>
</footer>
<!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.10.0/jquery.hoverIntent.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.10/js/superfish.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="@yield('fileprefix', '../')js/sticky.js"></script>
<script src="@yield('fileprefix', '../')js/main.js"></script>

</body>

</html>
