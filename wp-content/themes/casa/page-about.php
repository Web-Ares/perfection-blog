<?php
/**
 * Template Name: About Page
 */
?>

<?php get_header(); ?>
    <div class="site__content">
        <div class="text">
            <div>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>

            <div class="bottom-pic">

                <a href="/" class="site-logo">
                    <img src="<?php echo TEMPLATEURI; ?>/img/site-logo.png" width="222" height="242" alt="logo"/>
                </a><!-- /site-logo -->

                <div class="desktop-slide">
                    <?php
                    if (have_rows('gallery_list'))
                        while (have_rows('gallery_list')) {
                            the_row();
                            echo wp_get_attachment_image(get_sub_field('image_sl'), '1270x595');
                        }
                    ?>

                    <div class="desktop-slide__prev"></div>
                    <div class="desktop-slide__next"></div>
                </div>
                <!-- /desktop-slide -->
            </div>
            <!-- /bottom-pic -->

        </div>
        <!-- /text -->

    </div><!-- /site__content -->
<?php get_footer(); ?>