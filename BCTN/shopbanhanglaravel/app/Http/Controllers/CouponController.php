<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class CouponController extends Controller
{
	public function CheckLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else {
            return Redirect::to('admin')->send();
        }
    }

    public function insert_coupon(){
    	$this->CheckLogin();
    	return view('admin.add_coupon');
    }

    public function save_coupon(Request $request){
    	$this->CheckLogin();
    	$data = $request->all();
    	$coupon = new Coupon;

    	$coupon->coupon_name = $data['coupon_name'];
    	$coupon->coupon_code = $data['coupon_code'];
    	$coupon->qty_coupon = $data['qty_coupon'];
    	$coupon->coupon_condition = $data['coupon_condition'];
    	$coupon->total_discount = $data['total_discount'];
    	$coupon->save();

    	Session::put('message','Add Coupon Success');
    	return Redirect::to('all-coupon');
    }

    public function all_coupon(){
    	$this->CheckLogin();
    	$coupon = Coupon::orderby('coupon_id','DESC')->get();
    	// $all_coupon = DB::table('tbl_coupon')->get();
    	// $manager_coupon = view('admin.all_coupon')->with('all_coupon', $all_coupon);
    	// return view('admin_layout')->with('admin.all_coupon', $manager_coupon);
    	return view('admin.all_coupon')->with(compact('coupon'));
    }

    

    public function delete_coupon($coupon_id){
        $this->CheckLogin();
        DB::table('tbl_coupon')->where('coupon_id', $coupon_id)->delete();
        Session::put('message_del_coupon', 'Delete Successfull');
        return Redirect::to('all-coupon');
    }
}
