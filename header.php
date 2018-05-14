<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<!-- JQuery link -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<!--ajax link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<!--Local bootstrap.js link -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.min.js';?>"></script>
	<!--Local bootstrap.css link -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/bootstrap.css';?>">
	<!--Local style sheet for the website link -->
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet">

	<?php wp_head();?>
</head>
<header>
	<!-- PHP code to call for the Site name and display as a title on top of the screen -->
	<h1 id="title"><a href="<?php echo  esc_url( site_url() ) ;?>"><?php echo get_bloginfo('name'); ?></h1>
	<!--PHP code to call for site description and display under the title on top of the screen -->
	<p id="titleDescription"><?php echo get_bloginfo('description'); ?></p>
</header>
<body <?php body_class(); ?>>
	<!--Div for the navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="nav">
				<!--Displays the custom navigation menu created in the functions.php -->
				<?php wp_nav_menu( array( 'theme_location' => 'menu-header')); ?>
			</nav>
		</div>
	</div>	

	<div class="container">
