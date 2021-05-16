@extends('admin_layout')
@section('admin_content')


<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật danh mục Size sản phẩm
                        </header>
                        {{-- <?php
						$message = Session::get('message');
						if($message){
							echo $message;
							Session::put('message', null);
						}
						?> --}}
                        <div class="panel-body">
                            @foreach($edit_size as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-size/'.$edit_value->size_id)}}" method="post" >
                                	{{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Size</label>
                                    <input type="text" value="{{$edit_value->size_name}}" name="size_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Size">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả Size</label>
                                    <textarea style="resize: none" rows="5" class="form-control" name="size_product_des" id="exampleInputPassword1"> {{$edit_value->size_des}}</textarea>
                                </div>
                                <button type="submit" name="update_brand_product" class="btn btn-info">Cập nhật</button>
                            </form>
                            </div>
                            @endforeach

                        </div>
                    </section>

            </div>
        </div>

@endsection