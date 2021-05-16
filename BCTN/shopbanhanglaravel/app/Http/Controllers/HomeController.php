<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Mail;
use Illuminate\support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    public function index(Request $request){
    

    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
    	$brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
    	$all_product = DB::table('tbl_product')
    	->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
    	->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->orderby('tbl_product.product_id','DESC')->limit(12)->get();
    	// $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(12)->get();
    	return view ('pages.home')->with('category', $cate_product)
        ->with('brand', $brand_product)->with('all_product', $all_product);

        
        //->with('meta_desc', $meta_desc)->with('meta_keywork', $meta_keywork)->with('meta_title', $meta_title)->with('url_canonical', $url_canonical);
    } 

    public function tim_kiem(Request $request){
    	$tukhoa = $request->tukhoa_submit;
    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
    	$brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
    	// $all_product = DB::table('tbl_product')
    	// ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
    	// ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->orderby('tbl_product.product_id')->get();

    	$search_product = DB::table('tbl_product')->where('product_name','like','%'.$tukhoa.'%')->get();
    	return view ('pages.SP.search')->with('category', $cate_product)->with('brand', $brand_product)->with('search_product',$search_product);
    }

    public function send_mail(){
        $to_name = "Test mail laravel";
        $to_email = "dinhquynhqh@gmail.com";//send to this email
        
        $data = array("name"=>"FMstyle Shop","body"=>"XÁC NHẬN ĐƠN HÀNG - A12FG"); //body of mail.blade.php
            
        Mail::send('pages.sendmail',$data,function($message) use ($to_name,$to_email){
            $message->to($to_email)->subject('test mail laravel');//send this mail with subject
            $message->from($to_email,$to_name);//send from this mail
        });

        return redirect('/')->with('message','Mail đã được gửi thành công');

    }
}
