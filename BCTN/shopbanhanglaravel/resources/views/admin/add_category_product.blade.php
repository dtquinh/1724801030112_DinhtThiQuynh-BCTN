@extends('admin_layout')
@section('admin_content')


<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            add product catalog
                        </header>
                        {{-- <?php
						$message = Session::get('Message');
						if($message){
							echo $message;
							Session::put('message', null);
						}
						?> --}}
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-category-product	')}}" method="post" >
                                	{{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category name</label>
                                    <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea style="resize: none" rows="5" class="form-control" name="category_product_des" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Display</label>
                                    <select name="category_product_status" class="form-control input-sm m-bot15">
		                                <option value="0">Yes</option>
		                                <option value="1">No</option>
		                            </select>
                                </div>
                                <button type="submit" name="add_category_product" class="btn btn-info">Add Category</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>

@endsection