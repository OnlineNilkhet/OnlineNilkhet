<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;

Session_start();
class VendorController extends Controller
{
    public function index(){
    	return view('vendor_login');
    }

    
     public function dashboard(Request $request)
    {
    	$vendor_email=$request->vendor_email;
    	$vendor_password=md5($request->vendor_password);

    	$result=DB::table('tb1_vendor')

    		->where ('vendor_email',$vendor_email)
    		->where ('vendor_password',$vendor_password)
    		->first();
    		if ($result) {

    			Session::put('vendor_name',$result->vendor_name);
    			Session::put('vendor_id',$result->vendor_id);
    				return Redirect::to('/dashboard');
    		}else{

    				Session::put('messege','Email or password Invalid');
    				return Redirect::to('/vendor');
    		}
    }


}
