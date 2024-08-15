<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ualzem_Theme_2024
 */

?>
<?php get_header(); ?>


<main class="container page section with-sidebar">


	<div class="page-content">
		<?php get_template_part('template-parts/page', 'loop'); ?>
	</div>


	<?php get_sidebar(); ?>


</main>



<?php get_footer(); ?>