<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ualzem_Theme_2024
 */

?>

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