<!DOCTYPE html>
<html lang="en">
<head>
    <title>Passions Jeans</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('assets/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    @yield('styles')
</head>

<body>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="100">

<div class="site-wrap"  id="home-section">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" style="height: 100px">

        <div class="container" style="height: 100px">
            <div class="row align-items-center position-relative">


                <div class="site-logo">
                    <a href="/index" class="text-black"><span class="text-primary"><img style="width: 60%" src="{{asset('assets/images/passions-logo.jpg')}}" alt="Passion-logo"></span></a>
                </div>

                <nav class="site-navigation text-center ml-auto" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="/index" class="nav-link">Home</a></li>
                        <li><a href="/overview" class="nav-link">Overview</a></li>
                        <li><a href="/about" class="nav-link">About US</a></li>
                        <li><a href="/clients" class="nav-link">Our Clients</a></li>
                        <li><a href="/achievements" class="nav-link">Achievements</a></li>
                        <li><a href="/gallery" class="nav-link">Gallery</a></li>
                        <li><a href="/contactus" class="nav-link">Contact Us</a></li>
                    </ul>
                </nav>



                <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>



    @yield('content')




    <footer class="site-footer" style="padding:  2em 0;">
        <div class="container">



                        <p>

                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  by <a href="https://colorlib.com" target="_blank" >PassionsJeans</a>

                        </p>


        </div>
    </footer>



    <script src="{{URL::asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery-ui.js')}}"></script>
    <script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.sticky.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/aos.js')}}"></script>

    <script src="{{URL::asset('assets/js/main.js')}}"></script>
    @yield('scripts')
</div>
</body>