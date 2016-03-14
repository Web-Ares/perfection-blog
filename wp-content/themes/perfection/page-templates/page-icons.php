<?php
/**
 * Template Name: Icons Page
 */
?>

<?php get_header('second'); ?>
    <!-- promo -->
    <div data-header-color="black" class="promo promo_inner">

        <!-- promo__wrap -->
        <div class="promo__wrap promo__wrap_inner">

            <!-- site__centered -->
            <div class="site__centered">

                <!-- promo__content -->
                <div class="promo__content promo__content_inner">

                    <!-- promo__topic -->
                    <h1 class="promo__topic"><?php echo do_shortcode(get_the_title()); ?></h1>
                    <!-- /promo__topic -->

                    <p><?php the_field('page_subtitle'); ?></p>

                </div>
                <!-- /promo__content -->

            </div>
            <!-- /site__centered -->

        </div>
        <!-- /promo__wrap -->

    </div>
    <!-- /promo -->

    <!-- pricing -->
    <div class="pack-preview">

        <!-- tabs -->
        <div class="tabs">

            <!-- tabs__controls -->

            <?php
            $get_icons = get_field('which_show_types_icons', $post->ID);
            getIconsControl($get_icons, $post->ID); ?>

            <!-- /tabs__controls -->

            <!-- tabs__wrapper -->
            <div class="tabs__wrapper">

                <?php
                if($get_icons==3){
                    if($_GET['type']=='solid'){
                        echo get_all_categories(2);
                    }else{
                        echo get_all_categories(1);
                    }
                }else{
                    echo get_all_categories($get_icons);
                }

                ?>

            </div>
            <!-- /tabs__wrapper -->


        </div>
        <!-- /tabs -->

    </div>
    <!-- /policy -->
<?php get_footer(); ?>