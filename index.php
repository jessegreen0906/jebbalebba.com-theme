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
			<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					the_content();
				}
			} else {
			?>
				<p>Sorry, no posts to show.</p>
			<?php 
			}

			if(get_post_meta($post->ID,"page_type",true) == "posts")
			{
				$postCat = get_post_meta($post->ID, "post_category", true);
				$args = array (
					'numberposts' => 10,
					'category_name' => $postCat
				);
				
				$posts = get_posts($args);
				$postCount = 0;
				
				foreach($posts as $post) {
				?>
					<div class="content-preview-box" id="<?php echo 'post'.$postCount; ?>">
						<a href="/<?php echo $post->post_name; ?>"><h2><?php echo $post->post_title; ?></h2></a>
						<p class="subtext">Posted on <?php echo mysql2date('l, j F Y', $post->post_date); ?><?php if($post->post_modified != $post->post_date){echo "; Post last modified at ". mysql2date('g:ia, j F Y', $post->post_modified);} ?></p>
						<?php if(strlen($post->post_content)>=200)
						{ ?>
							<div class="preview">
								<?php $content = apply_filters('the_content', $post->post_content);
									echo substr($content, 0, 180)." ..."; ?>
								<br />
								<a class="btn btn-default" onclick="showPostToggle(<?php echo 'post'+$postCount; ?>);">Show full post</a>
							</div>
							<div class="full-post">
								<?php echo $content ?>
								<br />
								<a class="btn btn-default" onclick="showPostToggle(<?php echo 'post'+$postCount; ?>);">Hide full post</a>
							</div>
						<?php } else { ?>
							<div>
								<?php echo apply_filters('the_content', $post->post_content) ?>
							</div>
						<?php } ?>
					</div>
				<?php
					$postCount++;
				}
				
			} else {
			}
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
<script>
	function showPostToggle(postID) {
		if($("#post"+postID+" .preview").css("display") == "block")
		{
			$("#post"+postID+" .preview").css("display", "none");
			$("#post"+postID+" .full-post").css("display", "block");
		} else {
			$("#post"+postID+" .preview").css("display", "block");
			$("#post"+postID+" .full-post").css("display", "none");
		}
	}
</script>
