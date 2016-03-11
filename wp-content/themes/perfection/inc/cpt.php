<?php
// Register Custom Post Type
add_action('init', 'custom_post_type', 0);

function custom_post_type()
{
    $labels = array(
        'name' => 'Authors',
        'singular_name' => 'Author',
        'menu_name' => 'Authors',
        'all_items' => 'All author',
        'view_item' => 'View author',
        'add_new_item' => 'Add author',
        'add_new' => 'Add new',
        'edit_item' => 'Edit',
        'update_item' => 'Update',
        'search_items' => 'Search'
    );

    $args = array(
        'labels' => $labels,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'has_archive' => false,
        'menu_position'=> 24,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'rewrite' => array(
            'with_front' => true
        )
    );

    register_post_type('authors', $args);

    $labels = array(
        'name' => 'Icon Groups',
        'singular_name' => 'Icon group',
        'menu_name' => 'Icon Groups',
        'all_items' => 'All Icon groups',
        'view_item' => 'View Icon group',
        'add_new_item' => 'Add Icon group',
        'add_new' => 'Add new',
        'edit_item' => 'Edit',
        'update_item' => 'Update',
        'search_items' => 'Search'
    );

    $args = array(
        'labels' => $labels,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'has_archive' => false,
        'menu_position'=> 21,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'rewrite' => array(
            'with_front' => true
        )
    );

    register_post_type('icons', $args);
}
