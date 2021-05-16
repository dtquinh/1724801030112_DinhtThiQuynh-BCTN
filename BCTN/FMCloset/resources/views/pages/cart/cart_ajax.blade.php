@extends('layout')
@section('content')

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang Chủ</a></li>
				  <li class="active">Giỏ hàng của bạn</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản Phẩm</td>
							<td class="description"></td>
							<td class="price">Giá</td>
							<td class="quantity">Số Lượng</td>
							<td class="total">Tổng Tiền</td>
							<td> </td>
							
						</tr>
					</thead>
					<tbody>
						{{-- @foreach($content as $v_content)
						@endforeach --}}
						@php
							print_r(Session::get('cart'));
						@endphp
						<tr>
							<td class="cart_product">
								<a href=""><img src="" width="100" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""></a></h4>
								<p>Mã Sản Phẩm : </p>
							</td>
							<td class="cart_price">
								<p>/p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="" method="post">
										
									<input class="cart_quantity_input" type="text" name="cart_quantity" value="">
									<input type="hidden"value="" name="rowId_cart" class="form-control">
									<input type="submit"value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">

								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>	
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Tổng Tiền <span></span></li>
							<li>Thuế <span></span></li>
							<li>Phí Vận Chuyển <span>Free</span></li>
							<li>Thành Tiền <span></span></li>
						</ul>
						
							

                                <a class="btn btn-default check_out" href="">Thanh Toán</a>

                                
							
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
@endsection