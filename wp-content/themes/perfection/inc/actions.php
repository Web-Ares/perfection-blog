<?php
//required actions
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
add_filter('xmlrpc_enabled','__return_false');
remove_action('wp_head', 'wlwmanifest_link');
// close required actions

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'signuppageheaders');

function allow_svg_upload_mimes( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg_upload_mimes' );

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

    wp_register_script('share', TEMPLATEURI.'/js/share.js', false, '1', true);
    wp_enqueue_script('share');

    wp_register_script('main', TEMPLATEURI.'/js/jquery.main.js', false, '1', true);
    wp_enqueue_script('main');

    wp_register_style('site-style', TEMPLATEURI . '/style.css');
    wp_enqueue_style('site-style');

    wp_register_style('swiper-css', TEMPLATEURI . '/css/swiper.min.css');

    wp_register_style('blog_home-css', TEMPLATEURI . '/css/blog-home.css');
    wp_register_style('blog_main-css', TEMPLATEURI . '/css/main-blog.css');
    wp_register_style('blog-article', TEMPLATEURI . '/css/blog-article.css');

    wp_register_style('legal-css', TEMPLATEURI . '/css/legal.css');

    wp_register_style('pricing-css', TEMPLATEURI . '/css/pricing-page.css');

    wp_register_style('download-css', TEMPLATEURI . '/css/free-download.css');


    wp_register_style('site_main', TEMPLATEURI . '/css/main.css');


    if(is_front_page()){
        wp_enqueue_script('swiper');
        wp_enqueue_style('swiper-css');
        wp_enqueue_style('site_main');
    }else{
        if (get_post_type()=='post' and !is_single()) {
            wp_enqueue_style('blog_main-css');
            wp_enqueue_style('blog_home-css');
        }else if(is_page_template('page-templates/page-icons.php')){

        }else if(is_page_template('page-templates/page-legacy.php')){
            wp_enqueue_style('site_main');
            wp_enqueue_style('legal-css');
        }else if(is_page_template('page-templates/page-pricing.php')){
            wp_enqueue_style('site_main');
            wp_enqueue_style('pricing-css');
        }else if(is_page_template('page-templates/page-download.php')){
            wp_enqueue_style('site_main');
            wp_enqueue_style('download-css');
        }else if (get_post_type()=='post' and is_single()) {
            wp_enqueue_style('blog_main-css');
            wp_enqueue_style('blog-article');
        }else{
            wp_enqueue_style('site_main');
        }
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
