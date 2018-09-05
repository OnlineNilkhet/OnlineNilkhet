@extends('vendor_layout')
@section('vendor_content')

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="/dashboard">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Update Category</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Book</h2>
					</div>

						
					<div class="box-content">
						<form class="form-horizontal" action="{{url('/update-product',$product_info->book_id)}}" method="post">
							{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							 
							<div class="control-group">
							  <label class="control-label" for="date01">Product Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge " name="book_name" value="{{$product_info->book_name}}">
							  </div>
							</div>


							  <label class="control-label" for="date01">Product Price</label>
							  <div class="controls">
								<input type="text" class="input-xlarge " name="book_price" value="{{$product_info->book_price}}">
							  </div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save</button>
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->
			</div>

@endsection