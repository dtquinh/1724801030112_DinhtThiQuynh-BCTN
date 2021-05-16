<!DOCTYPE html>
<html lang="en">
<head>
<title>FM Closet</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{asset('public/frontend/LittleCloset/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/styles/responsive.css')}}">

<link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
</head>
<body>

<!-- Menu -->

<div class="menu">

    <!-- Search -->
    <div class="menu_search">
        <form action="#" id="menu_search_form" class="menu_search_form">
            <input type="text" class="search_input" placeholder="Search Item" required="required">
            <button class="menu_search_button"><img src="{{asset('public/frontend/LittleCloset/images/search.png')}}" alt=""></button>
        </form>
    </div>
    <!-- Navigation -->
    @foreach($category as $key => $cate)
    <div class="menu_nav">
        <ul>
            <li><a href="{{URL::to('/danhmucSP/'.$cate->category_id)}}">{{$cate->category_name}}</a></li>
        </ul>
    </div>
    @endforeach
    <!-- Contact Info -->
    <div class="menu_contact">
        <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
            <div><div><img src="{{asset('public/frontend/LittleCloset/images/phone.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div></div>
            <div>0353 685 490</div>
        </div>
        <div class="menu_social">
            <ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_overlay"></div>
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo">
                <a href="{{URL::to('/trang-chu')}}">
                    <div class="d-flex flex-row align-items-center justify-content-start">
                        <div><img src="{{asset('public/frontend/LittleCloset/images/logo_1.png')}}" alt=""></div>
                        <div>FM Closet</div>
                    </div>
                </a>    
            </div>
            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
            @foreach($category as $key => $cate)
            <nav class="main_nav">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="{{URL::to('/danhmucSP/'.$cate->category_id)}}">{{$cate->category_name}}</a></li>
                    
                </ul>
            </nav>
            @endforeach
            <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
                <!-- Search -->
                <div class="header_search">
                    <form action="{{URL::to('/tim-kiem')}}" method="POST" id="header_search_form">
                            {{csrf_field()}}
                        <input type="text" name="tukhoa_submit" class="search_input" placeholder="Search Item" required="required">
                        <button class="header_search_button"><img src="{{asset('public/frontend/LittleCloset/images/search.png')}}" alt=""></button>
                    </form>
                </div>
                <!-- User -->
                <div class="user"><a href="#"><div><img src="{{asset('public/frontend/LittleCloset/images/user.svg')}}"></div></a></div>
                <!-- Cart -->
                <div class="cart"><a href="{{URL::to('/show-cart')}}"><div><img class="svg" src="{{asset('public/frontend/LittleCloset/images/cart.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
                <!-- Phone -->
                <div class="header_phone d-flex flex-row align-items-center justify-content-start">
                    <div><div><img src="{{asset('public/frontend/LittleCloset/images/phone.svg')}}" alt="https://www.flaticon.com/authors/freepik"></div></div>
                    <div>0353 685 490</div>
                </div>
            </div>
        </div>
    </header>

    <div class="super_container_inner">
        <div class="super_overlay"></div>

        <!-- Home -->
        

        <div class="home">
            <!-- Home Slider -->
            <div class="home_slider_container">
                <div class="owl-carousel owl-theme home_slider">
                    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>SIGN IN</h2>
                        <form action="{{URL::to('/login-customer')}}" method="post">
                            {{csrf_field()}}
                            <input type="text" name="email_account" placeholder="Email" />
                            <input type="password" name="password_account" placeholder="Password" />
                            <span>
                                <input type="checkbox" class="checkbox"> 
                                Remember me
                            </span>

                            <button type="submit" class="btn btn-default" style="margin-top: 30px">Sign in</button>
                            
        

                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>CREATE A ACOUNT</h2>
                        <form action="{{URL::to('/add-customer')}}" method="post">
                            {{csrf_field()}}
                            <input type="text" name="customer_name" placeholder="Fullname"/>
                            <input type="email" name="customer_email" placeholder="Email"/>
                            <input type="password" name="customer_password" placeholder="Password"/>
                            <input type="text" name="customer_phone" placeholder="No. Phone"/>
                            <button type="submit" class="btn btn-default" style="margin-top: 30px">Sign up</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
                    <!-- Slide -->
                    

                    <!-- Slide -->
                    
                    <!-- Slide -->
                    

                    <!-- Slide -->
                    

                </div>
                

                <!-- Home Slider Dots -->
                
                

            </div>
        </div>

        <!-- Products -->

        

        

        <!-- Footer -->

        <footer class="footer">
            <div class="footer_content">
                <div class="container">
                    <div class="row">
                        
                        <!-- About -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_about">
                                <div class="footer_logo">
                                    <a href="http://localhost:8080/shopbanhanglaravel/trang-chu">
                                        <div class="d-flex flex-row align-items-center justify-content-start">
                                            <div class="footer_logo_icon"><img src="http://localhost:8080/shopbanhanglaravel/public/frontend/LittleCloset/images/logo_2.png" alt=""></div>
                                            <div>FM Closet</div>
                                        </div>
                                    </a>        
                                </div>
                                <div class="footer_about_text">
                                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Fusce venenatis vel velit vel euismod.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Links -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_menu">
                                <div class="footer_title">Support</div>
                                <ul class="footer_list">
                                    <li>
                                        <a href="#"><div>Customer Service<div class="footer_tag_1">online now</div></div></a>
                                    </li>
                                    <li>
                                        <a href="#"><div>Return Policy</div></a>
                                    </li>
                                    <li>
                                        <a href="#"><div>Size Guide<div class="footer_tag_2">recommended</div></div></a>
                                    </li>
                                    <li>
                                        <a href="#"><div>Terms and Conditions</div></a>
                                    </li>
                                    <li>
                                        <a href="#"><div>Contact</div></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Contact -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_contact">
                                <div class="footer_title">Social</div>
                                
                                    <ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </footer>
    </div>
        
</div>

<script src="{{asset('public/frontend/LittleCloset/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/styles/bootstrap-4.1.2/popper.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/plugins/easing/easing.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/js/custom.js')}}"></script>

</body>
</html>