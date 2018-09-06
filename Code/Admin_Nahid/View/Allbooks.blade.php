@extends('admin_layout')
@section('admin_content')

			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/dashboard')}}">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Booklist >All Books</a></li>
			</ul>

			
			<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>All Books</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
									  <th>Vendorname</th>
									  <th>Date </th>
									  <th>Category Qty.</th>
									  <th>Book Qty.</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td>AAA</td>
									<td class="center">11/10/2018</td>
									<td class="center">5</td>
									<td class="center">20</td>                                       
								</tr>
								<tr>
									<td>BBB</td>
									<td class="center">11/10/2018</td>
									<td class="center">10</td>
									<td class="center">100</td>                                       
								</tr>
								<tr>
									<td>CCC</td>
									<td class="center">11/10/2018</td>
									<td class="center">6</td>
									<td class="center">40</td>                                        
								</tr>
								<tr>
									<td>DDD</td>
									<td class="center">11/10/2018</td>
									<td class="center">9</td>
									<td class="center">70</td>                                       
								</tr>
								<tr>
									<td>EEE</td>
									<td class="center">11/10/2018</td>
									<td class="center">5</td>
									<td class="center">60</td>                                        
								</tr>                                   
							  </tbody>
						 </table>  
						 <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						  </ul>
						</div>     
					</div>
				</div><!--/span-->
			</div><!--/row-->
		
@endsection