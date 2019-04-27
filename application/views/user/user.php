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
<?php
$this->load->view('page-header.php');
?>
				<!-- /Page Header -->

				<!--=== Page Content ===-->
				<!--=== Statboxes ===-->

				<!-- /Statboxes -->
				
				



				<!--=== Normal ===-->
                <div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>All Operators</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
									
			
										
											<a href="<? echo BEGIN_PATH ?>/user/useradd"><button class="btn btn-danger">Add Operator</button></a>
										
									</div>
								</div>
							</div>
							<div class="widget-content">
							
							
																					<?php
							if($_REQUEST['action']=="success")
							{
							?>
							
								<div class="alert alert-success fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Success!</strong> User added successfully.
								</div>
							<?
							}
                            ?>
							
																					<?php
							if($_REQUEST['action']=="editsuccess")
							{
							?>
							
								<div class="alert alert-success fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Success!</strong> User info updated successfully.
								</div>
							<?
							}
                            ?>
							
								<table class="table table-striped table-bordered table-hover table-checkable datatable">
									<thead>
										<tr>
														<th>S.No</th>
											<th>Name</th>
											<th>Address</th>
											<th>Area</th>
											<th>Phone</th>
											<th style="text-align:center;">Role</th>
											<th style="width:100px; text-align:center;">Action</th>
										</tr>
									</thead>
									<tbody>
                                    
                <?
				$i=1;
				foreach($content as $key => $value)
				{
				?>
                                    
										<tr>
											<td class="checkbox-column">
											<?=$i?>
											</td>
											<td class="hidden-xs"><?=$value['name']?></td>
											<td class="hidden-xs"><?=$value['address']?></td>
											<td class="hidden-xs"><?=$value['area_name']?></td>
											<td class="hidden-xs"><?=$value['mobile']?></td>
											<td class="hidden-xs" style="text-align:center;">
<?php 
if($value['usertype']=="Admin")
{
?>											
<span class="label label-success" style="font-size:12px;">Admin</span>
<?
}
?>

<?php 
if($value['usertype']=="Cable Operator")
{
?>											
<span class="label label-info" style="font-size:12px;">Cable Operator</span>
<?
}
?>

<?php 
if($value['usertype']=="Employee")
{
?>											
<span class="label label-danger" style="font-size:12px;">Employee</span>
<?
}
?>

<?php 
if($value['usertype']=="Support Team")
{
?>											
<span class="label label-warning" style="font-size:12px;">Support Team</span>
<?
}
?>
											
											</td>
															<td align="center">
															
																   
	<ul class="table-controls">

	  	<li><a href="<? echo BEGIN_PATH ?>/user/useredit/?id=<?=$value['id']?>" class="bs-tooltip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a> </li>
	   <li></li>
	   	<li style="display:none"><a href="<? echo BEGIN_PATH ?>/user/del/?id=<?=$value['id']?>" onClick="return confirmDelete();" class="bs-tooltip" title="" data-original-title="Delete"><i class="icon-trash"></i></a> </li>

    </ul>	
										   
	       
							
                                            </td>
										</tr>
										
				<? 
$i++;				
				}
			    ?>
									</tbody>
								</table>
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