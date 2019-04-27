<?php 
session_start();
error_reporting(0);
include('include/config.php');

if($_SESSION['admin_id']=="")
{
?>
<script>window.location="index.php";</script>
<?
}


$ids=$_REQUEST['ids'];

$siteID=mysql_real_escape_string($_REQUEST['siteID']);
$refNumber=mysql_real_escape_string($_REQUEST['refNumber']);
$materialID=mysql_real_escape_string($_REQUEST['materialID']);
$description=mysql_real_escape_string($_REQUEST['description']);
$quantity=mysql_real_escape_string($_REQUEST['quantity']);



if(isset($_REQUEST['add']))
{
	
$sql="insert into gkar_materialrequest (siteID,refNumber,materialID,description,quantity) values ('".$siteID."','".$refNumber."','".$materialID."','".$description."','".$quantity."')";  
		mysql_query($sql);
		$action="success";
}

	if(isset($_REQUEST['edit']))
	{
	$sql="update gkar_materialrequest set siteID='$siteID', refNumber='$refNumber', materialID='$materialID', quantity='$quantity' where mrID=".$_REQUEST['ids']; 
	$query1=mysql_query($sql);
	$msg="Updated  successfully!";	
	?>
	<script>window.location="materialrequest.php?act=editsuccess";</script>
	<?
	}

if($_REQUEST['action']=="delete")
{
$sql="delete from gkar_materialrequest where mrID=".$_REQUEST['ids']." limit 1";
$query=mysql_query($sql);
?>
<script>window.location="materialrequest.php?act=delsuccess";</script>
<?
}


if($_REQUEST['action']=="statusupdate")
{
$status=$_REQUEST['status'];
$uid=$_REQUEST['uid'];   
$sql="update gkar_materialrequest set active=$status where userID=$uid"; 
$query=mysql_query($sql);
?>
<script>window.location="materialrequest.php";</script>
<?
}

