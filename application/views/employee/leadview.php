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
				
				
               <div class="row">
					<div class="col-md-4">
						<div class="widget box">
							<div class="widget-header" style="text-align:left;">
								<h4><i class="icon-reorder"></i>Lead Details</h4>
							</div>
							<div class="widget-content">
                            
                <?
				$i=1;
				foreach($content as $key => $value)
				{
				?>  							
<div class="row">
                        <div class="col-md-12 col-sm-12">
						
		
						
<div class="form-group">
<label class="col-md-5 control-label" for="account">Name<small class="red"></small> &nbsp;: </label>
<div class="col-md-7" style="padding-bottom:15px;"><?=$value['name']?></div>
</div>
							
<div class="form-group"><label class="col-md-5 control-label" for="email">PhoneNo &nbsp;:</label>
<div class="col-md-7" style="padding-bottom:15px;"><span class="btn btn-xs btn-success" style="font-size:20px;"><?=$value['phone_no']?></span></div>
</div>


<div class="form-group"><label class="col-md-5 control-label" for="email">Email &nbsp;:</label>
<div class="col-md-7" style="padding-bottom:15px;"><?=$value['email']?>
</div>
</div>

<div class="form-group">
<label class="col-md-5 control-label" for="company">Address &nbsp;:</label>
<div class="col-md-7" style="padding-bottom:15px;"><?=$value['address']?>
</div>
</div>

<div class="form-group">
<label class="col-md-5 control-label" for="company">City &nbsp;:</label>
<div class="col-md-7" style="padding-bottom:15px;"><?=$value['city']?>
</div>
</div>

<div class="form-group">
<label class="col-md-5 control-label" for="company">State &nbsp;:</label>
<div class="col-md-7" style="padding-bottom:15px;"><?=$value['state']?>
</div>
</div>
                  

          
                        </div>

                    </div>
                                    
<?
				}
				?>

							</div>
						</div>
					</div>
					
					
					<div class="col-md-4">
						<div class="widget box">
							<div class="widget-header" style="text-align:left;">
								<h4><i class="icon-reorder"></i>Call Details</h4>
							</div>
							<div class="widget-content">
                          
							
<div class="row" id="callSection">
<div class="col-md-12 col-sm-12">

<div class="form-group" id="educationInfo">
<div class="col-md-4">
<span class="btn btn-success" style="width:120px;" onClick="return getTime();">Start Call</span>
</div>
<div class="col-md-4">
</div>
</div>

<div style="clear:both; padding-top:10px;"></div>   

<div class="form-group"  id="endTime" style="display:none;">
<div class="col-md-4" style="padding-bottom:15px;">
<span class="btn btn-danger" style="width:120px;" onClick="return getEndTime();">End Call</span>
</div>
<div class="col-md-4">
&nbsp;
</div>
</div>

</div>
</div>

<div class="row" id="callEnd" style="display:none;">

</div>

<input type="hidden" id="emp_id" value="<?=$content3[0]['user_id']?>">
<input type="hidden" id="lead_id" value="<?=$value['lead_id']?>">

                      

                    </div>
                                    


							</div>
							
							
						<div class="widget box">
							<div class="widget-header" style="text-align:left;">
								<h4><i class="icon-reorder"></i>Update Lead Status</h4>
							</div>
							<div class="widget-content">
                          
<div class="row" id="updateStatus" style="display:none;">

</div> 
 
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="form-group">
<div class="col-md-4" style="padding-bottom:15px; font-weight:bold; text-align:left;">
Status :
</div>
<div class="col-md-8">
<select name="leadStatus" id="leadStatus" class="form-control" style="width:100%;">
<option>Select Status</option>
<option value="Call Connected">Call Connected</option>
<option value="Un Answered">Un Answered</option>
<option value="Wrong Number">Wrong Number</option>
<option value="Not Interested">Not Interested</option>
<option value="No Requirement">No Requirement</option>
<option value="Call Back">Call Back</option>
</select>
</div>
</div>  
<div style="clear:both; padding-top:10px;"></div>  
<div class="form-group">
<div class="col-md-4"></div>
<div class="col-md-8" style="padding-bottom:15px;">
<span class="btn btn-primary" style="width:120px;" onClick="return updateStatus();">Update</span>
</div>
</div>  
</div>
</div>


