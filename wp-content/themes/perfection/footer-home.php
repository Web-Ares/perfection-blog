
<?php if ( is_page_template('page-templates/page-contact-thanks.php')===false
    && is_page_template('page-templates/page-download-thanks.php')===false
    && is_page_template('page-templates/page-pay-thanks.php')===false
    && is_page_template('page-templates/page-pricing.php')===false){ ?>

    <!-- site__footer -->
    <footer class="site__footer">

        <!-- site__centered -->
        <div class="site__footer-layout">

            <!-- logo_footer -->
            <a href="<?php echo home_url(); ?>" class="logo_footer">
                <img src="<?php echo TEMPLATEURI ?>/img/logo_footer.png" alt="icon"/>
            </a>
            <!-- /logo_footer -->

            <!-- footer__copyright -->
            <span class="footer__copyright">ICON54 2016. All rights reserved &#64;</span>
            <!-- /footer__copyright -->

            <!-- developer -->
            <div class="developer">
                A product by

                <!-- developer__open -->
                <img src="<?php echo TEMPLATEURI ?>/pic/adoric-logo.png" alt="adoric" class="developer__btn"/>
                <!-- /developer__open -->

                <!-- developer__container -->
                <div class="developer__container">

                    <!-- developer__close -->
                    <div class="developer__close"></div>
                    <!-- /developer__close -->

                    <img src="<?php echo TEMPLATEURI ?>/pic/adoric-logo.png" alt="adoric"/>

                    <!-- developer__info -->
                    <div class="developer__info">Handcrafted by Adoric labs</div>
                    <!-- /developer__info -->

                    <p>Discover the best conversion tools used by exprets</p>

                    <a href="http://adoric.com" target="_blank">Visit adoric.com</a>

                </div>
                <!-- /developer__container -->

            </div>
            <!-- /developer -->

        </div>
        <!-- /site__centered -->

    </footer>
    <!-- /site__footer -->

<?php } ?>

</div>
<!-- /site -->

<?php

wp_footer(); ?>

<link rel="stylesheet" type="text/css" href='<?php echo TEMPLATEURI . '/style.min.css?ver=1.0' . '&amp;date=' . date
    ('mdyi'); ?>'/>
<link rel="stylesheet" type="text/css" href='<?php echo TEMPLATEURI . '/css/content2.min.css?ver=1.0' . '&amp;
            date=' . date('mdyi'); ?>'/>
<?php if (is_front_page()) { ?>
    <link rel="stylesheet" type="text/css" href='<?php echo TEMPLATEURI . '/css/content1.min.css?ver=1.0' . '&amp;
            date=' . date('mdyi'); ?>'/>
<?php }; ?>
<script>
    var arrJs = [
        '<?php echo TEMPLATEURI . '/js/jquery-2.1.3.min.js'.'?date='.date('mdyi');?>',
        '<?php echo TEMPLATEURI . '/js/jquery.form.min.js'.'?date='.date('mdyi'); ?>',
        '<?php echo TEMPLATEURI . '/js/scripts-form.js'.'?date='.date('mdyi'); ?>',
        '<?php echo TEMPLATEURI . '/js/jquery.iscroll.js'.'?date='.date('mdyi'); ?>',
        '<?php echo TEMPLATEURI . '/js/hammer.min.js'.'?date='.date('mdyi'); ?>',
        '<?php echo TEMPLATEURI . '/js/jquery.liMarquee.js'.'?date='.date('mdyi'); ?>',
        '<?php echo TEMPLATEURI . '/js/jquery.main.min.js'.'?date='.date('mdyi'); ?>'
    ], countJs = arrJs.length, i = null, e = null;

    window.onload = function () {
        for (i = 0; i < countJs; i++) {
            e = document.createElement("script");
            e.async = false;
            e.src = arrJs[i];
            document.body.appendChild(e);
        }
    }
</script>
</body>
</html>
