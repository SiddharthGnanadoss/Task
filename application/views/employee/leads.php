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
								<h4><i class="icon-reorder"></i>All Customer</h4>
								<div class="toolbar no-padding">
									<div class="btn-group" style="display:none;">
									
			
										
											<a href="#addLead"><button class="btn btn-danger">Add Customer</button></a>
											

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
									<strong>Success!</strong> Customer added successfully.
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
									<strong>Success!</strong> Customer info updated successfully.
								</div>
							<?
							}
                            ?>
							
								<table class="table table-striped table-bordered table-hover table-checkable datatable">
									<thead>
										<tr>
														<th>S.No</th>
												<th>Name</th>
											<th>Phone</th>
											<th>Area</th>
											<th style="text-align:center">Pending Amount</th>
											<th style="text-align:center;">Status</th>
											<th style="text-align:center; display:none;">Action</th>
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
											<td class="hidden-xs"><?=$value['phone_no']?></td>
											<td class="hidden-xs"><?=$value['area_name']?></td>
											<td class="hidden-xs" style="text-align:center;">
											<span class="label label-info" style="font-size:12px;">&#8377; &nbsp;<?=$value['pending_amount']?></span>
											</td>

											<td class="hidden-xs" style="text-align:center;">
											    
											    <?php
											    if($value['pending_amount']>0)
											    {
											    ?>
											    
											    <a href="#payNow<?=$i?>"><span class="label label-success" style="font-size:12px;">Pay Now</span></a>
											    <?
											    }
											    ?>
											    &nbsp;
											    
<a href="<? echo BEGIN_PATH ?>/employee/customerpaid/?cid=<?=$value['lead_id']?>"><span class="label label-danger" style="font-size:12px;">Paid Details</span></a> &nbsp;
											    
<a href="<? echo BEGIN_PATH ?>/employee/paiddetails/?cid=<?=$value['lead_id']?>"><span class="label label-danger" style="font-size:12px; display:none">View by Month</span></a>
											
											</td>
															<td align="center" style="display:none">
															
																   
	<ul class="table-controls">
<li><a href="<? echo BEGIN_PATH ?>/employee/paiddetails/?cid=<?=$value['lead_id']?>" class="bs-tooltip" title="" data-original-title="Pay by Month"><i class="icon-search"></i></a> </li>
<li></li>
	  	<li><a href="#editLead<?=$i?>" class="bs-tooltip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a> </li>
	   <li></li>
	   
  
	   	<li><a href="<? echo BEGIN_PATH ?>/user/del/?id=<?=$value['id']?>" onClick="return confirmDelete();" class="bs-tooltip" title="" data-original-title="Delete"><i class="icon-trash"></i></a> </li>

    </ul>	
										   
	       
							
                                            </td>
										</tr>
										
										
<!-- Paynow -->

<div class="remodal" data-remodal-id="payNow<?=$i?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
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
                            
<form class="form-horizontal row-border" id="validate-1" method="post" action="<? echo BEGIN_PATH ?>/employee/paidAllupdate">
							
<div class="row">
    <div class="col-md-2 col-sm-12">&nbsp;</div>
                        <div class="col-md-6 col-sm-12">

         
<div class="form-group">
<label class="col-md-4 control-label" for="company">Amount</label>
<div class="col-md-6"><input type="text" id="paid_amount" name="paid_amount" value="" class="form-control"></div>
</div>

</div>

<input type="hidden" id="customer_id" name="customer_id" value="<?=$value['lead_id']?>">

                        </div>
                    </div>
                                    
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-8" style="text-align:left;">
<input type="submit" name="serviceAdd" class="remodal-confirm" value="Pay" onclick="return addCustomer();">		<button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
</div>
</div>


									</form>
							</div>
						</div>
					</div>
				</div>

				

</div>
										
										
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
								<h4><i class="icon-reorder"></i>Lead - Edit</h4>
							</div>
							<div class="widget-content">
                            
<form class="form-horizontal row-border" id="validate-1" method="post" action="<? echo BEGIN_PATH ?>/employee/update">
							