<input type="hidden" id="emp_id" value="<?=$content3[0]['user_id']?>">
<input type="hidden" id="lead_id" value="<?=$value['lead_id']?>">

                      

                    </div>
                                    


							</div>
						
						
						<div class="widget box">
							<div class="widget-header" style="text-align:left;">
								<h4><i class="icon-reorder"></i>Assign To Support Team</h4>
							</div>
							<div class="widget-content">
                          
<div class="row" id="createInvoice" style="display:none;">

</div> 							
<div class="row">
                        <div class="col-md-12 col-sm-12">


<div class="form-group" id="leadMessage">
<div class="col-lg-12" style="padding-bottom:15px;">
<textarea name="emp_msg" id="emp_msg" style="width:100%; height:100px;"></textarea>
<span class="btn btn-primary" style="width:120px;" onClick="return createInvoice();">Submit</span>
</div>
</div>  


                        </div>

                    </div>
                                    


							</div>
						</div>
						
						
					</div>
					
					<div class="col-md-4">
						<div class="widget box">
							<div class="widget-header" style="text-align:left;">
								<h4><i class="icon-reorder"></i>Products</h4>
							</div>
							<div class="widget-content">
								<table class="table table-striped table-bordered table-hover table-checkable datatable">
									<thead>
										<tr>
											<th>S.No</th>
											<th>Product Name</th>
											<th style="text-align:center;">Action</th>
										</tr>
									</thead>
									<tbody>
                                    
                <?
				$i=1;
				foreach($content2 as $key => $value)
				{
				?>
                                    
										<tr>
											<td class="checkbox-column">
											<?=$i?>
											</td>
											<td class="hidden-xs"><?=$value['product_name']?></td>
											<td align="center">
															
	<ul class="table-controls">

	  	<li><a href="#editLead<?=$i?>" class="bs-tooltip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a> </li>
	   <li></li>
	   

    </ul>																   
										   
	       
							
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
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Product Details</h4>
							</div>
							<div class="widget-content">
                            
							
<div class="row">
                        <div class="col-md-12 col-sm-12">
						
		
						
<div class="form-group">
<label class="col-md-4 control-label" for="account">Name<small class="red"></small> &nbsp;: </label>
<div class="col-lg-8" style="padding-bottom:15px;"><?=$value['product_name']?></div>
</div>
							
<div class="form-group"><label class="col-md-4 control-label" for="email">Price &nbsp;:</label>
<div class="col-lg-8" style="padding-bottom:15px;"><?=$value['product_name']?>43rs5</div>
</div>


<div class="form-group"><label class="col-md-4 control-label" for="email">Description &nbsp;:</label>
<div class="col-lg-8" style="padding-bottom:15px;"><?=$value['product_desc']?>
</div>
</div>

                 

          
                        </div>
                    </div>
                                    
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-8" style="text-align:left;">
	<button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
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
$i++;				
				}
			    ?>
									</tbody>
								</table>                            

							</div>
						</div>
					</div>					
					
				</div>





				<!-- /Page Content -->
			</div>
			<!-- /.container -->

		</div>
	</div>

