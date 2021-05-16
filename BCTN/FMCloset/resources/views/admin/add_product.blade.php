@extends('admin_layout')
@section('admin_content')


<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add product
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-product	')}}" method="post" enctype="multipart/form-data">
                                	{{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product name</label>
                                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image</label>
                                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" >
                                    <input type="file" name="product_image1" class="form-control" id="exampleInputEmail1" >
                                    <input type="file" name="product_image2" class="form-control" id="exampleInputEmail1" >
                                    <input type="file" name="product_image3" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea style="resize: none" rows="5" class="form-control" name="product_des" id="ckeditor1" placeholder="Mô tả danh mục"></textarea>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                    <textarea style="resize: none" rows="5" class="form-control" name="product_content" id="exampleInputPassword1" placeholder="Mô tả nội dung sản phẩm"></textarea>
                                </div> --}}
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category</label>
                                    <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Brand</label>
                                    <select name="product_brand" class="form-control input-sm m-bot15">
                                        @foreach($brand_product as $key => $brand)
                                        <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Status</label>
                                    <select name="product_status" class="form-control input-sm m-bot15">
		                                <option value="0">Stocking</option>
		                                <option value="1">Out of stock</option>
		                            </select>
                                </div>
                                <button type="submit" name="add_product" class="btn btn-info">Add Product</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>

@endsection