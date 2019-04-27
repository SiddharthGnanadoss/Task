<?php
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

</head>

<body>

	<!-- Header -->
	
	
	<?php
$this->load->view('inner-header');
?>
	
	
    
    <!-- /.header -->

	<div id="container" class="fixed-header sidebar-closed">
	
	<div class="row" style="background-color:#0c59cf;">
		
			
	<?php
$this->load->view('menu');
?>
		
	</div>
	
		
                <div class="row" style="margin-top:20px;">
				    <div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>User - Edit</h4>
								
							</div>
							<div class="widget-content">
                            
								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="<? echo BEGIN_PATH ?>/user/update" autocomplete="off">
							
                                    
									<div class="form-group">
										<label class="col-md-2 control-label">User Name :</label>
										<div class="col-md-8"><input type="text" name="user_name" id="user_name" value="<?=$content[0]['user_name']?>"  class="form-control"></div>
									</div>
									
									<div class="form-group">
										<label class="col-md-2 control-label">First Name :</label>
										<div class="col-md-8"><input type="text" name="first_name" id="first_name" value="<?=$content[0]['first_name']?>"  class="form-control"></div>
									</div>
									
									<div class="form-group">
										<label class="col-md-2 control-label">Last Name :</label>
										<div class="col-md-8"><input type="text" name="last_name" id="last_name" value="<?=$content[0]['last_name']?>"  class="form-control"></div>
									</div>
									
									<div class="form-group">
										<label class="col-md-2 control-label">Email :</label>
										<div class="col-md-8"><input type="text" name="email" id="email" value="<?=$content[0]['email']?>"  class="form-control"></div>
									</div>
									
									<div class="form-group">
										<label class="col-md-2 control-label">Phone :</label>
										<div class="col-md-8"><input type="text" name="phone" id="phone" value="<?=$content[0]['phone']?>"  class="form-control"></div>
									</div>
									
									<div class="form-group">
										<label class="col-md-2 control-label">Gender :</label>
										<div class="col-md-8" style="text-align:left;">
										<input type="radio" name="gender" value="Male" checked> Male
										&nbsp;&nbsp;
										<input type="radio" name="gender" value="Female"> Female
										</div>
									</div>
									
										
										
									<div class="form-group">
										<label class="col-md-2 control-label">Role :</label>
										<div class="col-md-8">
										
										<select name="role" id="role" class="form-control">
										<option value="">Select Role</option>
										
										<?php
										foreach($role as $key => $value)
										{
										?>
										<option <? if($content[0]['role']==$value['role']) { echo "selected"; } ?> value="<?=$value['role']?>"><?=$value['role']?></option>
										<?
										}
										?>
										</select>
										
										</div>
									</div>
									
									<input type="hidden" name="id" value="<?=$content[0]['id']?>">

									
                                             
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
					<div class="col-md-1"></div>
				</div>			



	</div>
	
<script type="text/javascript">
function validate()
{
	var user_name = document.getElementById("user_name").value;
	if(user_name=="")
	{
		alert("Please enter user name");
		document.getElementById("user_name").focus();
		return false;
		
	}
	
    var first_name = document.getElementById("first_name").value;
	if(first_name=="")
	{
		alert("Please enter first name");
		document.getElementById("first_name").focus();
		return false;
		
	}
	
	var last_name = document.getElementById("last_name").value;
	if(last_name=="")
	{
		alert("Please enter last name");
		document.getElementById("last_name").focus();
		return false;
		
	}
    
	var email = document.getElementById("email").value;
	if(email=="")
	{
		alert("Please enter email");
		document.getElementById("email").focus();
		return false;
		
	}
	
    var phone = document.getElementById("phone").value;
	if(phone=="")
	{
		alert("Please enter phone");
		document.getElementById("phone").focus();
		return false;
		
	}
	
	var password = document.getElementById("password").value;
	if(password=="")
	{
		alert("Please enter password");
		document.getElementById("password").focus();
		return false;
		
	}
	
	var cpassword = document.getElementById("cpassword").value;
	if(cpassword=="")
	{
		alert("Please enter confirm password");
		document.getElementById("cpassword").focus();
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