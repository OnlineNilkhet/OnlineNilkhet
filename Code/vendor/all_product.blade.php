@extends('vendor_layout');
@section('vendor_content');


			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="/dashboard">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>
				<p class="alert-success">
					<?php
					$messege=Session::get('messege');
					if ($messege) {
						echo $messege;
						Session::put('messege',null);
					}
					?>
				</p>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Book ID</th>
								  <th>Book Name</th>
								 
								  <th>Book Image</th>
								  <th>Book Price</th>
								  <th>Category Name</th>
								  <th>Vendor Name</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>

						@foreach( $all_product_info as $v_product)
						  <tbody>
							<tr>
								<td>{{ $v_product->book_id }}</td>
								<td class="center">{{ $v_product->book_name }}</td>
								
								<td><img src="{{URL::to($v_product->book_image)}}" style="height: 80px; width: 80px;"></td>
								<td class="center">{{ $v_product->book_price }} Tk</td>
								<td class="center">{{ $v_product->category_name }}</td>
								<td class="center">{{ $v_product->vendor_name }}</td>
								<td class="center">

									@if( $v_product->publication_status == 1)
									<span class="label label-success">Active</span>
									@else
									<span class="label label-danger">Unactive</span>
									@endif
								</td>
								<td class="center">
									@if( $v_product->publication_status == 1)
									<a class="btn btn-danger" href="{{URL::to('/unactive-product/'. $v_product->book_id )}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>

									@else
									<a class="btn btn-success" href="{{URL::to('/active-product/'. $v_product-> book_id )}}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif

									
									<a class="btn btn-info" href="{{URL::to('/edit-product/'. $v_product->book_id )}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete-product/'. $v_product->book_id )}}" >
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							
							</tbody>
@endforeach
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

@endsection