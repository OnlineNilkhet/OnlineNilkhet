<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;

Session_start();

class ProductController extends Controller
{
    
    public function index(){
    	$this->VendorCheck();
    	return view ('vendor.add_product');
    }


	public function all_product(){

		$this->VendorCheck();
		$all_product_info=DB::table('tb1_books')
					->join('tb1_category','tb1_books.category_id','=','tb1_category.category_id')
					->join('tb1_vendor','tb1_books.vendor_id','=','tb1_vendor.vendor_id')
					->select('tb1_books.*','tb1_category.category_name','tb1_vendor.vendor_name')
					->get();
    	$manage_product=view('vendor.all_product')
    		->with('all_product_info',$all_product_info);
    	return view ('vendor_layout')
    		->with('vendor.all_product',$manage_product);

    	//return view ('vendor.add_product');
    }
    public function save_product(Request $request){

   		$data=array();
    	$data['book_name']=$request->book_name;
    	$data['category_id']=$request->category_id;
    	$data['vendor_id']=$request->vendor_id;
    	$data['book_short_description']=$request->book_short_description;
    	$data['book_long_description']=$request->book_long_description;
    	$data['book_price']=$request->book_price;
    	$data['book_color']=$request->book_color;
    	$data['publication_status']=$request->publication_status;

    		$image=$request->file('book_image');
    		if ($image){
    			$image_name=str_random(20);
    			$ext=strtolower($image->getClientOriginalExtension());
    			$image_full_name=$image_name.'.'.$ext;
    			$upload_path='image/';
    			$image_url=$upload_path.$image_full_name;
    			$success=$image->move($upload_path,$image_full_name);
    			if($success) {
    				$data['book_image']=$image_url;

    			DB::table('tb1_books')->insert($data);
    			Session::put('messege','Book added successfully !!');
    			return redirect::to ('/add-product');
    			}  
    			  		}

    			 $data['book_image']='';
    			DB::table('tb1_books')->insert($data);
    			Session::put('messege','Book added successfully without image!!');
    			return redirect::to ('/add-product');
    }

     public function unactive_product($book_id)
    {
    	DB::table('tb1_books') 
    		->where('book_id',$book_id)
    		->update(['publication_status' => 0]);
    		Session::put('messege','Book Unactive successfully !!');
    		return Redirect::to('/all-product');
    }


     public function active_product($book_id)
    {
    	DB::table('tb1_books') 
    		->where('book_id',$book_id)
    		->update(['publication_status' => 1]);
    		Session::put('messege','Book Actived successfully !!');
    		return Redirect::to('/all-product');
    }

 public function delete_product($book_id)
    {
        
        DB::table('tb1_books')

            ->where('book_id',$book_id)
            ->delete();
        //Session::put('messege','Category deleted successfully !!');
        return Redirect::to ('/all-product');
    }


     public function edit_product($book_id)
    {
       
        $product_info=DB::table('tb1_books') 
            ->where('book_id',$book_id)
            ->first();
        //return view ('vendor.edit_category');
        $product_info=view('vendor.edit_product')
            ->with('product_info',$product_info);
            return view('vendor_layout')
                ->with('vendor.edit_product',$product_info);
    }

     public function update_product(Request $request,$book_id)
    {
        
        $data=array();
        $data['book_name']=$request->book_name;
        $data['book_price']=$request->book_price;

        DB::table('tb1_books')

            ->where('book_id',$book_id)
            ->update($data);
        Session::put('messege','book updated successfully !!');
        return Redirect::to ('/all-product');
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
