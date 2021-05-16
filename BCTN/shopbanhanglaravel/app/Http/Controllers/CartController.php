<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;
use App\Models\Coupon;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();
class CartController extends Controller
{
    public function gio_hang(Request $request){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        return view('pages.cart.cart_ajax')->with('category', $cate_product)->with('brand', $brand_product);
    }

    public function check_coupon(Request $request){
        $data = $request->all();
        $coupon = Coupon::where('coupon_code',$data['coupon'])->first();
        if ($coupon) {
            $count_coupon = $coupon->count();
            if ($count_coupon>0) {
                $coupon_session = Session::get('coupon');
                if($coupon_session==true){
                    $is_avaiable = 0;
                    if($is_avaiable==0){
                        $cp[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_condition' => $coupon->coupon_condition,
                            'total_discount' => $coupon->total_discount,

                        );
                        Session::put('coupon',$cp);
                    }
                }else{
                    $cp[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_condition' => $coupon->coupon_condition,
                            'total_discount' => $coupon->total_discount,

                        );
                    Session::put('coupon',$cp);
                }
                Session::save();
                return redirect()->back()->with('message','Applied');
            }

        }else{
            return redirect()->back()->with('message','Coupon code is not correct');
        }
    }

    public function add_cart_ajax(Request $request){
            $data = $request->all();
            print_r(data);
    //     $session_id = substr(mad5(microtime()),rand(0,26),5);
    //     $cart = Session::get('cart');
    //     if($cart==true){
    //         $is_available =0;
    //         foreach ($cart as $key => $val) {
    //             if($val['product_id']==$data['product_id']){
    //                 $is_available++;
    //             }
    //         }
    //         if($is_available = 0){
    //             $cart[] = array(
    //             'session_id' => $session_id,
    //             'product_name' => $data['cart_product_name'],
    //             'product_id' => $data['cart_product_id'],
    //             'product_image' => $data['cart_product_image'],
    //             'product_qty' => $data['cart_product_qty'],
    //             'product_price' => $data['cart_product_price'],
    //             );
    //             Session::put('cart',$cart);
    //         }
    //     }else{
    //         $cart[] = array(
    //             'session_id' => $session_id,
    //             'product_name' => $data['cart_product_name'],
    //             'product_id' => $data['cart_product_id'],
    //             'product_image' => $data['cart_product_image'],
    //             'product_qty' => $data['cart_product_qty'],
    //             'product_price' => $data['cart_product_price'],
    //         );
            
    //     }
    //     Session::put('cart',$cart);
    //     Session::save();
    }

    public function save_cart(Request $request){
    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
    	$brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        
    	$productID = $request->productid_hidden;
    	$quantity = $request->qty;

    	$product_info = DB::table('tbl_product')->where('product_id', $productID)->first();

    	$data['id'] = $product_info->product_id;
    	$data['qty'] = $quantity;
    	$data['name'] = $product_info->product_name;
    	$data['price'] = $product_info->product_price;
    	$data['weight'] = '56';
    	$data['options']['image'] = $product_info->product_image;
        //insert size
        // $data = array();
        // $data['option_size'] = $request->size_name;
        // $size_id  = DB::table('tbl_size')->insertGetId($data);
        // if ($data['option_size']) {
        //     # code...
        // }
    	Cart::add($data);
    	return Redirect::to('/show-cart');

    	return view('pages.cart.show_cart')->with('category', $cate_product)->with('brand', $brand_product);
        //Cart::destroy();
    }

    public function show_cart(){
    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
    	$brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

    	return view('pages.cart.show_cart')->with('category', $cate_product)->with('brand', $brand_product);
    }

    public function delete_to_cart($rowId){
    	Cart::update($rowId,0);
    	return Redirect::to('/show-cart');
    }

    public function update_cart_qty(Request $request){
    	$rowId = $request->rowId_cart;
    	$qty = $request->cart_quantity;

    	Cart::update($rowId,$qty);
    	return Redirect::to('/show-cart');
    }
}
