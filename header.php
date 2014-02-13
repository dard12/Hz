<!DOCTYPE html>
<html>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>

	<link href="<?php bloginfo('template_directory'); ?>/media/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>


<body>
	<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'navbar navbar-inverse navbar-fixed-top' ) ); ?>
