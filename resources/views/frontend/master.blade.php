<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Franco</title>
     
    <base href="{{ asset('').'public/frontend/' }}">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\plugin.css">
    <link rel="stylesheet" href="assets\css\bundle.css">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\responsive.css">
    <script src="assets\js\vendor\modernizr-2.8.3.min.js"></script>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/slick.min.js"></script>
    
    <script src="js/script.js"></script>
</head>
<body>
    <div class="cover"></div>
    <div class="wrapper">

        <!-- Header -->
        <header class="header">

            <!-- Header Top -->
            <div class="header-top">
                <div class="container-fluid bg">
                    <div class="header-top-inner">
                        <div class="message">
                            <div class="message-icon"><i class="far fa-bookmark"></i></div>
                            <div class="message-content">Welcome to Franco - an e-Commerce PSD Template!</div>
                        </div>
                        <div class="menu-link">
                            <div class="menu-link-button"><a href="">
                                    <div class="menu-link-icon"><i class="menu__icon fas fa-cog icon-login"></i></div>
                                    <div class="menu-link-description">Shop Setting</div>
                                </a>
                            </div>
                            <div class="menu-link-button"><a href="">
                                    <div class="menu-link-icon"><i class="menu__icon fas fa-lock"></i></div>
                                    <div class="menu-link-description">Member Login</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- End Header Top -->

            <!-- Menu -->
            <div class="menu">
                <div class="container-fluid">
                    <div class="menu-inner">
                        <div class="logo"><a href="{{route('frontend.index')}}"><img src="image/logo.jpg" alt=""></a></div>
                        <nav>
                            <div class="nav-icon"><a href="{{route('frontend.index')}}"><i class="fas fa-bars"></i></a></div>
                            <ul class = "navbar">
                                <li class="nav-title">Menu</li>
                                <li><a href="{{route('frontend.index')}}">Home</a></li>
                                <li><a href="{{route('product.show',['categoryName' => 'Nam'])}}">Women</a></li>
                                <li><a href="{{route('product.show',['categoryName' => 'Nữ'])}}">Men</a></li>
                                <li><a href="{{route('product.all')}}">All</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Collections</a></li>
                                <li><a href="{{route('user.login')}}">My acount</a></li>
                                <li><a href=""><i class="fas fa-search"></i></a></li>
                            </ul>
                        </nav>
                        <div class="menu-icon">
                            <div class="menu-icon-heart"><a href="#"><i class="pe-7s-like heart-icon"></i></a></div>
                            <div class="menu-icon-cart"><a href="{{route('cart')}}" style="front-size:8px"><i class="pe-7s-cart cart-icon" ></i>
                                @if(session('count'))
                                <small>({{session('count')}})</small>
                                @endif
                            </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Menu -->

        </header>
        <!-- End Header -->

        @yield('main');
        

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="footer-list">
                    <div class="row">
                        <div class="footer-list-content1">
                            <h3>About Franco</h3>
                            <div class="border-f"></div>
                            <p>Aliquam tempor sagittis neque, vel aliquam risus consectetur vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris vulputate mi, eu interdum nunc diam at ipsum.</p>
                            <ul>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href=""><i class="fab fa-behance"></i></a></li>
                                <li><a href=""><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="footer-list-content2">
                            <h3>Navigation</h3>
                            <div class="border-f"></div>
                            <div class="list-menu">
        
                                    <div class="list-menu-1">
                                        <ul>
                                            <li><a href="">Home</a></li>
                                            <li><a href="">About Us</a></li>
                                            <li><a href="">Our Blog</a></li>
                                            <li><a href="">Women</a></li>
                                            <li><a href="">Men</a></li>
                                            <li><a href="">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="list-menu-2">
                                        <ul>
                                            <li><a href="">FAQs</a></li>
                                            <li><a href="">Featured Brands</a></li>
                                            <li><a href="">Gift Vouchers</a></li>
                                            <li><a href="">Affiliates</a></li>
                                            <li><a href="">Specials Gift</a></li>
                                            <li><a href="">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                        <div class="footer-list-content3">
                            <h3>Shop Location</h3>
                            <div class="border-f"></div>
                            <div class="info">
                                <div class="info-content1">
                                    <a href=""><i class="far fa-map"></i></a>
                                    <a href="">500 Hennessy Road <br>Causeway Bay, Hong Kong</a>
                                </div>
                                <div class="info-content2">
                                    <a href="" class="ai"><i class="fa fa-phone-alt" aria-hidden="true"></i></a>
                                    <a href="" class="ap">+1 23456789</a>
                                </div>
                                <div class="info-content2 c3">
                                    <a href="" class="ai"><i class="far fa-envelope"></i></a>
                                    <a href="" class="ap">contact@yourdomain.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-cards">
                <div class="container">
                    <div class="row-copy-card">
                        <div class="copyright">
                            <p><i class="far fa-copyright copyright-icon"></i>Copyright 2015 & Made with <i class="fas fa-heart heart"></i> <span>by</span> <a href="">ArrowHitech.</a></p>
                        </div>
                        <div class="cards">
                            <ul>
                                <li><a href=""><i class="fab fa-cc-visa"></i></a></li>
                                <li><a href=""><i class="fab fa-cc-paypal"></i></a></li>
                                <li><a href=""><i class="fab fa-cc-mastercard"></i></a></li>
                                <li><a href=""><i class="fab fa-cc-discover"></i></a></li>
                                <li><a href=""><i class="fab fa-cc-amex"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>

@section('script')
    

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
    <script src="assets\js\vendor\jquery-1.12.0.min.js"></script>
    <script src="assets\js\popper.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\js\ajax-mail.js"></script>
    {{--  <script src="assets\js\plugins.js"></script>  --}}
    <script src="assets\js\main.js"></script>

@show
</body>
</html>