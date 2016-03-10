<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <title><?php document_title(); ?></title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <?php wp_head(); ?>
</head>

<body>
<?php
if ( is_404()) {
    the_post();
} ?>

<!-- site -->
<div class="site site_inner">

    <!-- site__header -->
    <header class="site__header <?php if(!is_front_page()){ echo 'site__header_blog-article';}?> ">

        <?php if (!is_front_page()){ ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
            <?php }else{ ?>
            <h1 class="logo">
                <?php } ?>
                <img class="logo__close-menu" src="<?php echo TEMPLATEURI; ?>/img/logo.png" width="137" height="31"
                     alt="adoric">
                <img class="logo__opened-menu" src="<?php echo TEMPLATEURI; ?>/img/logo-white.png" width="137"
                     height="31" alt="adoric">
                <?php if (!is_front_page()){ ?>
        </a><!-- /logo -->
        <?php } else { ?>
        </h1>
        <?php } ?>

        <!-- site__header__items -->
        <div class="site__header__items">

            <a class="get-demo btn btn_try" href="https://adoric.com/demo">get a demo</a><!-- /get-demo -->

            <!-- site__header__menu -->
            <nav class="site__header__menu">
                <?php echo get_top_menu();?>
                <a class="site__header__menu-drop" href="#"><span>close</span></a>
            </nav>
            <!-- /site__header__menu -->

        </div>
        <!-- /site__header__items -->

        <!-- dropmenu -->
        <div class="dropmenu">

            <!-- site__header -->
            <div class="site__header opened_menu">

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                    <img class="logo__opened-menu" src="<?php echo TEMPLATEURI;?>/img/logo-white.png" width="137" height="31" alt="adoric">
                </a><!-- /logo -->

                <!-- site__header__items -->
                <div class="site__header__items">

                    <a class="get-demo btn btn_try" href="https://adoric.com/demo">get a demo</a><!-- /get-demo -->

                    <!-- site__header__menu -->
                    <nav class="site__header__menu">
                        <?php echo get_top_menu();?>
                        <a class="site__header__menu-drop" href="#"><span>close</span></a>
                    </nav>
                    <!-- /site__header__menu -->

                </div>
                <!-- /site__header__items -->

            </div>
            <div class="dropmenu__inner">
                <div id="wrapper">
                    <ul id="scroller">
                        <li>
                            <div class="dropmenu__content">
                                <?php echo do_shortcode('[social_links]');?>
                                <dl>
                                    <dt>about</dt>
                                    <?php echo do_shortcode('[get_menu menu_name="about_menu"]');?>
                                    <dd class="dropmenu__hide"><a href="#">Log In</a></dd>
                                </dl>
                                <dl>
                                    <dt>support</dt>
                                    <?php echo do_shortcode('[get_menu menu_name="support_menu"]');?>
                                </dl>

                                <dl>
                                    <dt>CONTACT US</dt>
                                    <dd><a href="<?php echo get_field('personalize_your_site_link','options');?>">Personalize your site
                                            to boost conversions</a></dd>
                                    <dd><a class="get-demo btn btn_try" href="https://adoric.com/demo">get a demo</a></dd>
                                </dl>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /dropmenu -->

    </header>
    <!-- /site__header -->