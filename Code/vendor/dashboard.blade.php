@extends('vendor_layout')
@section('vendor_content')
	
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="/dashboard">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="/dashboard">Dashboard</a></li>
			</ul>

			<div class="row-fluid">
				
				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					
					<div class="number">854<i class="icon-arrow-up"></i></div>
					<div class="title">Total Category</div>
					<div class="footer">
						<a href="#"> read full report</a>
					</div>	
				</div>
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					
					<div class="number">123<i class="icon-arrow-up"></i></div>
					<div class="title">Total Orders</div>
					<div class="footer">
						<a href="#"> read full report</a>
					</div>
				</div>
				<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
					
					<div class="number">982<i class="icon-arrow-up"></i></div>
					<div class="title">Total Products</div>
					<div class="footer">
						<a href="#"> read full report</a>
					</div>
				</div>
				
       


@endsection