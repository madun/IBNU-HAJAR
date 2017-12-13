<!DOCTYPE html>
<html>
    <head>
        {{-- <title>UMART &mdash; DARI UMAT - OLEH UMAT - UNTUK UMAT</title> --}}
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        {{-- <meta name="author" content="Roman Kirichik"> --}}
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Favicons -->
        <link rel="shortcut icon" href="{{ asset('image/u-logo.jpg') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vertical-rhythm.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        @section('style')
        @show


    </head>
    <body class="appear-animate">

        <!-- Page Loader -->
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->

        <!-- Page Wrap -->
        <div class="page" id="top">

            @include('layouts.nav')

            <!-- Home Section -->

            @section('header')
            @show

            <!-- End Home Section -->


            @section('content')
            @show
            <!-- End Call Action Section -->


            <!-- Foter -->
            <footer class="page-section bg-gray-lighter footer pb-60">
                <div class="container">

                    <!-- Footer Logo -->
                    <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
                        <!-- <h2 class="hs-line-11 font-alt mb-50 mb-xs-30">UMART</h2> -->
                        <img style="width:10%" src="{{ asset('images/LOGO UMART.png') }}" alt=""/>
                    </div>
                    <!-- End Footer Logo -->

                    <!-- Social Links -->
                    <div class="footer-social-links mb-110 mb-xs-60">
                        <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                        <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </div>
                    <!-- End Social Links -->

                    <!-- Footer Text -->
                    <div class="footer-text">

                        <!-- Copyright -->
                        <div class="footer-copy font-alt">
                            <a href="#top">UMART 2017</a>.
                        </div>
                        <!-- End Copyright -->

                        <div class="footer-made">
                            &copy;  <?php echo date("Y") ?> All Rights Reserved. Incu Bu Muchtar, With Team <a href="http://www.sigabah.com/beta/" target="_blank">sigabah.com</a>
                        </div>

                    </div>
                    <!-- End Footer Text -->

                 </div>


                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="fa fa-caret-up" style="color: #EF6C00;"></i></a>
                 </div>
                 <!-- End Top Link -->

            </footer>
            <!-- End Foter -->


        </div>
        <!-- End Page Wrap -->


        <!-- JS -->
        <script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/SmoothScroll.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.localScroll.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.viewport.mini.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.countTo.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.fitvids.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        {{-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script> --}}
        <script type="text/javascript" src="{{ asset('js/gmap3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.simple-text-rotator.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/contact-form.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
        @section('script')
        @show
        
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

    </body>
</html>
