<?php
/**
 * Template Name: Thanks for Pay Page
 */
?>
<?php get_header('second'); ?>


<?php
// First, let's check that this visit to the page contains the values we need.
if(!empty($_GET['checkout_id'])) {
    // Let's grab the values Paddle sent, and assign them to variables, with defaults.
    $checkout_id = (!empty($_GET['checkout_id'])) ? $_GET['checkout_id'] : '';
    $order_total = (!empty($_GET['order_total'])) ? $_GET['order_total'] : 0.00;
    $quantity = (!empty($_GET['quantity'])) ? $_GET['quantity'] : 1;
    $item_total = (!empty($_GET['item_total'])) ? $_GET['item_total'] : 0.00;
    $currency_code = (!empty($_GET['currency_code'])) ? $_GET['currency_code'] : 'USD';
    $product_name = (!empty($_GET['product_name'])) ? addslashes($_GET['product_name']) : 'Unknown Product';

    // If we have a checkout, let's track it!
    $track = true;
} else {
    // If we don't (ie. someones visited the success page, not via a checkout) we won't track it.
    $track = false;
}
?>


    <script type="text/javascript">

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-75137578-1', 'auto');
        ga('send', 'pageview');

        if(top.location != location) {
            // We're loaded in the frame, pop out of it.
            top.location.href = document.location.href;
        } else {
            // We're out of the frame!
            // Now we're going to check if we should track, and build Google's eCommerce tracking data
            <?php if($track) { ?>
            ga('require', 'ecommerce');

            ga('ecommerce:addTransaction', {
                'id': '<?php echo $checkout_id; ?>',
                'revenue': '<?php echo $order_total; ?>',
                'currency': '<?php echo $currency_code; ?>'
            });

            ga('ecommerce:addItem', {
                'id': '<?php echo $checkout_id; ?>',
                'name': '<?php echo $product_name; ?>',
                'price': '<?php echo $item_total; ?>',
                'quantity': '<?php echo $quantity; ?>',
                'currency': '<?php echo $currency_code; ?>'
            });

            ga('ecommerce:send');
            <?php } ?>
        }
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