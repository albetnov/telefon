<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords"
        content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('admin') }}/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('guest') }}/img/logoHalo!.png">
    <link
        href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/core/menu/menu-types/vertical-menu.css">

    <link rel="stylesheet" href="{{ asset('guest/vendor/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('simple-datatables/style.css') }}">
    @stack('styles')
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true"
        data-img="{{ asset('admin') }}/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <div class="col align-self-center">

                    <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('home') }}"><img
                                class="brand-logo" alt="Chameleon admin logo"
                                src="{{ asset('guest') }}/img/logoHalo!.png" />
                            <h3 class="brand-text">Halo!</h3>
                        </a></li>
                </div>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="{{ strpos(Route::currentRouteName(), 'adm_dashboard') === 0 ? 'active' : '' }} nav-item">
                    <a href="{{ route('adm_dashboard') }}"><i class="ft-home"></i><span class="menu-title"
                            data-i18n="">Beranda</span></a>
                </li>
                <li class="{{ strpos(Route::currentRouteName(), 'tablecontact') === 0 ? 'active' : '' }} nav-item"><a
                        href="{{ route('tablecontact') }}"><i class="ft-phone-call"></i><span class="menu-title"
                            data-i18n="">Data Kontak</span></a>
                </li>
                <li class="{{ strpos(Route::currentRouteName(), 'tableuser') === 0 ? 'active' : '' }} nav-item"><a
                        href="{{ route('tableuser') }}"><i class="ft-user"></i><span class="menu-title"
                            data-i18n="">Data Pengguna</span></a>
                </li>
                <li
                    class="{{ strpos(Route::currentRouteName(), 'tableverifikasi') === 0 ? 'active' : '' }} nav-item">
                    <a href="{{ route('tableverifikasi') }}"><i class="ft-check"></i><span
                            class="menu-title" data-i18n="">Data
                            Verifikasi</span></a>
                </li>
                <li class="{{ strpos(Route::currentRouteName(), 'tablecc') === 0 ? 'active' : '' }} nav-item"><a
                        href="{{ route('tablecc') }}"><i class="ft-flag"></i><span class="menu-title"
                            data-i18n="">Data Country Code</span></a>
                </li>
                <li class="{{ strpos(Route::currentRouteName(), 'tablepesan') === 0 ? 'active' : '' }} nav-item"><a
                        href="{{ route('tablepesan') }}"><i class="ft-mail"></i><span class="menu-title"
                            data-i18n="">Pesan Pengguna</span></a>
                </li>

                <li class="dropdown dropdown-user nav-item">

                    <form method="POST" style="display:inline" action="{{ route('logout') }} ">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>

                </li>
        </div>

        </ul>
    </div>
    <div class="navigation-background"></div>
    </div>

    <!-- fixed-top-->
    <nav>
        <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
                <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                        href="#"><i class="ft-menu"></i></a></li>
                <li class="nav-item dropdown navbar-search">
                    <ul class="dropdown-menu">
                        <li class="arrow_box">
                            <form>
                                <div class="input-group search-box">
                                    <div class="position-relative has-icon-right full-width">
                                        <input class="form-control" id="search" type="text"
                                            placeholder="Search here...">
                                        <div class="form-control-position navbar-search-close"><i
                                                class="ft-x"> </i></div>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    @yield('content')

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
                class="float-md-left d-block d-md-inline-block">2021 &copy; Copyright <a
                    class="text-bold-800 grey darken-2" href="../" target="_blank">Halo!</a></span>
        </div>
    </footer>

    <script src="{{ asset('admin') }}/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="{{ asset('admin') }}/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="{{ asset('admin') }}/js/core/app-lite.js" type="text/javascript"></script>
    <script src="{{ asset('guest/vendor/toastr/toastr.min.js') }}"></script>
    @if (session()->has('pesan'))
        <script>
            toastr['{{ session('tipe') }}']('{{ session('pesan') }}')
        </script>
    @endif
    <script src="{{ asset('simple-datatables/simple-datatables.js') }}"></script>
    @stack('scripts')
</body>

</html>
