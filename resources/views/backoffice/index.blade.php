<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Bikin Bootstrap Template - Index</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href={{ asset("img/favicon.png") }} rel="icon">
<link href={{ asset("img/apple-touch-icon.png") }} rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href={{ asset("vendor/aos/aos.css") }} rel="stylesheet">
<link href={{ asset("vendor/bootstrap/css/bootstrap.min.css") }} rel="stylesheet">
<link href={{ asset("vendor/bootstrap-icons/bootstrap-icons.css") }} rel="stylesheet">
<link href={{ asset("vendor/boxicons/css/boxicons.min.css") }} rel="stylesheet">
<link href={{ asset("vendor/glightbox/css/glightbox.min.css") }} rel="stylesheet">
<link href={{ asset("vendor/swiper/swiper-bundle.min.css") }} rel="stylesheet">

<!-- Template Main CSS File -->
<link href={{ asset("css/style.css") }} rel="stylesheet">
<link href={{ asset("css/test.css") }} rel="stylesheet">

<!-- =======================================================
* Template Name: Bikin - v4.3.0
* Template URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.html">Bikin</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src={{ asset("img/logo.png") }} alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
        <ul class="nav navbar">
            <li class="nav-item">
                <form method="POST" action="/logout">
                    @csrf
                    <a class="nav-link" href="/logout" onclick="event.preventDefault(); this.closest('form').submit()"><p class="getstarted">Log Out</p></a>
                </form>
            </li>
            <li class="nav-item {{ "dashboard" == Route::currentRouteName() ? 'active': '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ "hero.index" == Route::currentRouteName() ? 'active': '' }}">
                <a class="nav-link" href="{{ route('hero.index') }}">
                    <p>Hero Section</p>
                </a>
            </li>
            <li class="nav-item {{ "about.index" == Route::currentRouteName() ? 'active': '' }}">
                <a class="nav-link" href="{{ route('about.index') }}">
                    <p>About</p>
                </a>
            </li>
            <li class="nav-item {{ "contact.index" == Route::currentRouteName() ? 'active': '' }}">
                <a class="nav-link" href="{{ route('contact.index') }}">
                    <p>Contact</p>
                </a>
            </li>
            <li class="nav-item {{ "features.index" == Route::currentRouteName() ? 'active': '' }}">
                <a class="nav-link" href="{{ route('features.index') }}">
                    <p>Features</p>
                </a>
            </li>
            <li class="nav-item {{ "portfolio.index" == Route::currentRouteName() ? 'active': '' }}">
                <a class="nav-link" href="{{ route('portfolio.index') }}">
                    <p>Portfolio</p>
                </a>
            </li>
            <li class="nav-item {{ "services.index" == Route::currentRouteName() ? 'active': '' }}">
                <a class="nav-link" href="{{ route('services.index') }}">
                    <p>Services</p>
                </a>
            </li>
            <li class="nav-item {{ "team.index" == Route::currentRouteName() ? 'active': '' }}">
                <a class="nav-link" href="{{ route('team.index') }}">
                    <p>Team</p>
                </a>
            </li>
            <li class="nav-item {{ "testimonals.index" == Route::currentRouteName() ? 'active': '' }}">
                <a class="nav-link" href="{{ route('testimonals.index') }}">
                    <p>Testimonals</p>
                </a>
            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

    <div class="mt-4 text-center">
        <div class="container d-flex flex-column align-items-center justify-content-center aos-init aos-animate" data-aos="fade-up">
            @yield('content')
        </div>
    </div>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src={{ asset("vendor/aos/aos.js") }}></script>
    <script src={{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
    <script src={{ asset("vendor/glightbox/js/glightbox.min.js") }}></script>
    <script src={{ asset("vendor/isotope-layout/isotope.pkgd.min.js") }}></script>
    <script src={{ asset("vendor/php-email-form/validate.js") }}></script>
    <script src={{ asset("vendor/swiper/swiper-bundle.min.js") }}></script>

    <!-- Template Main JS File -->
    <script src={{ asset("js/main.js") }}></script>

</body>

</html>