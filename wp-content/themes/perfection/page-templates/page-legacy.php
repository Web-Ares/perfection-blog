<?php
/**
 * Template Name: Legacy Page
 */
?>

<?php get_header('second'); the_post(); ?>

    <!-- promo -->
    <div data-header-color="black" class="promo promo_inner">

        <!-- promo__wrap -->
        <div class="promo__wrap promo__wrap_inner">

            <!-- site__centered -->
            <div class="site__centered">

                <!-- promo__content -->
                <div class="promo__content promo__content_inner">

                    <!-- promo__topic -->
                    <h1 class="promo__topic"><?php the_title();?></h1>
                    <!-- /promo__topic -->

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

        <div class="tabs">

            <!-- tabs__controls -->
            <div class="tabs__controls">

                <!-- tabs__controls-wrap -->
                <div class="tabs__controls-wrap">
                    <div <?php  if($post->ID==237) echo 'class="active"';?>>
                        <a class="tabs__links" href="<?php the_permalink(237) ?>">Terms of use</a>
                    </div>
                    <div <?php  if($post->ID==233) echo 'class="active"';?>>
                        <a class="tabs__links" href="<?php the_permalink(233) ?>">Privacy policy</a>
                    </div>
                </div>
                <!-- /tabs__controls-wrap -->

            </div>
            <!-- /tabs__controls -->

            <!-- tabs__wrapper -->
            <div class="tabs__wrapper">
                <div>
                    <?php the_content(); ?>
                </div>
            </div>
            <!-- /tabs__wrapper -->

        </div>

    </div>
    <!-- /policy -->

<?php get_footer(); ?>