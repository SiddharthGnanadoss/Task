<style>
.col-md-10
{
	line-height:27px !important;
}
.page-header
{
	padding-bottom:0px !important;
}
body
{
	font-size:14px !important;
}
.table tbody>tr>td
{
	line-height:27px !important;
}
</style>

<header class="header navbar navbar-fixed-top" role="banner">
		<!-- Top Navigation Bar -->
		<div class="container">

			<!-- Only visible on smartphones, menu toggle -->
			<ul class="nav navbar-nav">
				<li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
			</ul>

			<!-- Logo -->
			<a class="navbar-brand" href="dashboard.php">
				<img src="" alt="" style="width:50px;" />
				<strong>Polling System</strong>
			</a>
			<!-- /logo -->

			<!-- Sidebar Toggler -->
			<a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
				<i class="icon-reorder"></i>
			</a>
			<!-- /Sidebar Toggler -->

			<!-- Top Left Menu -->
			<ul class="nav navbar-nav navbar-left hidden-xs hidden-sm">
				



				<li class="dropdown" style="display:none;"> 
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Master Tables &nbsp; <i class="icon-caret-down small"></i> </a> 
				<ul class="dropdown-menu"> 
<li><a href=""><i class="icon-calendar"></i> New Quotation</a></li> 
<li><a href=""><i class="icon-calendar"></i> New Quotation</a></li> 
<li><a href=""><i class="icon-calendar"></i> New Quotation</a></li> 
<li><a href=""><i class="icon-calendar"></i> New Quotation</a></li> 
<li><a href=""><i class="icon-calendar"></i> New Quotation</a></li> 
				</ul> 
				</li>




				

			</ul>
			<!-- /Top Left Menu -->

			<ul class="nav navbar-nav navbar-right">
				<!-- User Login Dropdown -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
						<i class="icon-male"></i>
						<span class="username"><? echo $username; ?></span>
						<i class="icon-caret-down small"></i>
					</a>
					<ul class="dropdown-menu">
					    <li><a href="<? echo BEGIN_PATH ?>/settings/changepassword"><i class="icon-key"></i> Change Password</a></li>
						<li class="divider"></li>
						<li><a href="<? echo BEGIN_PATH ?>/logout"><i class="icon-key"></i> Log Out</a></li>
					</ul>
				</li>
				<!-- /user login dropdown -->
			</ul>
			
			</div> <!-- /#frame -->
		</div> <!-- /#project-switcher -->
	</header>