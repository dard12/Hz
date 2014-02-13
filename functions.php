<?php

function modified_nav_bar($items){
	$site_url = get_site_url();
	$blog_url = get_bloginfo('template_directory');


	$logo = 
	'<div class="navbar-header">' .
    	'<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu-collapse">' .
		    '<span class="sr-only">Toggle navigation</span>' .
		    '<span class="icon-bar"></span>' .
      		'<span class="icon-bar"></span>' .
      		'<span class="icon-bar"></span>' .
    	'</button>' .
    	'<a class="navbar-brand" href="' . $site_url . '">' .
    		'<img src="' . $blog_url . '/media/logo.jpg">' .
    	'</a>' .
  	'</div>';

  	$items = '<div class="collapse navbar-collapse" id="main-menu-collapse">' . $items . '</div>';

    return $logo . $items;
}
add_filter('wp_nav_menu_items','modified_nav_bar');

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions   
}

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'post_thumb', 600, 200, true );
}

function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

if ( function_exists('register_sidebar') ) {
	register_sidebar( array(
		'name'          => __( 'Home Sidebar' ),
		'id'            => 'sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
?>