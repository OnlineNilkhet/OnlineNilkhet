@extends('layout')
@section('content')

                <h2 class="title text-center">Vendor Book</h2>
              <?php foreach($product_by_vendor as $v_vendor_by_product){?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to($v_vendor_by_product->book_image)}}" style="height: 350px; width:250px;" alt="" />
                                            <h2>{{$v_vendor_by_product->book_price}} Tk.</h2>
                                          
                                            <p>{{$v_vendor_by_product->book_name}}</p>

                                            <a href="{{URL::to('/view_product/'.$v_vendor_by_product->book_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>{{$v_vendor_by_product->book_price}}</h2>
                                                <p>{{$v_vendor_by_product->book_name}}</p>
                                                <a href="{{URL::to('/view_product/'.$v_vendor_by_product->book_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>{{$v_vendor_by_product->vendor_name}}</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>View Book</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                        
                            
                        <?php } ?>
                    </div><!--features_items-->
                    
@endsection