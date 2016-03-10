<?php
/**
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>

    <div class="site__content">

        <div class="mobile">

            <div class="mobile-pic">

                <div class="mobile-pic__text"><?php echo get_field('description'); ?></div>
                <!-- /mobile-pic__text -->
                <?php
                if (have_rows('images_m'))
                    while (have_rows('images_m')) {
                        the_row();
                        echo '<img src="' . get_sub_field('image_mob') . '" width="750" height="716" alt="pic"/>';
                    }
                ?>
                https://app.bsg.hk/auth/registration
            </div>
            <!-- /mobile-pic -->

        </div>
        <!-- /mobile -->

        <div class="desktop">

            <header>
                <div class="desktop-slide">
                    <?php
                    if (have_rows('gallery_list'))
                        while (have_rows('gallery_list')) {
                            the_row();
                            echo wp_get_attachment_image(get_sub_field('image_sl'), '1600x755');
                        }
                    ?>
                    <div class="desktop-slide__prev"></div>
                    <div class="desktop-slide__next"></div>
                </div>
                <!-- /desktop-slide -->

                <a href="/" class="site-logo">
                    <img src="<?php echo TEMPLATEURI; ?>/img/site-logo.png" width="222" height="242" alt="logo"/>
                </a>
                <!-- /site-logo -->

            </header>

            <div class="about-furniture">

                <?php the_content(); ?>
                <div class="pic-wrap">
                    <?php
                    if (have_rows('images_with_caption'))
                        while (have_rows('images_with_caption')) {
                            the_row();
                            echo '<div class="pic-inner">' . wp_get_attachment_image(get_sub_field('image_ca'), '635x340');
                            echo ' <span>' . get_sub_field('text_ca') . '</span></div>';
                        }
                    ?>
                    <!--/pic-wrap-->
                </div>
            </div>
            <!--/about-furniture-->

        </div>
        <!-- /desktop -->

    </div><!-- /site__content -->

<?php get_footer(); ?>