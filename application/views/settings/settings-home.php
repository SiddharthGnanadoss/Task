<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>


<?php
$this->load->view('script');
?>

<?php
$this->load->view('script-two');
?>

<?php
$this->load->view('script-three');
?>

</head>

<body>

	<!-- Header -->
	
	
<?php
$this->load->view('inner-header');
?>
    
    <!-- /.header -->

	<div id="container" class="fixed-header sidebar-closed">
		
        


		<div id="content">
		
		
                <div class="row">
				    <div class="col-md-1"></div>
					<div class="col-md-10" style="margin-top:20px !important;">
						<div class="widget box">
							<div class="widget-header">

<h4><i class="icon-reorder"></i>
<?php
$this->load->view('settings-title-menu'); 
?>
</h4>

								<div class="toolbar no-padding">
									<div class="btn-group">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<!-- /.container -->
			
						<div class="container" style="width:84%; float:none; margin:auto !important;">

				<!--=== Page Content ===-->
				<!--=== Statboxes ===-->
				<div class="row row-bg"> <!-- .row-bg -->
				
					<div class="col-sm-6 col-md-2">
						<div class="statbox widget box box-shadow">
							<a href="<? echo BEGIN_PATH ?>/user"><div class="widget-content" style="text-align:center;">
								<img src="<? echo BEGIN_PATH ?>/images/profile.jpg">
<div class="title">USER</div>
							</div></a>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					
					<div class="col-sm-6 col-md-2">
						<div class="statbox widget box box-shadow">
							<a href="<? echo BEGIN_PATH ?>/role"><div class="widget-content" style="text-align:center;">
								<img src="<? echo BEGIN_PATH ?>/images/profile.jpg">
<div class="title">ROLE</div>
							</div></a>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					
					<div class="col-sm-6 col-md-2">
						<div class="statbox widget box box-shadow">
							<a href="<? echo BEGIN_PATH ?>/settings/editprofile"><div class="widget-content" style="text-align:center;">
								<img src="<? echo BEGIN_PATH ?>/images/profile.jpg">
<div class="title">PROFILE</div>
							</div></a>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
				
					<div class="col-sm-6 col-md-2">
						<div class="statbox widget box box-shadow">
							<a href="<? echo BEGIN_PATH ?>/groups"><div class="widget-content" style="text-align:center;">
								<img src="<? echo BEGIN_PATH ?>/images/settings.jpg">
<div class="title">GROUPS</div>
							</div></a>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

					<div class="col-sm-6 col-md-2">
						<div class="statbox widget box box-shadow">
							<a href="<? echo BEGIN_PATH ?>/keywords"><div class="widget-content" style="text-align:center;">
								<img src="<? echo BEGIN_PATH ?>/images/settings.jpg">
<div class="title">KEYWORD</div>
							</div></a>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

					<div class="col-sm-6 col-md-2">
						<div class="statbox widget box box-shadow">
							<a href="<? echo BEGIN_PATH ?>/industries"><div class="widget-content" style="text-align:center;">
								<img src="<? echo BEGIN_PATH ?>/images/profile.jpg">
<div class="title">INDUSTRY</div>
							</div></a>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

					<div class="col-sm-6 col-md-2">
						<div class="statbox widget box box-shadow">
							<a href="<? echo BEGIN_PATH ?>/category"><div class="widget-content" style="text-align:center;">
								<img src="<? echo BEGIN_PATH ?>/images/event.jpg">
<div class="title">CATEGORY</div>
							</div></a>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

					<div class="col-sm-6 col-md-2">
						<div class="statbox widget box box-shadow">
							<a href="<? echo BEGIN_PATH ?>/duplicate"><div class="widget-content" style="text-align:center;">
								<img src="<? echo BEGIN_PATH ?>/images/event.jpg">
<div class="title">DUPLICATION</div>
							</div></a>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					
					
				
				</div> <!-- /.row -->
				<!-- /Statboxes -->

				<!-- /Page Content -->
			</div>

			
			

		</div>
	</div>

</body>
</html>