<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
	/*public function login(Request $request){
		if($request->isMethod('post')){
			$data = $request->input();
			if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'vendor'=>'1'])){
				echo "Success"; die;
			}else{
				echo "Failed"; die;
			}
		}
		return view ('vendor.vendor_login');
	}*/

	public function dashboard(){

		return view ('vendor.dashboard');
	}
}
