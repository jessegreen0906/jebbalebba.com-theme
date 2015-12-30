<?php get_header(); ?>
<div class="vert-sect u-backgroundWhite">
	<div class="hor-sect">
		<div class="img-panel">
			<img src="http://jebbalebba.com/JEBBALEBBA/wp-content/uploads/2015/12/blue-suit-portrait.jpg">
			<h3><?php echo get_the_title($post->ID); ?></h3>
		</div>	
	</div>
	<div class="hor-sect">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content();
		endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
