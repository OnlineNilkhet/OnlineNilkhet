@extends('admin_layout')
@section('admin_content')

			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/dashboard')}}">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Booklist >Category</a></li>
			</ul>



			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>All Category</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
									  <th>Category name</th>
									  <th>Date </th>
									  <th>vendor</th>
									  <th>Status</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td>Drama</td>
									<td class="center">11/10/2018</td>
									<td class="center">AAA</td>
									<td class="center">
										<span class="label label-success">Available</span>
									</td>                                       
								</tr>
								<tr>
									<td>Autobiography</td>
									<td class="center">11/10/2018</td>
									<td class="center">BBB</td>
									<td class="center">
										<span class="label label-important">Unavailable</span>
									</td>                                       
								</tr>
								<tr>
									<td>Novel</td>
									<td class="center">11/10/2018</td>
									<td class="center">CCC</td>
									<td class="center">
										<span class="label label-success">Available</span>
									</td>                                        
								</tr>
								<tr>
									<td>Detective</td>
									<td class="center">11/10/2018</td>
									<td class="center">DDD</td>
									<td class="center">
										<span class="label label-warning">Pending</span>
									</td>                                       
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
				
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Category 1</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped">
							  <thead>
								  <tr>
									  <th>Bookname</th>
									  <th>Date </th>
									  <th>Vendor</th>
									  <th>Status</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td>Aaaa</td>
									<td class="center">11/10/2018</td>
									<td class="center">EEE</td>
									<td class="center">
										<span class="label label-success">Available</span>
									</td>                                       
								</tr>
								<tr>
									<td>Bbbb</td>
									<td class="center">11/10/2018</td>
									<td class="center">DDD</td>
									<td class="center">
										<span class="label label-important">Unavailable</span>
									</td>                                       
								</tr>
								<tr>
									<td>Cccc</td>
									<td class="center">11/10/2018</td>
									<td class="center">CCC</td>
									<td class="center">
										<span class="label label-success">Available</span>
									</td>                                        
								</tr>
								<tr>
									<td>Dddd</td>
									<td class="center">11/10/2018</td>
									<td class="center">FFF</td>
									<td class="center">
										<span class="label label-warning">Pending</span>
									</td>                                       
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