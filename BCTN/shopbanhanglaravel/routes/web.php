<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//frontend
Route::get('/','App\Http\Controllers\HomeController@index'); 
Route::get('/trang-chu', 'App\Http\Controllers\HomeController@index') ;
Route::post('/tim-kiem', 'App\Http\Controllers\HomeController@tim_kiem') ;


//Danh muc SP trang chu
Route::get('/danhmucSP/{category_id}','App\Http\Controllers\CategoryProduct@show_category_home'); 
Route::get('/thuonghieuSP/{brand_id}','App\Http\Controllers\BrandProduct@show_brand_home'); 

Route::get('/chitietSP/{product_id}','App\Http\Controllers\ProductController@details_product');
//backend

Route::get('/admin', 'App\Http\Controllers\AdminController@index') ;
Route::get('/dashboard', 'App\Http\Controllers\AdminController@show_dashboard') ;
Route::post('admin-dashboard', 'App\Http\Controllers\AdminController@dashboard') ;
Route::get('logout', 'App\Http\Controllers\AdminController@logout') ;

//CategoryProduct
Route::get('/add-category-product', 'App\Http\Controllers\CategoryProduct@add_category_product') ;
Route::get('/all-category-product', 'App\Http\Controllers\CategoryProduct@all_category_product') ;

Route::post('/save-category-product', 'App\Http\Controllers\CategoryProduct@save_category_product') ;

Route::get('/unactive-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@unactive_category_product') ;
Route::get('/active-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@active_category_product') ;

Route::get('/edit-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@edit_category_product') ;
Route::get('/delete-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@delete_category_product') ;

Route::post('/update-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@update_category_product') ;


//BrandProduct
Route::get('/add-brand-product', 'App\Http\Controllers\BrandProduct@add_brand_product') ;
Route::get('/all-brand-product', 'App\Http\Controllers\BrandProduct@all_brand_product') ;

Route::post('/save-brand-product', 'App\Http\Controllers\BrandProduct@save_brand_product') ;

Route::get('/unactive-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@unactive_brand_product') ;
Route::get('/active-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@active_brand_product') ;

Route::get('/edit-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@edit_brand_product') ;
Route::get('/delete-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@delete_brand_product') ;

Route::post('/update-brand-product/{brand_brand_id}', 'App\Http\Controllers\BrandProduct@update_brand_product') ;
//size
Route::get('/add-size', 'App\Http\Controllers\SizeController@add_size') ;
Route::get('/all-size', 'App\Http\Controllers\SizeController@all_size') ;
Route::post('/save-size', 'App\Http\Controllers\SizeController@save_size') ;
Route::get('/unactive-size/{size_product_id}', 'App\Http\Controllers\SizeController@unactive_size') ;
Route::get('/active-size/{size_product_id}', 'App\Http\Controllers\SizeController@active_size') ;
Route::get('/edit-size/{size_product_id}', 'App\Http\Controllers\SizeController@edit_size') ;
Route::get('/delete-size/{size_product_id}', 'App\Http\Controllers\SizeController@delete_size') ;
Route::post('/update-size/{size_product_id}', 'App\Http\Controllers\SizeController@update_size') ;

//Product
Route::get('/add-product', 'App\Http\Controllers\ProductController@add_product') ;
Route::get('/all-product', 'App\Http\Controllers\ProductController@all_product') ;

Route::post('/save-product', 'App\Http\Controllers\ProductController@save_product') ;

Route::get('/unactive-product/{product_id}', 'App\Http\Controllers\ProductController@unactive_product') ;
Route::get('/active-product/{product_id}', 'App\Http\Controllers\ProductController@active_product') ;

Route::get('/edit-product/{product_id}', 'App\Http\Controllers\ProductController@edit_product') ;
Route::get('/delete-product/{product_id}', 'App\Http\Controllers\ProductController@delete_product') ;

Route::post('/update-product/{product_id}', 'App\Http\Controllers\ProductController@update_product') ;

//coupon
Route::post('/check-coupon', 'App\Http\Controllers\CartController@check_coupon') ;
Route::get('/insert-coupon', 'App\Http\Controllers\CouponController@insert_coupon') ;
Route::post('/save-coupon', 'App\Http\Controllers\CouponController@save_coupon') ;
Route::get('/all-coupon', 'App\Http\Controllers\CouponController@all_coupon') ;
Route::get('/delete-coupon/{coupon_id}', 'App\Http\Controllers\CouponController@delete_coupon') ;

//cart 
Route::post('/save-cart', 'App\Http\Controllers\CartController@save_cart') ;
Route::get('/show-cart', 'App\Http\Controllers\CartController@show_cart') ;
Route::get('/delete-to-cart/{rowId}', 'App\Http\Controllers\CartController@delete_to_cart') ;
Route::post('/update-cart-qty', 'App\Http\Controllers\CartController@update_cart_qty') ;
//ajax_cart
Route::post('/add-cart-ajax', 'App\Http\Controllers\CartController@add_cart_ajax') ;
Route::get('/gio-hang', 'App\Http\Controllers\CartController@gio_hang') ;

//checkout
Route::get('/index', 'App\Http\Controllers\CheckoutController@index') ;
Route::get('/login-checkout', 'App\Http\Controllers\CheckoutController@login_checkout') ;
Route::get('/logout-checkout', 'App\Http\Controllers\CheckoutController@logout_checkout') ;
Route::post('/add-customer', 'App\Http\Controllers\CheckoutController@add_customer') ;
Route::get('/Checkout', 'App\Http\Controllers\CheckoutController@Checkout') ;
Route::post('/save-checkout-customer', 'App\Http\Controllers\CheckoutController@save_checkout_customer') ;
Route::post('/select-delivery', 'App\Http\Controllers\CheckoutController@select_delivery') ;


Route::post('/login-customer', 'App\Http\Controllers\CheckoutController@login_customer') ;
Route::get('/payment', 'App\Http\Controllers\CheckoutController@payment') ;
Route::post('/order-place', 'App\Http\Controllers\CheckoutController@order_place') ;

//manage order
Route::get('/manage-order', 'App\Http\Controllers\CheckoutController@manage_order') ;
Route::get('/view-order/{orderId}', 'App\Http\Controllers\CheckoutController@view_order') ;
Route::get('/delete-order/{orderId}', 'App\Http\Controllers\CheckoutController@delete_order') ;

//send mail
Route::get('/send-mail', 'App\Http\Controllers\HomeController@send_mail') ;

//Login facebook
Route::get('/login-facebook','App\Http\Controllers\AdminController@login_facebook');
Route::get('/admin/callback','App\Http\Controllers\AdminController@callback_facebook');

//language
Route::get('/language/{language}','App\Http\Controllers\Language@language');
