@extends('layout')
@section('content')

            <h2 class="title text-center">Features Items</h2>
              <?php foreach($all_published_product as $v_published_product){?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to($v_published_product->book_image)}}" style="height: 350px; width:250px;" alt="" />
                                            <h2>{{$v_published_product->book_price}} Tk.</h2>
                                            <p>{{$v_published_product->book_name}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>{{$v_published_product->book_price}}</h2>
                                                 <a href="{{URL::to('/view_product/'.$v_published_product->book_id)}}" >
                                                <p>{{$v_published_product->book_name}}</p></a>
                                                <a href="{{URL::to('/view_product/'.$v_published_product->book_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>{{$v_published_product->vendor_name}}</a></li>
                                        <li><a href="{{URL::to('/view_product/'.$v_published_product->book_id)}}"><i class="fa fa-plus-square"></i>View Book</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                        
                            
                        <?php } ?>

                    </div><!--features_items-->
                     
                           
                 
                        <div class="category-tab "><!--category-tab-->
                        <div class="col-sm-12">
                          
                                <ul class="nav nav-tabs">
                                    <?php
                                $all_publisher_category=DB::table('tb1_category')
                                        ->where('publication_status',1)
                                        ->get();
                                 foreach($all_publisher_category as $v_category){?>
                                <li><a href="{{URL::to('/product_by_category/'.$v_category->category_id)}}" >{{$v_category->category_name}}</a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>

        
                    </div><!--/category-tab-->
                    
@endsection