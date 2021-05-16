
<!DOCTYPE html>
<html lang="en">
<head>
<title>Category</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{asset('public/frontend/LittleCloset/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/styles/category.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/styles/category_responsive.css')}}">
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
            <div class="home_container d-flex flex-column align-items-center justify-content-end">
                <div class="home_content text-center">
                    @foreach($category_name as $key => $category_by_name)
                    <div class="home_title">Category Page</div>
                    <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                        <ul class="d-flex flex-row align-items-start justify-content-start text-center">
                            <li><a href="{{URL::to('/trang-chu')}}">Home</a></li>
                            <li><a href="">{{$category_by_name->category_name}}</a></li>
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Products -->

        <div class="products">
            <div class="container">
                <div class="row products_bar_row">
                    <div class="col">
                        <div class="products_bar d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
                            
                            <div class="products_bar_side d-flex flex-row align-items-center justify-content-start ml-lg-auto">
                                <div class="products_dropdown product_dropdown_sorting">
                                    <div class="isotope_sorting_text"><span>Default Sorting</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
                                    <ul>
                                        <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>Default</li>
                                        <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>Price: Low To High</li>
                                        <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>Name: A-> Z</li>
                                    </ul>
                                </div>
                                <div class="product_view d-flex flex-row align-items-center justify-content-start">
                                    <div class="view_item active"><img src="{{asset('public/frontend/LittleCloset/images/view_1.png')}}" alt=""></div>
                                    <div class="view_item"><img src="{{asset('public/frontend/LittleCloset/images/view_2.png')}}" alt=""></div>
                                    <div class="view_item"><img src="{{asset('public/frontend/LittleCloset/images/view_3.png')}}" alt=""></div>
                                </div>
                                <div class="products_dropdown text-right product_dropdown_filter">
                                    <div class="isotope_filter_text"><span>Filter</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
                                    <ul>
                                        <li class="item_filter_btn" data-filter="*">All</li>
                                        <li class="item_filter_btn" data-filter=".hot">Hot</li>
                                        <li class="item_filter_btn" data-filter=".new">New</li>
                                        <li class="item_filter_btn" data-filter=".sale">Sale</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row products_row products_container grid">
                    
                    <!-- Product -->
                    @foreach($category_by_id as $key => $product)
                    <a href="{{URL::to('/chitietSP/'.$product->product_id)}}">
                    <div class="col-xl-4 col-md-6 grid-item new">
                        <div class="product">
                            <div class="product_image"><a href="{{URL::to('/chitietSP/'.$product->product_id)}}"><img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt=""></a></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="{{URL::to('/chitietSP/'.$product->product_id)}}">{{$product->product_name}}</a></div>
                                            <div class="product_category">Brand <a href="category.html"></a></div>
                                            {{-- @foreach($brand_by_id as $key => $brand)
                                                @if($brand->$brand_id == $product->$brand_id)
                                            <div class="product_category">Brand <a href="category.html">{{$bran->brand_name}}</a></div>
                                                @endif
                                            @endforeach  --}}
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        
                                        <div class="product_price text-right"><span>{{number_format($product->product_price).' '.' VND'}}</span></div>
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
                    </div>
                    </a>
                    @endforeach
                    

                </div>
                <div class="row page_nav_row">
                    <div class="col">
                        <div class="page_nav">
                            <ul class="d-flex flex-row align-items-start justify-content-center">
                                <li class="active"><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                                <li><a href="#">04</a></li>
                            </ul>
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
<script src="{{asset('public/frontend/LittleCloset/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/plugins/Isotope/fitcolumns.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/js/category.js')}}"></script>
</body>
</html>