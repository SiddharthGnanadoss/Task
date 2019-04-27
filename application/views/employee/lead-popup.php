<link rel="stylesheet" href="<? echo BEGIN_PATH ?>/dist/remodal.css">
<link rel="stylesheet" href="<? echo BEGIN_PATH ?>/dist/remodal-default-theme.css">
 

  
    <style>
    .remodal-bg.with-red-theme.remodal-is-opening,
    .remodal-bg.with-red-theme.remodal-is-opened {
      filter: none;
    }

    .remodal-overlay.with-red-theme {
      background-color: #f44336;
    }

    .remodal.with-red-theme {
      background: #fff;
    }
	
	#modal1Desc
	{
		text-align:left; padding-bottom:10px; margin-bottom:20px; border-bottom: 1px solid #e5e5e5;
	}
	
.remodal-close {
    position: absolute;
    top: 5px;
    left: 5px;

    width: 28px;
    height: 28px;

    text-decoration: none;

    -webkit-border-radius: 50%;
    border-radius: 50%;
    border: 2px solid #3e5368;
    -webkit-transition: background 0.2s linear;
    -moz-transition: background 0.2s linear;
    -o-transition: background 0.2s linear;
    transition: background 0.2s linear;
}

.remodal-close:after {
    display: block;
    font-size: 28px;
    font-family: Arial, 'Helvetica CY', 'Nimbus Sans L', sans-serif !important;

    content: "×";
    line-height: 28px;
    cursor: pointer;
    text-decoration: none;

    color: #3e5368;

    -webkit-transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
}

.remodal-close:hover, .remodal-close:active {
    background: #3e5368;
}

.remodal-close:hover.remodal-close:after, .remodal-close:active.remodal-close:after {
    color: #f4f4f4;
}

/* Remodal window close button(end) */

/* Remodal buttons(begin) */
.remodal-confirm, .remodal-cancel {
    font-size: 10pt;

    display: inline-block;

    width: 120px;
    padding: 9px 0;
    margin: 0 0 5px 0;
    background-clip: padding-box;

    cursor: pointer;
    text-decoration: none;
    text-align: center;

    -webkit-border-radius: 50px;
    border-radius: 50px;
    -webkit-transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
}

.remodal-confirm {
    border: 2px solid #16a085;
    background: #f4f4f4;
    color: #16a085;
}

.remodal-confirm:hover, .remodal-confirm:active {
    background: #16a085;
    color: #f4f4f4;
}

.remodal-cancel {
    border: 2px solid #c0392b;
    background: #f4f4f4;
    color: #c0392b;
}

.remodal-cancel:hover, .remodal-cancel:active {
    background: #c0392b;
    color: #f4f4f4;
}

	
  </style>
  
  <!-- success --> 


<div class="remodal" data-remodal-id="addReminder" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
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
								<h4><i class="icon-reorder"></i>Reminder - Add</h4>
							</div>
							<div class="widget-content">
                            
<form class="form-horizontal row-border" id="validate-1" method="post" action="#">
							
<div class="row">
                        <div class="col-md-12 col-sm-12">
<div class="form-group">
<label class="col-md-4 control-label" for="account">Description : <small class="red">*</small> </label>
<div class="col-lg-8">
<textarea id="description" name="description" class="form-control" required></textarea>
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label">Date :</label>
<div class="col-md-8">
<input type="text" name="regular" class="form-control datepicker" required>
</div>
</div>	


						
</div>
                    </div>
                                    
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-8" style="text-align:left;">
<input type="hidden" name="lead_id" value="<?=$_REQUEST['lead_id']?>">
<input type="submit" name="reminderadd" class="remodal-confirm" value="Add" onclick="return addCustomer();">		<button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
</div>
</div>

									</form>
							</div>
						</div>
					</div>
				</div>

				

</div>
</div>
   

<div class="remodal" data-remodal-id="success" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
<div>
<p id="modal1Desc"><b>Success</b></p>
<p>Mobile Service added successfully!.</p>
</div>
<button data-remodal-action="cancel" class="remodal-cancel">Close</button>
</div>


<div class="remodal" data-remodal-id="delLead" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
<div>
<p id="modal1Desc">Do you want delete this lead?</p>
</div>
<a href=""><button class="remodal-confirm">Yes</button></a> &nbsp;
<button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
</div>

<!-- leadEdit -->

