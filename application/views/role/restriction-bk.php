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
								<h4><i class="icon-reorder"></i>Role Restriction</h4>
								
							</div>
					
						</div>
						
						
												<div class="widget box">
							<div class="widget-header">
								<h4>Administrator - All Records</h4>
								
							</div>
							<div class="widget-content">
                            
								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="<? echo BEGIN_PATH ?>/role/view">
							
                                					<div class="form-group">
										
										<div class="col-md-1">
										<input type="checkbox" name="role" id="role">
										View
										</div>
										<div class="col-md-1">
										<input type="checkbox" name="role" id="role">
										Add
										</div>
										<div class="col-md-1">
										<input type="checkbox" name="role" id="role">
										Edit
										</div>
										<div class="col-md-1">
										<input type="checkbox" name="role" id="role">
										Delete
										</div>
										
									</div>    
												
                                             
                                    <div class="form-group">
									<label class="col-md-3">&nbsp;</label>
										<div class="col-md-8" style="text-align:left;">
                                        <input type="submit" name="add" class="btn btn-lg btn-primary" onClick="return validate();" value="Update">
										
                                        </div>
									</div>
                         

									</form>
									
							</div>
						</div>
						
						
												<div class="widget box">
							<div class="widget-header">
								<h4>Editor - All Records</h4>
								
							</div>
							<div class="widget-content">
                            
								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="<? echo BEGIN_PATH ?>/role/view">
							
                                    
												
                                             
                                                       					<div class="form-group">
										
										<div class="col-md-1">
										<input type="checkbox" name="role" id="role">
										View
										</div>
										<div class="col-md-1">
										<input type="checkbox" name="role" id="role">
										Add
										</div>
										<div class="col-md-1">
										<input type="checkbox" name="role" id="role">
										Edit
										</div>
	
										
									</div>    
												
                                             
                                    <div class="form-group">
									<label class="col-md-3">&nbsp;</label>
										<div class="col-md-8" style="text-align:left;">
                                        <input type="submit" name="add" class="btn btn-lg btn-primary" onClick="return validate();" value="Update">
										
                                        </div>
									</div>
                         

									</form>
									
							</div>
						</div>
						
																		<div class="widget box">
							<div class="widget-header">
								<h4>User - Own Records</h4>
								
							</div>
							<div class="widget-content">
                            
								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="<? echo BEGIN_PATH ?>/role/view">
							
                                    
												
                                             
                                                       					<div class="form-group">
										
										<div class="col-md-1">
										<input type="checkbox" name="role" id="role">
										View
										</div>
										<div class="col-md-1">
										<input type="checkbox" name="role" id="role">
										Add
										</div>
										<div class="col-md-1">
										<input type="checkbox" name="role" id="role">
										Edit
										</div>
										
																			
										<div class="col-md-1">
										<input type="checkbox" name="role" id="role">
										Delete
										</div>
	
										
									</div>    
												
                                             
                                    <div class="form-group">
									<label class="col-md-3">&nbsp;</label>
										<div class="col-md-8" style="text-align:left;">
                                        <input type="submit" name="add" class="btn btn-lg btn-primary" onClick="return validate();" value="Update">
										
                                        </div>
									</div>
                         

									</form>
									
							</div>
						</div>
						
						
												<div class="widget box">
							<div class="widget-header">
								<h4>Subscriber - All Records</h4>
								
							</div>
							<div class="widget-content">
                            
								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="<? echo BEGIN_PATH ?>/role/view">
							
                                    
					                              					<div class="form-group">
										
										<div class="col-md-1">
										<input type="checkbox" name="role" id="role">
										View
										</div>
			
													
									</div>    
												
                                             
                                    <div class="form-group">
									<label class="col-md-3">&nbsp;</label>
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
	var role = document.getElementById("role").value;
	if(role=="")
	{
		alert("Please enter role name");
		document.getElementById("role").focus();
		return false;
		
	}
}
</script>

</body>
</html>