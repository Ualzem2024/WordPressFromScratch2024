<?php

/**
 * Template Name: Page with Sidebar
 * The template for displaying all pages with sidebar
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages with sidebar
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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