<script type="text/javascript">
        function getTime()
        {   
			//alert('hi');
			var lead_id = document.getElementById('lead_id').value;
			var emp_id = document.getElementById('emp_id').value;
			//alert(lead_id);
			//alert(emp_id);
			
			if (window.XMLHttpRequest)
            {
                // Create the object for browsers
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                // Create the object for browser versions prior to IE 7
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                // if server is ready with the response
                if (xmlhttp.readyState==4) 
                {
                    // if everything is Ok on browser
                    if(xmlhttp.status==200) 
                    {    
                        //Update the div with the response
                        document.getElementById("educationInfo").innerHTML=xmlhttp.responseText;
						document.getElementById("endTime").style.display="block";
						
					}
                }
            }
            //send the selected option id to the php page 
            xmlhttp.open("GET","<?=BEGIN_PATH?>/getDegree.php?emp_id="+emp_id+"&lead_id="+lead_id,true);
            xmlhttp.send();
        }
		
		
        function getEndTime()
        {   
			//alert('hi');
			var lead_id = document.getElementById('lead_id').value;
			var emp_id = document.getElementById('emp_id').value;
			//alert(lead_id);
			//alert(emp_id);
			
			if (window.XMLHttpRequest)
            {
                // Create the object for browsers
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                // Create the object for browser versions prior to IE 7
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                // if server is ready with the response
                if (xmlhttp.readyState==4) 
                {
                    // if everything is Ok on browser
                    if(xmlhttp.status==200) 
                    {    
                        //Update the div with the response
                        document.getElementById("callSection").style.display="none";
						document.getElementById("callEnd").style.display="block";
						document.getElementById("callEnd").innerHTML=xmlhttp.responseText;
					}
                }
            }
            //send the selected option id to the php page 
            xmlhttp.open("GET","<?=BEGIN_PATH?>/getEndTime.php?emp_id="+emp_id+"&lead_id="+lead_id,true);
            xmlhttp.send();
        }
		
		
        function updateStatus()
        {   
			//alert('hi');
			var lead_id = document.getElementById('lead_id').value;
			var emp_id = document.getElementById('emp_id').value;
			var leadStatus = document.getElementById('leadStatus').value;
			//alert(lead_id);
			//alert(emp_id);
			//alert(leadStatus);
			
			if (window.XMLHttpRequest)
            {
                // Create the object for browsers
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                // Create the object for browser versions prior to IE 7
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                // if server is ready with the response
                if (xmlhttp.readyState==4) 
                {
                    // if everything is Ok on browser
                    if(xmlhttp.status==200) 
                    {    
                        //Update the div with the response
                        document.getElementById("updateStatus").style.display="block";
						document.getElementById("updateStatus").innerHTML=xmlhttp.responseText;
					}
                }
            }
            //send the selected option id to the php page 
            xmlhttp.open("GET","<?=BEGIN_PATH?>/updateStatus.php?emp_id="+emp_id+"&lead_id="+lead_id+"&leadStatus="+leadStatus,true);
            xmlhttp.send();
        }
		
		  function createInvoice()
        {   
			//alert('hi');
			var lead_id = document.getElementById('lead_id').value;
			var emp_id = document.getElementById('emp_id').value;
			var leadStatus = document.getElementById('leadStatus').value;
			var emp_msg = document.getElementById('emp_msg').value;
			if(emp_msg=="")
			{
				alert("Please enter message");
				document.getElementById('emp_msg').focus();
				return false;
			}
			
			//alert(lead_id);
			//alert(emp_id);
			//alert(leadStatus);
			
			if (window.XMLHttpRequest)
            {
                // Create the object for browsers
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                // Create the object for browser versions prior to IE 7
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                // if server is ready with the response
                if (xmlhttp.readyState==4) 
                {
                    // if everything is Ok on browser
                    if(xmlhttp.status==200) 
                    {    
                        //Update the div with the response
                        document.getElementById("createInvoice").style.display="block";
						document.getElementById("createInvoice").innerHTML=xmlhttp.responseText;
					}
                }
            }
            //send the selected option id to the php page 
            xmlhttp.open("GET","<?=BEGIN_PATH?>/createInvoice.php?emp_id="+emp_id+"&lead_id="+lead_id+"&leadStatus="+leadStatus+"&emp_msg="+emp_msg,true);
            xmlhttp.send();
        }
		
		
		
		
</script>
	

</body>
</html>