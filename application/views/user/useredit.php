<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">
<head>

<?php
$this->load->view('script');
?>

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

</head>

<body class="breakpoint-1200 theme-dark">

	<!-- Header -->
	
<?php
$this->load->view('header');
?>
    
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
				<div class="page-header">
					<div class="page-title">
						<h3>Dashboard</h3>
						<span>Good morning, John!</span>
					</div>

					<!-- Page Stats -->
					<ul class="page-stats">
						<li>
							<div class="summary">
								<span>New orders</span>
								<h3>17,561</h3>
							</div>
							<div id="sparkline-bar" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
							<!-- Use instead of sparkline e.g. this:
							<div class="graph circular-chart" data-percent="73">73%</div>
							-->
						</li>
						<li>
							<div class="summary">
								<span>My balance</span>
								<h3>$21,561.21</h3>
							</div>
							<div id="sparkline-bar2" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
						</li>
					</ul>
					<!-- /Page Stats -->
				</div>
				<!-- /Page Header -->

				<!--=== Page Content ===-->
				<!--=== Statboxes ===-->

				<!-- /Statboxes -->
				
				



				<!--=== Normal ===-->
		
                <div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Cable Operator - Edit</h4>
								
							</div>
							<div class="widget-content">
                            
								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="<? echo BEGIN_PATH ?>/user/update" autocomplete="off">

									<div class="form-group">
										<label class="col-md-2 control-label">Name :</label>
										<div class="col-md-8"><input type="text" name="name" id="name" required value="<?=$content[0]['name']?>"  class="form-control"></div>
									</div>
									
																		<div class="form-group">
										<label class="col-md-2 control-label">Address :</label>
										<div class="col-md-8"><input type="text" name="address" id="address" required value="<?=$content[0]['address']?>"  class="form-control"></div>
									</div>
									
<div class="form-group">
<label class="col-md-2 control-label" for="company">Area</label>
<div class="col-lg-8" style="padding-bottom:15px;">

<select name="area" id="area" class="form-control">  
<option value="">Select Area</option>
                <?
				foreach($content4 as $key4 => $value4)
				{
				?>
<option <?php if($value4['area_id']==$content[0]['area']) { echo "Selected"; } ?> value="<?=$value4['area_id']?>"><?=$value4['area_name']?></option>				
				<?php
				}
				?>
</select>

</div>
</div>
									
																		<div class="form-group">
										<label class="col-md-2 control-label">Phone :</label>
										<div class="col-md-8"><input type="text" name="mobile" id="mobile" required value="<?=$content[0]['mobile']?>"  class="form-control"></div>
									</div>
							
                                    
									<div class="form-group">
										<label class="col-md-2 control-label">User Name :</label>
										<div class="col-md-8"><input type="text" name="username" id="username" required value="<?=$content[0]['username']?>"  class="form-control"></div>
									</div>
									

									
									
									<div class="form-group">
										<label class="col-md-2 control-label">Email :</label>
										<div class="col-md-8"><input type="text" name="email" id="email" required value="<?=$content[0]['email']?>"  class="form-control"></div>
									</div>
									
									
										
										
									<div class="form-group">
										<label class="col-md-2 control-label">Role :</label>
										<div class="col-md-8">
										
										<select name="usertype" id="usertype" class="form-control" required>
<option value="Cable Operator">Cable Operator</option>
										</select>
										
										</div>
									</div>
									
									<input type="hidden" name="id" value="<?=$content[0]['id']?>">

									
                                             
                                    <div class="form-group">
									<label class="col-md-2 control-label">&nbsp;</label>
										<div class="col-md-8" style="text-align:left;">
                                        <input type="submit" name="add" class="btn btn-lg btn-primary" onClick="return validate();" value="Update">
										
																
			&nbsp; <a href="<? echo BEGIN_PATH ?>/user"><input type="button" name="add" class="btn btn-lg btn-primary" value="Cancel"></a>	
										
                                        </div>
									</div>
                         

									</form>
									
							</div>
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