if($_REQUEST['action']=="roleupdate")
{
$role=$_REQUEST['role'];
$uid=$_REQUEST['uid'];   
$sql="update gkar_materialrequest set userRole='".$role."' where userID=$uid"; 
$query=mysql_query($sql);
?>
<script>window.location="materialrequest.php";</script>
<?
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />

<?php include('include/script.php'); ?>
	<!-- Forms -->
	<script type="text/javascript" src="plugins/typeahead/typeahead.min.js"></script> <!-- AutoComplete -->
	<script type="text/javascript" src="plugins/autosize/jquery.autosize.min.js"></script>
	<script type="text/javascript" src="plugins/inputlimiter/jquery.inputlimiter.min.js"></script>
	<script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script> <!-- Styled radio and checkboxes -->
	<script type="text/javascript" src="plugins/tagsinput/jquery.tagsinput.min.js"></script>
	<script type="text/javascript" src="plugins/select2/select2.min.js"></script> <!-- Styled select boxes -->
	<script type="text/javascript" src="plugins/fileinput/fileinput.js"></script>
	<script type="text/javascript" src="plugins/duallistbox/jquery.duallistbox.min.js"></script>
	<script type="text/javascript" src="plugins/bootstrap-inputmask/jquery.inputmask.min.js"></script>
	<script type="text/javascript" src="plugins/bootstrap-wysihtml5/wysihtml5.min.js"></script>
	<script type="text/javascript" src="plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.min.js"></script>
	<script type="text/javascript" src="plugins/bootstrap-multiselect/bootstrap-multiselect.min.js"></script>
    
    
    <script type="text/javascript" src="plugins/validation/jquery.validate.min.js"></script>
	<script type="text/javascript" src="plugins/validation/additional-methods.min.js"></script>
    
    <script type="text/javascript" src="plugins/datatables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="plugins/datatables/tabletools/TableTools.min.js"></script> <!-- optional -->
	<script type="text/javascript" src="plugins/datatables/colvis/ColVis.min.js"></script> <!-- optional -->
	<script type="text/javascript" src="plugins/datatables/DT_bootstrap.js"></script>
    
<style type="text/css">
.wysihtml5-sandbox
{
	height:200px !important;
}
.fileinput-holder input-group input-width-xlarge
{
	float:left;
}
</style>

<script type="text/javascript">
function validation()
{
	siteID = document.getElementById('siteID').value;
	if(siteID=="") 
	{ 
		alert("Please select site name");
		document.getElementById('siteID').focus();			
		return false;
	}
	
	refNumber = document.getElementById('refNumber').value;
	if(refNumber=="") 
	{ 
		alert("Please enter reference number");
		document.getElementById('refNumber').focus();			
		return false;
	}
	
	quantity = document.getElementById('quantity').value;
	if(quantity=="") 
	{ 
		alert("Please enter quantity");
		document.getElementById('quantity').focus();			
		return false;
	}
	
	return true;
}
function test()
{	
document.getElementById('theValue').value=document.getElementById('web_image').value;
return true;
}
function confirmDelete(){	
	{ 
		answer = confirm("Do you want to delete this item?")

		if (answer ==0) 
		{ 
			return false;
		} 

	}
}

function confirmDelete(){	
	{ 
		answer = confirm("Do you want to delete this item?")

		if (answer ==0) 
		{ 
			return false;
		} 

	}
}

</script>
<style type="text/css">
.form-control
{
width:50%;
}
</style>


    
</head>

<body class="breakpoint-1200 theme-dark">

	<!-- Header -->
	
    <?php include('include/header.php'); ?> 
    
    <!-- /.header -->

	<div id="container" style="margin-top:60px;">
		
        <?php include('include/leftmenu.php'); ?> 
		<!-- /Sidebar -->

		<div id="content">
			<div class="container">
            
				<!-- Breadcrumbs line -->
				<?php include('include/breadcrumbs.php'); ?> 
				<!-- /Breadcrumbs line -->

				<!--=== Page Header ===-->
				
                <div class="page-header">
					<div class="page-title">
						<h3>Material Request</h3>
					</div>

					<!-- Page Stats -->
					
					<!-- /Page Stats -->
				</div>
                
				<!-- /Page Header -->

				<!--=== Page Content ===-->
                
                		
                                                      <?php
								if($action=="success")
								{
								?>
                                
								<div class="alert alert-success fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Success!</strong>Request added successfully!.
								</div>
                                    
                                 <?
								}
								?>
                                
                                    		
                                                      <?php
								if($_REQUEST['act']=="editsuccess")
								{
								?>
                                
								<div class="alert alert-success fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Success!</strong> Request updated successfully!.
								</div>
                                    
                                 <?
								}
								?>
                                
                                                                                     <?php
								if($_REQUEST['act']=="delsuccess")
								{
								?>
                                
								<div class="alert alert-success fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Success!</strong> Request deleted successfully!.
								</div>
                                    
                                 <?
								}
								?>
                                
                
                <?
				if($_REQUEST['action']=="add")
				{
				?>
                <div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Material Request - Add</h4>
							</div>
							<div class="widget-content">
                            
								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="#">
							
                                    
									<div class="form-group">
										<label class="col-md-2 control-label">Site Name :</label>
										<div class="col-md-10">
										<select name="siteID" id="siteID" class="form-control">
										<option value="">Select Site Name</option>
										<?php
										$sql = "select * from gkar_siteinfo";
										$val = mysql_query($sql);
										while($fetch = mysql_fetch_array($val))
										{
										?>
																	
										<option value="<?=$fetch['siteID']?>"><?=$fetch['siteName']?></option>
										
										<?
										}
										?>
										</select>
										</div>
									</div>
									
								
									<div class="form-group">
										<label class="col-md-2 control-label">Reference Number :</label>
										<div class="col-md-10"><input type="text" name="refNumber" id="refNumber"  class="form-control"></div>
									</div>
									
									
									<div class="form-group">
										<label class="col-md-2 control-label">Material Name :</label>
										<div class="col-md-10">
										<select name="materialID" id="materialID" class="form-control">
										<option value="">Select Material</option>
										
									    <?php
										$sql = "select * from gkar_material";
										$val = mysql_query($sql);
										while($fetch = mysql_fetch_array($val))
										{
										?>
																	
										<option value="<?=$fetch['materialID']?>"><?=$fetch['description']?></option>
										
										<?
										}
										?>
										
										</select>
										</div>
									</div>
									
									
								   <div class="form-group">
										<label class="col-md-2 control-label">Quantity :</label>
										<div class="col-md-10"><input type="text" name="quantity" id="quantity"  class="form-control"></div>
									</div>
									
			
                                          
                                    <div class="form-group">
										<label class="col-md-2 control-label"></label>
										<div class="col-md-10">
                                        <input type="submit" name="add" class="btn btn-lg btn-primary" onClick="return validation();" value="Add">
                                        </div>
									</div>
                                   <input type="hidden" value="<?=$fetch['id']?>" id="ids" name="ids" />


									</form>
							</div>
						</div>
					</div>
				</div>
                <?
				}
				?>
                
                <?
				if($_REQUEST['action']=="edit")
				{
				?>
                <div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Material Request - Edit</h4>
							</div>
							<div class="widget-content">
                            
                            <?php
							//echo "select * from gkar_materialrequest where mrID='".$_REQUEST['ids']."'";
							$sqlm=mysql_query("select * from gkar_materialrequest where mrID='".$_REQUEST['ids']."'");				
							$fetchm=mysql_fetch_array($sqlm);
							?>
                            
								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="#">
							
                                    
									<div class="form-group">
										<label class="col-md-2 control-label">Site Name :</label>
										<div class="col-md-10">
										<select name="siteID" id="siteID" class="form-control">
										<option value="">Select Site Name</option>
										<?php
										$sql = "select * from gkar_siteinfo";
										$val = mysql_query($sql);
										while($fetch = mysql_fetch_array($val))
										{
										?>
																	
										<option <? if($fetchm['siteID']==$fetch['siteID']) { ?> selected <? } ?> value="<?=$fetch['siteID']?>"><?=$fetch['siteName']?></option>
										
										<?
										}
										?>
										</select>
										</div>
									</div>
									
								
									<div class="form-group">
										<label class="col-md-2 control-label">Reference Number :</label>
										<div class="col-md-10"><input type="text" name="refNumber" id="refNumber" value="<?=$fetchm['refNumber']?>"  class="form-control"></div>
									</div>
									
									
									<div class="form-group">
										<label class="col-md-2 control-label">Material Name :</label>
										<div class="col-md-10">
										<select name="materialID" id="materialID" class="form-control">
										<option value="">Select Material</option>
										
									    <?php
										$sql = "select * from gkar_material";
										$val = mysql_query($sql);
										while($fetch = mysql_fetch_array($val))
										{
										?>
																	
										<option <? if($fetchm['materialID']==$fetch['materialID']) { ?> selected <? } ?> value="<?=$fetch['materialID']?>"><?=$fetch['description']?></option>
										
										<?
										}
										?>
										
										</select>
										</div>
									</div>
									
									
								   <div class="form-group">
										<label class="col-md-2 control-label">Quantity :</label>
										<div class="col-md-10"><input type="text" name="quantity" id="quantity" value="<?=$fetchm['quantity']?>"  class="form-control"></div>
									</div>
							
                                          
                 
                                    <div class="form-group">
										<label class="col-md-2 control-label"></label>
										<div class="col-md-10">
                                        <input type="submit" name="edit" class="btn btn-lg btn-primary" onClick="return validation2();" value="Update">
                                        </div>
									</div>
                                   <input type="hidden" value="<?=$fetchm['mrID']?>" id="ids" name="ids" />


									</form>
							</div>
						</div>
					</div>
				</div>
                <?
				}
				?>
                
                                <?
				if($_REQUEST['action']=="view")
				{
				?>
                <div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Material Request - View</h4>
							</div>
							<div class="widget-content">
                            
                            <?php
							$sql=mysql_query("select * from gkar_materialrequest where mrID='".$_REQUEST['ids']."'");				
							$fetch=mysql_fetch_array($sql);
							
							$sqls = "select * from gkar_siteinfo where siteID='".$fetch['siteID']."'";							
							$results=mysql_query($sqls);
							$fetchs = mysql_fetch_array($results);
							
							$sqlc = "select * from gkar_material where materialID='".$fetch['materialID']."'";							
							$resultc=mysql_query($sqlc);
							$fetchc = mysql_fetch_array($resultc);
						
							?>
                            
								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="#">
						
									<div class="form-group">
										<label class="col-md-2 control-label">Sie Name :</label>
										<div class="col-md-10" style="padding-top:7px;"><?=$fetchs['siteName']?></div>
									</div>

	                               <div class="form-group">
										<label class="col-md-2 control-label">Material Name :</label>
										<div class="col-md-10" style="padding-top:7px;">
                                        <?=$fetchc['description']?>
                                       </div>
									</div>
									
										                               <div class="form-group">
										<label class="col-md-2 control-label">Ref Number :</label>
										<div class="col-md-10" style="padding-top:7px;">
                                        <?=$fetch['refNumber']?>
                                       </div>
									</div>
									
									<div class="form-group">
										<label class="col-md-2 control-label">Quantity :</label>
										<div class="col-md-10" style="padding-top:7px;">
                                        <?=$fetch['quantity']?>
                                       </div>
									</div>

							
				                                    
                                     <a href="materialrequest.php" class="btn btn-primary">Back</a>
                                 

									</form>
							</div>
						</div>
					</div>
				</div>
                <?
				}
				?>
	            
                <!--=== Normal ===-->
                
                <?
				if($_REQUEST['action']=="")
				{
				?>
				
                <div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Material Request</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
									<a href="materialrequest.php?action=add"><button class="btn btn-primary">Add</button></a>
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
							<div class="widget-content">
								<table class="table table-striped table-bordered table-hover table-checkable datatable">
									<thead>
										<tr>
														<th>S.No</th>
											<th style="width:250px;">Site Name</th>
											<th class="hidden-xs" style="width:250px;">Material Name</th>
											<th class="hidden-xs" style="width:250px; text-align:center">Quantity</th>
											<th style="width:200px; text-align:center;">Action</th>
										</tr>
									</thead>
									<tbody>
                                    
                            <?
							$sql = "select * from gkar_materialrequest order by mrID desc ";							
							$result=mysql_query($sql);							
							$numbers=mysql_num_rows($result);							
						
			if($numbers>0)
			 {
			 	$i=1;
				while($fetch=mysql_fetch_array($result))
				{
							$sqls = "select * from gkar_siteinfo where siteID='".$fetch['siteID']."'";							
							$results=mysql_query($sqls);
							$fetchs = mysql_fetch_array($results);
							
							$sqlc = "select * from gkar_material where materialID='".$fetch['materialID']."'";							
							$resultc=mysql_query($sqlc);
							$fetchc = mysql_fetch_array($resultc);
				?>
                                    
										<tr>
											<td class="checkbox-column">
											<?=$i?>
											</td>
											<td><?=$fetchs['siteName']?></td>
											<td class="hidden-xs"><?=$fetchc['description']?></td>
											<td style="text-align:center;">
									        <?=$fetch['quantity']?>
											</td>
											<td align="center">
									           <a href="materialrequest.php?action=edit&ids=<?=$fetch['mrID']?>"> <button class="btn btn-info">Edit</button></a>
                                           <a href="materialrequest.php?action=view&ids=<?=$fetch['mrID']?>"> <button class="btn btn-warning">View</button></a>
										 <!--  <a href="materialrequest.php?action=delete&ids=<?=$fetch['mrID']?>" onClick="return confirmDelete();"><button class="btn btn-danger">Delete</button></a> -->
                                            </td>
										</tr>
										
				<?  
				$i=$i+1; 
				}
				}
				else
				{
				?><div class="norecord">No Record Found!</div><?
				}
			?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
                
                <?
				}
				?>
				
                <!-- /Normal -->
                  
				<!-- /Page Content -->
			</div>
			<!-- /.container -->

		</div>
	</div>
	
	<script type="text/javascript">
	function get(id)
	{
	var uid = document.getElementById('uid'+id).value;
	var status = document.getElementById('status'+id).value;
	document.getElementById("tval").value=10;
	window.location.href="materialrequest.php?action=statusupdate&uid="+uid+"&status="+status+"";
	return true;
	}
	
	function get2(id)
	{
	var uid = document.getElementById('uid'+id).value;
	var role = document.getElementById('role'+id).value;
	document.getElementById("tval").value=10;
	window.location.href="materialrequest.php?action=roleupdate&uid="+uid+"&role="+role+"";
	return true;
	}
	
	</script>
	
		<style type="text/css">
	#ui-datepicker-div
	{
	position: absolute;
  top: 147px;
  left: 824.25px;
  z-index: 1000!important;
  display: block;
}
	</style>
	
	<script type="text/javascript">
		/*  jQuery ready function. Specify a function to execute when the DOM is fully loaded.  */
	$(document).ready(
	  
	  /* This is the function that will get executed after the DOM is fully loaded */
	  function () {
		$( "#datepicker" ).datepicker({
		  changeMonth: true,//this option for allowing user to select month
		  changeYear: true //this option for allowing user to select from year range
		});
	  }
	
	);
	</script>

</body>
</html>