<footer class="site__footer">

    <div class="site__footer-layout">

        <div class="footer__mobi">
            <?php
            $mail = get_field('e-mail', 'option');
            $phone1 = get_field('phone1', 'option');
            $phone2 = get_field('phone2', 'option');
            ?>
            <span><a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></span>

            <?php if(get_locale()=='he_IL'){
                echo $phone1;
                echo $phone2;
            }else{
                echo get_field('phone1_en', 'option');
                echo get_field('phone2_en', 'option');
            }?>

        </div><!--/footer__moby-->

        <div class="footer__desktop">

            <div class="footer__desktop-wrap">

                <a href="/" class="site__header-interiors">
                    <img src="<?php echo TEMPLATEURI;?>/img/site__header-interiors.png" width="175" height="27" alt="CASA interiors"/>
                </a><!-- /site__header-interiors -->

                <?php
                    wp_nav_menu( array('theme_location' => 'menu_main', 'container' => 'ul', 'menu_class' => 'menu') );
                ?>

                <div class="social">

                    <a target="_blank" href="<?php echo $l_google; ?>" class="social__google">google</a>
                    <a target="_blank" href="<?php echo $l_linkedin; ?>" class="social__in">in</a>
                    <a target="_blank" href="<?php echo $l_facebook; ?>" class="social__fb">facebook</a>
                    <?php dynamic_sidebar( 'switch language' ); ?>

                </div><!-- /social -->

            </div><!-- /footer__desktop-wrap -->

            <div class="footer__logo">
                <a href="/">
                    <img src="<?php echo TEMPLATEURI;?>/img/footer-logo.png" alt="casa_interiors"/>
                </a>
            </div>

        </div>

    </div><!-- /site__footer-layout -->

</footer><!-- /site__footer -->
</div><!-- /site -->

<script type='text/javascript' src='<?php echo TEMPLATEURI . '/js/desktop-slide.js'.'?date='.date('mdyi');?>'></script>
<script type='text/javascript' src='<?php echo TEMPLATEURI . '/js/jquery.main.js'.'?date='.date('mdyi');?>'></script>

<?php wp_footer(); ?>
</body>
</html>
