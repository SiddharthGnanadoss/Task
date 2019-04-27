<?php
error_reporting(0);
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

<style>
.dataTables_header
{
	display:none !important;
}
.dataTables_footer
{
	display:none !important;
}
</style>

</head>

<body>

	<!-- Header -->
	
	
	<?php
$this->load->view('inner-header');
?>
	
	
    
    <!-- /.header -->

	<div id="container" class="fixed-header sidebar-closed">
	
		
                <div class="row" style="margin-top:20px;">
				    <div class="col-md-1"></div>
					<div class="col-md-10" style="margin-top:20px !important;">
				
						
												<div class="widget box">
							<div class="widget-header">
								<h4>Role Restriction</h4>
								
							</div>
							<div class="widget-content">
							
														<?php
							if($_REQUEST['action']=="success")
							{
							?>
							
								<div class="alert alert-success fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Success!</strong> Level updated successfully.
								</div>
							<?
							}
                            ?>
                            
								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="<? echo BEGIN_PATH ?>/restriction/update">
								
								
									<div class="form-group">
										<label class="col-md-2 control-label">Role :</label>
										<div class="col-md-2">
										<select name="role" id="role" class="form-control">
										<option value="">Select Role</option>
										
										<?php
										foreach($content as $key => $value)
										{
										?>
										<option value="<?=$value['id']?>"><?=$value['role']?> </option>
										<?
										}
										?>
										</select>
										</div>
										
													
										<label class="col-md-2 control-label">Level :</label>
										<div class="col-md-3">
										<select name="level" id="level" class="form-control">
										<option value="">Select Level</option>
										<option value="Level 1">Level 1</option>
										<option value="Level 2">Level 2</option>
										<option value="Level 3">Level 3</option>
										<option value="Level 4">Level 4</option>
										</select>
										</div>
									</div>
		   
												
                                             
                                    <div class="form-group">
									<label class="col-md-5">&nbsp;</label>
										<div class="col-md-6" style="text-align:left;">
                                        <input type="submit" name="add" class="btn btn-lg btn-primary" onClick="return validate();" value="Update">
										
                                        </div>
									</div>
                         

									</form>
									
							</div>
						</div>
						
	
	
							<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Role Assigned</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
									
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
										
								
									</div>
								</div>
							</div>
							<div class="widget-content">
								<table class="table table-striped table-bordered table-hover table-checkable datatable">
									<thead>
										<tr>
														<th>S.No</th>
													<th>Role</th>
											<th style="width:20%; text-align:center;">Access Level</th>
										</tr>
									</thead>
									<tbody>
                                    
<?php
$i=1;
foreach($content as $key => $value)
{
?> 
                                    
										<tr>
											<td class="checkbox-column">
											<?=$i?>
											</td>
													<td ><?=$value['role']?></td>
															<td align="center">
															
															
												<?=$value['level']?>						   
										        
							
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
					<div class="col-md-1"></div>
				</div>			



	</div>
	
<script type="text/javascript">
function validate()
{
	var role = document.getElementById("role").value;
	if(role=="")
	{
		alert("Please select role");
		document.getElementById("role").focus();
		return false;
		
	}
	
	var level = document.getElementById("level").value;
	if(level=="")
	{
		alert("Please select level");
		document.getElementById("level").focus();
		return false;
		
	}
}
</script>

</body>
</html>