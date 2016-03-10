<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <title><?php document_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
<?php
if ( is_404()) {
    the_post();
} ?>
<!-- site -->
<div class="site">

    <!--preloader-->
    <div class="preloader" data-delay="2000">

        <!--preloader__wrap-->
        <div class="preloader__wrap">
            <div>G</div>
            <div>N</div>
            <div>I</div>
            <div>D</div>
            <div>A</div>
            <div>O</div>
            <div>L</div>
        </div>
        <!--/preloader__wrap-->

    </div>
    <!--/preloader-->

    <!-- site__header -->
    <header class="site__header">

        <!-- site__header-layout -->
        <div class="site__header-layout">

            <?php if(is_front_page()){?>
            <!-- logo -->
            <h1 class="logo">
                <img src="<?php echo TEMPLATEURI ?>/img/logo-small.png" alt="logo">
            </h1>
            <!-- /logo -->
            <?php }else{?>
                <!-- logo -->
                <a class="logo">
                    <img src="<?php echo TEMPLATEURI ?>/img/logo-small.png" alt="logo">
                </a>
                <!-- /logo -->
            <?php }?>

            <!-- header-menu__item -->
            <a href="#" class="header-menu__item">View Icons</a>
            <!-- /header-menu__item -->

            <!-- header-menu__item -->
            <a href="#" class="header-menu__item">Buy Now</a>
            <!-- /header-menu__item -->

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
                <div class="drop-menu__inner-wrap">

                    <!-- drop-menu__menu -->
                    <ul class="drop-menu__menu">
                        <li><a href="#" class="drop-menu__menu-item">View icons</a></li>
                        <li><a href="#" class="drop-menu__menu-item">Pricing</a></li>
                    </ul>
                    <!-- /drop-menu__menu -->

                    <!-- drop-menu__navigation -->
                    <ul class="drop-menu__navigation">
                        <li><a href="#" class="drop-menu__navigation-item">About</a></li>
                        <li><a href="#" class="drop-menu__navigation-item">Blog</a></li>
                        <li><a href="#" class="drop-menu__navigation-item">Affilates</a></li>
                        <li><a href="#" class="drop-menu__navigation-item">Support</a></li>
                    </ul>
                    <!-- /drop-menu__navigation -->

                    <!-- drop-menu__legally -->
                    <ul class="drop-menu__legally">
                        <li><a href="#" class="drop-menu__legally-item">Classic license</a></li>
                        <li><a href="#" class="drop-menu__legally-item">Extended license</a></li>
                        <li><a href="#" class="drop-menu__legally-item">Terms of use</a></li>
                        <li><a href="#" class="drop-menu__legally-item">Privicy policy</a></li>
                    </ul>
                    <!-- /drop-menu__legally -->

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
