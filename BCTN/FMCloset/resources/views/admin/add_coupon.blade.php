@extends('admin_layout')
@section('admin_content')


<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Coupon
                        </header>
                        {{-- <?php
						$message = Session::get('message');
						if($message){
							echo $message;
							Session::put('message', null);
						}
						?> --}}
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-coupon')}}" method="post" >
                                	@csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Coupon Name</label>
                                    <input type="text" name="coupon_name" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Code</label>
                                    <input type="text" name="coupon_code" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quantity</label>
                                    <input type="text" name="qty_coupon" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Discount Method</label>
                                    <select name="coupon_condition" class="form-control input-sm m-bot15">
                                        <option>Select the type of discount</option>
                                        <option value="0">Discount as a percentage</option>
                                        <option value="1">Discounts according to the amount</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Total discount</label>
                                    <input type="text" name="total_discount" class="form-control" id="exampleInputEmail1" >
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputPassword1">Mã</label>
                                    <textarea style="resize: none" rows="5" class="form-control" name="category_product_des" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                    <select name="category_product_status" class="form-control input-sm m-bot15">
		                                <option value="0">Hiển thị</option>
		                                <option value="1">Ẩn</option>
		                            </select>
                                </div> --}}
                                <button type="submit" name="add_coupon" class="btn btn-info">Add Coupon</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>

@endsection