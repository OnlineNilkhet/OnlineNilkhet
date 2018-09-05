@extends('layout')
@section('content')
				
				<div class="col-sm-9 padding-right">
					<div class="product-details">
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to($product_by_details->book_image)}}" alt="" />
								<h3>ZOOM</h3>
							</div>
							
						</div>
						<div class="col-sm-7">
							<div class="product-information">
								
								<h2>{{$product_by_details->book_name}}</h2>
								<p>Color: {{$product_by_details->book_color}}</p>
								
								<span>
									<span>{{$product_by_details->book_price}} Tk.</span>
									<form action="{{url('/add-to-cart')}}" method="post">
										{{ csrf_field() }}
									<label>Quantity:</label>
									<input name="qty" type="text" value="1" />
									<input name="book_id" type="hidden" value="{{$product_by_details->book_id}}" />
									<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</form>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Vendor:</b>{{$product_by_details->vendor_name}}</p>
								<p><b>Category:</b>{{$product_by_details->category_name}}</p>
								
								
							</div>
						</div>
					</div>
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
								<li><a href="#tag" data-toggle="tab">Tag</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<p>{{$product_by_details->book_short_description}}</p>
							</div>
							<div class="tab-pane fade" id="companyprofile" >
								
							</div>
							<div class="tab-pane fade" id="tag" >
								
						</div>
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										
									</ul>
									
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					
		
	@endsection