<div class="remodal" data-remodal-id="addLead" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
<div>
<style>
.remodal
{
	    max-width: 70% !important;
}
</style>

                            <?php
							$sql=mysql_query("select * from lead where lead_id='".$_REQUEST['lead_id']."'");				
							$fetch=mysql_fetch_array($sql);
							?>

                <div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Customer - Add</h4>
							</div>
							<div class="widget-content">
                            
<form class="form-horizontal row-border" id="validate-1" method="post" action="<? echo BEGIN_PATH ?>/employee/view">
							
<div class="row">
                        <div class="col-md-6 col-sm-12">
						
		
						
<div class="form-group">
<label class="col-md-4 control-label" for="account">Name<small class="red"></small> </label>
<div class="col-lg-8"><input type="text" id="name" name="name" value="" class="form-control" required="">
</div>
</div>
							
<div class="form-group"><label class="col-md-4 control-label" for="email">Email</label>
<div class="col-lg-8"><input type="text" id="email" name="email" value=""  class="form-control" required="">
</div>
</div>


<div class="form-group"><label class="col-md-4 control-label" for="email">Phone Number</label>
<div class="col-lg-8"><input type="text" id="phone_no" name="phone_no" value="" class="form-control" required="">
</div>
</div>

<div class="form-group"><label class="col-md-4 control-label" for="email">Address</label>
<div class="col-lg-8"><input type="text" id="address" name="address" value="" class="form-control" required="">
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
<option value="<?=$value5['area_id']?>"><?=$value5['area_name']?></option>				
				<?php
				}
				?>
</select>

</div>
</div>

<div class="form-group"><label class="col-md-4 control-label" for="email">Identity</label>
<div class="col-lg-8"><input type="text" id="identity" name="identity" value="" class="form-control" required="">
</div>
</div>


                  

          
                        </div>
                        <div class="col-md-6 col-sm-12">


<div class="form-group">
<label class="col-md-4 control-label" for="company">Pending Amount</label>
<div class="col-lg-8"><input type="text" id="pending_amount" name="pending_amount" value="" class="form-control" required>
</div>
</div>

         
<div class="form-group">
<label class="col-md-4 control-label" for="company">Operator Name</label>
<div class="col-lg-8">
<select name="operator_id" id="operator_id" class="form-control">  
<option value="">Select Operator</option>
                <?
				foreach($content3 as $key3 => $value3)
				{
				?>
<option value="<?=$value3['id']?>"><?=$value3['name']?></option>				
				<?php
				}
				?>
</select>
    
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="company">Settop Box No</label>
<div class="col-lg-8"><input type="text" id="settop_box_no" name="settop_box_no" value="" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="company">Card No</label>
<div class="col-lg-8"><input type="text" id="card_no" name="card_no" value="" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="company">Package</label>
<div class="col-lg-8">
<select name="package_id" id="package_id" class="form-control">  
<option value="">Select Operator</option>
                <?
				foreach($content4 as $key4 => $value4)
				{
				?>
<option value="<?=$value4['package_id']?>"><?=$value4['name']?></option>				
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
<input type="submit" name="serviceAdd" class="remodal-confirm" value="Add" onclick="return addCustomer();">		<button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
</div>
</div>

									</form>
							</div>
						</div>
					</div>
				</div>

				

</div>
</div>


<!-- You can define the global options -->
<script>
  // window.REMODAL_GLOBALS = {
  //   NAMESPACE: 'remodal',
  //   DEFAULTS: {
  //     hashTracking: true,
  //     closeOnConfirm: true,
  //     closeOnCancel: true,
  //     closeOnEscape: true,
  //     closeOnOutsideClick: true,
  //     modifier: ''
  //   }
  // };
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../libs/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="<? echo BEGIN_PATH ?>/remodal.js"></script>

<!-- Events -->
<script>
  $(document).on('opening', '.remodal', function () {
    console.log('opening');
  });

  $(document).on('opened', '.remodal', function () {
    console.log('opened');
  });

  $(document).on('closing', '.remodal', function (e) {
    console.log('closing' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('closed', '.remodal', function (e) {
    console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('confirmation', '.remodal', function () {
    console.log('confirmation');
  });

  $(document).on('cancellation', '.remodal', function () {
    console.log('cancellation');
  });

//  Usage:
//  $(function() {
//
//    // In this case the initialization function returns the already created instance
//    var inst = $('[data-remodal-id=modal]').remodal();
//
//    inst.open();
//    inst.close();
//    inst.getState();
//    inst.destroy();
//  });

  //  The second way to initialize:
  $('[data-remodal-id=modal2]').remodal({
    modifier: 'with-red-theme'
  });
</script>




