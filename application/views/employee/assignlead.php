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
$this->load->view('team-leftmenu.php');
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
				
				
                <div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Assign Lead To Employee</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
									

															
									</div>
								</div>
							</div>
							<div class="widget-content">

							<form class="form-horizontal" action="<? echo BEGIN_PATH ?>/assign/assigntolead" method="post">
                      
                         <fieldset>
                             <div class="row roww" style="margin-top:20px;">
                        
						
                                  <div class="col-sm-6 text-center">

<div class="form-group">
<label class="col-md-4 control-label" for="account">Lead Range<small class="red"></small> </label>
<div class="col-lg-8">

                                         <select name="lead_range" id="lead_range" class="form-control" id="choseReport" required>
 
                                            <option value="">Select Lead Range</option>
											
<?php
$j=5;
for($i=1;$i<=20;$i++)
{
?>
<option value="<?=$j?>">1-<?=$j?></option>
<?
$j=$j+5;
}
?>
                                          </select>

</div>
</div>
								  
								  
                                  </div>
								  
					
                                  <div class="col-sm-6 text-center">

<div class="form-group">
<label class="col-md-4 control-label" for="account">Team Leader<small class="red"></small> </label>
<div class="col-lg-8">

                                         <select name="teamleader_id" id="teamleader_id" class="form-control" id="choseReport" required>
                                              <option value="">Select Employee</option>
											  
                <?
				$i=1;
				foreach($user as $key => $value)
				{
				?>
											  
<option value="<?=$value['id']?>"><?=$value['name']?></option>

<?
				}
				?>
                                          </select>

</div>
</div>
								  
								  
                                  </div>
								  
								  
                         
						 
                             </div>

  
                                  <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-6 ">
                                       <div class="form-group">
                                           <div class="col-lg-12 text-center">
                                           <input type="submit" name="add" class="btn btn-lg btn-primary" onClick="return validate();" value="Assign">
                                           </div>
                                       </div>      
                                    </div>
                                    <div class="col-sm-3"></div>
                                  </div>

                        </fieldset>
                            <!-- /.row -->
                    </form>
							
							
							</div>
						</div>
					</div>
				</div> 


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
											<th>Email</th>
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
											<td class="hidden-xs"><?=$value['email']?></td>
										
	
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
								<h4><i class="icon-reorder"></i>Lead - Edit</h4>
							</div>
							<div class="widget-content">
                            
<form class="form-horizontal row-border" id="validate-1" method="post" action="<? echo BEGIN_PATH ?>/leads/update">
							
<div class="row">
                        <div class="col-md-6 col-sm-12">
						
		
						
<div class="form-group">
<label class="col-md-4 control-label" for="account">Name<small class="red"></small> </label>
<div class="col-lg-8" style="padding-bottom:15px;"><input type="text" id="name" name="name" value="<?=$value['name']?>" class="form-control" required="">
</div>
</div>
							
<div class="form-group"><label class="col-md-4 control-label" for="email">PhoneNo</label>
<div class="col-lg-8" style="padding-bottom:15px;"><input type="text" id="phone_no" name="phone_no" value="<?=$value['phone_no']?>"  class="form-control" required="">
</div>
</div>


<div class="form-group"><label class="col-md-4 control-label" for="email">Email</label>
<div class="col-lg-8" style="padding-bottom:15px;"><input type="text" id="email" name="email" value="<?=$value['email']?>" class="form-control" required="">
</div>
</div>
                  

          
                        </div>
                        <div class="col-md-6 col-sm-12">

         
<div class="form-group">
<label class="col-md-4 control-label" for="company">Address</label>
<div class="col-lg-8" style="padding-bottom:15px;"><input type="text" id="address" name="address" value="<?=$value['address']?>" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="company">City</label>
<div class="col-lg-8" style="padding-bottom:15px;"><input type="text" id="city" name="city" value="<?=$value['city']?>" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="company">State</label>
<div class="col-lg-8" style="padding-bottom:15px;"><input type="text" id="state" name="state" value="<?=$value['state']?>" class="form-control" required>
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