<?php

/**
 * Template Name: Gallery Page
 * The template for displaying all pages with sidebar
 *
 * This is the template that displays gallery page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ualzem_Theme_2024
 */
?>

<?php get_header(); ?>

<!--  para o efeito lightbox ao clicar na thumb da galeria usamos o framework aqui - https://lokeshdhakar.com/projects/lightbox2/ -->

<main class="container page section">

    <?php while (have_posts()): the_post(); ?>
        <h1 class="text-center text-primary"><?php the_title(); ?></h1>
        <?php
        $gallery = get_post_gallery(get_the_ID(), false);
        $gallery_images_ids = explode(',', $gallery['ids']);
        ?>

        <ul class="gallery-images">
            <?php
            $i = 0;  // aqui começa lógica para tamanhos diferentes das imagens da galeria
            foreach ($gallery_images_ids as $id):
                $size = ($i === 3 || $i === 6) ? 'portrait' : 'square';
                $imageThumb = wp_get_attachment_image_src($id, $size);  // tamanho thumbnail
                $image = wp_get_attachment_image_src($id, 'large'); ?> <!--  tamanho grande imagem aberta  -->
                <li>
                    <a href="<?php echo $image[0]; ?>" data-lightbox="gallery"> <!-- aplicando efeito lightbox aqui  -->
                        <img src="<?php echo $imageThumb[0]; ?>" />
                    </a>
                </li>



            <?php $i++;
            endforeach; ?>
        </ul>

    <?php endwhile; ?>

</main>


<?php get_footer(); ?>