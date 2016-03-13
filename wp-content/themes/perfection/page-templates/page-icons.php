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
                    <h1 class="promo__topic">Preview 3,000 icons</h1>
                    <!-- /promo__topic -->

                    <p>Our package includes a wide variety of icons
                        that are continuously updated.</p>

                </div>
                <!-- /promo__content -->

            </div>
            <!-- /site__centered -->

        </div>
        <!-- /promo__wrap -->

    </div>
    <!-- /promo -->

    <!-- pricing -->
    <div class="policy">

        <!-- tabs -->
        <div class="tabs">

            <!-- tabs__controls // Add class 'tabs__controls_hide' for hide-->
            <div class="tabs__controls">

                <!-- tabs__controls-wrap -->
                <div class="tabs__controls-wrap">
                   <?php getIconsControl($post->ID); ?>
                </div>
                <!-- /tabs__controls-wrap -->

            </div>
            <!-- /tabs__controls -->

            <!-- tabs__wrapper -->
            <div class="tabs__wrapper">

                <?php echo get_all_categories();?>

            </div>
            <!-- /tabs__wrapper -->

            <!-- tabs__wrapper -->
            <div class="tabs__wrapper">

                <?php echo get_all_categories();?>

            </div>
            <!-- /tabs__wrapper -->

        </div>
        <!-- /tabs -->

    </div>
    <!-- /policy -->
<?php get_footer(); ?>