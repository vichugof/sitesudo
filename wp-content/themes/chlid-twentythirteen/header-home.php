<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php include_once("analyticstracking.php") ?>	
    
	<div id="page" class="hfeed site container">
		<header id="masthead" class="site-header" role="banner">
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'header', 'menu' => 'Menu 1', 'menu_id' => 'nav-sudo', 'menu_class' => 'nav nav-pills ', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'fallback_cb'     => FALSE,) ); ?>
					<?php get_search_form(); ?>

				</nav>
			</div>
		</header>

		<div class="jumbotron">
                    <h1> <?php _e('Company', 'chlid-twentythirteen'); echo " "; bloginfo( 'name' );?> <span class='promt'> | </span></h1>
			<p class="lead"><?php bloginfo( 'description' ); ?></p>
			<p><a class="btn btn-lg btn-success btn-sudo-home" href="#"><?php _e( 'Sign up today', 'twentythirteen' );?> </a></p>
		</div>
