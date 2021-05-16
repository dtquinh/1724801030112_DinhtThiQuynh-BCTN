
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{asset('public/frontend/LittleCloset/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/styles/cart.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/styles/cart_responsive.css')}}">
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
					<div class="home_title">Shopping Cart</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="{{URL::to('/trang-chu')}}">Home</a></li>
							<li>Your Cart</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Cart -->
		
		<div class="cart_section">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="cart_container">
							<?php
							$content = Cart::content();
							
							?>
							<!-- Cart Bar -->
							<form action="{{URL::to('/update-cart-qty')}}" method="post">
										{{csrf_field()}}
							<div class="cart_bar">
								<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
									<li class="mr-auto">Product</li>
									<li>Color</li>
									<li>Size</li>
									<li>Price</li>
									<li>Quantity</li>
									<li>Total</li>
									<li> </li>
								</ul>
							</div>

							<!-- Cart Items -->
							
							
							
							<div class="cart_items">
								@foreach($content as $v_content)
								<ul class="cart_items_list">

									<!-- Cart Item -->
									<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
										<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
											
											<div><div class="product_image"><img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" alt=""></div></div>
											<div class="product_name_container">
												<div class="product_name"><a href="{{URL::to('/chitietSP/'.$v_content->id)}}">{{$v_content->name}}</a></div>
												{{-- <div class="product_text">{{$v_content->id}}</div> --}}
											</div>
										</div>
										<div class="product_color product_text"><span>Color: </span>beige</div>
										<div class="product_size product_text"><span>Size: </span>L</div>
										<div class="product_price product_text"><span>Price: </span>{{number_format($v_content->price)}} </div>
										<div class="product_quantity_container" >
											{{-- <div class="product_quantity ml-lg-auto mr-lg-auto text-center" > --}}

												<input class="product_text product_num" type="text" name="cart_quantity" value="{{$v_content->qty}}" style=" font-size: 14px; text-align: center; width: 50px; margin-left: 7px">

												{{-- <span class="product_text product_num" name="cart_quantity">{{$v_content->qty}}</span> --}}
												{{-- <div class="qty_sub qty_button trans_200 text-center"><span>-</span></div>
												<div class="qty_add qty_button trans_200 text-center"><span>+</span></div> --}}
												<input type="hidden"value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
											{{-- </div> --}}
										</div>
										<div class="product_total product_text"><span>Total: </span>
											<?php
												$subtotal  = number_format($v_content->price * $v_content->qty);

												echo $subtotal;
											?>
										</div>
										<div class="remove">
											<a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}" style="color: #2fce98;">x</a>
										</div>
									</li>
								</ul>
								@endforeach
							</div>

							<!-- Cart Buttons -->
							<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
								
								<div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
									<input class="button button_continue trans_200" style="color: #2fce98;  background: #b2b2b2; color: #FFFFFF; font-weight: 700; width: 95px; text-transform: uppercase; border: none; font-size: 17px" value="update" type="submit">
									{{-- <div class="button button_clear trans_200"  name="update_qty"><a href="">update</a></div> --}}
									<div class="button button_continue trans_200"><a href="{{URL::to('/trang-chu')}}">continue shopping</a></div>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
				<div class="row cart_extra_row">
					<div class="col-lg-6">
						<div class="cart_extra cart_extra_1">
							<div class="cart_extra_content cart_extra_coupon">
								<div class="cart_extra_title">Coupon code</div>
								<div class="coupon_form_container">
									<form action="{{url('/check-coupon')}}" id="coupon_form" class="coupon_form" method="POST">
										@csrf
										<input type="text" class="coupon_input" name="coupon" required="required">
										<button class="coupon_button">apply</button>
									</form>
								</div>
								<div class="coupon_text">Enter code NEW01 to get 5% discount on total orders</div>
								<div class="coupon_text">
									<?php
											$message = Session::get('message');
											if($message){
												echo $message;
												Session::put('message', null);
											}
										?>
								</div>
								<div class="shipping">
									<div class="cart_extra_title">Shipping Method</div>
									<ul>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_2" name="shipping_radio" class="shipping_radio" checked>
												<span class="radio_mark"></span>
												<span class="radio_text">Standard delivery</span>
											</label>
											{{-- <div class="shipping_price ml-auto">$1.99</div> --}}
										</li>
										{{-- <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_3" name="shipping_radio" class="shipping_radio" checked>
												<span class="radio_mark"></span>
												<span class="radio_text">Fast delivery</span>
											</label>
											<div class="shipping_price ml-auto">Free</div>
										</li> --}}
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 cart_extra_col">
						<div class="cart_extra cart_extra_2">

							<div class="cart_extra_content cart_extra_total">
								<div class="cart_extra_title">Cart Total</div>
								<ul class="cart_extra_total_list">
									
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Discount</div>
										<div class="cart_extra_total_value ml-auto">0</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Tax</div>
										<div class="cart_extra_total_value ml-auto">Free</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Subtotal</div>
										<div class="cart_extra_total_value ml-auto">

											{{Cart::subtotal(0)}}
											
											VND
										</div>
									</li>
									{{-- <li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value ml-auto">
											<?php
												$subtotal  = number_format(35000 + $v_content->price * $v_content->qty);
												echo $subtotal;
											?> VND
											{{Cart::subtotal()}} VND
										</div>
									</li> --}}
								</ul>
								<div class="checkout_button trans_200">
									<?php
                                	$customer_id = Session::get('customer_id');
                                	if($customer_id != Null){
                                	?>

										<a href="{{URL::to('/Checkout')}}">proceed to checkout</a>

									<?php
                                	}else{
                                	?>

                                		<a href="{{URL::to('/login-checkout')}}">proceed to checkout</a>

                                	<?php
                                	}
                                	?>
								</div>
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
<script src="{{asset('public/frontend/LittleCloset/plugins/easing/easing.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('public/frontend/LittleCloset/js/cart.js')}}"></script>
</body>
</html>{{asset('public/frontend/LittleCloset/