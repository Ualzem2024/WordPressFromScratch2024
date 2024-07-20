<?php
/*
Plugin Name: Ualzem 2024 Custom Post Types
Plugin URI: https://ualzemprojetos.com/portfolio/
Description: Create all Custom Post Types for this project.
Version: 1.0
Author: Ualzem Campos
Author URI: https://ualzemprojetos.com/portfolio/
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: ualzem2024_post_types
*/

if (!defined('ABSPATH')) die();


// Register new Custom Post Type






// Register post type for Turmas
function ualzem2024_post_types_Turmas()
{

    $labels = array(
        'name'                  => _x('Turmas', 'Post Type General Name', 'ualzem2024_post_types'),
        'singular_name'         => _x('Turma', 'Post Type Singular Name', 'ualzem2024_post_types'),
        'menu_name'             => __('Turmas', 'ualzem2024_post_types'),
        'name_admin_bar'        => __('Turma', 'ualzem2024_post_types'),
        'archives'              => __('Archive', 'ualzem2024_post_types'),
        'attributes'            => __('Attributes', 'ualzem2024_post_types'),
        'parent_item_colon'     => __('Parent Turma', 'ualzem2024_post_types'),
        'all_items'             => __('Todas Turmas', 'ualzem2024_post_types'),
        'add_new_item'          => __('Adicionar Turma', 'ualzem2024_post_types'),
        'add_new'               => __('Adicionar Turma', 'ualzem2024_post_types'),
        'new_item'              => __('Nova Turma', 'ualzem2024_post_types'),
        'edit_item'             => __('Edit Turma', 'ualzem2024_post_types'),
        'update_item'           => __('Update Turma', 'ualzem2024_post_types'),
        'view_item'             => __('View Turma', 'ualzem2024_post_types'),
        'view_items'            => __('View Turmas', 'ualzem2024_post_types'),
        'search_items'          => __('Search Turma', 'ualzem2024_post_types'),
        'not_found'             => __('Not Found', 'ualzem2024_post_types'),
        'not_found_in_trash'    => __('Not Found in Trash', 'ualzem2024_post_types'),
        'featured_image'        => __('Featured Image', 'ualzem2024_post_types'),
        'set_featured_image'    => __('Save Featured Image', 'ualzem2024_post_types'),
        'remove_featured_image' => __('Remove Featured Image', 'ualzem2024_post_types'),
        'use_featured_image'    => __('Use as Featured Image', 'ualzem2024_post_types'),
        'insert_into_item'      => __('Insert in Turma', 'ualzem2024_post_types'),
        'uploaded_to_this_item' => __('Adicionar in Turma', 'ualzem2024_post_types'),
        'items_list'            => __('List Turmas', 'ualzem2024_post_types'),
        'items_list_navigation' => __('Navigate to Turmas', 'ualzem2024_post_types'),
        'filter_items_list'     => __('Filter Turmas', 'ualzem2024_post_types'),
    );
    $args = array(
        'label'                 => __('Turmas', 'ualzem2024_post_types'),
        'description'           => __('Turmas for website', 'ualzem2024_post_types'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-welcome-learn-more',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('Turmas', $args);
}
add_action('init', 'ualzem2024_post_types_Turmas', 0);







function ualzem2024_post_types_Instrutores()
{

    $labels = array(
        'name'                  => _x('Instrutores', 'Post Type General Name', 'ualzem2024_post_types'),
        'singular_name'         => _x('Instrutor', 'Post Type Singular Name', 'ualzem2024_post_types'),
        'menu_name'             => __('Instrutores', 'ualzem2024_post_types'),
        'name_admin_bar'        => __('Instrutor', 'ualzem2024_post_types'),
        'archives'              => __('Archive', 'ualzem2024_post_types'),
        'attributes'            => __('Attributes', 'ualzem2024_post_types'),
        'parent_item_colon'     => __('Parent Instrutor', 'ualzem2024_post_types'),
        'all_items'             => __('Todos Instrutores', 'ualzem2024_post_types'),
        'add_new_item'          => __('Adicionar Instrutor', 'ualzem2024_post_types'),
        'add_new'               => __('Adicionar Instrutor', 'ualzem2024_post_types'),
        'new_item'              => __('Novo Instrutor', 'ualzem2024_post_types'),
        'edit_item'             => __('Edit Instrutor', 'ualzem2024_post_types'),
        'update_item'           => __('Update Instrutor', 'ualzem2024_post_types'),
        'view_item'             => __('View Instrutor', 'ualzem2024_post_types'),
        'view_items'            => __('View Instrutores', 'ualzem2024_post_types'),
        'search_items'          => __('Search Instrutor', 'ualzem2024_post_types'),
        'not_found'             => __('Not Found', 'ualzem2024_post_types'),
        'not_found_in_trash'    => __('Not Found in Trash', 'ualzem2024_post_types'),
        'featured_image'        => __('Featured Image', 'ualzem2024_post_types'),
        'set_featured_image'    => __('Save Featured Image', 'ualzem2024_post_types'),
        'remove_featured_image' => __('Remove Featured Image', 'ualzem2024_post_types'),
        'use_featured_image'    => __('Use as Featured Image', 'ualzem2024_post_types'),
        'insert_into_item'      => __('Insert in Instrutor', 'ualzem2024_post_types'),
        'uploaded_to_this_item' => __('Adicionar in Instrutor', 'ualzem2024_post_types'),
        'items_list'            => __('List Instrutores', 'ualzem2024_post_types'),
        'items_list_navigation' => __('Navigate to Instrutores', 'ualzem2024_post_types'),
        'filter_items_list'     => __('Filter Instrutores', 'ualzem2024_post_types'),
    );
    $args = array(
        'label'                 => __('Instrutores', 'ualzem2024_post_types'),
        'description'           => __('Instrutores for website', 'ualzem2024_post_types'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-users',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('instrutores', $args);
}
add_action('init', 'ualzem2024_post_types_Instrutores', 0);





















function ualzem2024_post_types_Depoimentos()
{

    $labels = array(
        'name'                  => _x('Depoimentos', 'Post Type General Name', 'ualzem2024_post_types'),
        'singular_name'         => _x('Depoimento', 'Post Type Singular Name', 'ualzem2024_post_types'),
        'menu_name'             => __('Depoimentos', 'ualzem2024_post_types'),
        'name_admin_bar'        => __('Depoimento', 'ualzem2024_post_types'),
        'archives'              => __('Archive', 'ualzem2024_post_types'),
        'attributes'            => __('Attributes', 'ualzem2024_post_types'),
        'parent_item_colon'     => __('Parent Depoimento ', 'ualzem2024_post_types'),
        'all_items'             => __('Todos Depoimentos', 'ualzem2024_post_types'),
        'add_new_item'          => __('Adicionar Depoimento', 'ualzem2024_post_types'),
        'add_new'               => __('Adicionar Depoimento', 'ualzem2024_post_types'),
        'new_item'              => __('Novo Depoimento', 'ualzem2024_post_types'),
        'edit_item'             => __('Edit Depoimento', 'ualzem2024_post_types'),
        'update_item'           => __('Update Depoimento', 'ualzem2024_post_types'),
        'view_item'             => __('View Depoimento', 'ualzem2024_post_types'),
        'view_items'            => __('View Depoimentos', 'ualzem2024_post_types'),
        'search_items'          => __('Search Depoimento', 'ualzem2024_post_types'),
        'not_found'             => __('Not found in Trash', 'ualzem2024_post_types'),
        'featured_image'        => __('Featured Image', 'ualzem2024_post_types'),
        'set_featured_image'    => __('Save Featured Image', 'ualzem2024_post_types'),
        'remove_featured_image' => __('Remove Featured Image', 'ualzem2024_post_types'),
        'use_featured_image'    => __('Use as Featured Image', 'ualzem2024_post_types'),
        'insert_into_item'      => __('Insert Into Depoimento', 'ualzem2024_post_types'),
        'uploaded_to_this_item' => __('Adicionar At Depoimento', 'ualzem2024_post_types'),
        'items_list'            => __('Depoimento List', 'ualzem2024_post_types'),
        'items_list_navigation' => __('Navigate toDepoimentos', 'ualzem2024_post_types'),
        'filter_items_list'     => __('Filter Depoimentos', 'ualzem2024_post_types'),
    );
    $args = array(
        'label'                 => __('Depoimentos', 'ualzem2024_post_types'),
        'description'           => __('Depoimentos para el Sitio Web', 'ualzem2024_post_types'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-editor-quote',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('depoimentos', $args);
}
add_action('init', 'ualzem2024_post_types_Depoimentos', 0);
