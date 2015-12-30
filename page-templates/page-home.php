<!DOCTYPE html>
<html lang="en">
<head>
	<?php /*Template Name: Home page template */?>
	<title>JebbaLebba.com</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/css/templates/page-home.css" />
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-default">
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
		<div class="vert-sect">
			<div class="vert-sect" id="content">
				<div class="hor-sect hidden-md hidden-lg" style="background-color:rgba(50,50,50,1)">
					<div class="img-panel">
						<img src="http://jebbalebba.com/JEBBALEBBA/wp-content/uploads/2015/09/header-image.jpg" />
					</div>
				</div>
				<a href="professional-profile/">
					<div class="hor-sect" style="background-color:rgba(120,120,120,1)">
						<div class="graphic-link">
							<img src="http://jebbalebba.com/JEBBALEBBA/wp-content/uploads/2015/12/coffee-cup-desk-pen.jpg" class="img-circle" />
							<h3>Professional Profile</h3>
						</div>
					</div>
				</a>
				<a href="personal-projects/">
					<div class="hor-sect" style="background-color:rgba(50,50,50,1)">
						<div class="graphic-link">
							<img src="http://jebbalebba.com/JEBBALEBBA/wp-content/uploads/2015/12/hands-coffee-cup-apple.jpg" class="img-circle" />
							<h3>Personal Projects</h3>
						</div>
					</div>
				</a>
				<a href="musings/">
					<div class="hor-sect" style="background-color:rgba(120,120,120,1)">
						<div class="graphic-link">
							<img src="http://jebbalebba.com/JEBBALEBBA/wp-content/uploads/2015/12/man-person-fog-mist.jpg" class="img-circle" />
							<h3>Musings</h3>
						</div>
					</div>
				</a>
				<a href="resources/">
					<div class="hor-sect" style="background-color:rgba(50,50,50,1)">
						<div class="graphic-link">
							<img src="http://jebbalebba.com/JEBBALEBBA/wp-content/uploads/2015/12/books-colorful-harry-potter.jpg" class="img-circle" />
							<h3>Hosted Resources</h3>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="hor-sect">
			<?php get_footer(); ?>
		</div>
	</div>
</body>
</html>
