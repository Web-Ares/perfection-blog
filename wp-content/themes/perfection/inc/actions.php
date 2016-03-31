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
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );
// Отключаем сам REST API
add_filter('rest_enabled', '__return_false');

// Отключаем фильтры REST API
remove_action( 'xmlrpc_rsd_apis',            'rest_output_rsd' );
remove_action( 'wp_head',                    'rest_output_link_wp_head', 10, 0 );
remove_action( 'template_redirect',          'rest_output_link_header', 11, 0 );
remove_action( 'auth_cookie_malformed',      'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired',        'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username',   'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash',       'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid',          'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );

// Отключаем события REST API
remove_action( 'init',          'rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
remove_action( 'parse_request', 'rest_api_loaded' );

// Отключаем Embeds связанные с REST API
remove_action( 'rest_api_init',          'wp_oembed_register_route'              );
remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );

remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
// если собираетесь выводить вставки из других сайтов на своем, то закомментируйте след. строку.
remove_action( 'wp_head',                'wp_oembed_add_host_js'                 );

function allow_svg_upload_mimes( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg_upload_mimes' );

add_filter('the_content', 'do_shortcode');
add_filter('the_title', 'do_shortcode');
add_filter('single_post_title', 'do_shortcode');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}


add_action('after_setup_theme', 'theme_setup');
function theme_setup()
{
    add_theme_support('menus');
	add_image_size( '96x97', 96, 97, true );
	add_image_size( '124x124', 124, 124, true );
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 300, 212, true );
    add_image_size( 'blog-width', 300, 212, true );
    add_image_size( 'article-size', 960, 671, true );
}


add_action('wp_enqueue_scripts', 'add_js_css');
function add_js_css()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', TEMPLATEURI.'/js/jquery-2.1.3.min.js', false, '2.1.3', true);
    wp_enqueue_script('jquery');

    wp_register_script('nicescroll', TEMPLATEURI.'/js/jquery.nicescroll.js', false, '2.1.3', true);
    wp_enqueue_script('nicescroll');

    wp_register_script('cookie', TEMPLATEURI.'/js/jquery.cookie.js', false, '2.1.3', true);
    wp_enqueue_script('cookie');
    wp_register_script('bodymovin', TEMPLATEURI.'/js/bodymovin.js', false, '2.1.3', true);
    wp_enqueue_script('bodymovin');

    wp_register_script('checkout', 'https://paddle.s3.amazonaws.com/checkout/checkout.js', false, '2.1.3', true);


    wp_register_script('swiper', TEMPLATEURI.'/js/swiper.min.js', false, '2.1.3', true);

    wp_register_script('main', TEMPLATEURI.'/js/jquery.main.js', false, '1', true);

    wp_register_style('swiper-css', TEMPLATEURI . '/css/swiper.min.css');

    wp_register_style('blog_home-css', TEMPLATEURI . '/css/blog-home.css');
    wp_register_style('blog_main-css', TEMPLATEURI . '/css/main-blog.css');
    wp_register_style('blog-article', TEMPLATEURI . '/css/blog-article.css');

    wp_register_style('legal-css', TEMPLATEURI . '/css/legal.css');

    wp_register_style('pricing-css', TEMPLATEURI . '/css/pricing-page.css');

    wp_register_style('download-css', TEMPLATEURI . '/css/free-download.css');
    wp_register_style('pack-preview-css', TEMPLATEURI . '/css/pack-preview.css');
    wp_register_style('contact-us-css', TEMPLATEURI . '/css/contact-us.css');
    wp_register_style('thank-you-css', TEMPLATEURI . '/css/thank-you.css');


    wp_register_style('site_main', TEMPLATEURI . '/css/main.css');

    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }

    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }

    if(is_front_page()){
        wp_enqueue_style('swiper-css', false, '2.1.3', true);
        wp_enqueue_style('site_main', false, '2.1.3', false);
        wp_enqueue_script('swiper', false, '2.1.3', true);
        wp_enqueue_script('main');
    }else{
        wp_enqueue_script('main');

        if (get_post_type()=='post' and !is_single()) {
            wp_enqueue_style('blog_main-css');
            wp_enqueue_style('blog_home-css');
        }else if(is_page_template('page-templates/page-icons.php')){
            wp_enqueue_style('site_main');
            wp_enqueue_style('pack-preview-css');
        }else if(is_page_template('page-templates/page-contact.php')){
            wp_enqueue_style('site_main');
            wp_enqueue_style('contact-us-css');
        }else if(is_page_template('page-templates/page-contact-thanks.php')){
            wp_enqueue_style('site_main');
            wp_enqueue_style('thank-you-css');
        }else if(is_page_template('page-templates/page-download-thanks.php')){
            wp_enqueue_style('site_main');
            wp_enqueue_style('thank-you-css');
        }else if(is_page_template('page-templates/page-pay-thanks.php')){
            wp_enqueue_style('site_main');
            wp_enqueue_style('thank-you-css');
        }else if(is_page_template('page-templates/page-legacy.php')){
            wp_enqueue_style('site_main');
            wp_enqueue_style('legal-css');
        }else if(is_page_template('page-templates/page-pricing.php')){
            wp_enqueue_style('site_main');
            wp_enqueue_style('pricing-css');
            wp_enqueue_script('checkout');
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

add_action('wp_ajax_mchimp', 'mchimp');
add_action('wp_ajax_nopriv_mchimp', 'mchimp');

/**
 *
 */
function mchimp()
{
    $email = $_POST['EMAIL'];

    if(!email_check($email)){
        die('{"result":"error"}');
    }else{
        require_once( TEMPLATEINC . '/MCAPI.class.php' );
        $api = new MCAPI('75862ef22e3827c5baf7033a2bf62c81-us4');
        $merge_vars = array('double_optin'=>false);
        $retval = $api->listSubscribe( '9af64abdb1', $email, $merge_vars, 'html', false, true );
        if ($api->errorCode){
            die('{"result":"error"}');
        } else {
            die('{"result":"success"}');
        }
        die('{"result":"error"}');
    }

}

function email_check($email)
{
    if (!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", trim($email))) {
        return false;
    } else return true;
}