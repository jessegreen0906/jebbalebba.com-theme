<?php get_header(); ?>
<div class="container-fluid">
	<div class="vert-sect">
		<div class="hor-sect">
			<div class="img-panel">
				<img src='<?php echo get_post_meta($post->ID,"Page_picture",true); ?>' />
				<h1><?php echo get_the_title($post->ID); ?></h1>
			</div>	
		</div>
		<div class="hor-sect content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content();
			endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
