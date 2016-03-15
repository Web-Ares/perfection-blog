<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <title><?php document_title(); ?></title>
    <link rel="icon" href="<?php echo TEMPLATEURI ?>/favicon.png" type="image/png">
    <?php wp_head(); ?>
</head>
<body>
<?php if ( is_page() || is_single() || is_singular() || is_404() ) {
//    the_post();
} ?>
<!-- site -->
<div class="site">

    <!-- site__header -->
    <header class="site__header">

        <!-- site__header-layout -->
        <div class="site__header-layout">

            <!-- logo -->
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo TEMPLATEURI ?>/img/logo_inside.png?<?php echo time();?>" alt="logo">
            </a>
            <!-- /logo -->

            <?php echo get_visible_menu($post->ID);?>

            <!-- site__header__menu-drop -->
            <a class="drop-menu-btn" href="#"><span></span></a>
            <!-- /site__header__menu-drop -->

        </div>
        <!-- /site__header-layout -->

        <!-- drop-menu -->
        <div class="drop-menu">

            <!-- drop-menu__inner -->
            <div class="drop-menu__inner">

                <!-- drop-menu__inner-wrap -->
                <div class="drop-menu__inner-wrap" id="scroll-wrap">

                    <!-- scroller -->
                    <div id="scroller">

                        <!-- drop-menu__menu -->
                        <?php echo get_menus($post->ID,'top_menu'); ?>
                        <!-- /drop-menu__menu -->

                        <!-- drop-menu__navigation -->
                        <?php echo get_menus($post->ID,'middle_menu'); ?>
                        <!-- /drop-menu__navigation -->

                        <!-- drop-menu__legally -->
                        <?php echo get_menus($post->ID,'bottom_menu'); ?>
                        <!-- /drop-menu__legally -->

                    </div>
                    <!-- /scroller -->

                </div>
                <!-- /drop-menu__inner-wrap -->

                <!-- drop-menu__inner -->
                <span class="copyright">© ICON54 2016. All rights reserved</span>
                <!-- drop-menu__inner -->

                <!-- social -->
                <div class="social">
                    <a href="#" class="social__item social__item_mail"></a>
                    <a href="#" class="social__item social__item_btn"></a>
                    <a href="#" class="social__item social__item_tw"></a>
                    <a href="#" class="social__item social__item_fb"></a>
                </div>
                <!-- /social -->

            </div>
            <!-- /drop-menu__inner -->

        </div>
        <!-- /drop-menu -->

    </header>
    <!-- site__header -->