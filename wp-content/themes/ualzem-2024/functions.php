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


// Links to the queries file:
require get_template_directory() . '/inc/queries.php';




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


// function configuration to render after setup theme:
function ualzem_2024_setup()
{

	// Register new image sizes:
	add_image_size('square', 350, 350, true);
	add_image_size('portrait', 350, 724, true);
	add_image_size('box', 400, 375, true);
	add_image_size('mediumSize', 700, 400, true);
	add_image_size('blog', 966, 644, true);



	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'ualzem_2024_setup');




function ualzem_2024_widgets()
{
	register_sidebar(array(
		'name' => 'Sidebar Ualzem',
		'id' => 'sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="text-primary">',
		'after_title' => '</h3>',
	));
}
add_action('widgets_init', 'ualzem_2024_widgets');







// Desable gutenberg:
add_filter('use_block_editor_for_post', '__return_false', 10);
