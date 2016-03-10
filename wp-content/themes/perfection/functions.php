<?php

// Define PHP file constants.
define( 'TEMPLATEINC', TEMPLATEPATH . '/inc' );
define( 'TEMPLATEURI', get_template_directory_uri() );

define( 'COUNT_ICONS', get_field('count_icons', 'options') );
define( 'COUNT_CATEGORIES', get_field('count_categories', 'options') );

$blog_info = get_bloginfo('template_url');
define('BLOGINFO', $blog_info);

//show_admin_bar( false );
// Load library files.
require_once( TEMPLATEINC . '/shortcodes.php' );
require_once( TEMPLATEINC . '/cpt.php' );
require_once( TEMPLATEINC . '/template.php' );
require_once( TEMPLATEINC . '/actions.php' );