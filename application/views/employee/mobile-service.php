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
extract($_POST);


function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}


	if(isset($_REQUEST['serviceAdd']))
	{	
        extract($_POST);
        $customer_group	= "Mobile Service";
		$sql="insert into customer (date_added,customer_group,customer_name,customer_number,mobile_name,mobile_model,mobile_issue,advance_amount,mobile_status,comments) values ('$date_added','$customer_group','$customer_name','$customer_number','$mobile_name','$mobile_model','$mobile_issue','$advance_amount','$mobile_status','$comments')";  
		 $query=mysql_query($sql);	
		 
		$payerid = mysql_insert_id();
		$date = date("Y-m-d");
		$cr = $advance_amount;
		$type='Income';
		 
		$sql="insert into sys_transactions (bank_id,date,amount,payerid,cr,type) values ('1','$date','$advance_amount','$payerid','$cr','$type')";    
	    $query=mysql_query($sql);	
		 
		 
	 ?>
	 <script>window.location="mobile-service.php?act=success";</script>
     <?
	}
	
	if(isset($_REQUEST['addPayment']))
	{	
		$payerid = $_REQUEST['customer_id'];
		$date = $_REQUEST['date'];
		$amount = $_REQUEST['amount'];
		$cr = $amount;
		$type='Income';
		 
		$sql="insert into sys_transactions (bank_id,date,amount,payerid,cr,type) values ('1','$date','$amount','$payerid','$cr','$type')";    
	    $query=mysql_query($sql);	
		 
		 
	 ?>
	 <script>window.location="mobile-service.php";</script>
     <?
	}
	
	if(isset($_REQUEST['serviceEdit']))
	{	
        extract($_POST);

	    $sql="update customer set date_added='$date_added',customer_name='$customer_name',customer_number='$customer_number',mobile_name='$mobile_name',mobile_model='$mobile_model',mobile_issue='$mobile_issue',advance_amount='$advance_amount',mobile_status='$mobile_status',comments='$comments' where customer_id=".$_REQUEST['customer_id']; 
	
		$query=mysql_query($sql);	
	 ?>
	 <script>window.location="mobile-service.php?act=editsuccess";</script>
     <?
	}


	if(isset($_REQUEST['edit']))
	{
	$sql="update customer set name='$name',company_name='$company_name',email='$email',phone='$phone',address='$address',city='$city',state='$state',country='$country', zipcode='$zipcode',gst_no='$gst_no',pan_no='$pan_no',group_id='$group_id',sub_group_id='$sub_group_id' where customer_id=".$_REQUEST['ids']; 
	$query1=mysql_query($sql);
	$msg="Updated  successfully!";	
	?>
	<script>window.location="mobile-service.php?act=editsuccess";</script>
	<?
	}

