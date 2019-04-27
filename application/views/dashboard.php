<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>


<!DOCTYPE html>
<html lang="en">
<head>

<?php include('script.php'); ?>

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


<style>
a {
    color: #ffffff;
}
</style>


</head>

<body class="breakpoint-1200 theme-dark">

	<!-- Header -->
	
    <?php include('header.php'); ?> 
    
    <!-- /.header -->

<div id="container">

<?php
$this->load->view('leftmenu.php');
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
				
			<form name="login" class="form-vertical login-form" action="<?php echo BEGIN_PATH ?>/dashboard/poll" method="post">				
<div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-circle-arrow-right"></span>&nbsp;What is your favourite JavaScript Library?</h3>
                </div>
                <div class="panel-body two-col">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="well well-sm">
                                <div class="checkbox">
                                    <label>
                                        <input type="radio" name="fav" value="1">
                                        JQuery
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="well well-sm">
                                <div class="checkbox">
                                    <label>
                                        <input type="radio" name="fav" value="2">
                                        MooTools
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="well well-sm margin-bottom-none">
                                <div class="checkbox">
                                    <label>
                                        <input type="radio" name="fav" value="3">
                                        YUI Library
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="well well-sm margin-bottom-none">
                                <div class="checkbox">
                                    <label>
                                        <input type="radio" name="fav" value="4">
                                        Glow
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    
<input type="submit" name="submit" value="Vote" class="btn btn-success btn-sm">

                </div>
            </div>
        </div>
        </form>
        
        

        
 <div class="col-md-6">
<div class="widget box"> <div class="widget-header"> <h4><i class="icon-reorder"></i> Progressbars</h4> </div> <div class="widget-content"> 

JQuery<div class="progress"> 
<div class="progress-bar progress-bar-info" style="width: <?php echo $jquery;?>%"></div> 
</div> 
MooTools<div class="progress"> 
<div class="progress-bar progress-bar-success" style="width:<?php echo $moo;?>%"></div> 
</div> 
YUI Library<div class="progress"> <div class="progress-bar progress-bar-warning" style="width: <?php echo $yui;?>%"></div> 
</div> 
Glow <div class="progress"> <div class="progress-bar progress-bar-danger" style="width: <?php echo $glow;?>%"></div> </div>  </div> </div>
</div>       
        


				<!-- /Page Content -->
			</div>
			<!-- /.container -->

		</div>
	</div>

	

</body>
</html>