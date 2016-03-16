<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link rel="icon" href="<?php echo TEMPLATEURI ?>/favicon.png" type="image/png">
    <title><?php document_title(); ?></title>
    <?php wp_head(); ?>
</head>


<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W2BZ82"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W2BZ82');</script>
<!-- End Google Tag Manager -->
<!-- site -->
<div class="site">

    <!-- site__header -->
    <header class="site__header header-top">

        <!-- site__header-layout -->
        <div class="site__header-layout">

            <?php if(is_front_page()){?>
                <!-- logo -->
                <h1 class="logo">
                    <img src="<?php echo TEMPLATEURI ?>/img/logo-small.png?<?php echo time();?>" alt="logo">
                </h1>
                <!-- /logo -->
            <?php }else{?>
                <!-- logo -->
                <a href="<?php home_url(); ?>" class="logo">
                    <img src="<?php echo TEMPLATEURI ?>/img/logo-small.png?<?php echo time();?>" alt="logo">
                </a>
                <!-- /logo -->
            <?php }?>
            <!-- header-menu__mobile-item -->
            <a href="/view-icons/" class="header-menu__mobile-item">ICONS</a>
            <!-- /header-menu__mobile-item -->

            <?php echo get_visible_menu($post->ID);?>

            <!-- site__header__menu-drop -->
            <a class="drop-menu-btn" href="#"><span></span></a>
            <!-- /site__header__menu-drop -->

        </div>
        <!-- /site__header-layout -->

        <!-- drop-menu -->
        <div class="drop-menu">

            <!-- drop-menu__inner -->
            <div class="drop-menu__inner" id="">

                <!-- drop-menu__inner-wrap -->
                <div class="drop-menu__inner-wrap"  id="scroll-wrap" >

                    <!-- scroller -->
                    <div  id="scroller">

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

            </div>
            <!-- /drop-menu__inner -->

            <!-- drop-menu__inner -->
            <span class="copyright">© ICON54 2016. All rights reserved</span>
            <!-- drop-menu__inner -->

            <!-- social -->
            <div class="social">
                <a href="#" class="social__item social__item_mail adoric_f2f0a9ee"></a>
                <a href="https://dribbble.com/icon54" target="_blank" class="social__item social__item_btn"></a>
                <a href="https://twitter.com/54_icon" target="_blank" class="social__item social__item_tw"></a>
                <a href="https://www.facebook.com/Icon54-1762416167312152/?fref=ts" target="_blank" class="social__item social__item_fb"></a>
            </div>
            <!-- /social -->

        </div>
        <!-- /drop-menu -->

    </header>
    <!-- site__header -->
