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
Route::get('/inbox','Admincontroller@inbox');
Route::get('/admin','Admincontroller@index');
Route::get('/dashboard','Admincontroller@show_dashboard');
Route::post('/admin-dashboard','Admincontroller@dashboard');
Route::get('/logout','SuperadminController@logout');
Route::get('/admin.dashboard','Admincontroller@show_dashboard');
Route::get('/transaction','Admincontroller@transaction');
Route::get('/allbooks','Admincontroller@booklist');
Route::get('/vendors','Admincontroller@vendors');
Route::get('/category','Admincontroller@category');
Route::get('/calender','Admincontroller@calender');
