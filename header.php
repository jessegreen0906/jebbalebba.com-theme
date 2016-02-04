<!DOCTYPE html>
<html lang="en">
<head>
	<title>JebbaLebba.com</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--Include external libraries-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/css/style.css" />
	<script src="/wp-content/themes/JG-wp-theme/js/navigatable-dropdown.js"></script>
	
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="/">JebbaLebba.com</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li <?php if(is_front_page()){echo "class=\"active\"";} ?>><a href="/">Home</a></li>
					<li <?php if(is_page('Professional Profile')){echo " class=\"active\"";} ?>><a href="professional-profile/">Professional Profile</a></li>
					<li <?php if(is_page('Personal Projects')){echo " class=\"active\"";} ?>><a href="personal-projects/">Personal Projects</a></li> 
					<li <?php if(is_page('Musings')){echo " class=\"active\"";} ?>><a href="musings/">Musings</a></li> 
					<li <?php if(is_page('Resources')){echo " class=\"active\"";} ?>><a href="resources/">Hosted Resources</a></li> 
				</ul>
			</div>
	</nav>
