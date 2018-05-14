<!--Pulls the header on the page -->
<?php get_header(); ?>
<!-- Main body div for display the content -->
<div id="main">
	<div class="row">
		<div id="content" class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<!-- Pulls the content on to the page by calling content php file -->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part('content', get_post_format()); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>

<!-- Pulls footer on to the page -->
<?php get_footer(); ?>