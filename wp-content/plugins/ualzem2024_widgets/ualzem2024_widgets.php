<?php
/*
Plugin Name: Ualzem 2024 Widgets
Plugin URI: https://ualzemprojetos.com/portfolio/
Description: Create Custom Widgets for this project.
Version: 1.0
Author: Ualzem Campos
Author URI: https://ualzemprojetos.com/portfolio/
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: ualzem2024_widgets
*/

if (!defined('ABSPATH')) die();

/**
 * Adds Ualzem_Widget widget.
 */
class Ualzem_Widget extends WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    function __construct()
    {
        parent::__construct(
            'ualzem_widget', // Base ID
            esc_html__('Widget Ualzem (Lista de Turmas)', 'text_domain'), // Name
            array('description' => esc_html__('Exibirá a lista de todas as turmas da academia', 'text_domain'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        $before_widget = isset($args['before_widget']) ? $args['before_widget'] : '';
        $after_widget = isset($args['after_widget']) ? $args['after_widget'] : '';

        echo $before_widget;

        $title = isset($instance['title']) ? $instance['title'] : '';
        $quantity = isset($instance['quantity']) ? $instance['quantity'] : 3;

?>

        <h2 class="text-primary text-center classes-header">
            <?php echo esc_html($title); ?> <!-- Vai renderizar o titulo que eu adicionar lá no painel do widget -->
        </h2>

        <ul class="sidebar-classes-list">
            <?php
            $query_args = array(
                'post_type' => 'turmas',
                'posts_per_page' => $quantity, // vai mostrar a quantidade de posts que eu definir no painel do widget
                'orderby' => 'rand',
            );

            $turmas = new WP_Query($query_args);
            while ($turmas->have_posts()) : $turmas->the_post();
            ?>
                <li class="sidebar-class">
                    <div class="sidebar-widget-mage">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                    <div class="class-content">
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="text-primary"><?php the_title(); ?></h3>
                        </a>

                        <?php
                        $start_time = get_field('inicio_da_aula');
                        $end_time = get_field('termino_da_aula');
                        ?>

                        <p><?php the_field('dias_da_aulas');
                            echo " de " . $start_time . " até " . $end_time ?></p>
                    </div>
                </li>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </ul>

    <?php
        echo $after_widget;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) // MOSTRA O CONTEÚDO NO PAINEL DO WIDGET:
    {
        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('New title', 'text_domain');
        $quantity = !empty($instance['quantity']) ? $instance['quantity'] : 1;
    ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Title:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('quantity')); ?>"><?php esc_attr_e('Quantidade de aulas para mostrar:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('quantity')); ?>" name="<?php echo esc_attr($this->get_field_name('quantity')); ?>" type="number" value="<?php echo esc_attr($quantity); ?>" min="1">
        </p>

<?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)  // SALVA AS ALTERAÇÕES QUE EU FIZER NO PAINEL DO WIDGET:
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        $instance['quantity'] = (!empty($new_instance['quantity'])) ? sanitize_text_field($new_instance['quantity']) : 1;

        return $instance;
    }
} // class Ualzem_Widget

// register Ualzem_Widget widget
function register_ualzem_widget()
{
    register_widget('Ualzem_Widget');
}
add_action('widgets_init', 'register_ualzem_widget');
