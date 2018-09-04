<?php

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
use Illuminate\Support\Facades\Input;

Route::get('/', function  () {
    return view('welcome');
});


//backend routs...........................

Route::get('/admin','Admincontroller@index');
Route::get('/dashboard','Admincontroller@show_dashboard');
Route::post('/admin-dashboard','Admincontroller@dashboard');


//checkout routs are here.....................

Route::get('/view-order/{order_id}','CheckoutController@view_order');