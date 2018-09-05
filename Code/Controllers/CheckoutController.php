<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Cart;
use Illuminate\support\Facades\Redirect;

class CheckoutController extends Controller
{
    public function login_check()
    {
    	return view('pages.login');
    }

    public function customer_registration(Request $request)
    {
    	$data=array();
    	$data['customer_name']=$request->customer_name;
    	$data['customer_email']=$request->customer_email;
    	$data['password']=md5($request->password);
    	$data['mobile_number']=$request->mobile_number;
    	$customer_id=DB::table('tb1_customer')
    	->insertGetId($data);

    			Session::put('customer_id',$customer_id);
    			Session::put('customer_name',$request->$customer_id);
    			return Redirect('/checkout');
    }
    public function checkout()
    {
    	return view('pages.checkout');
    }

    public function save_shipping_details(Request $request)
    {
    	$data=array();
    	$data['shipping_email']=$request->shipping_email;
    	$data['shipping_first_name']=$request->shipping_first_name;
    	$data['shipping_last_name']=$request->shipping_last_name;
    	$data['shipping_address']=$request->shipping_address;
    	$data['shipping_mobile_number']=$request->shipping_mobile_number;
    	$data['shipping_city']=$request->shipping_city;

    	$shipping_id=DB::table('tb1_shipping')
    			->insertGetId($data);

    	Session::put('shipping_id',$shipping_id);
    	//Session::put('customer_name',$request->$customer_id);
    	return Redirect::to('/payment');
    }

     public function customer_logout()
    {
    	
    	Session::flush();
    	return Redirect::to('/');
    }

    public function payment()
    {
    	return view ('pages/payment');
    }

    public function customer_login(Request $request)
    {
    	$customer_email=$request->customer_email;
    	$password=md5($request->password);
    	$result=DB::table('tb1_customer')
    			->where('customer_email',$customer_email)
    			->where('password',$password)
    			->first();

    	if ($result)
    	{	
    		Session::put('customer_id',$result->customer_id);
            Session::put('customer_name',$result->customer_name);
    		return Redirect::to('/checkout');
    	}
    	else{
    		return Redirect::to('/login-check');
    	}
    }

    public function order_place(Request $request)
    {
    	$payment_method=$request->payment_method;
    	//echo $payment_gateway;
    	$pdata=array();
    	$pdata['payment_method']=$payment_method;
    	$pdata['payment_status']='pending';
    	$payment_id=DB::table('tb1_payment')
    			->insertGetId($pdata);

    	$odata=array();
    	$odata['customer_id']=Session::get('customer_id');
    	$odata['shipping_id']=Session::get('shipping_id');
    	$odata['payment_id']=$payment_id;
    	$odata['order_total']=Cart::total();
    	$odata['order_status']='pending';
    	$order_id=DB::table('tb1_order')
    			->insertGetId($odata);


    	$contents=Cart::content();
    	$oddata=array();

    	foreach($contents as $v_content)
    	{	
    		$oddata['order_id']=$order_id;
    		$oddata['book_id']=$v_content->id;
    		$oddata['book_name']=$v_content->name;
    		$oddata['book_price']=$v_content->price;
    		$oddata['book_sales_quantity']=$v_content->qty;

    		DB::table('tb1_order_details')
    			->insert($oddata);
    	}
    	if ($payment_method=='handcash') {

    		Cart::destroy();
    		return view ('pages.handcash');
    		
    	}elseif ($payment_method=='cart'){
    		echo "cart";
    	}elseif ($payment_method=='paypal'){
    		echo "paypal";

    	}else{
    		echo "not selected";
    	}
    }

 public function manage_order()
    {
        $all_order_info=DB::table('tb1_order')
                    ->join('tb1_customer','tb1_order.customer_id','=','tb1_customer.customer_id')
                    ->select('tb1_order.*','tb1_customer.customer_name')
                    ->get();
        $manage_order=view('vendor.manage_order')
            ->with('all_order_info',$all_order_info);
        return view ('vendor_layout')
            ->with('vendor.manage_order',$manage_order);
    }



    public function view_order($order_id)
    {
         $order_by_id=DB::table('tb1_order')
        ->join('tb1_customer','tb1_order.customer_id','=','tb1_customer.customer_id')
        ->join('tb1_order_details','tb1_order.order_id','=','tb1_order_details.order_id')
        ->join('tb1_shipping','tb1_order.shipping_id','=','tb1_shipping.shipping_id')
        ->select('tb1_order.*','tb1_order_details.*','tb1_shipping.*','tb1_customer.*')
        ->get();

                    //echo "<pre>";
                    //print_r($order_by_id);
                     // echo "</pre>";
        $view_order=view('vendor.view_order')
            ->with('order_by_id',$order_by_id);
        return view ('vendor_layout')
            ->with('vendor.view_order',$view_order);
    }
}
