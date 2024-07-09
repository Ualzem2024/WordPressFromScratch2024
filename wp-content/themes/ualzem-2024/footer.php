<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ualzem_Theme_2024
 */

?>

<footer class="site-footer container">
	<div class="footer-content">
		<?php
		$args = array(
			'theme_location' => 'main-menu',
			'container' => 'nav',
			'container_class' => 'footer-menu'
		);
		wp_nav_menu($args);
		?>

		<p class="copyright">All Rights Reserved. <?php echo get_bloginfo('nane') . " - " . date('Y'); ?></p>
	</div>
</footer>


<?php wp_footer(); ?>

</body>

</html>