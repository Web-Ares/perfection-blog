<?php
/**
 * Template Name: Thanks for Pay Page
 */
?>
<?php get_header('second'); ?>
<?php
$am = !empty($_GET['am'])?$_GET['am']:0;
?>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];

        dataLayer.push({"event":"track-purchase-success", "productid":<?php echo $_GET['id']?>, "productname":"<?php echo $_GET['p']?>", "amount":"<?php echo $am?>"});
    </script>

    <!-- promo -->
    <div class="promo promo_thank-you">

        <!-- promo__wrap -->
        <div class="promo__wrap site__centered">

            <!-- promo__content -->
            <div class="promo__content">

                <!-- promo__tick -->
                <div class="promo__tick"></div>
                <!-- /promo__tick -->

                <!-- promo__topic -->
                <h1 class="promo__topic">Thank you</h1>
                <!-- /promo__topic -->

                <p>Your transaction has been completed successfully. We <br/> have emailed you details of your order.</p>

            </div>
            <!-- /promo__content -->

        </div>
        <!-- /promo__wrap -->

    </div>
    <!-- /promo -->

    <!-- drop-menu__inner -->
    <span class="copyright copyright_1">© ICON54 2016. All rights reserved</span>
    <!-- drop-menu__inner -->

    <!-- social -->
    <div class="social social_1">
        Follow us
        <a href="https://dribbble.com/icon54" target="_blank" class="social__item social__item_btn"></a>
        <a href="https://twitter.com/54_icon" target="_blank" class="social__item social__item_tw"></a>
        <a href="https://www.facebook.com/Icon54-1762416167312152/?fref=ts" target="_blank" class="social__item social__item_fb"></a>
    </div>
    <!-- /social -->
<?php get_footer(); ?>