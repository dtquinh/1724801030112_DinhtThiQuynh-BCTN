<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class SizeController extends Controller
{
    public function CheckLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else {
            return Redirect::to('admin')->send();
        }
    }
    public function add_size(){
        $this->CheckLogin();
    	return view('admin.add_size');
    }

    public function all_size(){
        $this->CheckLogin();
    	$all_size = DB::table('tbl_size')->get();
    	$manager_size = view('admin.all_size')->with('all_size', $all_size);
    	return view('admin_layout')->with('admin.all_size', $manager_size);
    }

    public function save_size(Request $request){
        $this->CheckLogin();
    	$data = array();
    	$data['size_name'] = $request->category_product_name;
    	$data['size_des'] = $request->category_product_des;
    	$data['size_status'] = $request->category_product_status;

    	DB::table('tbl_size')->insert($data);
    	Session::put('message','Thêm thành công');
    	return Redirect::to('all-size');

    }

    public function unactive_size($size_product_id){
        $this->CheckLogin();
        DB::table('tbl_size')->where('size_id', $size_product_id)->update(['size_status'=>1]);
        Session::put('message', 'Không kích hoạt danh mục sản phẩm');
        return Redirect::to('all-size');
    }

    public function active_size($size_product_id){
        $this->CheckLogin();
        DB::table('tbl_size')->where('size_id', $size_product_id)->update(['size_status'=>0]);
        Session::put('message', 'Kích hoạt danh mục sản phẩm');
        return Redirect::to('all-size');
    }

    public function edit_size($size_product_id){
        $this->CheckLogin();
        $edit_size = DB::table('tbl_size')->where('size_id', $size_product_id)->get();
        $manager_size = view('admin.edit_size')->with('edit_size', $edit_size);
        return view('admin_layout')->with('admin.edit_size', $manager_size);
    }

    public function update_size(Request $request, $size_product_id){
        $this->CheckLogin();
        $data = array();
        $data['size_name'] = $request->size_product_name;
        $data['size_des'] = $request->size_product_des;
        DB::table('tbl_size')->where('size_id', $size_product_id)->update($data);
        Session::put('message_up_size', 'Cập nhật Size thành công');
        return Redirect::to('all-size');

    }

    public function delete_size($size_product_id){
        $this->CheckLogin();
        DB::table('tbl_size')->where('size_id', $size_product_id)->delete();
        Session::put('message_del_size', 'Xóa thành công');
        return Redirect::to('all-size');
    }

    // end function admin page

    // public function show_brand_home($brand_id){
    //     $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

    //     $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

    //     $brand_by_id = DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')->where('tbl_brand.brand_id',$brand_id)->get();

    //     $brand_name = DB::table('tbl_brand')->where('tbl_brand.brand_id',$brand_id)->limit(1)->get();

    //     return view('pages.brand.show_brand')->with('category', $cate_product)->with('brand', $brand_product)->with('brand_by_id',$brand_by_id)->with('brand_name',$brand_name);

    // }
}