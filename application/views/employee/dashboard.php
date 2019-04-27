<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">
<head>

<?php include('script.php'); ?>

	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/typeahead/typeahead.min.js"></script> <!-- AutoComplete -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/lugins/autosize/jquery.autosize.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/inputlimiter/jquery.inputlimiter.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/uniform/jquery.uniform.min.js"></script> <!-- Styled radio and checkboxes -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/tagsinput/jquery.tagsinput.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/select2/select2.min.js"></script> <!-- Styled select boxes -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/fileinput/fileinput.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/duallistbox/jquery.duallistbox.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/bootstrap-inputmask/jquery.inputmask.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/bootstrap-wysihtml5/wysihtml5.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/bootstrap-multiselect/bootstrap-multiselect.min.js"></script>
    
    
    <script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/validation/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/validation/additional-methods.min.js"></script>
    
    <script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/datatables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/datatables/tabletools/TableTools.min.js"></script> <!-- optional -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/datatables/colvis/ColVis.min.js"></script> <!-- optional -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/datatables/DT_bootstrap.js"></script>


<style>
a {
    color: #ffffff;
}
</style>


</head>

<body class="breakpoint-1200 theme-dark">

	<!-- Header -->
	
    <?php include('header.php'); ?> 
    
    <!-- /.header -->

<div id="container">

<?php
$this->load->view('leftmenu.php');
?>

		<!-- /Sidebar -->

		<div id="content">
			<div class="container">
				<!-- Breadcrumbs line -->
				<div class="crumbs">
					<ul id="breadcrumbs" class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="index.html">Dashboard</a>
						</li>
						<li class="current">
							<a href="pages_calendar.html" title="">Calendar</a>
						</li>
					</ul>

					<ul class="crumb-buttons">
						<li><a href="charts.html" title=""><i class="icon-signal"></i><span>Statistics</span></a></li>
						<li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="icon-tasks"></i><span>Users <strong>(+3)</strong></span><i class="icon-angle-down left-padding"></i></a>
							<ul class="dropdown-menu pull-right">
							<li><a href="form_components.html" title=""><i class="icon-plus"></i>Add new User</a></li>
							<li><a href="tables_dynamic.html" title=""><i class="icon-reorder"></i>Overview</a></li>
							</ul>
						</li>
						<li class="range"><a href="#">
							<i class="icon-calendar"></i>
							<span></span>
							<i class="icon-angle-down"></i>
						</a></li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->

				<!--=== Page Header ===-->
<?php
$this->load->view('page-header.php');
?>
				<!-- /Page Header -->

<div class="row"> <div class="col-md-12"> <div class="widget box"> <div class="widget-header"> <h4><i class="icon-reorder"></i> Box Tabs</h4> </div> <div class="widget-content"> <div class="tabbable box-tabs"> <ul class="nav nav-tabs"> <li class=""><a href="#box_tab3" data-toggle="tab">For The Day</a></li> <li class=""><a href="#box_tab2" data-toggle="tab">For The Month</a></li> <li class="active"><a href="#box_tab1" data-toggle="tab">For The Year</a></li> </ul> <div class="tab-content"> 

<div class="tab-pane active" id="box_tab1"> 

<div class="col-sm-6 col-md-3">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#6dadbd; padding-top:20px;">
								<div class="visual green">
									<i class="icon-user"></i>
								</div>
								<div class="title">No of Leads</div>
								<div class="value"><?=$profile_total?></div>
								<a class="more"  style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

					<div class="col-sm-6 col-md-3">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#94b86e; padding-top:20px;">
								<div class="visual cyan">
									<i class="icon-user"></i>
								</div>
								<div class="title">Answered</div>
								<div class="value"><?=$profile_married?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

					<div class="col-sm-6 col-md-3 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#ffb848; padding-top:20px;">
								<div class="visual red">
									<i class="icon-user"></i>
								</div>
								<div class="title">Un Answered</div>
								<div class="value"><?=$profile_unmarried?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

					<div class="col-sm-6 col-md-3 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#e25856; padding-top:20px;">
								<div class="visual yellow">
									<i class="icon-user"></i>
								</div>
								<div class="title">Wrong No</div>
								<div class="value"><?=$profile_blocked?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					
										<div class="col-sm-6 col-md-3 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#bf7f1f; padding-top:20px;">
								<div class="visual yellow">
									<i class="icon-user"></i>
								</div>
								<div class="title">Not interested</div>
								<div class="value"><?=$profile_blocked?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					
										<div class="col-sm-6 col-md-3 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#e25856; padding-top:20px;">
								<div class="visual yellow">
									<i class="icon-user"></i>
								</div>
								<div class="title">Call Back</div>
								<div class="value"><?=$profile_blocked?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

