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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Slider</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Slider ID</th>
								  <th>Slider Name</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>

						@foreach( $all_slider as $v_slider)
						  <tbody>
							<tr>
								<td>{{ $v_slider->slider_id }}</td>
								<td><img src="{{URL::to($v_slider->slider_image)}}" style="height: 100px; width:100px;"></td>
								
								<td class="center">

									@if( $v_slider->publication_status == 1)
									<span class="label label-success">Active</span>
									@else
									<span class="label label-danger">Unactive</span>
									@endif
								</td>
								<td class="center">
									@if( $v_slider->publication_status == 1)
									<a class="btn btn-danger" href="{{URL::to('/unactive-slider/'. $v_slider->slider_id )}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>

									@else
									<a class="btn btn-success" href="{{URL::to('/active-slider/'. $v_slider-> slider_id )}}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif

									<a class="btn btn-danger" href="{{URL::to('/delete-slider/'. $v_slider->slider_id )}}" id="delete">
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