@extends('admin_layout')
@section('admin_content')	
					
	             <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Transactions</a></li>
			</ul>

<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Customer Transaction</h2>
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
									  <th>Customer ID</th>
									  <th>Date </th>
									  <th>vendor</th>
									  <th>Status</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td>123</td>
									<td class="center">11/10/2018</td>
									<td class="center">AAA</td>
									<td class="center">
										<span class="label label-success">Successful</span>
									</td>                                       
								</tr>
								<tr>
									<td>1234</td>
									<td class="center">11/10/2018</td>
									<td class="center">BBB</td>
									<td class="center">
										<span class="label label-important">Failed</span>
									</td>                                       
								</tr>
								<tr>
									<td>12345</td>
									<td class="center">11/10/2018</td>
									<td class="center">CCC</td>
									<td class="center">
										<span class="label">No Transaction</span>
									</td>                                        
								</tr>
								<tr>
									<td>123456</td>
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
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Vendor Transaction</h2>
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
									  <th>Vendorname</th>
									  <th>Date </th>
									  <th>Customer ID</th>
									  <th>Status</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td>AAA</td>
									<td class="center">11/10/2018</td>
									<td class="center">123</td>
									<td class="center">
										<span class="label label-success">Successful</span>
									</td>                                       
								</tr>
								<tr>
								    <td>BBB</td>
									<td class="center">11/10/2018</td>
									<td class="center">1234</td>
									<td class="center">
										<span class="label label-important">Failed</span>
									</td>                                       
								</tr>
								<tr>
									<td>CCC</td>
									<td class="center">11/10/2018</td>
									<td class="center">12345</td>
									<td class="center">
										<span class="label ">No Transaction</span>
									</td>
									                                        
								</tr>
								<tr>
									<td>DDD</td>
									<td class="center">11/10/2018</td>
									<td class="center">123456</td>
									<td class="center">
							
										<span class="label label-warning">Pending</span>
									</td>                                       
								</tr>
								                                   
							  </tbody>
						 </table>  
						 <div class="pagination pagination-centered">
						 </div>
				
				
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->

@endsection		
		
	