<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Blog | {{ $title }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('style/assets/img/favicon.ico') }}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('style/assets/css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset('style/assets/css/slicknav.css') }}">
            <link rel="stylesheet" href="{{ asset('style/assets/css/flaticon.css') }}">
            <link rel="stylesheet" href="{{ asset('style/assets/css/animate.min.css') }}">
            <link rel="stylesheet" href="{{ asset('style/assets/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset('style/assets/css/fontawesome-all.min.css') }}">
            <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
            <link rel="stylesheet" href="{{ asset('style/assets/css/slick.css') }}">
            <link rel="stylesheet" href="{{ asset('style/assets/css/nice-select.css') }}">
            <link rel="stylesheet" href="{{ asset('style/assets/css/style.css') }}">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('style/assets/img/logo/logo.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
                <div class="main-header header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('style/') }}assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">  
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li class="{{ ($title === "services") ? 'active' : '' }}"><a href="#">Services</a></li>
                                            <li class="{{ ($title === "apply") ? 'active' : '' }} " ><a href="#">Apply</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="#" class="btn header-btn">+880.762.009.00 </a>
                                </div>
                            </div>
                            </div>   
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('style/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('style/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('style/assets/js/bootstrap.min.js') }}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('style/assets/js/jquery.slicknav.min.js') }}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('style/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('style/assets/js/slick.min.js') }}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('style/assets/js/wow.min.js') }}"></script>
		<script src="{{ asset('style/assets/js/animated.headline.js') }}"></script>
        <script src="{{ asset('style/assets/js/jquery.magnific-popup.js') }}"></script>

		<!-- Nice-select, sticky -->
        <script src="{{ asset('style/assets/js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('style/assets/js/jquery.sticky.js') }}"></script>
        
        <!-- contact js -->
        <script src="{{ asset('style/assets/js/contact.js') }}"></script>
        <script src="{{ asset('style/assets/js/jquery.form.js') }}"></script>
        <script src="{{ asset('style/assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('style/assets/js/mail-script.js') }}"></script>
        <script src="{{ asset('style/assets/js/jquery.ajaxchimp.min.js') }}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
        <script src="{{ asset('style/assets/js/main.js') }}"></script>
        
    </body>
</html>