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
								<h4>Update Assigned Role To Existing Users</h4>
								
							</div>
							<div class="widget-content">
							
							<?php
							if($_REQUEST['action']=="success")
							{
							?>
							
								<div class="alert alert-success fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Success!</strong> Role updated successfully.
								</div>
							<?
							}
                            ?>
                            
								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="<? echo BEGIN_PATH ?>/updaterole/update">
								
								
									<div class="form-group">
										<label class="col-md-2 control-label">User :</label>
										<div class="col-md-2">
										<select name="user_id" id="user_id" class="form-control">
										<option value="">Select User</option>
										<?php
										foreach($content as $key => $value)
										{
										?>
										<option value="<?=$value['id']?>"><?=$value['first_name']?> <?=$value['last_name']?></option>
										<?
										}
										?>
										</select>
										</div>
										
													
										<label class="col-md-2 control-label">Role :</label>
										<div class="col-md-3">
								    	<select name="role" id="role" class="form-control">
										<option value="">Select Role</option>
										<option value="Administrator">Administrator</option>
										<option value="Editor">Editor</option>
										<option value="Subscriber">Subscriber</option>
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
						
	
						
						
					</div>
					<div class="col-md-1"></div>
				</div>			



	</div>
	
<script type="text/javascript">
function validate()
{
	var user_id = document.getElementById("user_id").value;
	if(user_id=="")
	{
		alert("Please select user");
		document.getElementById("user_id").focus();
		return false;
		
	}
	
	var role = document.getElementById("role").value;
	if(role=="")
	{
		alert("Please select role");
		document.getElementById("role").focus();
		return false;
		
	}
}
</script>

</body>
</html>