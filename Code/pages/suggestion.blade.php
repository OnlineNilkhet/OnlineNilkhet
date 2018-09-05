<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<link rel="shortcut icon" href="{{URL::to('backend/img/favicon.ico')}}">
	<title>Vendor Dashboard</title>
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">

</head>

<body>
<pre>
</pre>
	<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="/">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				
			</ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Suggestion</h2>
					</div>

						<p class="alert-success">
						
					</p>
	
					<div class="box-content">
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
							 
							<div class="control-group">
							  <label class="control-label" for="date01">Book Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge " name="book_name" required="">
							  </div>
							</div>


							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Book Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="book_short_description" rows="3" required=""></textarea>
							  </div>
							</div>


						
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Submit</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->
			</div>

		<script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
		<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
		<script src='{{asset('backend/js/fullcalendar.min.js')}}'></script>
		<script src='{{asset('backend/js/jquery.dataTables.min.js')}}'></script>
		<script src="{{asset('backend/js/jquery.chosen.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.cleditor.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.noty.js')}}"></script>
		<script src="{{asset('backend/js/jquery.elfinder.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.raty.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.uploadify-3.1.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.masonry.min.js')}}"></script>
		
		<script src="{{asset('backend/js/custom.js')}}"></script>
 
</body>

</html>