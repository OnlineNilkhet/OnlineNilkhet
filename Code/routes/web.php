<?php

use Illuminate\support\Facades\Input;

use App\User;

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

//Frontend site
Route::get('/', 'HomeController@index');
Route::post('/search' , 'HomeController@search');
Route::get('/suggestion' , 'HomeController@suggestion');

//show category wise product here
Route::get('/product_by_category/{category_id}','HomeController@show_product_by_category');
Route::get('/product_by_vendor/{vendor_id}','HomeController@show_product_by_vendor');
Route::get('/view_product/{book_id}','HomeController@product_details_by_id');

//customer dashboard
Route::get('/customer-dashboard', 'HomeController@customer_dashboard');

//cart routes are here
Route::post('/add-to-cart','CartController@add_to_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::post('/update-cart','CartController@update_cart');

//checkout routes are here
Route::get('/login-check','CheckoutController@login_check');
Route::post('/customer_registration','CheckoutController@customer_registration');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-shipping-details','CheckoutController@save_shipping_details');

//manage order
Route::get('/manage-order','CheckoutController@manage_order');
Route::get('/view-order/{order_id}','CheckoutController@view_order');

//customer login and logout
Route::get('/customer-logout','CheckoutController@customer_logout');
Route::post('/customer_login','CheckoutController@customer_login');
Route::get('/payment','CheckoutController@payment');
Route::post('/order-place','CheckoutController@order_place');

//Backend routes
Route::get('/logout','SuperVendorController@logout');
Route::get('/vendor', 'VendorController@index');
Route::get('/dashboard', 'SuperVendorController@index');
Route::post('/vendor-dashboard', 'VendorController@dashboard');

//category related route
Route::get('/add-category','CategoryController@index');
Route::get('/all-category','CategoryController@all_category');
Route::post('/save-category','CategoryController@save_category');
Route::get('/unactive-category/{category_id}','CategoryController@unactive_category');
Route::get('/active-category/{category_id}','CategoryController@active_category');
Route::get('/edit-category/{category_id}','CategoryController@edit_category');
Route::post('/update-category/{category_id}','CategoryController@update_category');
Route::get('/delete-category/{category_id}','CategoryController@delete_category');

//product roots are here
Route::get('/add-product','ProductController@index');
Route::post('/save-product','ProductController@save_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/unactive-product/{book_id}','ProductController@unactive_product');
Route::get('/active-product/{book_id}','ProductController@active_product');
Route::get('/delete-product/{book_id}','ProductController@delete_product');
Route::get('/edit-product/{book_id}','ProductController@edit_Product');
Route::post('/update-product/{book_id}','ProductController@update_product');


//slider routes are here
Route::get('/add-slider','SliderController@index');
Route::get('/all-slider','SliderController@all_slider');
Route::post('/save-slider','SliderController@save_slider');
Route::get('/unactive-slider/{slider_id}','SliderController@unactive_slider');
Route::get('/active-slider/{slider_id}','SliderController@active_slider');
Route::get('/delete-slider/{slider_id}','SliderController@delete_slider');
