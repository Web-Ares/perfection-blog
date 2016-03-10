<?php
$custom_logo_url = khore_set_theme_logo();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="robots" content="noindex, nofollow">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/html5shiv.js"></script>
    <![endif]-->
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css"/><![endif]-->
    <?php wp_head(); ?>
    <script type="text/javascript">
        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
    </script>
</head>
<body>
<!-- site -->
<div class="site">

    <!-- site__header -->
    <header class="site__header">

        <!-- site__header-btn -->
        <button class="site__header-btn">
            <i class="fa fa-bars"></i>
        </button>
        <!-- /site__header-btn -->

        <!-- site__header-wrap -->
        <div class="site__header-wrap" id="site__header-wrap">
            <div>

                <!-- logo -->
                <div class="logo">
<?php
$page_home = get_posts(
    array(
        'post_type' => 'page',
        'meta_key' => '_wp_page_template',
        'meta_value' => 'home.php',
        'hierarchical' => 0,
        'posts_per_page' => 1,
    )
);
?>
                    <a href="index" data-page="<?php echo $page_home[0]->ID; ?>" class="page-lnk <?php if(is_front_page()){echo 'active';}?>">
                        <img src="<?php echo $custom_logo_url; ?>" width="70" height="70" alt="Khore">
                    </a>
                </div>
                <!-- /logo -->

                <!-- menu -->
                <nav class="menu">
                    <?php
                    $menu = wp_get_nav_menu_items('menu', array(
                        'orderby' => 'menu_order',
                        'post_type' => 'nav_menu_item',
                        'post_status' => 'publish',
                        'output' => ARRAY_A,
                        'output_key' => 'menu_order',
                        'update_post_term_cache' => false));

                    $json = '';


                    foreach ($menu as $key => $item) {
                        if ($item->menu_item_parent) break;
                            $classes='';
                        foreach ($item->classes as $class) {
                            $classes .= ' ' . $class;
                        }

                        $sub_item = '<i class="fa fa-plus"></i><i class="fa fa-minus"></i><div>';

                        $is_parent_item = false;

                        foreach ($menu as $k => $class_sub) {
                            if ($class_sub->menu_item_parent && $class_sub->menu_item_parent == $item->ID) {
                                $is_parent_item = true;
                                $sub_url = str_replace('/','',explode(home_url(), $class_sub->url)[1]);
                                $sub_item .= '<a href="' . $sub_url . '" data-page="'.$class_sub->object_id.'" class="page-lnk">
                                            <i class="' . $classes . '"></i>
                                            <span>' . $class_sub->title . '</span>
                                        </a>';
                                unset($class_sub);
                            }
                        }
                        $sub_item .= '</div>';

                        $url = str_replace('/','',explode(home_url(), $item->url)[1]);
                        if ($is_parent_item) {
                            $json .= '<div class="menu__item">
                                        <i class="' . $classes . '"></i>
                                        <span>' . $item->title . '</span>
                                        ' . $sub_item . '</div>';
                        } else {
                            $json .= '<a href="' . $url . '" data-page="'.$item->object_id.'" class="menu__item page-lnk">
                                        <i class="' . $classes . '"></i>
                                        <span>' . $item->title . '</span>
                                    </a>';
                        };

                    }
                    echo $json; ?>
                </nav>
                <!-- /menu -->

                <!-- countdown -->
                <?php
                echo do_shortcode('[efcb-section-event_timer"]');
                ?>

                <!-- /countdown -->

                <!-- reg-btn -->
                <a class="reg-btn page-lnk" href="registration">
                    <i class="fa fa-ticket"></i>
                    <span>Register</span>
                </a>
                <!-- /reg-btn -->

            </div>
        </div>
        <!-- /site__header-wrap -->

        <!-- site__header-arrow -->
        <a href="#" class="site__header-arrow"></a>
        <!-- /site__header-arrow -->

    </header>
    <!-- /site__header -->
