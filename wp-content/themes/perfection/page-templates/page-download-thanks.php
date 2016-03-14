<?php
/**
 * Template Name: Thanks for Download Page
 */
?>

<?php get_header('second'); ?>
    <!-- promo -->
    <div class="promo promo_thank-you">

        <!-- promo__wrap -->
        <div class="promo__wrap site__centered">



            <!-- promo__content -->
            <div class="promo__content">

                <img src="<?php echo TEMPLATEURI ?>/img/icons-tick.png" alt="tick" class="promo__img"/>

                <!-- promo__topic -->
                <h1 class="promo__topic">Thank you</h1>
                <!-- /promo__topic -->

                <?php the_content(); ?>

                <a href="<?php the_permalink(); ?>" class="btn btn_9"><span>Upgrade for full access</span></a>

                <span class="promo__note">View  entire icon collection</span>

            </div>
            <!-- /promo__content -->

            <!-- drop-menu__inner -->
            <span class="copyright">© ICON54 2016. All rights reserved</span>
            <!-- drop-menu__inner -->

            <!-- social -->
            <div class="social social_1">
                Follow us
                <a href="#" class="social__item social__item_btn"></a>
                <a href="#" class="social__item social__item_tw"></a>
                <a href="#" class="social__item social__item_fb"></a>
            </div>
            <!-- /social -->


        </div>
        <!-- /promo__wrap -->

    </div>
    <!-- /promo -->
<?php get_footer(); ?>