
<!DOCTYPE html>
<html lang="en">
<head>
<title>Checkout</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{asset('public/frontend/LittleCloset/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/styles/checkout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/LittleCloset/styles/checkout_responsive.css')}}">
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
                <div class="user"><a href="#"><div><img src="{{asset('public/frontend/LittleCloset/images/user.svg')}}" alt="https://www.flaticon.com/authors/freepik"><div></div></div></a></div>
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
					<div class="home_title">Checkout</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="{{URL::to('/trang-chu')}}">Home</a></li>
							<li>Checkout</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Checkout -->
		
		<div class="cart_section2">
		<div class="container">
		{{-- <div class="row"> --}}
			<div class="col">
				<div class="cart_container">
					<div class="cart_bar">
						<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
							<li class="mr-auto">Product</li>
							<li>Color</li>
							<li>Size</li>
							<li>Price</li>
							<li>Quantity</li>
							<li>Total</li>
							
						</ul>
					</div>

							<!-- Cart Items -->
					<?php
						$content = Cart::content();
						$total = 0;
						
					?>
					@foreach($content as $v_content)		
					<div class="cart_items">
								
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
									<input class="product_text product_num" type="text" name="cart_quantity" value="{{$v_content->qty}}" disabled="disabled" style=" font-size: 14px; text-align: center; width: 50px; margin-left: 7px; border: none; background: #FFFFFF">
									<input type="hidden"value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
								</div>
								<div class="product_total product_text"><span>Total: </span>
									<?php
										$subtotal  = $v_content->price * $v_content->qty;
										
										echo $subtotal;

									?>
									
								</div>
								{{-- <div class="remove">
									<a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}" style="color: #2fce98;">x</a>
								</div> --}}
							</li>
						</ul>
								
					</div>
					@endforeach
					<!-- Cart Buttons -->
					<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
								
						<div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
							<div class="button button_clear trans_200"><a href="{{URL::to('/show-cart')}}">Edit cart</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		{{-- </div> --}}
		<form action="{{URL::to('/save-checkout-customer')}}" method="POST">
			{{csrf_field()}}
		<div class="checkout">
			<div class="container">
				<div class="row">
					
					<!-- Billing -->
					
					<div class="col-lg-6">
						<div class="billing">
							<div class="checkout_title">Billing</div>
							<div class="checkout_form_container">
								{{-- <form id="checkout_form" class="checkout_form" action="#"> --}}
								<div class="checkout_form">
									<div class="row">
										<div class="col-lg-6">
											<!-- Name -->
											<input type="text" name="firstName" id="firstName" class="checkout_input" placeholder="First Name" required="required">
										</div>
										<div class="col-lg-6">
											<!-- Last Name -->
											<input type="text" name="lastName" id="lastName" class="checkout_input" placeholder="Last Name" required="required">
										</div>
									</div>
									
									
									<div>
										<!-- Address -->
										
										<input type="text" name="Note_addressLine" id="Note_addressLine" class="checkout_input checkout_address_2" placeholder="Address Line" required="required">
									</div>
									
									<div>
										<!-- Province -->
										<select name="Note_province" id="Note_province" class="dropdown_item_select checkout_input choose province">
											<option>Province</option>
											@foreach($province as $key => $ci)
                                            	<option value="{{$ci->matp}}">{{$ci->name_province}}</option>
                                        	@endforeach
										</select>
									</div>
									<div>
										<!-- City / Town -->
										<select name="Note_district" id="Note_district" class="dropdown_item_select checkout_input district">
											<option>District</option>
											
										</select>
									</div>
									
									<div>
										<!-- Phone no -->
										<input type="phone" name="Note_phone" id="Note_phone" class="checkout_input" placeholder="Phone No." required="required">
									</div>
									<div>
										<!-- Email -->
										<input type="email" name="Note_email" id="Note_email" class="checkout_input" placeholder="Email" required="required">
									</div>
									<div>
										<!-- Email -->
										<input type="text" name="note_order" id="note_order" class="checkout_input" placeholder="Note" required="required">
									</div>
								</div>	
								{{-- </form> --}}
							</div>
						</div>
					</div>

					<!-- Cart Total -->
					
					<div class="col-lg-6 cart_col">
						<div class="cart_total">
							
								<div class="checkout_title">Cart Total</div>
								
								<ul class="cart_extra_total_list2">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Subtotal</div>
										<div class="cart_extra_total_value ml-auto">{{Cart::subtotal(0)}} VND</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Shipping</div>
										<div class="cart_extra_total_value ml-auto">35,000</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value ml-auto">
											
										
										<?php
											
											$total = $total + (int)$subtotal;
										
											echo number_format($total + 35000);

										?> VND
										</div>
									</li>
								</ul>
							
								<div class="payment_options">
									<div class="checkout_title">Payment</div>
									
									<ul>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" name="payment_option" class="payment_radio" value="1">
												<span class="radio_mark"></span>
												<span class="radio_text">Paypal</span>
											</label>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" name="payment_option" class="payment_radio" value="2" checked="checked">
												<span class="radio_mark"></span>
												<span class="radio_text">Cash on Delivery</span>
											</label>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" name="payment_option" class="payment_radio" value="3">
												<span class="radio_mark"></span>
												<span class="radio_text">Credit Card</span>
											</label>
										</li>
									</ul>
									
								</div>
								<div class="cart_text">
									<p></p>
									<p></p>
								</div>
								<div class="checkout_button1 trans_2001"><input type="submit" value="Place Order" name="dat_hang" class="checkout_button1 trans_200 input"></div>
								
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
		</form>
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
<script src="{{asset('public/frontend/LittleCloset/js/checkout.js')}}"></script>
<script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.form-validator.min.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            // alert(action);
            // alert(ma_id);
            if(action == 'Note_province'){
                result = 'Note_district';
            }else{
                result = '';
            }
            $.ajax({
                url : '{{url('/select-delivery')}}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                    $('#'+result).html(data);
                }
            });
        });
    });
</script>
</body>
</html>