<div class="row">
                        <div class="col-md-6 col-sm-12">
						
		
						
<div class="form-group">
<label class="col-md-4 control-label" for="account">Name<small class="red"></small> </label>
<div class="col-lg-8" style="padding-bottom:15px;"><input type="text" id="name" name="name" value="<?=$value['name']?>" class="form-control" required="">
</div>
</div>


<div class="form-group"><label class="col-md-4 control-label" for="email">Email</label>
<div class="col-lg-8" style="padding-bottom:15px;"><input type="text" id="email" name="email" value="<?=$value['email']?>" class="form-control" required="">
</div>
</div>
							
<div class="form-group"><label class="col-md-4 control-label" for="email">PhoneNo</label>
<div class="col-lg-8" style="padding-bottom:15px;"><input type="text" id="phone_no" name="phone_no" value="<?=$value['phone_no']?>"  class="form-control" required="">
</div>
</div>

<div class="form-group"><label class="col-md-4 control-label" for="email">Address</label>
<div class="col-lg-8" style="padding-bottom:15px;"><input type="text" id="address" name="address" value="<?=$value['address']?>"  class="form-control" required="">
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="company">Area</label>
<div class="col-lg-8" style="padding-bottom:15px;">

<select name="area" id="area" class="form-control">  
<option value="">Select Area</option>
                <?
				foreach($content5 as $key5 => $value5)
				{
				?>
<option <?php if($value5['area_id']==$value['area']) { echo "Selected"; } ?> value="<?=$value5['area_id']?>"><?=$value5['area_name']?></option>				
				<?php
				}
				?>
</select>

</div>
</div>

<div class="form-group"><label class="col-md-4 control-label" for="email">Identity</label>
<div class="col-lg-8" style="padding-bottom:15px;"><input type="text" id="identity" name="identity" value="<?=$value['identity']?>"  class="form-control" required="">
</div>
</div>


                  

          
                        </div>
                        <div class="col-md-6 col-sm-12">
                            
<div class="form-group">
<label class="col-md-5 control-label" for="company">Pending Amount</label>
<div class="col-lg-7" style="padding-bottom:15px;">
<input type="text" id="pending_amount" name="pending_amount" value="<?=$value['pending_amount']?>" class="form-control" required>
</div>
</div>

         
<div class="form-group">
<label class="col-md-5 control-label" for="company">Operator Name</label>
<div class="col-lg-7" style="padding-bottom:15px;">

<select name="operator_id" id="operator_id" class="form-control">  
<option value="">Select Operator</option>
                <?
				foreach($content3 as $key3 => $value3)
				{
				?>
<option <?php if($value3['id']===$value['operator_id']) { echo "Selected"; } ?> value="<?=$value3['id']?>"><?=$value3['name']?></option>				
				<?php
				}
				?>
</select>

</div>
</div>

<div class="form-group">
<label class="col-md-5 control-label" for="company">Settop Box No</label>
<div class="col-lg-7" style="padding-bottom:15px;">
<input type="text" id="settop_box_no" name="settop_box_no" value="<?=$value['settop_box_no']?>" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-md-5 control-label" for="company">Card No</label>
<div class="col-lg-7" style="padding-bottom:15px;">
    
<input type="text" id="card_no" name="card_no" value="<?=$value['card_no']?>" class="form-control" required>
    
</div>
</div>

<div class="form-group">
<label class="col-md-5 control-label" for="company">Package</label>
<div class="col-lg-7" style="padding-bottom:15px;">

<select name="package_id" id="package_id" class="form-control">  
<option value="">Select Package</option>
                <?
				foreach($content4 as $key4 => $value4)
				{
				?>
<option <?php if($value4['package_id']===$value['package_id']) { echo "Selected"; } ?> value="<?=$value4['package_id']?>"><?=$value4['name']?></option>				
				<?php
				}
				?>
</select>

</div>
</div>


                        </div>
                    </div>
                                    
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-8" style="text-align:left;">
<input type="submit" name="serviceAdd" class="remodal-confirm" value="Update" onclick="return addCustomer();">		<button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
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