</div>
<div class="tab-pane" id="box_tab2"> 

<div class="col-sm-6 col-md-3">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#6dadbd; padding-top:20px;">
								<div class="visual green">
									<i class="icon-user"></i>
								</div>
								<div class="title">No of Leads</div>
								<div class="value"><?=$profile_total?></div>
								<a class="more"  style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

					<div class="col-sm-6 col-md-3">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#94b86e; padding-top:20px;">
								<div class="visual cyan">
									<i class="icon-user"></i>
								</div>
								<div class="title">Answered</div>
								<div class="value"><?=$profile_married?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

					<div class="col-sm-6 col-md-3 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#ffb848; padding-top:20px;">
								<div class="visual red">
									<i class="icon-user"></i>
								</div>
								<div class="title">Un Answered</div>
								<div class="value"><?=$profile_unmarried?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

					<div class="col-sm-6 col-md-3 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#e25856; padding-top:20px;">
								<div class="visual yellow">
									<i class="icon-user"></i>
								</div>
								<div class="title">Wrong No</div>
								<div class="value"><?=$profile_blocked?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					
										<div class="col-sm-6 col-md-3 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#bf7f1f; padding-top:20px;">
								<div class="visual yellow">
									<i class="icon-user"></i>
								</div>
								<div class="title">Not interested</div>
								<div class="value"><?=$profile_blocked?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					
										<div class="col-sm-6 col-md-3 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#e25856; padding-top:20px;">
								<div class="visual yellow">
									<i class="icon-user"></i>
								</div>
								<div class="title">Call Back</div>
								<div class="value"><?=$profile_blocked?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

</div> 
<div class="tab-pane" id="box_tab3"> 

<div class="col-sm-6 col-md-3">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#6dadbd; padding-top:20px;">
								<div class="visual green">
									<i class="icon-user"></i>
								</div>
								<div class="title">No of Leads</div>
								<div class="value"><?=$profile_total?></div>
								<a class="more"  style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

					<div class="col-sm-6 col-md-3">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#94b86e; padding-top:20px;">
								<div class="visual cyan">
									<i class="icon-user"></i>
								</div>
								<div class="title">Answered</div>
								<div class="value"><?=$profile_married?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

					<div class="col-sm-6 col-md-3 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#ffb848; padding-top:20px;">
								<div class="visual red">
									<i class="icon-user"></i>
								</div>
								<div class="title">Un Answered</div>
								<div class="value"><?=$profile_unmarried?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

					<div class="col-sm-6 col-md-3 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#e25856; padding-top:20px;">
								<div class="visual yellow">
									<i class="icon-user"></i>
								</div>
								<div class="title">Wrong No</div>
								<div class="value"><?=$profile_blocked?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					
										<div class="col-sm-6 col-md-3 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#bf7f1f; padding-top:20px;">
								<div class="visual yellow">
									<i class="icon-user"></i>
								</div>
								<div class="title">Not interested</div>
								<div class="value"><?=$profile_blocked?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					
										<div class="col-sm-6 col-md-3 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#e25856; padding-top:20px;">
								<div class="visual yellow">
									<i class="icon-user"></i>
								</div>
								<div class="title">Call Back</div>
								<div class="value"><?=$profile_blocked?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

 </div> 

