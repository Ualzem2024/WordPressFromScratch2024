<?php

/**
 * Ualzem Theme 2024 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ualzem_Theme_2024
 */



/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ualzem_2024_menus()
{
	register_nav_menus(array(
		'main-menu' => 'Main Menu'
	));
}
add_action('init', 'ualzem_2024_menus');


// Adds Stylesheets and JS Files
function ualzem_2024_scripts()
{
	// Normalize CSS:
	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

	// Google font:
	wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0');


	// Slicknav Menu css:
	wp_enqueue_style('slicknavcss', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');


	// Main Stylesheet:                                     //vai rodar normalizedepois googlefont e só depois o style principal
	wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefont'), '1.0.0');




	/*********************** Load JS Files **********************/

	/** jquery: */
	wp_enqueue_script('jquery');

	/** slicknav JS: */
	wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);


	/** Meu javascript: */
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'ualzem_2024_scripts');
