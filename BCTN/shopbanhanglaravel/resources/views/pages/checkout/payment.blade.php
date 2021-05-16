@extends('layout')
@section('content')

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang Chủ</a></li>
				  <li class="active">Thanh Toán Giỏ Hàng</li>
				</ol>
			</div>
			<div class="review-payment">
				<h2>Xem Lại Giỏ Hàng</h2>
			</div>

			<div class="table-responsive cart_info">
				<?php
				$content = Cart::content();
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản Phẩm</td>
							<td class="description"></td>
							<td class="price">Giá</td>
							<td class="quantity">Số Lượng</td>
							<td class="total">Tổng Tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $v_content)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" width="100" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_content->name}}</a></h4>
								<p>Mã Sản Phẩm : {{$v_content->id}}</p>
							</td>
							<td class="cart_price">
								<p>{{$v_content->price}} VNĐ</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{URL::to('/update-cart-qty')}}" method="post">
										{{csrf_field()}}
									<input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}">
									<input type="hidden"value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
									<input type="submit"value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
								<?php
									$subtotal  = $v_content->price * $v_content->qty;
									echo $subtotal;
								?>
								 VNĐ</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>	
						@endforeach
					</tbody>
				</table>
			</div>
			<h4 style="margin: 40px 0; font-size: 20px;">Chọn Hình Thức Thanh Toán</h4>
			<form method="post" action="{{URL::to('/order-place')}}">
				{{csrf_field()}}
			<div class="payment-options">
					<span>
						<label><input name="payment_option" value="1" type="checkbox"> Chuyển Khoản</label>
					</span>
					<span>
						<label><input name="payment_option" value="2" type="checkbox"> Thanh Toán Khi Nhận hàng</label>
					</span>
					<span>
						<label><input name="payment_option" value="3" type="checkbox"> Ví Điện Tử</label>
					</span>

					<input type="submit" value="Đặt Hàng" name="dat_hang" class="btn btn-primary btn-sm">
			</div>
			</form>
		</div>
</section> <!--/#cart_items-->

@endsection