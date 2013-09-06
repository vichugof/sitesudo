<?php


/**
 * Setup My Child Theme's textdomain.
 *
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
 */
function chlid_twentythirteen_setup()
{
	/* TC_BASE is the root server path */
	/*if( ! defined('TC_BASE' ) )
	{
		define( 'TC_BASE', get_stylesheet_directory().'/' );
	}*/
	
	/* LOADS THE FRONT END FUNCTIONS */
	//require_once( TC_BASE.'inc/tc_handy_helpers.php');
	
	load_child_theme_textdomain( 'chlid-twentythirteen', get_stylesheet_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'chlid_twentythirteen_setup' );

/**
 *
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_child_js() {
	wp_enqueue_script( 'twentythirteen-script-child', get_stylesheet_directory_uri().'/js/theme-child-customizer.js', array( 'jquery' ), '2013-07-17', true );
	//wp_enqueue_script( 'twentythirteen-script', get_stylesheet_directory_uri() . '/js/functions.js', array( 'jquery' ), '2013-07-18', true );
}

add_action( 'wp_enqueue_scripts', 'twentythirteen_child_js' );