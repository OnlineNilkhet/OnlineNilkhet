<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\Product;
use Illuminate\support\Facades\Redirect;

Session_start();

class HomeController extends Controller
{

public function suggestion(){
    return view ('pages.suggestion');
}
    public function index()
    {
    		$all_published_product=DB::table('tb1_books')
					->join('tb1_category','tb1_books.category_id','=','tb1_category.category_id')
					->join('tb1_vendor','tb1_books.vendor_id','=','tb1_vendor.vendor_id')
					->select('tb1_books.*','tb1_category.category_name','tb1_vendor.vendor_name')
					->where('tb1_books.publication_status',1)
                    ->inRandomOrder()
                    ->orderBy('book_id',"DEC")
                    ->limit(9)
                    ->get();
  
    	$manage_published_product=view('pages.home_content')
    		->with('all_published_product',$all_published_product);
    	return view ('layout')
    		->with('pages.home_content',$manage_published_product);

    	//return view ('vendor.add_product');

    	//return view('pages.home_content');
    }

    public function search(Request $request){

      
        $search = $request->search_data;
        if ($search == '') {
           return Redirect::to('/');
        } else {
            $Products = DB::table('tb1_books')

                    ->join('tb1_category','tb1_books.category_id','=','tb1_category.category_id')
                    ->join('tb1_vendor','tb1_books.vendor_id','=','tb1_vendor.vendor_id')
                    ->select('tb1_books.*','tb1_category.category_name','tb1_vendor.vendor_name')
                    ->where('book_name', 'like', '%' . $search . '%')->paginate(12);

            $manage=view('pages.search')
            ->with('Products',$Products);
        return view ('layout')
            ->with('pages.search',$manage);

          //  return view('pages.search');

        }
    }

    public function show_product_by_category($category_id)
    {
       $product_by_category=DB::table('tb1_books')
                    ->join('tb1_category','tb1_books.category_id','=','tb1_category.category_id')
                    ->join('tb1_vendor','tb1_books.vendor_id','=','tb1_vendor.vendor_id')   
                    ->select('tb1_books.*','tb1_category.category_name','tb1_vendor.vendor_name')
                    ->where('tb1_category.category_id',$category_id)
                    ->where('tb1_books.publication_status',1)
                    ->limit(5)
                    ->get();
        $manage_product_by_category=view('pages.category_by_product')
            ->with('product_by_category',$product_by_category);
        return view ('layout')
            ->with('pages.home_content',$manage_product_by_category);
    }

   

 public function show_product_by_vendor($vendor_id)
    {
        $product_by_vendor=DB::table('tb1_books')                   
                    ->join('tb1_vendor','tb1_books.vendor_id','=','tb1_vendor.vendor_id') 
                    ->select('tb1_books.*','tb1_vendor.vendor_name')
                    ->where('tb1_vendor.vendor_id',$vendor_id)
                    ->where('tb1_books.publication_status',1)
                    ->orderBy('book_id',"DEC")
                    ->limit(15)
                    ->get();
        $manage_product_by_vendor=view('pages.vendor_by_product')
            ->with('product_by_vendor',$product_by_vendor);
        return view ('layout')
            ->with('pages.home_content',$manage_product_by_vendor);
       
    }
     
     public function product_details_by_id($book_id)
     {  
        $product_by_details=DB::table('tb1_books')
                    ->join('tb1_category','tb1_books.category_id','=','tb1_category.category_id')
                    ->join('tb1_vendor','tb1_books.vendor_id','=','tb1_vendor.vendor_id')   
                    ->select('tb1_books.*','tb1_category.category_name','tb1_vendor.vendor_name')
                    ->where('tb1_books.book_id',$book_id)
                    ->where('tb1_books.publication_status',1)
                    ->first();
        $manage_product_by_details=view('pages.product_details')
            ->with('product_by_details',$product_by_details);
        return view ('layout')
            ->with('pages.product_details',$manage_product_by_details);

     }

     public function customer_dashboard()
     {
        return view ('pages.customer_dashboard');
     }

   

}
