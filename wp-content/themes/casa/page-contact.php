<?php
/**
 * Template Name: Contact Page
 */
?>

<?php get_header(); ?>
    <div class="site__content">
        <div class="contacts-info">
            <div>
               <?php the_content();?>
            </div>

            <div class="bottom-pic contact_map">

                <a href="/" class="site-logo">
                    <img src="<?php echo TEMPLATEURI; ?>/img/site-logo.png" width="222" height="242" alt="logo"/>
                </a><!-- /site-logo -->

                <a target="_blank" href="<?php echo get_field('link_map'); ?>">
                    <img src="<?php echo get_field('image_map'); ?>" width="1270" height="595" alt="map"/>
                </a>

            </div>
            <!-- /bottom-pic -->

        </div><!-- /contacts-info -->

    </div><!-- /site__content -->
<?php get_footer(); ?>