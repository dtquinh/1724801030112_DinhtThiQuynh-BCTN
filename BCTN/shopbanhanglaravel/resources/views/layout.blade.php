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
                <div class="user">
                    {{-- <a href="#"><div><img src="{{asset('public/frontend/LittleCloset/images/user.svg')}}" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a> --}}
                    <?php
                        $customer_id = Session::get('customer_id');
                        if($customer_id != Null){
                    ?>

                        <a href="{{URL::to('/logout-checkout')}}"><div><img src="{{asset('public/frontend/LittleCloset/images/user.svg')}}" alt="https://www.flaticon.com/authors/freepik" ><div></div></div></a>

                    <?php
                    }else{
                    ?>

                        <a href="{{URL::to('/login-checkout')}}"><div><img src="{{asset('public/frontend/LittleCloset/images/user.svg')}}"></div></a>
                                
                    <?php
                    }
                    ?>
                </div>
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
                    
                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url({{asset('public/frontend/LittleCloset/images/home.jpg')}}"></div>
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col fill_height">
                                    <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                        <div class="home_content">
                                            <div class="home_title">New Arrivals</div>
                                            <div class="home_subtitle">Summer Wear</div>
                                            <div class="home_items">
                                                <div class="row">
                                                    <div class="col-sm-3 offset-lg-1">
                                                        <div class="home_item_side"><a href="product.html"><img src="{{asset('public/frontend/LittleCloset/images/home_1.jpg')}}" alt=""></a></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                                        <div class="product home_item_large">
                                                            
                                                            <div class="product_image"><img src="{{asset('public/frontend/LittleCloset/images/home_2.jpg')}}" alt=""></div>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="home_item_side"><a href="product.html"><img src="{{asset('public/frontend/LittleCloset/images/home_3.jpg')}}" alt=""></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url({{asset('public/frontend/LittleCloset/images/home.jpg')}}"></div>
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col fill_height">
                                    <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                        <div class="home_content">
                                            <div class="home_title">Popular</div>
                                            <div class="home_subtitle">Summer Wear</div>
                                            <div class="home_items">
                                                <div class="row">
                                                    <div class="col-sm-3 offset-lg-1">
                                                        <div class="home_item_side"><a href="product.html"><img src="{{asset('public/frontend/LittleCloset/images/home_1.jpg')}}" alt=""></a></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                                        <div class="product home_item_large">
                                                            
                                                            <div class="product_image"><img src="{{asset('public/frontend/LittleCloset/images/product_1.jpg')}}" alt=""></div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="home_item_side"><a href="product.html"><img src="{{asset('public/frontend/LittleCloset/images/home_3.jpg')}}" alt=""></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url({{asset('public/frontend/LittleCloset/images/home.jpg')}}"></div>
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col fill_height">
                                    <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                        <div class="home_content">
                                            <div class="home_title">Trendsetters</div>
                                            <div class="home_subtitle">Summer Wear</div>
                                            <div class="home_items">
                                                <div class="row">
                                                    <div class="col-sm-3 offset-lg-1">
                                                        <div class="home_item_side"><a href="product.html"><img src="{{asset('public/frontend/LittleCloset/images/home_1.jpg')}}" alt=""></a></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                                        <div class="product home_item_large">
                                                            
                                                            <div class="product_image"><img src="{{asset('public/frontend/LittleCloset/images/product_2.jpg')}}" alt=""></div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="home_item_side"><a href="product.html"><img src="{{asset('public/frontend/LittleCloset/images/home_3.jpg')}}" alt=""></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url({{asset('public/frontend/LittleCloset/images/home.jpg')}}"></div>
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col fill_height">
                                    <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                        <div class="home_content">
                                            <div class="home_title">Premium Items</div>
                                            <div class="home_subtitle">Summer Wear</div>
                                            <div class="home_items">
                                                <div class="row">
                                                    <div class="col-sm-3 offset-lg-1">
                                                        <div class="home_item_side"><a href="product.html"><img src="{{asset('public/frontend/LittleCloset/images/home_1.jpg')}}" alt=""></a></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                                        <div class="product home_item_large">
                                                            
                                                            <div class="product_image"><img src="{{asset('public/frontend/LittleCloset/images/product_3.jpg')}}" alt=""></div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="home_item_side"><a href="product.html"><img src="{{asset('public/frontend/LittleCloset/images/home_3.jpg')}}" alt=""></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>

                </div>
                <div class="home_slider_nav home_slider_nav_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                <div class="home_slider_nav home_slider_nav_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

                <!-- Home Slider Dots -->
                
                <div class="home_slider_dots_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_dots">
                                    <ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-center">
                                        <li class="home_slider_custom_dot active">01</li>
                                        <li class="home_slider_custom_dot">02</li>
                                        <li class="home_slider_custom_dot">03</li>
                                        <li class="home_slider_custom_dot">04</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>

            </div>
        </div>

        <!-- Products -->

        <div class="products">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section_title text-center">Popular on FM Closet</div>
                    </div>
                </div>
                <div class="row page_nav_row">
                    <div class="col">
                        <div class="page_nav">
                            <ul class="d-flex flex-row align-items-start justify-content-center">
                                <li class="active"><a href="category.html"> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row products_row">
                    
                    <!-- Product -->
                    @foreach($all_product as $key => $product) 
                    <div class="col-xl-4 col-md-6">
                        <form action="{{URL::to('/save-cart')}}" method="post">
                                    {{csrf_field()}}
                        <div class="product">

                            <a href="{{URL::to('/chitietSP/'.$product->product_id)}}">
                            <div class="product_image"><img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt=""></div></a>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="{{URL::to('/chitietSP/'.$product->product_id)}}">{{$product->product_name}}</a></div>
                                            <div class="product_category">In <a href="category.html">
                                                {{$product->category_name}}
                                            </a></div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        
                                        <div class="product_price text-right"><span>{{number_format($product->product_price).' '.'VND'}}</span></div>
                                    </div>
                                </div>
                                <div class="product_buttons">
                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="{{asset('public/frontend/LittleCloset/images/heart_2.svg')}}" class="svg" alt=""><div>+</div></div></div>
                                        </div>

                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="{{asset('public/frontend/LittleCloset/images/cart.svg')}}" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                    @endforeach
                    <!-- Product -->
                    

                </div>
                <div class="row load_more_row">
                    <div class="col">
                        <div class="button load_more ml-auto mr-auto"><a href="#">load more</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Boxes -->

        <div class="boxes">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="boxes_container d-flex flex-row align-items-start justify-content-between flex-wrap">

                            <!-- Box -->
                            <div class="box">
                                <div class="background_image" style="background-image:url({{asset('public/frontend/LittleCloset/images/box_1.jpg')}}"></div>
                                <div class="box_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="box_left">
                                        <div class="box_image">
                                            <a href="{{URL::to('/danhmucSP/11')}}">
                                                <div class="background_image" style="background-image:url({{asset('public/frontend/LittleCloset/images/box_1_img.jpg')}}"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="box_right text-center">
                                        <div class="box_title">Blazers</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Box -->
                            <div class="box">
                                <div class="background_image" style="background-image:url({{asset('public/frontend/LittleCloset/images/box_2.jpg')}}"></div>
                                <div class="box_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="box_left">
                                        <div class="box_image">
                                            <a href="{{URL::to('/danhmucSP/10')}}">
                                                <div class="background_image" style="background-image:url({{asset('public/frontend/LittleCloset/images/box_2_img.jpg')}}"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="box_right text-center">
                                        <div class="box_title">T - Shirt</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Box -->
                            <div class="box">
                                <div class="background_image" style="background-image:url({{asset('public/frontend/LittleCloset/images/box_3.jpg')}}"></div>
                                <div class="box_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="box_left">
                                        <div class="box_image">
                                            <a href="{{URL::to('/danhmucSP/9')}}">
                                                <div class="background_image" style="background-image:url({{asset('public/frontend/LittleCloset/images/box_3_img.jpg')}}"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="box_right text-center">
                                        <div class="box_title">Jeans</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Box -->
                            <div class="box">
                                <div class="background_image" style="background-image:url({{asset('public/frontend/LittleCloset/images/home1.jpg')}}"></div>
                                <div class="box_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="box_left">
                                        <div class="box_image">
                                            <a href="{{URL::to('/danhmucSP/8')}}">
                                                <div class="background_image" style="background-image:url({{asset('public/frontend/LittleCloset/images/home2.jpg')}}"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="box_right text-center">
                                        <div class="box_title">Dress</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features -->

        <div class="features">
            <div class="container">
                <div class="row">
                    
                    <!-- Feature -->
                    <div class="col-lg-4 feature_col">
                        <div class="feature d-flex flex-row align-items-start justify-content-start">
                            <div class="feature_left">
                                <div class="feature_icon"><img src="{{asset('public/frontend/LittleCloset/images/icon_1.svg')}}" alt=""></div>
                            </div>
                            <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                                <div class="feature_title">Fast Secure Payments</div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature -->
                    <div class="col-lg-4 feature_col">
                        <div class="feature d-flex flex-row align-items-start justify-content-start">
                            <div class="feature_left">
                                <div class="feature_icon ml-auto mr-auto"><img src="{{asset('public/frontend/LittleCloset/images/icon_2.svg')}}" alt=""></div>
                            </div>
                            <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                                <div class="feature_title">Premium Products</div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature -->
                    <div class="col-lg-4 feature_col">
                        <div class="feature d-flex flex-row align-items-start justify-content-start">
                            <div class="feature_left">
                                <div class="feature_icon"><img src="{{asset('public/frontend/LittleCloset/images/icon_3.svg')}}" alt=""></div>
                            </div>
                            <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                                <div class="feature_title">Free Delivery</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

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
                                    <ul class="footer_list" style="font-size: 18px; color: #4a4a4a">
                                        <li>119G HHT, Hiep Thanh, Tp.Thu Dau Mot, Binh Duong</li>

                                        <li style="padding-top: 15px">Email: FMcloset@gmail.com</li>
                                        <li style="padding-top: 15px">Phone: 0353685490</li>
                                        
                                    </ul>
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