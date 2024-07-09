<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ualzem_Theme_2024
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>


	<header id="masthead" class="site-header">
		<div class="container header-grid">
			<div class="navigation-bar">
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri() . "/img/logo.svg" ?>" alt="Logo Site">
					</a>
				</div>

				<!--  OBSERVAÇÃO: BIBLIOTECA PARA O MENU - SLICKNAV - https://github.com/ComputerWolf/SlickNav (AULA 46 - CREATE RESPONSIVE NAVIGATION) -->

				<?php
				$args = array(
					'theme_location' => 'main-menu',
					'container' => 'nav',
					'container_class' => 'main-menu'
				);
				wp_nav_menu($args);
				?>

			</div>
		</div>
	</header>