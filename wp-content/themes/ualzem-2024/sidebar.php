<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ualzem_Theme_2024
 */
?>



<aside class="sidebar">
	<?php
	if (is_active_sidebar('sidebar')) :
		dynamic_sidebar('sidebar');
	endif;
	?>
</aside>