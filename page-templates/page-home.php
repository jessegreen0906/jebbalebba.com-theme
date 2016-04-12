	<?php /*Template Name: Home page template */?>
	<?php get_header(); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/css/templates/page-home.css" />
		<div class="vert-sect">
			<div class="vert-sect" id="content">
				<div class="hor-sect hidden-md hidden-lg" style="background-color:rgba(50,50,50,1)">
					<div class="img-panel">
						<img src="/wp-content/uploads/2015/09/header-image.jpg" />
					</div>
				</div>
				<a href="professional-profile/">
					<div class="hor-sect" style="background-color:rgba(120,120,120,1)">
						<div class="graphic-link">
							<img src="/wp-content/uploads/2016/03/blue-suit-square.jpg" class="img-circle" />
							<h3>Professional Profile</h3>
						</div>
					</div>
				</a>
				<a href="personal-projects/">
					<div class="hor-sect" style="background-color:rgba(50,50,50,1)">
						<div class="graphic-link">
							<img src="/wp-content/uploads/2015/12/coffee-cup-desk-pen.jpg" class="img-circle" />
							<h3>Personal Projects</h3>
						</div>
					</div>
				</a>
				<a href="musings/">
					<div class="hor-sect" style="background-color:rgba(120,120,120,1)">
						<div class="graphic-link">
							<img src="/wp-content/uploads/2015/12/man-person-fog-mist.jpg" class="img-circle" />
							<h3>Musings</h3>
						</div>
					</div>
				</a>
				<a href="resources/">
					<div class="hor-sect" style="background-color:rgba(50,50,50,1)">
						<div class="graphic-link">
							<img src="/wp-content/uploads/2015/12/books-colorful-harry-potter.jpg" class="img-circle" />
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
