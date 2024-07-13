<?php


function ualzem_2024_turmas()
{  ?>
    <ul class="classes-list">
        <?php
        $args = array(
            'post_type' => 'turmas',
        );

        $turmas = new WP_Query($args);

        while ($turmas->have_posts()) : $turmas->the_post();
        ?>
            <li class="gym-class card gradient">
                <?php the_post_thumbnail('mediumSize'); ?>

                <div class="card-content">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>


                    <?php
                    $start_time = get_field('inicio_da_aula');
                    $end_time = get_field('termino_da_aula');
                    ?>

                    <p><?php the_field('dias_da_aulas');
                        echo " de " . $start_time . " até " . $end_time ?></p>




                </div>



            </li>


        <?php endwhile;
        wp_reset_postdata(); ?>

    </ul>




<?php
}
