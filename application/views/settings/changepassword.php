<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
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
								<h4><i class="icon-reorder"></i>Change Password</h4>
								
							</div>
							<div class="widget-content">
							
							<?php
							if($_REQUEST['action']=="success")
							{
							?>
							
								<div class="alert alert-success fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Success!</strong> Password updated successfully.
								</div>
							<?
							}
                            ?>	

							<?php
							if($_REQUEST['action']=="failed")
							{
							?>
							
                            <div class="alert alert-danger fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Error!</strong> Invalid old password.
						    </div>
							
							<?
							}
                            ?>							
                            
								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="<? echo BEGIN_PATH ?>/settings/changepw" autocomplete="off">
							
                                    
									<div class="form-group">
										<label class="col-md-2 control-label">Current Password :</label>
										<div class="col-md-8"><input type="password" name="oldpassword" id="oldpassword" value=""  class="form-control"></div>
									</div>
									
									<div class="form-group">
										<label class="col-md-2 control-label">New Password :</label>
										<div class="col-md-8"><input type="password" name="newpassword" id="newpassword" value=""  class="form-control"></div>
									</div>
									
									<div class="form-group">
										<label class="col-md-2 control-label">Confirm Password :</label>
										<div class="col-md-8"><input type="password" name="confirmpassword" id="confirmpassword" value=""  class="form-control"></div>
									</div>
									
								
									<input type="hidden" name="user_id" value="<?=$content[0]['id']?>">

									
                                             
                                    <div class="form-group">
									<label class="col-md-2 control-label">&nbsp;</label>
										<div class="col-md-8" style="text-align:left;">
                                        <input type="submit" name="add" class="btn btn-lg btn-primary" onClick="return validate();" value="Update">
										
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

<script type="text/javascript">
function validate()
{
	oldpassword=document.getElementById('oldpassword').value;
	if(oldpassword=="")
	{
	alert('Enter old password');
	document.getElementById('oldpassword').focus();
	return false;
	}

	newpassword=document.getElementById('newpassword').value;
	if(newpassword=="")
	{
	alert('Enter new password');
	document.getElementById('newpassword').focus();
	return false;
	}

	confirmpassword=document.getElementById('confirmpassword').value;
	if(confirmpassword=="")
	{
	alert('Enter confirm password');
	document.getElementById('confirmpassword').focus();
	return false;
	}
	
			if(newpassword!='' && confirmpassword!='')
		{
			if(newpassword!=confirmpassword)
			{
				alert("New password and confirm password should be same\n");
				document.getElementById('confirmpassword').focus();
				return false;
			}
		}
	
}
</script>	

</body>
</html>