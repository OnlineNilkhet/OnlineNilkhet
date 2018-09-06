@extends('admin_layout')
@section('admin_content')			
						
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="dashboard">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Inbox</a></li>
			</ul>

			<div class="row-fluid">
				
				<div class="span7">
					<h1>Inbox</h1>
					
					<ul class="messagesList">
						
						<li>
							<span class="from"><span class="glyphicons star"><i></i></span> Vendor 1<span class="glyphicons paperclip"><i></i></span></span><span class="title"><span class="label label-info">Report</span> Messeage Header</span><span class="date">Today, <b>3:47 PM</b></span>
						</li>
						<li>
							<span class="from"><span class="glyphicons dislikes"><i></i></span> Vendor 2</span><span class="title">Messeage Header</span><span class="date">Today, <b>3:47 PM</b></span>
						</li>
						<li>
							<span class="from"><span class="glyphicons dislikes"><i></i></span> Vendor 3</span><span class="title">Messeage Header</span><span class="date">Today, <b>3:47 PM</b></span>
						</li>
						
						
						<li>
							<span class="from"><span class="glyphicons dislikes"><i></i></span> Vendor 4</span><span class="title"><span class="label label-info">information</span> Messeage Header</span><span class="date">Today, <b>3:47 PM</b></span>
						</li>
						
						
					</ul>
						
				</div>
				<div class="span5 noMarginLeft">
					
					<div class="message dark">
						
						<div class="header">
							<h1>"Messeage Header"</h1>
							<div class="from"><i class="halflings-icon user"></i> <b>Vendor 1</b> / vendor1@gmail.com</div>
							<div class="date"><i class="halflings-icon time"></i> Today, <b>3:47 PM</b></div>
							
							<div class="menu"></div>
							
						</div>
						
						<div class="content">
							<p>
								It's a pleasure business with you. Check the monthly report.
							</p>

								
						</div>
						
						<div class="attachments">
							<ul>
								
								<li>
									<span class="label label-success">xls</span> <b>spreadsheet.xls</b> <i>(2.5MB)</i>
									<span class="quickMenu">
										<a href="#" class="glyphicons search"><i></i></a>
										<a href="#" class="glyphicons share"><i></i></a>
										<a href="#" class="glyphicons cloud-download"><i></i></a>
									</span>
								</li>
							</ul>		
						</div>
						
						<form class="replyForm"method="post" action="#">

							<fieldset>
								<textarea tabindex="3" class="input-xlarge span12" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>

								<div class="actions">
									
									<button tabindex="3" type="submit" class="btn btn-success">Send message</button>
									
								</div>

							</fieldset>

						</form>	
						
					</div>	
					
				</div>
						
			</div>
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
@endsection
