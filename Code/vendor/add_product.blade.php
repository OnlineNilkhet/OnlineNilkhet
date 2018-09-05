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
					<a href="/add-book">Add Book</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
					</div>

						<p class="alert-success">
						<?php
						$messege=Session::get('messege');
						if ($messege) {
						echo $messege;
						Session::put('messege',null);
					}
						?>
					</p>
						
					<div class="box-content">
						<form class="form-horizontal" action="{{url('save-product')}}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							 
							<div class="control-group">
							  <label class="control-label" for="date01">Book Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge " name="book_name" required="">
							  </div>
							</div>

							    <div class="control-group">
								<label class="control-label" for="selectError3">Book Category</label>
								<div class="controls">
								  <select id="selectError3" name="category_id">
								  	<option>Select Category</option>
								  	 <?php
                                $all_publisher_category=DB::table('tb1_category')
                                        ->where('publication_status',1)
                                        ->get();


                            foreach($all_publisher_category as $v_category){?>
									<option value="{{$v_category->category_id}}"> {{$v_category->category_name}}</option>
								<?php } ?>
								  </select>
								</div>
							  </div>

							   <div class="control-group">
								<label class="control-label" for="selectError3">Vendor Name</label>
								<div class="controls">
								  <select id="selectError3" name="vendor_id">
								  	 <?php
                                $all_vendor=DB::table('tb1_vendor')
                       
                                        ->get();


                            foreach($all_vendor as $v_category){?>
									<option value="{{$v_category->vendor_id}}"> {{$v_category->vendor_name}}</option>
								<?php } ?>
								  </select>
								</div>
							  </div>


							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Book short description</label>
							  <div class="controls">
								<textarea class="cleditor" name="book_short_description" rows="3" required=""></textarea>
							  </div>
							</div>


							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Book long description</label>
							  <div class="controls">
								<textarea class="cleditor" name="book_long_description" rows="3" required=""></textarea>
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="date01">Book Price</label>
							  <div class="controls">
								<input type="text" class="input-xlarge " name="book_price" required="">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="book_image" id="fileInput" type="file">
							  </div>
							</div>
							  
							<div class="control-group">
							  <label class="control-label" for="date01">Book color</label>
							  <div class="controls">
								<input type="text" class="input-xlarge " name="book_color" required="">
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1">
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Book</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->
			</div>

@endsection