</div> </div> </div> </div> </div> </div>


				<!--=== Page Content ===-->
				<!--=== Statboxes ===-->
				<div class="row row-bg" style="margin-bottom:20px; display:none;"> <!-- .row-bg -->
					<div class="col-sm-6 col-md-3">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#6dadbd; padding-top:20px;">
								<div class="visual green">
									<i class="icon-user"></i>
								</div>
								<div class="title">No of Leads</div>
								<div class="value"><?=$profile_total?></div>
								<a class="more"  style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

					<div class="col-sm-6 col-md-3">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#94b86e; padding-top:20px;">
								<div class="visual cyan">
									<i class="icon-user"></i>
								</div>
								<div class="title">Answered</div>
								<div class="value"><?=$profile_married?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

					<div class="col-sm-6 col-md-3 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#ffb848; padding-top:20px;">
								<div class="visual red">
									<i class="icon-user"></i>
								</div>
								<div class="title">Un Answered</div>
								<div class="value"><?=$profile_unmarried?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->

					<div class="col-sm-6 col-md-3 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#e25856; padding-top:20px;">
								<div class="visual yellow">
									<i class="icon-user"></i>
								</div>
								<div class="title">Wrong No</div>
								<div class="value"><?=$profile_blocked?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					
										<div class="col-sm-6 col-md-3 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#bf7f1f; padding-top:20px;">
								<div class="visual yellow">
									<i class="icon-user"></i>
								</div>
								<div class="title">Not interested</div>
								<div class="value"><?=$profile_blocked?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					
										<div class="col-sm-6 col-md-3 hidden-xs">
						<div class="statbox widget box box-shadow">
							<div class="widget-content" style="background-color:#e25856; padding-top:20px;">
								<div class="visual yellow">
									<i class="icon-user"></i>
								</div>
								<div class="title">Call Back</div>
								<div class="value"><?=$profile_blocked?></div>
								<a class="more" style="margin-top: 20px;" href="javascript:void(0);">View More <i class="pull-right icon-angle-right"></i></a>
							</div>
						</div> <!-- /.smallstat -->
					</div> <!-- /.col-md-3 -->
					
					
				</div> <!-- /.row -->
				<!-- /Statboxes -->



<div class="row">
					<!--=== Bordered Table ===-->
					
					<!--=== Condensed Table ===-->
					<div class="col-md-12">
						<div class="widget box">
							
							<div class="widget-content" style="background-color:#6dadbd;">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th colspan="6" style="text-align:center;">Attendance</th>
											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>January</td>
											<td>February</td>
											<td>March</td>
											<td>April</td>
											<td>May</td>
<td>June</td>
										</tr>
										<tr>
											<td>July</td>
<td>August</td>
											<td>September</td>
											<td>October</td>
											<td>November</td>
											<td>December</td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /Condensed Table -->
				</div>
				
				


				<!--=== Normal ===-->
				<div class="row">
					<div class="col-md-6">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Plan Your Holidays</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
							<div class="widget-content" style="background-color:#93b86e;">
								<table class="table table-bordered">
			
									<tbody>
									
									<?php
									for($i=1;$i<=5;$i++)
									{
									?>
									
										<tr>
												<td>1st January</td>
											<td>Monday</td>
											<td>New Year</td>
										</tr>
									<?php
									}
?>									
			
									</tbody>
								</table>
							</div>
						</div>
					</div>



<div class="col-md-6"> <div class="widget box"> <div class="widget-header"> <h4><i class="icon-reorder"></i>Message for the Day</h4> </div> <div class="widget-content align-center" style="background-color: #bf7f20; color:#fff;"> <p class="align-left" style="line-height:30px;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>  </div> 
</div> 


<div class="widget box"> <div class="widget-header"> <h4><i class="icon-reorder"></i>Birthday Reminder</h4> </div> <div class="widget-content align-center" style="background-color: #428bca;"> <p class="align-center" style="line-height:30px; color:#fff; font-weight:bold;">
Let's Celebrate! <br>
Today is Siddharth's Birthday
</p>  </div> 
</div>



</div>


				</div>
				<!-- /Normal -->



				<!-- /Page Content -->
			</div>
			<!-- /.container -->

		</div>
	</div>

	

</body>
</html>