if($_REQUEST['action']=="delete")
{
$sql="delete from customer where customer_id=".$_REQUEST['ids']." limit 1";
$query=mysql_query($sql);
?>
<script>window.location="mobile-service.php?act=delsuccess";</script>
<?
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include('include/date-script.php'); ?>

<script type="text/javascript" src="customer-script.js"></script>

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
	web_title = document.getElementById('web_title').value;
	if(web_title=="") 
	{ 
		alert("Please enter question");
		document.getElementById('web_title').focus();			
		return false;
	}
	
	web_content = document.getElementById('web_content').value;
	if(web_content=="") 
	{ 
		alert("Please enter answer");
		document.getElementById('web_content').focus();			
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
    
</head>

<body class="breakpoint-1200 theme-dark">

<?php include('remodal.php'); ?> 

	<!-- Header -->
	
    <?php include('include/header.php'); ?> 
    
    <!-- /.header -->

	<div id="container">
		
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
						<h3>Mobile Service</h3>
					</div>

					<!-- Page Stats -->
					
					<!-- /Page Stats -->
				</div>
                
				<!-- /Page Header -->

				<!--=== Page Content ===-->
                
                		
                                                      <?php
								if($_REQUEST['act']=="success")
								{
								?>
                                
								<div class="alert alert-success fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Success!</strong> Mobile Service added successfully!.
								</div>
                                    
                                 <?
								}
								?>
								
								                                                      <?php
								if($_REQUEST['act']=="exist")
								{
								?>
                                
								<div class="alert alert-danger fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Info !</strong> A user already exists with this email address!. Please use different email address.
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
									<strong>Success!</strong> Mobile Service updated successfully!.
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
									<strong>Success!</strong> Mobile Service deleted successfully!.
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
								<h4><i class="icon-reorder"></i>Mobile Service - Add</h4>
							</div>
							<div class="widget-content">
                            
								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="#">
							
                                    


<div class="row">
                        <div class="col-md-6 col-sm-12">
<div class="form-group"><label class="col-md-4 control-label" for="account">Full Name </label>

                                <div class="col-lg-8"><input type="text" id="name" name="name" class="form-control" required>

                                </div>
                     </div>
                        </div>
                        <div class="col-md-6 col-sm-12" id="noNeed2">
						
						                        <div class="form-group"><label class="col-md-4 control-label" for="city">City</label>

                                <div class="col-lg-8"><input type="text" id="city" name="city" class="form-control" >

                                </div>
                            </div>
						
                            <div class="form-group"><label class="col-md-4 control-label" for="state">State/Region</label>

                                <div class="col-lg-8">
								<select id="state" name="state" class="form-control" >
								<option value="">Select State</option>
								<?php
								$sql = "select * from state order by areaname asc";
								$val = mysql_query($sql);
								while($fetch=mysql_fetch_array($val))
								{
								?>
								<option value="<?=$fetch['areaname']?>"><?=$fetch['areaname']?></option>
								<?
								}
								?>
								</select>

                                </div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label" for="zip">ZIP/Postal Code </label>

                                <div class="col-lg-8"><input type="text" id="zipcode" name="zipcode" class="form-control" >

                                </div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label" for="country">Country</label>

                                <div class="col-lg-8">

                                    <input type="text" id="country" name="country" class="form-control" >

                                </div>
                            </div>

<div class="form-group"><label class="col-md-4 control-label" for="address">GST No</label>
<div class="col-lg-8"><input type="text" id="gst_no" name="gst_no" maxlength="15" class="form-control">
</div>
</div>

<div class="form-group"><label class="col-md-4 control-label" for="address">PAN No</label>
<div class="col-lg-8"><input type="text" id="pan_no" name="pan_no" maxlength="10" class="form-control">
</div>
</div>
							
							





  





                        </div>
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
								<h4><i class="icon-reorder"></i>Mobile Service - Edit</h4>
							</div>
							<div class="widget-content">
                            
                            <?php
							$sql=mysql_query("select * from customer where customer_id='".$_REQUEST['ids']."'");				
							$fetch=mysql_fetch_array($sql);
							?>
                            
								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="#">


									
<div class="row">
                        <div class="col-md-6 col-sm-12">
						
						                            <div class="form-group"><label class="col-md-4 control-label" for="group">Group</label>

                                <div class="col-lg-8">
                                    <select class="form-control" name="group_id" id="group_id" onChange="return getsubGroup(this.value);" required>
                                        <option value="">Select Group</option>
										<?php
										$sql2 = "select * from customer_group";
										$val2 = mysql_query($sql2);
										while($fetch2=mysql_fetch_array($val2))
										{
										?>
										
                                        <option <? if($fetch['group_id']==$fetch2['group_id']) echo "selected"; ?> value="<?=$fetch2['group_id']?>"><?=$fetch2['group_name']?></option>
                                        <?
										}
										?>
                                        
                                    </select>

                                </div>
                            </div>
							
			
<div id="demo1" style="margin-top:10px;">
						                            <div class="form-group"><label class="col-md-4 control-label" for="group">Sub Group</label>

                                <div class="col-lg-8">
                                    <select class="form-control" name="sub_group_id" id="sub_group_id" required>
                                        <option value="">Select Group</option>
										<?php
$sql2 = "select * from customer_sub_group where group_id=".$fetch['group_id'];
										$val2 = mysql_query($sql2);
										while($fetch2=mysql_fetch_array($val2))
										{
										?>
										
                                        <option <? if($fetch['sub_group_id']==$fetch2['sub_group_id']) echo "selected"; ?> value="<?=$fetch2['sub_group_id']?>"><?=$fetch2['sub_group_name']?></option>
                                        <?
										}
										?>
                                        
                                    </select>

                                </div>
                            </div>
</div>
						
						
                            <div class="form-group"><label class="col-md-4 control-label" for="account">Full Name<small class="red">*</small> </label>

                                <div class="col-lg-8"><input type="text" id="name" name="name" class="form-control" value="<?=$fetch['name']?>" required>

                                </div>
                            </div>
							

                            <div class="form-group"><label class="col-md-4 control-label" for="company">Company Name</label>

                                <div class="col-lg-8"><input type="text" id="company_name" name="company_name" class="form-control" value="<?=$fetch['company_name']?>" required>

                                </div>
                            </div>

                            <div class="form-group"><label class="col-md-4 control-label" for="email">Email</label>

                                <div class="col-lg-8"><input type="text" id="email" name="email" class="form-control" value="<?=$fetch['email']?>" >

                                </div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label" for="phone">Phone</label>

                                <div class="col-lg-8"><input type="text" id="phone" name="phone" class="form-control" value="<?=$fetch['phone']?>" >

                                </div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label" for="address">Address</label>

                                <div class="col-lg-8"><input type="text" id="address" name="address" class="form-control" value="<?=$fetch['address']?>" >

                                </div>
                            </div>





                            

                            

          
                        </div>
                        <div class="col-md-6 col-sm-12">
						
						                            <div class="form-group"><label class="col-md-4 control-label" for="city">City</label>

                                <div class="col-lg-8"><input type="text" id="city" name="city" class="form-control" value="<?=$fetch['city']?>" >

                                </div>
                            </div>
						
                            <div class="form-group"><label class="col-md-4 control-label" for="state">State/Region</label>

                                <div class="col-lg-8">
								
																<select id="state" name="state" class="form-control" >
								<option value="">Select State</option>
								<?php
								$sql2 = "select * from state order by areaname asc";
								$val2 = mysql_query($sql2);
								while($fetch2=mysql_fetch_array($val2))
								{
								?>
								<option <? if($fetch['state']==$fetch2['areaname']) echo "selected"; ?> value="<?=$fetch2['areaname']?>"><?=$fetch2['areaname']?></option>
								<?
								}
								?>
								</select>
								
			

                                </div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label" for="zip">ZIP/Postal Code </label>

                                <div class="col-lg-8"><input type="text" id="zipcode" name="zipcode" class="form-control" value="<?=$fetch['zipcode']?>" >

                                </div>
                            </div>
                            <div class="form-group"><label class="col-md-4 control-label" for="country">Country</label>

                                <div class="col-lg-8">

                                    <input type="text" id="country" name="country" class="form-control" value="<?=$fetch['country']?>" >

                                </div>
                            </div>
						
						
						<div class="form-group"><label class="col-md-4 control-label" for="zip">GST No </label>

                                <div class="col-lg-8"><input type="text" id="gst_no" name="gst_no" maxlength="15" class="form-control" value="<?=$fetch['gst_no']?>">

                                </div>
                            </div>

						<div class="form-group"><label class="col-md-4 control-label" for="zip">PAN No </label>

                                <div class="col-lg-8"><input type="text" id="pan_no" name="pan_no" maxlength="10"  class="form-control" value="<?=$fetch['pan_no']?>">

                                </div>
                            </div>




  





                        </div>
                    </div>
                                    

                                    
                                    <div class="form-group">
										<label class="col-md-2 control-label"></label>
										<div class="col-md-10">
                                        <input type="submit" name="edit" class="btn btn-lg btn-primary" onClick="return validation();" value="Update">
                                        </div>
									</div>
                                   <input type="hidden" value="<?=$fetch['customer_id']?>" id="ids" name="ids" />


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
								<h4><i class="icon-reorder"></i>Mobile Service - Edit</h4>
							</div>
							<div class="widget-content">
                            
                            <?php
							$sql=mysql_query("select * from customer where id='".$_REQUEST['ids']."'");				
							$fetch=mysql_fetch_array($sql);
							?>
                            
								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="#">
									<!--<div class="alert alert-info fade in">
										<i class="icon-remove close" data-dismiss="alert"></i>
										This are examples of full width input fields. Please find select-boxes and other things below.
									</div>-->
									<div class="form-group">
										<label class="col-md-2 control-label">Title :</label>
										<div class="col-md-10"><?=$fetch['web_title']?></div>
									</div>

									
                                    
                                    
                                    
                                    <div class="form-group">
										<label class="col-md-2 control-label">Content :</label>
										<div class="col-md-10">
                                        <?=$fetch['web_content']?>
                                       </div>
									</div>
                                    
                                    <!--<div class="form-group">
										<label class="col-md-2 control-label">Image :</label>
										<div class="col-md-10">
                                         <input type="file" name="web_image" id="web_image" data-style="fileinput" style="float:left;">
                                         <input type="hidden" value="<?=$fetch['web_image']?>" id="theValue" name="theValue" />
                                                          <? if($fetch['web_image']!=''){ ?>
                           
         <img src="../webupload/thumb/<?php echo $fetch['web_image']; ?>" width="75" height="50" border="0" style="float:right; margin-right:485px; margin-top:-31px;"  />
				 
				 
				 <? } ?>
                                        </div>
									</div>-->
                                    
                                     <a href="mobile-service.php" class="btn btn-primary">Back</a>
                                 

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
								<h4><i class="icon-reorder"></i>Mobile Service</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
										<a href="#mobileAdd"><button class="btn btn-success">&nbsp;Add Mobile Service&nbsp;</button></a>
									</div>
								</div>
							</div>
							<div class="widget-content">
								<table class="table table-striped table-bordered table-hover table-checkable datatable">
									<thead>
										<tr>
														<th>S.No</th>
														<th>Date Added</th>
											<th>Customer Name</th>
											<th>Customer Number</th>
											<th>Status</th>
											<th style="width:350px; text-align:center;">Action</th>
										</tr>
									</thead>
									<tbody>
                                    
                            <?
							$sql = "select * from customer where customer_group='Mobile Service' order by name asc ";							
							$result=mysql_query($sql);							
							$numbers=mysql_num_rows($result);							
						
			if($numbers>0)
			 {
			 	$i=1;
				while($fetch=mysql_fetch_array($result))
				{
					$sqlg=mysql_query("select * from customer_group where group_id=".$fetch['group_id']);
					$fetchg=mysql_fetch_array($sqlg);
					
					$sqlsg=mysql_query("select * from customer_sub_group where sub_group_id=".$fetch['sub_group_id']);
					$fetchsg=mysql_fetch_array($sqlsg);
				?>
                                    
										<tr>
											<td class="checkbox-column">
											<?=$i?>
											</td>
											<td><?=$fetch['date_added']?></td>
											<td><?=$fetch['customer_name']?></td>
<td><?=$fetch['customer_number']?></td>
<td>

<?php
if($fetch['mobile_status']=='DELIVERED')
{
?>
<span class="label label-success">DELIVERED</span>	
<?
}
?>

<?php
if($fetch['mobile_status']=='PENDING')
{
?>
<span class="label label-danger">PENDING</span>	
<?
}
?>
    
    <?php
if($fetch['mobile_status']!='PENDING' && $fetch['mobile_status']!='DELIVERED')
{
?>
<span class="label label-primary"><?=$fetch['mobile_status']?></span>	
<?
}
?>


</td>
											<td style="text-align:center;">
											
                                            <a href="#paymentAdd<?=$i?>"><button class="btn btn-primary">Payment Add</button></a>
												
											<a href="#mobileView<?=$i?>"><button class="btn btn-warning">View Details</button></a>
											
											<a href="#mobileEdit<?=$i?>"><button class="btn btn-info">Edit</button></a>
												
                                            <a href="mobile-service.php?action=delete&ids=<?=$fetch['customer_id']?>" onClick="return confirmDelete();"><button class="btn btn-danger">Delete</button></a>
                                            </td>
										</tr>
										
										
										
<!-- lead payment view -->

<div class="remodal" data-remodal-id="paymentAdd<?=$i?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
<div>
<style>
.remodal
{
	    max-width: 70% !important;
}
</style>

<?php
$sql_m = "select * from customer where customer_id=".$fetch['customer_id'];	
$val_m = mysql_query($sql_m);		
$fetch_m=mysql_fetch_array($val_m);
?>

                <div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Mobile Service - View</h4>
							</div>
							<div class="widget-content" style="height:150px;">
                            
<form class="form-horizontal row-border" id="validate-1" method="post" action="#">
							
<div class="form-group">
<label class="col-md-2 control-label" for="account">Date<small class="red"></small> </label>
<div class="col-lg-2">
<input type="text" id="date_added<?=$i?>" name="date" class="form-control datepicker" value="<?=date("Y-m-d")?>" required>
</div>
<label class="col-md-2 control-label" for="account">Amount<small class="red"></small> </label>
<div class="col-lg-2">
<input type="text" id="date_added<?=$i?>" name="amount" class="form-control" required>
</div>
</div>
 <div style="clear:both;"></div>                                   
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-8" style="text-align:left;">
<input type="submit" name="addPayment" class="remodal-confirm" value="Add Payment" onclick="return addCustomer();">		<button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
</div>
</div>
 <input type="hidden" value="<?=$fetch['customer_id']?>" id="customer_id" name="customer_id" />

</form>
							</div>
						</div>
					</div>
				</div>

				

</div>
</div>
										
<!-- leadEdit -->

<div class="remodal" data-remodal-id="mobileEdit<?=$i?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
<div>
<style>
.remodal
{
	    max-width: 70% !important;
}
</style>

<?php
$sql_m = "select * from customer where customer_id=".$fetch['customer_id'];	
$val_m = mysql_query($sql_m);		
$fetch_m=mysql_fetch_array($val_m);
?>

                <div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Mobile Service - Edit</h4>
							</div>
							<div class="widget-content">
                            
<form class="form-horizontal row-border" id="validate-1" method="post" action="#">
							
<div class="row">
                        <div class="col-md-6 col-sm-12">
						

<div class="form-group">
<label class="col-md-5 control-label" for="account">Date<small class="red"></small> </label>
<div class="col-lg-7">
<input type="text" id="date_added<?=$i?>" name="date_added" class="form-control datepicker" value="<?=$fetch_m['date_added']?>" required>
</div>
</div>
						
<div class="form-group">
<label class="col-md-5 control-label" style="text-align:right;" for="account">Customer Name<small class="red"></small> </label>
<div class="col-lg-7" style="margin-bottom:10px;"><input type="text" id="customer_name" name="customer_name"  class="form-control" required="" value="<?=$fetch_m['customer_name']?>">
</div>
</div>
							
<div class="form-group"><label class="col-md-5 control-label" style="text-align:right;" for="email">Customer Number</label>
<div class="col-lg-7" style="margin-bottom:10px;"><input type="text" id="customer_number" name="customer_number" value="<?=$fetch_m['customer_number']?>"  class="form-control" required="">
</div>
</div>

<div class="form-group"><label class="col-md-5 control-label" style="text-align:right;" for="email">Mobile Name</label>
<div class="col-lg-7" style="margin-bottom:10px;">
						<select required="" name="mobile_name" class="form-control" aria-hidden="true">
							<option value="">Select Mobile</option>
							<?php
							$sqls = "select * from sidd_mob_name order by mob_name asc";
							$vals = mysql_query($sqls);
							while($fetchs=mysql_fetch_array($vals))
							{
							?>
		                    <option <? if($fetch_m['mobile_name']==$fetchs['mob_name']) { echo "selected"; } ?>  value="<?=$fetchs['mob_name']?>"><?=$fetchs['mob_name']?></option>
							<?
							}
							?>
							</select>
</div>
</div>

<div class="form-group"><label class="col-md-5 control-label" style="text-align:right;" for="email">Model</label>
<div class="col-lg-7" style="margin-bottom:10px;"><input type="text" id="mobile_model" name="mobile_model" value="<?=$fetch_m['mobile_model']?>" class="form-control" required="">
</div>
</div>
                  

          
                        </div>
                        <div class="col-md-6 col-sm-12">

<div class="form-group">
<label class="col-md-4 control-label" style="text-align:right;" for="company">Mobile Issue</label>
<div class="col-lg-8" style="margin-bottom:10px;">

						<select required="" name="mobile_issue" class="form-control" aria-hidden="true">
							<option value="">Select Issue</option>
							<?php
							$sqls = "select * from sidd_mob_issue order by issue_name asc";
							$vals = mysql_query($sqls);
							while($fetchs=mysql_fetch_array($vals))
							{
							?>
		                    <option <? if($fetch_m['mobile_issue']==$fetchs['issue_name']) { echo "selected"; } ?>  value="<?=$fetchs['issue_name']?>"><?=$fetchs['issue_name']?></option>
							<?
							}
							?>
							</select>

</div>
</div>
						
<div class="form-group"><label class="col-md-4 control-label" style="text-align:right;" for="email">Status</label>
<div class="col-lg-8" style="margin-bottom:10px;">
				<select required="" name="mobile_status" class="form-control" aria-hidden="true">
								<option value="">Select Status</option>
															<?php
							$sqls = "select * from sidd_mob_status order by status_name asc";
							$vals = mysql_query($sqls);
							while($fetchs=mysql_fetch_array($vals))
							{
							?>
		                    <option <? if($fetch_m['mobile_status']==$fetchs['status_name']) { echo "selected"; } ?> value="<?=$fetchs['status_name']?>"><?=$fetchs['status_name']?></option>
							<?
							}
							?>
							</select>
</div>
</div>
                            
                                     
<div class="form-group">
<label class="col-md-4 control-label" style="text-align:right;" for="company">Comments</label>
<div class="col-lg-8" style="margin-bottom:10px;"><input type="text" id="comments" name="comments" value="<?=$fetch_m['comments']?>" class="form-control" required>
</div>
</div>
         
<div class="form-group">
<label class="col-md-4 control-label" style="text-align:right;" for="company">Advance Amount</label>
<div class="col-lg-8" style="margin-bottom:10px;"><input type="text" id="advance_amount" name="advance_amount" value="<?=$fetch_m['advance_amount']?>" class="form-control" required>
</div>
</div>


                        </div>
                    </div>
                                    
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-8" style="text-align:left;">
<input type="submit" name="serviceEdit" class="remodal-confirm" value="Update" onclick="return addCustomer();">		<button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
</div>
</div>
 <input type="hidden" value="<?=$fetch['customer_id']?>" id="customer_id" name="customer_id" />

									</form>
							</div>
						</div>
					</div>
				</div>

				

</div>
</div>
										

<!-- lead View -->

<div class="remodal" data-remodal-id="mobileView<?=$i?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
<div>
<style>
.remodal
{
	    max-width: 70% !important;
}
</style>

<?php
$sql_m = "select * from customer where customer_id=".$fetch['customer_id'];	
$val_m = mysql_query($sql_m);		
$fetch_m=mysql_fetch_array($val_m);
?>

                <div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Mobile Service - Details</h4>
							</div>
							<div class="widget-content">
                            
<form class="form-horizontal row-border" id="validate-1" method="post" action="#">
							
<div class="row">
                        <div class="col-md-6 col-sm-12">
						
<div class="form-group">
<label class="col-md-5 control-label" style="text-align:right;" for="account">Date<small class="red"></small> </label>
<div class="col-lg-7" style="margin-bottom:10px; text-align: left;"><?=$fetch_m['date_added']?></div>
</div>
						
<div class="form-group">
<label class="col-md-5 control-label" style="text-align:right;" for="account">Customer Name<small class="red"></small> </label>
<div class="col-lg-7" style="margin-bottom:10px; text-align: left;"><?=$fetch_m['customer_name']?></div>
</div>
							
<div class="form-group"><label class="col-md-5 control-label" style="text-align:right;" for="email">Customer Number</label>
<div class="col-lg-7" style="margin-bottom:10px; text-align: left;"><?=$fetch_m['customer_number']?></div>
</div>

<div class="form-group"><label class="col-md-5 control-label" style="text-align:right;" for="email">Mobile Name</label>
<div class="col-lg-7" style="margin-bottom:10px; text-align: left;">
<?=$fetch_m['mobile_name']?>
</div>
</div>

<div class="form-group"><label class="col-md-5 control-label" style="text-align:right;" for="email">Model</label>
<div class="col-lg-7" style="margin-bottom:10px; text-align: left;"><?=$fetch_m['mobile_model']?></div>
</div>
                  

          
                        </div>
                        <div class="col-md-6 col-sm-12">

<div class="form-group">
<label class="col-md-4 control-label" style="text-align:right;" for="company">Mobile Issue</label>
<div class="col-lg-8" style="margin-bottom:10px; text-align: left;">

<?=$fetch_m['mobile_issue']?>

</div>
</div>
						
<div class="form-group"><label class="col-md-4 control-label" style="text-align:right;" for="email">Status</label>
<div class="col-lg-8" style="margin-bottom:10px; text-align: left;">
<?=$fetch_m['mobile_status']?>
</div>
</div>
                            
<div class="form-group"><label class="col-md-4 control-label" style="text-align:right;" for="email">Comments</label>
<div class="col-lg-8" style="margin-bottom:10px; text-align: left;">
<?=$fetch_m['comments']?>
</div>
</div>
         
<div class="form-group">
<label class="col-md-4 control-label" style="text-align:right;" for="company">Advance Amount</label>
<div class="col-lg-8" style="margin-bottom:10px; text-align: left;"><?=$fetch_m['advance_amount']?></div>
</div>


                        </div>
                    </div>
                                    
								</form>
							</div>
						</div>
					</div>
				</div>
				
				
                <div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Payment Details</h4>
							</div>
							<div class="widget-content">
                            
<form class="form-horizontal row-border" id="validate-1" method="post" action="#">
							
<div class="row">
                        <div class="col-md-12 col-sm-12">
					<?php
					$i=1;
					$tot=0;
					$sql2 = "select * from sys_transactions where payerid=".$fetch['customer_id'];
					$val2 = mysql_query($sql2);
					while($fetch2=mysql_fetch_array($val2))
					{
						$tot = $tot + $fetch2['amount'];
					?>						
<div class="form-group">
<label class="col-md-2 control-label" for="account">Date : </label>
<div class="col-lg-2">
<?=$fetch2['date']?>
</div>
<label class="col-md-2 control-label" style="text-align:right;" for="account">Amount : </label>
<div class="col-lg-1" style="text-align:left;">
<?=$fetch2['amount']?>
</div>
</div>

<div style="clear:both; height:5px;"></div>

<?php
					}
					?>
					
<div class="form-group" style="border-top:1px solid #ccc; padding-top:10px;">
<div class="col-lg-4">
&nbsp;
</div>
<label class="col-md-2 control-label" style="text-align:right;" for="account">Total : </label>
<div class="col-lg-1" style="text-align:left;">
<?=$tot?>
</div>
</div>				
<div class="form-group">
&nbsp;
</div>
					
<div class="form-group">
<div class="col-md-12" style="text-align:right;">
	<button data-remodal-action="cancel" class="remodal-cancel">Close</button>
</div>
</div>

						
                        </div>
                    </div>
                                    


									</form>
							</div>
						</div>
					</div>
				</div>

				

</div>
</div>

										
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

function validation()
{
	var group_id = document.getElementById("group_id").value;
	if(group_id=="")
	{
		alert("Please select group");
		document.getElementById("group_id").focus();
		return false;
	}
	
	var sub_group_id = document.getElementById("sub_group_id").value;
	if(sub_group_id=="")
	{
		alert("Please select sub group");
		document.getElementById("sub_group_id").focus();
		return false;
	}
	
	var name = document.getElementById("name").value;
	if(name=="")
	{
		alert("Please select name");
		document.getElementById("name").focus();
		return false;
	}
	
	var company_name = document.getElementById("company_name").value;
	if(company_name=="")
	{
		alert("Please enter company name");
		document.getElementById("company_name").focus();
		return false;
	}
	
	//alert(group_id);
		
	if(group_id!="4" && group_id!="5")
	{
	
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
		
		var address = document.getElementById("address").value;
		if(address=="")
		{
			alert("Please enter address");
			document.getElementById("address").focus();
			return false;
		}
		
		var city = document.getElementById("city").value;
		if(city=="")
		{
			alert("Please enter city");
			document.getElementById("city").focus();
			return false;
		}
		
		var state = document.getElementById("state").value;
		if(state=="")
		{
			alert("Please enter state");
			document.getElementById("state").focus();
			return false;
		}
		
		var zipcode = document.getElementById("zipcode").value;
		if(zipcode=="")
		{
			alert("Please enter zipcode");
			document.getElementById("zipcode").focus();
			return false;
		}
		
		var country = document.getElementById("country").value;
		if(country=="")
		{
			alert("Please enter country");
			document.getElementById("country").focus();
			return false;
		}

	}
}

</script>
	
<?php
include("mobile-popup.php");
?>

</body>
</html>