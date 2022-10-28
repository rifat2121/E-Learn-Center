
{{--        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            @endif--}}


    <!DOCTYPE html>
<html lang="zxx">

<head>
    @include('sweetalert::alert')
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Learn Center | Admin</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="/add/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/add/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/add/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/add/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/add/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/add/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/add/css/style.css" type="text/css">

    @yield('css')
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container">
        <div class="logo">
            <a href="./index.html">
                <img src="/add/img/logo.png" alt="" height="80px" width="80px">
            </a>
        </div>
        <div class="nav-menu">
            <nav class="mainmenu mobile-menu">
                <ul>
                    <li class="active"><a href="/login">Login</a></li>


                    <li><a href="/register">Register</a></li>

                    
                    <li><a href="/adminlogin">Admin</a></li>
                </ul>
            </nav>
            {{--            <a href="#" class="primary-btn top-btn"><i class="fa fa-ticket"></i> Register</a>--}}

        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>

@yield('page')

<footer class="footer-section">


    <div class="row">

        <div class="col-lg-12">

            <div class="footer-text">
                <div class="ft-logo">
                    <a href="#" class="footer-logo"><img src="/add/img/footer-logo.png" alt="" height="110px" width="110px" ></a>
                </div>

                {{--                    <div class="copyright-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
                {{--                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>--}}
                {{--                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>--}}

                <div class="ft-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="/add/js/jquery-3.3.1.min.js"></script>
<script src="/add/js/bootstrap.min.js"></script>
<script src="/add/js/jquery.magnific-popup.min.js"></script>
<script src="/add/js/jquery.countdown.min.js"></script>
<script src="/add/js/jquery.slicknav.js"></script>
<script src="/add/js/owl.carousel.min.js"></script>
<script src="/add/js/main.js"></script>
</body>

</html>
