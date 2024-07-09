<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ualzem_Theme_2024
 */
?>

<?php get_header(); ?>

<main class="container page section no-sidebars">

	<?php while (have_posts()) : the_post(); ?>

		<h1 class="text-center text-primary"><?php the_title(); ?></h1>

		<?php
		if (has_post_thumbnail()) :
			the_post_thumbnail('blog', array('class' => 'featured-image'));
		else : ?>
			<img src="<?php echo get_template_directory_uri() . "/img/gym-default.jpg" ?>" alt="Logo Site">
		<?php
		endif;
		?>

		<div class="text-center">
			<?php the_content(); ?>
		</div>

	<?php endwhile; ?>

</main>


<?php get_footer(); ?>