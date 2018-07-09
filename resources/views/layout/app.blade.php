<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}">
</head>
<body>
<section class="full-box cover dashboard-sideBar">
    <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
    <div class="full-box dashboard-sideBar-ct">
        <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
            company <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
        </div>
        <div class="full-box dashboard-sideBar-UserInfo">
            <figure class="full-box">
                <img src="assets/assets/img/avatar.jpg" alt="UserIcon">
                <figcaption class="text-center text-titles">User Name</figcaption>
            </figure>
            <ul class="full-box list-unstyled text-center">
                <li>
                    <a href="#!">
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>
                <li>
                    <a href="#!" class="btn-exit-system">
                        <i class="zmdi zmdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        @include('layout.navigation')
    </div>
</section>

<section class="full-box dashboard-contentPage">
    <nav class="full-box dashboard-Navbar">
    </nav>
    @yield('content')
</section>

<script src="{{ url('assets/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ url('assets/js/sweetalert2.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/material.min.js') }}"></script>
<script src="{{ url('assets/js/ripples.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ url('assets/js/main.js') }}"></script>
@yield('scripts')
</body>
</html>