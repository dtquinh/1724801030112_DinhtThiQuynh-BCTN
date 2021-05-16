
<!DOCTYPE html>
<html lang="en">
<head>
<title>Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{asset('public/frontend/LittleCloset/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/plugins/flexslider/flexslider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/styles/product.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/styles/product_responsive.css')}}">
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
@foreach($product_details as $key => $value)
	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Product Page</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="{{URL::to('/trang-chu')}}">Home</a></li>
							<li><a href="{{URL::to('/danhmucSP/'.$value->category_id)}}">{{$value->category_name}}</a></li>
							<li>New Products</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Product -->

		<div class="product">
			<div class="container">
				<div class="row">
					
					<!-- Product Image -->
					<div class="col-lg-6">
						<div class="product_image_slider_container">
							<div id="slider" class="flexslider">
								<ul class="slides">
									<li>
										<img src="{{Asset('public/uploads/product/'.$value->product_image)}}" />
									</li>
									<li>
										<img src="{{Asset('public/uploads/product/'.$value->product_image1)}}" />
									</li>
									<li>
										<img src="{{Asset('public/uploads/product/'.$value->product_image2)}}" />
									</li>
									<li>
										<img src="{{Asset('public/uploads/product/'.$value->product_image3)}}" />
									</li>
									
								</ul>
							</div>
							<div class="carousel_container">
								<div id="carousel" class="flexslider">
									<ul class="slides">
										<li>
											<div><img src="{{Asset('public/uploads/product/'.$value->product_image)}}" /></div>
										</li>
										<li>
											<div><img src="{{Asset('public/uploads/product/'.$value->product_image1)}}" /></div>
										</li>
										<li>
											<div><img src="{{Asset('public/uploads/product/'.$value->product_image2)}}" /></div>
										</li>
										<li>
											<div><img src="{{Asset('public/uploads/product/'.$value->product_image3)}}" /></div>
										</li>
										
									</ul>
								</div>
								<div class="fs_prev fs_nav disabled"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
								<div class="fs_next fs_nav"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>

					<!-- Product Info -->
					
					<div class="col-lg-6 product_col">
						<div class="product_info">
							<form action="{{URL::to('/save-cart')}}" method="post">
									{{csrf_field()}}
							<div class="product_name">{{$value->product_name}}</div>
							<div class="product_category">Brand <a href="category.html">{{$value->brand_name}}</a></div>
							<input name="qty" type="number" min="1" value="1" style="display: none;" />
							<input name="productid_hidden" type="hidden"  value="{{$value->product_id}}" />
							<div class="product_price"><span>{{number_format($value->product_price).' VND'}}</span></div>
							
							<div class="product_size">
								<div class="product_size_title">Select Size</div>
								
								<ul class="d-flex flex-row align-items-start justify-content-start">
									{{-- @foreach($size as $key => $sizename) --}}
									<li>
										<input type="radio" id="radio_1" name="size_name" value="radio_1" class="regular_radio">
										<label for="radio_1">XS</label>
									</li>
									<li>
										<input type="radio" id="radio_2" name="size_name" value="radio_2" class="regular_radio">
										<label for="radio_2">S</label>
									</li>
									<li>
										<input type="radio" id="radio_3" name="size_name" value="radio_3" class="regular_radio">
										<label for="radio_3">M</label>
									</li>
									<li>
										<input type="radio" id="radio_4" name="size_name" value="radio_4" class="regular_radio">
										<label for="radio_4">L</label>
									</li>
									<li>
										<input type="radio" id="radio_5" name="size_name" value="radio_5" class="regular_radio">
										<label for="radio_5">XL</label>
									</li>
									<li>
										<input type="radio" id="radio_6"  name="size_name" value="radio_6" class="regular_radio">
										<label for="radio_6">XXL</label>
									</li>
									{{-- @endforeach --}}
								</ul>
								
							</div>
							
							<div class="product_text">
								<p>{!!$value->product_des!!}</p>
							</div>
							<div class="product_buttons">
								<div class="text-right d-flex flex-row align-items-start justify-content-start">
									<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
										<button type="sumit" class="icon"><div><div><img src="{{asset('public/frontend/LittleCloset/images/heart_2.svg')}}" class="svg" alt=""><div>+</div></div></div></button>
									</div>
									<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
										<button type="sumit" class="icon"><div><div><img src="{{asset('public/frontend/LittleCloset/images/cart.svg')}}" class="svg" alt=""><div>+</div></div></div></button>
									</div>
								</div>
							</div>
							</form>
						</div>
					</div>
				
				</div>
			</div>
		</div>

		<!-- Boxes -->

		<div class="boxes">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="box d-flex flex-row align-items-center justify-content-start">
							<div class="mt-auto"><div class="box_image"><img src="{{asset('public/frontend/LittleCloset/images/boxes_1.png')}}" alt=""></div></div>
							<div class="box_content">
								<div class="box_title">Size Guide</div>
								{{-- <div class="box_text">Phasellus sit amet nunc eros sed nec tellus.</div> --}}
							</div>
						</div>
					</div>
					<div class="col-lg-6 box_col">
						<div class="box d-flex flex-row align-items-center justify-content-start">
							<div class="mt-auto"><div class="box_image"><img src="{{asset('public/frontend/LittleCloset/images/boxes_2.png')}}" alt=""></div></div>
							<div class="box_content">
								<div class="box_title">Shipping</div>
								{{-- <div class="box_text">Phasellus sit amet nunc eros sed nec tellus.</div> --}}
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
@endforeach	
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
<script src="{{asset('public/frontend/LittleCloset/plugins/flexslider/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/js/product.js')}}"></script>
</body>
</html>