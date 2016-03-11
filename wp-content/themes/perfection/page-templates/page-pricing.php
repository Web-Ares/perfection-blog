<?php
/**
 * Template Name: Pricing Page
 */
?>

<?php get_header('second');
the_post(); ?>

    <!-- promo -->
    <div data-header-color="black" class="promo promo_inner">

        <!-- promo__wrap -->
        <div class="promo__wrap promo__wrap_inner">

            <!-- site__centered -->
            <div class="site__centered">

                <!-- promo__content -->
                <div class="promo__content promo__content_inner">

                    <!-- promo__topic -->
                    <h1 class="promo__topic"><?php the_title(); ?></h1>
                    <!-- /promo__topic -->

                    <p>The sharpest icons ever</p>
                </div>
                <!-- /promo__content -->

            </div>
            <!-- /site__centered -->

        </div>
        <!-- /promo__wrap -->

    </div>
    <!-- /promo -->

    <!-- pricing -->
    <div class="pricing">

        <!-- pricing__wrap -->
        <div class="pricing__wrap">

            <?php
            if (have_rows('tariffs'))
                while (have_rows('tariffs')) {
                    the_row();
                    echo '
                            <!-- pricing__item -->
                            <div class="pricing__item">

                                <!-- pricing__title -->
                                <h2 class="pricing__title">'.get_sub_field('tariff_title').'</h2>
                                <!-- /pricing__title -->

                                <!-- pricing__price -->
                                <div class="pricing__price"><sup>$</sup>'.get_sub_field('tariff_price').'</div>
                                <!-- /pricing__price -->

                                <!-- pricing__pic -->
                                <div class="pricing__pic" style="background-image: url('.get_sub_field('tariff_image').')"></div>
                                <!-- /pricing__pic -->

                                <!-- pricing__purchase -->
                                <ul class="pricing__purchase">
                                    '.get_sub_field('tariff_description').'
                                </ul>
                                <!-- /pricing__purchase -->

                                <!-- btn btn_4 -->
                                '.get_sub_field('tariff_owl_code').'
                                <!-- /btn btn_4 -->

                            </div>
                            <!-- /pricing__item -->
                    ';
                }
            ?>

        </div>
        <!-- /pricing__wrap -->

        <!-- pricing__item pricing_pack -->
        <div class="pricing__item pricing_pack">
            <?php echo get_the_content(); ?>
        </div>
        <!-- /pricing__item pricing_pack -->

        <!-- pricing__pay -->
        <div class="pricing__pay">
            <div class="pricing__pay-item"
                 style="background-image:url(<?php echo TEMPLATEURI ?>/pic/pricing-pay01.png)"></div>
            <div class="pricing__pay-item"
                 style="background-image:url(<?php echo TEMPLATEURI ?>/pic/pricing-pay02.png)"></div>
            <div class="pricing__pay-item"
                 style="background-image:url(<?php echo TEMPLATEURI ?>/pic/pricing-pay03.png)"></div>
            <div class="pricing__pay-item"
                 style="background-image:url(<?php echo TEMPLATEURI ?>/pic/pricing-pay04.png)"></div>
        </div>
        <!-- /pricing__pay -->

    </div>
    <!-- /pricing -->

<?php get_footer(); ?>