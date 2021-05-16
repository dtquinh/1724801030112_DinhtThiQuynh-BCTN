<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Cart;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
use App\Models\Province;
use App\Models\District;
use App\Models\wards;
session_start();

class CheckoutController extends Controller
{
    public function index(Request $request){

        /*$data = $request->all();
        $customer_email = $data['customer_email'];
        $customer_password = md5($data['customer_password']);
        $login = Login::where('customer_email', $customer_email)
        ->where('customer_password', $customer_password)->first();
        $login_count = $login->count();

        if ($login_count) {
            Session::put('customer_name', $login->customer_name);
            Session::put('customer_id', $login->customer_id);
            return Redirect::to('/index');
        }else{
            Session::put('message','Tài khoản hoặc Mật khẩu không đúng. Vui lòng nhập lại');
            return Redirect::to('/login_checkout');
        } */  

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->orderby('tbl_product.product_id')->limit(12)->get();
        // $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(6)->get();
        return view ('pages.home')->with('category', $cate_product)->with('brand', $brand_product)->with('all_product', $all_product);
    }
    public function CheckLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else {
            return Redirect::to('admin')->send();
        }
    }
    public function login_checkout(Request $request){

    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
    	$brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

    	return view('pages.checkout.login_checkout')->with('category', $cate_product)->with('brand', $brand_product);
    }

    public function add_customer(Request $request){
    	$data = array();
    	$data['customer_name'] = $request->customer_name;
    	$data['customer_email'] = $request->customer_email;
    	$data['customer_password'] = md5($request->customer_password);
    	$data['customer_phone'] = $request->customer_phone;

    	$customer_id = DB::table('tbl_customer')->insertGetId($data);
    	Session::put('customer_id', $customer_id);
    	Session::put('customer_name', $request->customer_name);
    	//Session::put('customer_name', $request->customer_password);
    	return Redirect('/index');

    }

    public function Checkout(){
    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
    	$brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $province = Province::orderby('matp','ASC')->get();


    	return view('pages.checkout.Checkout')->with('category', $cate_product)->with('brand', $brand_product)->with(compact('province'));
    }

    // public function save_checkout_customer(Request $request){
    // 	$data = array();
    // 	$data['firstName'] = $request->firstName;
    //     $data['lastName'] = $request->lastName;
    //     $data['Note_addressLine'] = $request->Note_addressLine;
    //     $data['Note_district'] = $request->Note_district;
    //     $data['Note_province'] = $request->Note_province;
    //     $data['Note_phone'] = $request->Note_phone;
    //     $data['Note_email'] = $request->Note_email;
    //     $data['note_order'] = $request->note_order;

    // 	$Note_id = DB::table('tbl_ghichu')->insertGetId($data);
    // 	Session::put('Note_id', $Note_id);
    	
    // 	return view('pages.checkout.TT_tienmat');
    // }

    // public function order_place(Request $request){
    //     //insert payment method
    //     $data = array();
    //     $data['payment_method'] = $request->payment_option;
    //     $data['payment_status'] = 'Đang xử lý';
    //     $payment_id = DB::table('tbl_payment')->insertGetId($data);

    //     //insert order
    //     $od_data = array();
    //     $od_data['customer_id'] = Session::get('customer_id');
    //     $od_data['Note_id'] = Session::get('Note_id');
    //     $od_data['payment_id'] = $payment_id;
    //     $od_data['order_total'] = Cart::total();
    //     $od_data['order_status'] = 'Đơn hàng đang chờ xử lý';
    //     $order_id = DB::table('tbl_order')->insertGetId($od_data);
        
    //     //insert order details
    //     $content = Cart::content();
    //     foreach($content as $v_content){

    //     $de_data = array();
    //     $de_data['order_id'] = $order_id;
    //     $de_data['product_id'] = $v_content->id;
    //     $de_data['product_name'] = $v_content->name;
    //     $de_data['product_price'] = $v_content->price;
    //     $de_data['product_qty'] = $v_content->qty;
    //     DB::table('tbl_order_details')->insert($de_data);
    //     }
        
    //     if($data['payment_method'] == 1){
    //         echo 'Chuyển Khoản';
    //     }elseif($data['payment_method'] == 2){
    //         Cart::destroy();

    //         $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
    //         $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

    //         return view('pages.checkout.TT_tienmat')->with('category', $cate_product)->with('brand', $brand_product);
    //     } else{
    //         echo 'Ví Điện Tử';
    //     }
        
    //     //return Redirect('/order_place');
    // }

    public function save_checkout_customer(Request $request){
       
        $data = array();

        $data['firstName'] = $request->firstName;
        $data['lastName'] = $request->lastName;
        $data['Note_addressLine'] = $request->Note_addressLine;
        $data['Note_district'] = $request->Note_district;
        $data['Note_province'] = $request->Note_province;
        $data['Note_phone'] = $request->Note_phone;
        $data['Note_email'] = $request->Note_email;
        $data['note_order'] = $request->note_order;

        $Note_id = DB::table('tbl_ghichu')->insertGetId($data);
        Session::put('Note_id', $Note_id);

        $pay_data = array();
        $pay_data['payment_method'] = $request->payment_option;
        $pay_data['payment_status'] = 'Đang xử lý';
        $payment_id = DB::table('tbl_payment')->insertGetId($pay_data);

        //insert order
        $od_data = array();
        $od_data['customer_id'] = Session::get('customer_id');
        $od_data['Note_id'] = Session::get('Note_id');
        $od_data['payment_id'] = $payment_id;
        $od_data['order_total'] = Cart::total();
        $od_data['order_status'] = 'Đơn hàng đang chờ xử lý';
        $order_id = DB::table('tbl_order')->insertGetId($od_data);
        
        //insert order details
        $content = Cart::content();
        foreach($content as $v_content){

        $de_data = array();
        $de_data['order_id'] = $order_id;
        $de_data['product_id'] = $v_content->id;
        $de_data['product_name'] = $v_content->name;
        $de_data['product_price'] = $v_content->price;
        $de_data['product_qty'] = $v_content->qty;
        DB::table('tbl_order_details')->insert($de_data);
        }
        
        if($pay_data['payment_method'] == 1){
            echo 'Paypal';
        }elseif($pay_data['payment_method'] == 2){
            Cart::destroy();

            $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
            $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

            return view('pages.checkout.TT_tienmat')->with('category', $cate_product)->with('brand', $brand_product);
        } else{
            echo 'Credit Card';
        }

        
    }

    public function payment(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        return view('pages.checkout.payment')->with('category', $cate_product)->with('brand', $brand_product);
    }

    

    public function logout_checkout(){
    	Session::flush();
    	return Redirect('/login-checkout');	
    }

    public function login_customer(Request $request){
    	$email = $request->email_account;
    	$password = md5($request->password_account);
    	$result = DB::table('tbl_customer')->where('customer_email',$email)->where('customer_password',$password)->first();

    	if($result){
    		Session::put('customer_id', $result->customer_id);
    		return Redirect('/index');
    	}else{
    		return Redirect('/login_checkout');
    	}
    }
    public function manage_order(){
        $this->CheckLogin();
        $all_order = DB::table('tbl_order')
        ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
        ->select('tbl_order.*', 'tbl_customer.customer_name')
        ->orderby('tbl_order.order_id', 'desc')->get();
        $manager_order = view('admin.manage_order')->with('all_order', $all_order);
        return view('admin_layout')->with('admin.manage_order', $manager_order);
    }

    public function view_order($orderId){
        $this->CheckLogin();
        $order_by_id = DB::table('tbl_order')
        ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
        ->join('tbl_ghichu','tbl_order.Note_id','=','tbl_ghichu.Note_id')
        ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
        ->select('tbl_order.*', 'tbl_customer.*', 'tbl_ghichu.*', 'tbl_order_details.*')->first();


        $manager_order_by_id = view('admin.view_order')->with('order_by_id', $order_by_id);
        return view('admin_layout')->with('admin.manage_order', $manager_order_by_id);
    }
    
    public function delete_order($orderId){
        $this->CheckLogin();
        DB::table('tbl_order')->where('order_id', $orderId)->delete();
        Session::put('Message', 'Xóa thành công');
        return Redirect::to('/manage-order');
    }

    public function select_delivery(Request $request){
        $data = $request->all();
        if($data['action']){
            $output = '';
            if($data['action']=="Note_province"){
                $select_district = District::where('matp',$data['ma_id'])->orderby('maqh','ASC')->get();
                    $output.='<option> District</option>';
                foreach($select_district as $key => $district){
                    $output.='<option value="'.$district->maqh.'">'.$district->name_district.'</option>';
                }

            }else{
                $output.='<option> None</option>';
            }
            echo $output;
        }
    }
}
