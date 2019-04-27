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
	

		
                <div class="row" style="margin-top:20px;">
				    <div class="col-md-1"></div>
					<div class="col-md-10" style="margin-top:20px !important;">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Profile - Edit</h4>
								
							</div>
							<div class="widget-content">
                            
								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="<? echo BEGIN_PATH ?>/settings/update" autocomplete="off">
							
                                    

									
					
									<div class="form-group">
										<label class="col-md-2 control-label">Name :</label>
										<div class="col-md-8"><input type="text" name="name" id="name" value="<?=$content[0]['name']?>"  class="form-control"></div>
									</div>
									
									<div class="form-group">
										<label class="col-md-2 control-label">Email :</label>
										<div class="col-md-8"><input type="text" name="email" id="email" readonly value="<?=$content[0]['email']?>"  class="form-control"></div>
									</div>
									
									<div class="form-group">
										<label class="col-md-2 control-label">User Name :</label>
										<div class="col-md-8"><input type="text" name="username" id="username" value="<?=$content[0]['username']?>"  class="form-control"></div>
									</div>
									

									
									<input type="hidden" name="id" value="<?=$content[0]['id']?>">

									
                                             
                                    <div class="form-group">
									<label class="col-md-2 control-label">&nbsp;</label>
										<div class="col-md-8" style="text-align:left;">
<input type="submit" name="add" class="btn btn-lg btn-primary" onClick="return validate();" value="Update">
<a href="<? echo BEGIN_PATH ?>/settings"><input type="button" name="cancel" class="btn btn-lg btn-primary" value="Cancel"></a>										
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
	
	var signature = document.getElementById("signature").value;
	if(signature=="")
	{
		alert("Please enter signature");
		document.getElementById("signature").focus();
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