<?php
//Setting screen width
if ( ! isset( $content_width ) ) $content_width = 900;
//This was not needed for the website but was one of the requirements in the theme checker, this adds comment box if on a post
//https://peterwilson.cc/including-wordpress-comment-reply-js/ last accessed 14/05/2018
if ( is_singular() ) wp_enqueue_script( "comment-reply" );

//Creating a custom menu to dsiplay the navigation bar in the theme
//https://codex.wordpress.org/Navigation_Menus last accessed 13/05/2018
function register_menu() {
	//registers the navigation menu
	register_nav_menu('menu-header',_('Header Menu'));
}
//adds the link to the navigation menu
add_action( 'init', 'register_menu');
?>