<!DOCTYPE html>
<html lang="en">
<head>
	<title>JebbaLebba.com</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/css/style.css" />
	
	<?php 
		echo "<!--Hello world-->";
		$image = get_post_meta($post->ID, 'Page_picture', true);
		echo "<!-- $image -->";
		$image = get_post_meta($post->ID, 'Page_picture', true);
		echo "<!-- $image -->";
		if(!empty($image)) { ?>
			<style type="text/css">
				body {
					background-image:url("<?php echo $image; ?>");
					background-size:cover;
					background-attachment:fixed;
					background-repeat:no-repeat;
					background-position:top center;
				}
			</style>
		<?php 
		} ?>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header" style="background-color:rgba(255,255,255,1)">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="#">JebbaLebba.com</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar" style="background-color:rgba(255,255,255,1)">
				<ul class="nav navbar-nav">
					<li class="active"><a href="/">Home</a></li>
					<li><a href="professional-profile/">Professional Profile</a></li>
					<li><a href="personal-projects/">Personal Projects</a></li> 
					<li><a href="musings/">Musings</a></li> 
					<li><a href="resources/">Hosted Resources</a></li> 
				</ul>
			</div>
	</nav>
