<?php
//required actions
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
add_filter('xmlrpc_enabled','__return_false');
remove_action('wp_head', 'wlwmanifest_link');
// close required actions

remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'signuppageheaders');

add_filter('the_content', 'do_shortcode');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}


add_action('after_setup_theme', 'theme_setup');
function theme_setup()
{
    add_theme_support('menus');
	add_image_size( '96x97', 96, 97, true );
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 300, 212, true );
    add_image_size( 'blog-width', 300, 212, true );
    add_image_size( 'article-size', 960, 671, true );
}


add_action('wp_enqueue_scripts', 'add_js_css');
function add_js_css()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', TEMPLATEURI.'/js/jquery-2.1.3.min.js', false, '2.1.3', false);
    wp_enqueue_script('jquery');

    wp_register_script('iscroll', TEMPLATEURI.'/js/iscroll.js', false, '2.1.3', true);
    wp_enqueue_script('iscroll');

    wp_register_script('swiper', TEMPLATEURI.'/js/swiper.min.js', false, '2.1.3', true);
    wp_enqueue_script('swiper');

    wp_register_script('share', TEMPLATEURI.'/js/share.js', false, '1', true);
    wp_enqueue_script('share');

    wp_register_script('main', TEMPLATEURI.'/js/jquery.main.js', false, '1', true);
    wp_enqueue_script('main');

    wp_register_style('site-style', TEMPLATEURI . '/style.css', array(), '1.0',true);
    wp_enqueue_style('site-style', TEMPLATEURI . '/style.css', array(), '1.0',true);

    wp_register_style('swiper', TEMPLATEURI . '/css/swiper.min.css', array(), '1.0',true);

    wp_register_style('site_main', TEMPLATEURI . '/css/main.css', array(), '1.0',true);

    if(is_front_page()){
        wp_enqueue_style('swiper');
        wp_enqueue_style('site_main');
    }else{

    }
}

add_action( 'after_setup_theme', 'default_attachment_display_settings' );
/**
 * Set the Attachment Display Settings "Link To" default to "none"
 *
 * This function is attached to the 'after_setup_theme' action hook.
 */
function default_attachment_display_settings() {
    update_option( 'image_default_align', 'none' );
    update_option( 'image_default_link_type', 'none' );
    update_option( 'image_default_size', 'article-size' );
}



function ssd_admin_clean_up(){
//    remove_menu_page( 'edit.php?post_type=page');
    remove_menu_page( 'edit-comments.php');
//    remove_menu_page( 'wpcf7');
//    remove_menu_page( 'acf');
//    remove_menu_page( 'edit.php?post_type=acf-field-group' );
}
add_action('admin_menu', 'ssd_admin_clean_up');
