
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

<?php wp_footer(); ?>
</body>
</html>
