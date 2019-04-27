<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>

<?php include("lead-popup.php"); ?>	

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
$this->load->view('emp-leftmenu.php');
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
								<h4><i class="icon-reorder"></i>All Leads</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
									
										
										
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
									<strong>Success!</strong> Lead added successfully.
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
									<strong>Success!</strong> Lead info updated successfully.
								</div>
							<?
							}
                            ?>
							
								<table class="table table-striped table-bordered table-hover table-checkable datatable">
									<thead>
										<tr>
											<th>S.No</th>
											<th>Date</th>
											<th>Name</th>
											<th>Phone Number</th>
											<th style="text-align:center;">Status</th>
											<th style="text-align:center;">Call Action</th>
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
											<td class="hidden-xs"><?=$value['lead_date']?></td>
											<td class="hidden-xs"><?=$value['name']?></td>
											<td class="hidden-xs"><?=$value['phone_no']?></td>

											<td class="hidden-xs">&nbsp;</td>
															<td align="center">
															
																   
<a href="#editLead<?=$i?>"><span class="label label-primary" style="font-size:15px;">Make Call</span></a>	
										   
	       
							
                                            </td>
										</tr>
										
										
<!-- leadEdit -->

<div class="remodal" data-remodal-id="editLead<?=$i?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
<div>
<style>
.remodal
{
	    max-width: 70% !important;
}
</style>

               <div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Make Call</h4>
							</div>
							<div class="widget-content">
                            
<form class="form-horizontal row-border" id="validate-1" method="post" action="#">
							
<div class="row">
                        <div class="col-md-6 col-sm-12">
						
		
						
<div class="form-group">
<label class="col-md-4 control-label" for="account">Name<small class="red"></small> &nbsp;: </label>
<div class="col-lg-8" style="padding-bottom:15px;"><?=$value['name']?></div>
</div>
							
<div class="form-group"><label class="col-md-4 control-label" for="email">PhoneNo &nbsp;:</label>
<div class="col-lg-8" style="padding-bottom:15px;"><span class="btn btn-xs btn-success"><?=$value['phone_no']?></span></div>
</div>


<div class="form-group"><label class="col-md-4 control-label" for="email">Email &nbsp;:</label>
<div class="col-lg-8" style="padding-bottom:15px;"><?=$value['email']?>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="company">Address &nbsp;:</label>
<div class="col-lg-8" style="padding-bottom:15px;"><?=$value['address']?>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="company">City &nbsp;:</label>
<div class="col-lg-8" style="padding-bottom:15px;"><?=$value['city']?>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="company">State &nbsp;:</label>
<div class="col-lg-8" style="padding-bottom:15px;"><?=$value['state']?>
</div>
</div>
                  

          
                        </div>
                        <div class="col-md-6 col-sm-12">

<div class="form-group">
<div class="col-md-4">
<span class="btn btn-success" style="width:120px;">Start Time</span>
</div>
<div class="col-md-4">
8.00AM
</div>
</div>

<div style="clear:both; padding-top:10px;"></div>   

<div class="form-group">
<div class="col-md-4" style="padding-bottom:15px;">
<span class="btn btn-danger" style="width:120px;">End Time</span>
</div>
<div class="col-md-4">
8.00AM
</div>
</div>   

<div class="form-group">
<div class="col-lg-12" style="padding-bottom:15px;">
<textarea style="width:100%; height:100px;"></textarea>
<span class="btn btn-primary" style="width:120px;">Submit</span>
</div>
</div>    



                        </div>
                    </div>
                                    
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-8" style="text-align:left;">
	<button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
</div>
</div>

<input type="hidden" id="lead_id" name="lead_id" value="<?=$value['lead_id']?>">

									</form>
							</div>
						</div>
					</div>
				</div>

				

</div>
</div>
										
										
										
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