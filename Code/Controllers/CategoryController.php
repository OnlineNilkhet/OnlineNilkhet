<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;

Session_start();

class CategoryController extends Controller
{
    public function index()
    {
      $this->VendorCheck();
    	return view('vendor.add_category');
    }

    
    public function all_category()
    {

        $this->VendorCheck();
    	$all_category_info=DB::table('tb1_category')->get();
    	$manage_category=view('vendor.all_category')
    		->with('all_category_info',$all_category_info);
    	return view ('vendor_layout')
    		->with('vendor.all_category',$manage_category);
    }


    public function save_category(Request $request)
    {
        
    	$data=array();
    	$data['category_id']=$request->category_id;
    	$data['category_name']=$request->category_name;
    	$data['category_description']=$request->category_description;
    	$data['publication_status']=$request->publication_status;

    	DB::table('tb1_category')->insert($data);
    	Session::put('messege','Category added successfully !!');
    	return redirect::to ('/add-category');
    }

    public function unactive_category($category_id)
    {
    	DB::table('tb1_category') 
    		->where('category_id',$category_id)
    		->update(['publication_status' => 0]);
    		Session::put('messege','Category Unactive successfully !!');
    		return Redirect::to('/all-category');
    }

     public function active_category($category_id)
    {
    	DB::table('tb1_category') 
    		->where('category_id',$category_id)
    		->update(['publication_status' => 1]);
    		Session::put('messege','Category Actived successfully !!');
    		return Redirect::to('/all-category');
    }

     public function edit_category($category_id)
    {
    	
    	$category_info=DB::table('tb1_category') 
    		->where('category_id',$category_id)
    		->first();
    	//return view ('vendor.edit_category');
    	$category_info=view('vendor.edit_category')
    		->with('category_info',$category_info);
    		return view('vendor_layout')
    			->with('vendor.edit_category',$category_info);
    }

     public function update_category(Request $request,$category_id)
    {
    	
  		$data=array();
    	$data['category_name']=$request->category_name;
    	$data['category_description']=$request->category_description;

    	DB::table('tb1_category')

    		->where('category_id',$category_id)
    		->update($data);
    	Session::put('messege','Category updated successfully !!');
    	return Redirect::to ('/all-category');
    }

     public function delete_category($category_id)
    {
    	
  		DB::table('tb1_category')

    		->where('category_id',$category_id)
    		->delete();
    	//Session::put('messege','Category deleted successfully !!');
    	return Redirect::to ('/all-category');
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



