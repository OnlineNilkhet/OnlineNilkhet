<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;

Session_start();

class SliderController extends Controller
{
    public function index()
    {
    	return view ('vendor.add_slider');
    }


	 public function all_slider()
    {
    	$all_slider=DB::table('tb1_slider')->get();
    	$manage_slider=view('vendor.all_slider')
    		->with('all_slider',$all_slider);
    	return view ('vendor_layout')
    		->with('vendor.all_slider',$manage_slider);

    	//return view ('vendor.all_slider');
    }



    public function save_slider(Request $request)
    {

    		$data=array();
    		$data['publication_status']=$request->publication_status;
			$image=$request->file('slider_image');
    		if ($image){
    			$image_name=str_random(20);
    			$ext=strtolower($image->getClientOriginalExtension());
    			$image_full_name=$image_name.'.'.$ext;
    			$upload_path='slider/';
    			$image_url=$upload_path.$image_full_name;
    			$success=$image->move($upload_path,$image_full_name);
    			if($success) {
    				$data['slider_image']=$image_url;

    			DB::table('tb1_slider')->insert($data);
    			Session::put('messege','Slider added successfully !!');
    			return redirect::to ('/add-slider');
    			}  
    			  		}

    			 $data['slider_image']='';
    			DB::table('tb1_slider')->insert($data);
    			Session::put('messege','Slider added successfully without image!!');
    			return redirect::to ('/add-slider');
    }


     public function unactive_slider($slider_id)
    {
    	DB::table('tb1_slider') 
    		->where('slider_id',$slider_id)
    		->update(['publication_status' => 0]);
    		Session::put('messege','Slider Unactive successfully !!');
    		return Redirect::to('/all-slider');
    }


     public function active_slider($slider_id)
    {
    	DB::table('tb1_slider') 
    		->where('slider_id',$slider_id)
    		->update(['publication_status' => 1]);
    		Session::put('messege','Slider Actived successfully !!');
    		return Redirect::to('/all-slider');
    }


    	public function delete_slider($slider_id)
    {
        
        DB::table('tb1_slider')

            ->where('slider_id',$slider_id)
            ->delete();
        //Session::put('messege','Category deleted successfully !!');
        return Redirect::to ('/all-slider');
    }





}
