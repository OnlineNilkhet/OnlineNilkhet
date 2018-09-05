<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Vendor Dashboard</title>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
	

</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="/dashboard"><span>Online Nilkhet</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
				
						
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user">
									
								</i>{{ Session::get('customer_name')}}

								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="{{URL::to('/')}}"><i class="halflings-icon user"></i>Home</a></li>
								
								<li><a href="{{URL::to('/customer-logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{URL::to('/customer-dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						
						
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Books Sell</span></a>
							<ul>
								<li><a class="submenu" href="#"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Bookss</span></a></li>
								<li><a class="submenu" href="#"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Books</span></a></li>
								
							</ul>	
						</li>
						
						
						<li><a href="#"><i class="icon-list-alt"></i><span class="hidden-tablet">Total Order Book</span></a></li>
						
						

						
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			@yield('customer_content')

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	
	<footer>

		<p>
			
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="/" alt="Bootstrap Admin Templates">Online Nilkhet</a></span>
		</p>

	</footer>
	
	<!-- start: JavaScript-->



		<script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.ui.touch-punch.js')}}"></script>
		<script src="{{asset('backend/js/modernizr.js')}}"></script>
		<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.cookie.js')}}"></script>
		<script src='{{asset('backend/js/fullcalendar.min.js')}}'></script>
		<script src='{{asset('backend/js/jquery.dataTables.min.js')}}'></script>
		<script src="{{asset('backend/js/excanvas.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.pie.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.stack.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.resize.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.chosen.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.cleditor.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.noty.js')}}"></script>
		<script src="{{asset('backend/js/jquery.elfinder.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.raty.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.iphone.toggle.js')}}"></script>
		<script src="{{asset('backend/js/jquery.uploadify-3.1.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.gritter.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.imagesloaded.js')}}"></script>
		<script src="{{asset('backend/js/jquery.masonry.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.knob.modified.js')}}"></script>
		<script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>
		<script src="{{asset('backend/js/counter.js')}}"></script>
		<script src="{{asset('backend/js/retina.js')}}"></script>
		<script src="{{asset('backend/js/custom.js')}}"></script>
	<!-- end: JavaScript-->
	
	 
</body>

</html>
