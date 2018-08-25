<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;

Session_start();



class SuperVendorController extends Controller
{


	public function index()
    {

		$this->VendorCheck();
    	return view('vendor.dashboard');
    }

    public function logout()
    {
    	
    	Session::flush();
    	return Redirect::to('/vendor');
    }

    public function VendorCheck()
    {
    	$vendor_id=Session::get('vendor_id');
    	if($vendor_id){
    		return;
    	}else{
    		return Redirect::to('/vendor')->send();
    	}
    }


}
