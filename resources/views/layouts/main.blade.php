<!DOCTYPE HTML>
<html>
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Madshop.top - @yield('title')</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('/public')}}/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('/public')}}/css/icomoon.css">
    <!-- Ion Icon Fonts-->
    <link rel="stylesheet" href="{{asset('/public')}}/css/ionicons.min.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('/public')}}/css/bootstrap.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('/public')}}/css/magnific-popup.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('/public')}}/css/flexslider.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('/public')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/public')}}/css/owl.theme.default.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('/public')}}/css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{asset('/public')}}fonts/flaticon/font/flaticon.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('/public')}}/css/style.css">
    </head>
    <body>
    <div class="colorlib-loader"></div>
    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-md-9">
                            <div id="colorlib-logo"><a href="index.html">MAD SHOP</a></div>
                        </div>
                        <div class="col-sm-5 col-md-3">
                        <form action="#" class="search-wrap">
                           <div class="form-group">
                              <input type="search" class="form-control search" placeholder="Search">
                              <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                           </div>
                        </form>
                     </div>
                 </div>
                    <div class="row">
                        <div class="col-sm-12 text-left menu-1">
                            <ul>
                                <li class="active"><a href="{{route('home')}}">Home</a></li>
                                @foreach($cats as $cat)
                                <li class="has-dropdown"><a href="{{route('view',['slug'=>$cat->slug])}}">{{$cat->name}}</a></li>
                                @endforeach
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li class="cart"><a href="cart.html"><i class="icon-shopping-cart"></i> Cart [0]</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<div class="sale">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center">
                <div class="row">
                    <div class="owl-carousel2">
                        <div class="item">
                            <div class="col">
                                <h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col">
                                <h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </nav>
      
        @yield('category')
		@yield('main')

        <footer id="colorlib-footer" role="contentinfo">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col footer-col colorlib-widget">
                        <h4>About Footwear</h4>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                        <p>
                            <ul class="colorlib-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                        </p>
                    </div>
                    <div class="col footer-col colorlib-widget">
                        <h4>Customer Care</h4>
                        <p>
                            <ul class="colorlib-footer-links">
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Returns/Exchange</a></li>
                                <li><a href="#">Gift Voucher</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Special</a></li>
                                <li><a href="#">Customer Services</a></li>
                                <li><a href="#">Site maps</a></li>
                            </ul>
                        </p>
                    </div>
                    <div class="col footer-col colorlib-widget">
                        <h4>Information</h4>
                        <p>
                            <ul class="colorlib-footer-links">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Order Tracking</a></li>
                            </ul>
                        </p>
                    </div>

                    <div class="col footer-col">
                        <h4>News</h4>
                        <ul class="colorlib-footer-links">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Exhibitions</a></li>
                        </ul>
                    </div>

                    <div class="col footer-col">
                        <h4>Contact Information</h4>
                        <ul class="colorlib-footer-links">
                            <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
                            <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            <li><a href="https://colorlib.com/cdn-cgi/l/email-protection#335a5d555c734a5c4641405a47561d505c5e"><span class="__cf_email__" data-cfemail="d4bdbab2bb94adbba1a6a7bda0b1fab7bbb9">[email&#160;protected]</span></a></li>
                            <li><a href="#">yoursite.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copy">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p>
                            <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
                            <span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
    </div>
    
    <!-- jQuery -->
    <script src="{{asset('/public')}}/js/jquery.min.js"></script>
   <!-- popper -->
   <script src="{{asset('/public')}}/js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="{{asset('/public')}}/js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="{{asset('/public')}}/js/jquery.easing.1.3.js"></script>
    <!-- Waypoints -->
    <script src="{{asset('/public')}}/js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="{{asset('/public')}}/js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="{{asset('/public')}}/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('/public')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('/public')}}/js/magnific-popup-options.js"></script>
    <!-- Date Picker -->
    <script src="{{asset('/public')}}/js/bootstrap-datepicker.js"></script>
    <!-- Stellar Parallax -->
    <script src="{{asset('/public')}}/js/jquery.stellar.min.js"></script>
    <!-- Main -->
    <script src="{{asset('/public')}}/js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
</body>
</html>

