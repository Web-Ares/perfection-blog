<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'noindex');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'signuppageheaders');

add_filter('widget_text', 'do_shortcode');
add_filter('wpcf7_form_elements', 'do_shortcode');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}


add_action('after_setup_theme', 'theme_setup');
function theme_setup()
{
    add_theme_support('menus');
//	add_image_size( '95x95', 95, 95 );
	add_image_size( '1600x755', 1600, 755, true );
	add_image_size( '1270x595', 1270, 595, true );
	add_image_size( '635x340', 635, 340, true );
	add_image_size( '750x716', 750, 716, true );
}


add_action('wp_enqueue_scripts', 'add_js');
function add_js()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', false, '2.1.3');
    wp_enqueue_script('jquery');

}

add_action('wp_print_styles', 'add_style');
function add_style()
{
//    if (is_page('166')||is_page('205')) {
        wp_enqueue_style( 'css-ligh', TEMPLATEURI . '/css/lightbox.css', array(), '4.1.2' );
        wp_enqueue_script( 'jquery-ligh', TEMPLATEURI . '/js/lightbox.js', array(), '1', true );
//    }
    wp_enqueue_style('site-style', TEMPLATEURI . '/css/main.css', array(), '1.0');

}

add_filter( 'widget_text', 'do_shortcode' );

add_filter( 'widget_categories_args', 'widget_categories_args_filter' );
function widget_categories_args_filter( $args ) {
    $args['show_option_all'] = 'Все';
    $args['hide_empty']      = 0;

    return $args;
}
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'switch language',
        'id'            => 'switch_lang',
        'before_widget' => '<span class="language">',
        'after_widget'  => '</span>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

register_nav_menus( array(
    'menu_main' => 'menu_main_v',
) );