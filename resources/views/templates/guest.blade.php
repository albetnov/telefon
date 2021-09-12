<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('guest') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('guest') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('guest') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('guest') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('guest') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('guest') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('guest') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('guest') }}/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div id="logo">
                <h1><a href="index.html"><span>Ha</span>lo!</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="{{ asset('guest') }}/img/logo.png" alt="" title="" /></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto {{ request()->is('/') ? ' active' : '' }}"
                            href="{{ route('home') }}#hero">Home</a>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ route('home') }}#about-us">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('home') }}#features">Fitur</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('home') }}#team">Tim Kami</a></li>
                    <li><a class="nav-link {{ request()->is('contact') ? ' active' : '' }}"
                            href="{{ route('contact') }}">Contact List</a></li>
                    <li><a class="nav-link scrollto" href="#">Login</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('home') }}#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
    @yield('content')
    <!-- ======= Footer ======= -->
    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-6">
                    <div class="footer-logo">

                        <a class="navbar-brand" href="#">Halo!</a>
                        <p>Website yang dapat menampilkan kontak yang ingin anda cari!</p>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-4">
                    <div class="list-menu">

                        <h4>Support</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">faq</a></li>
                            <li><a href="#">Editor help</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>Abou Us</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features item</a></li>
                            <li><a href="#">Live streaming</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

        <div class="copyrights">
            <div class="container">
                <p>&copy; 2021 Copyrights Halo! All rights reserved.</p>
                <div class="credits">
                    <p>Created by: <a href="https://github.com/albetnov">Albet Novendo</a> & <a
                            href="https://github.com/Hernando17">Hernando</a></p>
                </div>
            </div>
        </div>

    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('guest') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('guest') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('guest') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('guest') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('guest') }}/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('guest') }}/js/main.js"></script>

</body>

</html>
