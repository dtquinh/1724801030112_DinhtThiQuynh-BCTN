<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class ProductController extends Controller
{
    public function CheckLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else {
            return Redirect::to('admin')->send();
        }
    }
    public function add_product(){
        $this->CheckLogin();
    	$cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
    	$brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();
        return view('admin.add_product')->with('cate_product', $cate_product)->with('brand_product', $brand_product);
    }

    public function all_product(){
        $this->CheckLogin();
    	$all_product = DB::table('tbl_product')
    	->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
    	->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->orderby('tbl_product.product_id','DESC')->get();
    	$manager_product = view('admin.all_product')->with('all_product', $all_product);
    	return view('admin_layout')->with('admin.all_product', $manager_product);
    }

    public function save_product(Request $request){
        $this->CheckLogin();
    	$data = array();
    	$data['product_name'] = $request->product_name;
    	$data['product_price'] = $request->product_price;
    	$data['product_des'] = $request->product_des;
    	// $data['product_content'] = $request->product_content;
    	$data['category_id'] = $request->product_cate;
    	$data['brand_id'] = $request->product_brand;
    	$data['product_status'] = $request->product_status;
    	$get_image  = $request->file('product_image');
        $get_image1  = $request->file('product_image1');
        $get_image2  = $request->file('product_image2');
        $get_image3  = $request->file('product_image3');
    	if($get_image&&$get_image1&&$get_image2&&$get_image3){
    		$get_name_image = $get_image->getClientOriginalName();
    		$name_image = current((explode('.', $get_name_image)));
    		$new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
    		$get_image->move('public/uploads/product',$new_image);
    		$data['product_image'] = $new_image;

            $get_name_image1 = $get_image1->getClientOriginalName();
            $name_image1 = current((explode('.', $get_name_image1)));
            $new_image1 = $name_image1.rand(0,99).'.'.$get_image1->getClientOriginalExtension();
            $get_image1->move('public/uploads/product',$new_image1);
            $data['product_image1'] = $new_image1;

            $get_name_image2 = $get_image2->getClientOriginalName();
            $name_image2 = current((explode('.', $get_name_image2)));
            $new_image2 = $name_image2.rand(0,99).'.'.$get_image2->getClientOriginalExtension();
            $get_image2->move('public/uploads/product',$new_image2);
            $data['product_image2'] = $new_image2;

            $get_name_image3 = $get_image3->getClientOriginalName();
            $name_image3 = current((explode('.', $get_name_image3)));
            $new_image3 = $name_image3.rand(0,99).'.'.$get_image3->getClientOriginalExtension();
            $get_image3->move('public/uploads/product',$new_image3);
            $data['product_image3'] = $new_image3;

    		DB::table('tbl_product')->insert($data);
	    	Session::put('message','Add product successfully');
	    	return Redirect::to('all-product');
    	}
    	// $data['product_image'] = '';

    	DB::table('tbl_product')->insert($data);
    	Session::put('message','Add product successfully');
    	return Redirect::to('all-product');

    }

    public function unactive_product($product_id){
        $this->CheckLogin();
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status'=>1]);
        Session::put('message', 'Dont activate the product');
        return Redirect::to('Product activation');
    }

    public function active_product($product_id){
        $this->CheckLogin();
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status'=>0]);
        Session::put('message', 'Product activation');
        return Redirect::to('all-product');


    }

    public function edit_product($product_id){
        $this->CheckLogin();
    	$cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
    	$brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();
        $edit_product = DB::table('tbl_product')->where('product_id', $product_id)->get();
        $manager_product = view('admin.edit_product')->with('edit_product', $edit_product)->with('cate_product', $cate_product)->with('brand_product', $brand_product);
        return view('admin_layout')->with('admin.edit_product', $manager_product);
    }

    public function update_product(Request $request, $product_id){
        $this->CheckLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
    	$data['product_price'] = $request->product_price;
    	$data['product_des'] = $request->product_des;
    	 
    	$data['category_id'] = $request->product_cate;
    	$data['brand_id'] = $request->product_brand;
    	$data['product_status'] = $request->product_status;
    	$get_image = $request->file('product_image');
        $get_image1  = $request->file('product_image1');
        $get_image2  = $request->file('product_image2');
        $get_image3  = $request->file('product_image3');

        if($get_image&&$get_image1&&$get_image2&&$get_image3){
    		$get_name_image = $get_image->getClientOriginalName();
    		$name_image = current((explode('.', $get_name_image)));
    		$new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
    		$get_image->move('public/uploads/product',$new_image);
    		$data['product_image'] = $new_image;

            $get_name_image1 = $get_image1->getClientOriginalName();
            $name_image1 = current((explode('.', $get_name_image1)));
            $new_image1 = $name_image1.rand(0,99).'.'.$get_image1->getClientOriginalExtension();
            $get_image1->move('public/uploads/product',$new_image1);
            $data['product_image1'] = $new_image1;

            $get_name_image2 = $get_image2->getClientOriginalName();
            $name_image2 = current((explode('.', $get_name_image2)));
            $new_image2 = $name_image2.rand(0,99).'.'.$get_image2->getClientOriginalExtension();
            $get_image2->move('public/uploads/product',$new_image2);
            $data['product_image2'] = $new_image2;

            $get_name_image3 = $get_image3->getClientOriginalName();
            $name_image3 = current((explode('.', $get_name_image3)));
            $new_image3 = $name_image3.rand(0,99).'.'.$get_image3->getClientOriginalExtension();
            $get_image3->move('public/uploads/product',$new_image3);
            $data['product_image3'] = $new_image3;

    		DB::table('tbl_product')->where('product_id', $product_id)->update($data);
	    	Session::put('message_up_pro','Successful product update');
	    	return Redirect::to('all-product');
    	}
    	//$data['product_image'] = '';

    	DB::table('tbl_product')->where('product_id', $product_id)->update($data);
    	Session::put('message_up_pro','Successful product update');
    	return Redirect::to('all-product');
    }

    public function delete_product($product_id){
        $this->CheckLogin();
        DB::table('tbl_product')->where('product_id', $product_id)->delete();
        Session::put('message_del_pro', 'Product deleted successfully');
        return Redirect::to('all-product');
    }

    //end admin page
    public function details_product(Request $request, $product_id){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $size_product =  DB::table('tbl_size')->where('size_status','0')->orderby('size_id','desc')->get();
        $details_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->where('tbl_product.product_id',$product_id)->get();

        foreach($details_product as $key => $value){
            $category_id = $value->category_id;
        }

        $related_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->where('tbl_category_product.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id])->get();

        return view('pages.SP.show_details')->with('category', $cate_product)->with('brand', $brand_product)->with('product_details', $details_product)->with('size', $size_product)->with('relate', $related_product);
    }
}
