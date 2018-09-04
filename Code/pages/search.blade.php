@extends('layout')
@section('content')
		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="companyinfo"> 
					<div class="box-header" data-original-title>
					<h2><i class="halflings-icon user"></i><span class="break"></span>search Items</h2>
					<br>
					</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>  
								  <th>Book Name</th> 
								  <th>Book Image</th>
								  <th>Book Price</th>
								  <th>Category Name</th>
								  <th>Vendor Name</th>
								  <th>Cart</th>
								 
							  </tr>
						  </thead>

						@foreach( $Products as $v_product)
						  <tbody>
							<tr>
								
								<td class="center">{{ $v_product->book_name }}</td>
								
								<td><img src="{{URL::to($v_product->book_image)}}" style="height: 80px; width: 80px;"></td>
								<td class="center">{{ $v_product->book_price }} Tk</td>
								<td class="center">{{ $v_product->category_name }}</td>
								<td class="center">{{ $v_product->vendor_name }}</td>
								<td><a href="{{URL::to('/view_product/'.$v_product->book_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></td>
								

								</td>
							</tr>
							
							</tbody>
@endforeach
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


@endsection