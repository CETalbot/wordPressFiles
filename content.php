<!-- Div tags for the content input -->
<div class="posts <?php post_class(); ?>">
	<!--h2 tag for the Content subtitles, with PHP tag to pull in the title from the CMS input 
		to diplay it on the webpage being created -->
	<h2 class="postsTitle"><?php the_title(); ?></h2>

	<!-- Pulls in the content PHP file -->

	<?php the_content(); ?>
</div>