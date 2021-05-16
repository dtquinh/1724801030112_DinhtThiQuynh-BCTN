@extends('admin_layout')
@section('admin_content')


<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            update product catalog
                        </header>
                        {{-- <?php
						$message = Session::get('message');
						if($message){
							echo $message;
							Session::put('message', null);
						}
						?>
 --}}                        <div class="panel-body">
                            @foreach($edit_category_product as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post" >
                                	{{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category name</label>
                                    <input type="text" value="{{$edit_value->category_name}}" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea style="resize: none" rows="5" class="form-control" name="category_product_des" id="exampleInputPassword1"> {{$edit_value->category_des}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Display</label>
                                    <select name="category_product_status" class="form-control input-sm m-bot15">
                                        <option value="0">Yes</option>
                                        <option value="1">No</option>
                                    </select>
                                </div>
                                <button type="submit" name="update_category_product" class="btn btn-info">Update Category</button>
                            </form>
                            </div>
                            @endforeach

                        </div>
                    </section>

            </div>
        </div>

@endsection