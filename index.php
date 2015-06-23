<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/*
  Plugin Name: MX Wordpress Rating System
  Plugin URI: https://www.facebook.com/meldin.xavier
  Description: Basic Rating Plugin for posts.
  Version: 1.0
  Author: Meldin Xavier
  Author URI: https://www.facebook.com/meldin.xavier
  License: GPLv2+
  Text Domain: mx-wordpress-rating-system
*/
// Register Style
function mx_rating_styles() {

	wp_deregister_style( 'Rating Style' );
	wp_register_style( 'Rating Style', 'css/style.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'Rating Style' );

}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'mx_rating_styles' );
