<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>

<?php include("collection-popup.php"); ?>	

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
								<h4 style="font-size:20px;">&nbsp;<i class="icon-reorder"></i> <?=$cus[0]['name']?> </h4>
								<div class="toolbar no-padding">
<div class="btn-group">
									
			
										
											<a href="<?=$BEGIN_PATH?>/mani/employee"><button class="btn btn-danger">Back</button></a>
											

									</div>
								</div>
							</div>
							<div class="widget-content">


								<table class="table table-striped table-bordered table-hover table-checkable datatable">
									<thead>
										<tr>
														<th>S.No</th>
											<th>Year</th>
											<th>Month</th>
											<th>Package</th>
											<th style="text-align:center">Amount</th>
											
																				<th style="text-align:center">Paid Amount</th>
											
											<th style="text-align:center">Status</th>
				
											<th style="text-align:center">Pay</th>
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
											<td><?=$value['year']?></td>
											<td><?=$value['month_name']?></td>
											<td><?=$value['pname']?></td>
											<td style="text-align:center;"><span class="label label-primary" style="font-size:12px;"><?=$value['pamount']?></span></td>
																					<td style="text-align:center;"><span class="label label-primary" style="font-size:12px;"><?=$value['paid_amount']?></span></td>
											
											<td style="text-align:center;">
<?php
if($value['paid_status']=="Paid")
{
?>
<span class="label label-success" style="font-size:12px;"><?=$value['paid_status']?></span>
<?
}
else
{
?>
<span class="label label-danger" style="font-size:12px;"><?=$value['paid_status']?></span>
<?
}
?>
</td>
											
											
											
<?php
$start_month = $value['start_month'];
$p_id = $value['package_id'];
?>
											
											<td style="text-align:center;">
											    <?php
											    if($value['operator_id']=="")
											    {
											    ?>
<a href="#editLead<?=$i?>" class="bs-tooltip" title="" data-original-title="Edit"><span class="label label-info" style="font-size:12px;">Pay Now</span></a>
<?
}
?>

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
						<div class="widget box" style="height:150px;">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Payment</h4>
							</div>
							<div class="widget-content">
                            
<form class="form-horizontal row-border" id="validate-1" method="post" action="<? echo BEGIN_PATH ?>/employee/paidupdate">
							
<div class="row">
    <div class="col-md-2 col-sm-12">&nbsp;</div>
                        <div class="col-md-6 col-sm-12">

         
<div class="form-group">
<label class="col-md-4 control-label" for="company">Amount</label>
<div class="col-md-6"><input type="text" id="paid_amount" name="paid_amount" value="" class="form-control"></div>
</div>

</div>

<input type="hidden" id="customer_id" name="customer_id" value="<?=$_REQUEST['cid']?>">
<input type="hidden" id="bill_id" name="bill_id" value="<?=$value['bill_id']?>">


                        </div>
                    </div>
                                    
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-8" style="text-align:left;">
<input type="submit" name="serviceAdd" class="remodal-confirm" value="Pay" onclick="return addCustomer();">		<button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
</div>
</div>

<input type="hidden" id="bill_id" name="bill_id" value="<?=$value['bill_id']?>">

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