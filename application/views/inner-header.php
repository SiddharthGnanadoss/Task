<header class="header navbar navbar-fixed-top" role="banner">
		<!-- Top Navigation Bar -->
		<div class="container">
		
		                <div class="row">
					<div class="col-md-4" style="text-align:right; line-height:50px; color:#ffffff; font-size:20px;">
		
				<strong>Lead Management </strong>&nbsp;
			
			</div>
	
<div class="col-md-8">
			<!-- Top Right Menu -->
			
<?php
$active="";
$active2="";
$active3="";
$active4="";
$active5="";
$active6="";
$active7="";

$current_url = base_url(uri_string());
$current_url = explode("/",$current_url);
$len = sizeof($current_url);
$len = $len-1;
$current_url = $current_url[$len];

if($current_url=="profile" || $current_url=="profileview" || $current_url=="profileedit")
{
	$active='class="active"';
}

if($current_url=="search")
{
	$active2 ='class="active"';
}

if($current_url=="request")
{
	$active3 ='class="active"';
}

if($current_url=="report")
{
	$active4 ='class="active"';
}
?>

<style>
.active
{
	background-color:#ffffff; color:#000000 !important;
	text-shadow:none !important;
	font-weight:bold;
}

.dropdown-menu>li>a
{
	line-height:27px !important;
}
</style>			
			
			
			<ul class="nav navbar-nav navbar-right">
			
			<li class="dropdown">
					<a href="<? echo BEGIN_PATH ?>/dashboard">
						Dashboard
					</a>
			</li>
			
			<li class="dropdown">
					<a href="<? echo BEGIN_PATH ?>/profile" <?=$active?>>
						Profile
					</a>
			</li>
			
			<li class="dropdown">
					<a href="<? echo BEGIN_PATH ?>/search" <?=$active2?>>
						Search 
					</a>
					
			</li>
			
			<li class="dropdown">
					<a href="<? echo BEGIN_PATH ?>/request" <?=$active3?>>
						Request 
					</a>
					
			</li>
			
			<li class="dropdown">
					<a href="<? echo BEGIN_PATH ?>/report" <?=$active4?>>
						Backup 
					</a>
					
			</li>

			
		    <li class="dropdown">
					<a  <?=$active5?> href="<? echo BEGIN_PATH ?>/settings" class="dropdown-toggle" data-toggle="dropdown">
						Settings
						<i class="icon-caret-down small"></i>
					</a>
					<ul class="dropdown-menu">

						
						<li><a href="<? echo BEGIN_PATH ?>/caste"><i class="icon-calendar"></i>Caste</a></li>
						
						<li><a href="<? echo BEGIN_PATH ?>/gothram"><i class="icon-calendar"></i>Gothram</a></li>
						<li><a href="<? echo BEGIN_PATH ?>/education"><i class="icon-calendar"></i>Education</a></li>
<li><a href="<? echo BEGIN_PATH ?>/gallery"><i class="icon-calendar"></i>Gallery</a></li>
<li><a href="#"><i class="icon-calendar"></i>Photography</a></li>
						
						<li><a href="<? echo BEGIN_PATH ?>/user"><i class="icon-calendar"></i>User Management</a></li>

						
					</ul>
			</li>
			
			
				<!-- User Login Dropdown -->
				<li class="dropdown user" style="background-color:#334d63;">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
						<i class="icon-male"></i>
						<span class="username"><? echo $username; ?></span>
						<i class="icon-caret-down small"></i>
					</a>
					<ul class="dropdown-menu">
					    <li><a href="<? echo BEGIN_PATH ?>/settings/editprofile"><i class="icon-calendar"></i>Edit Profile</a></li>
						<li><a href="<? echo BEGIN_PATH ?>/settings/changepassword"><i class="icon-key"></i> Change Password</a></li>
						<li class="divider"></li>
						<li><a href="<? echo BEGIN_PATH ?>/logout"><i class="icon-key"></i> Log Out</a></li>
					</ul>
				</li>
				<!-- /user login dropdown -->
			</ul>
			</div>
					</div>
			<!-- /Top Right Menu -->
		</div>
		<!-- /top navigation bar -->

	</header>