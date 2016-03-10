
<!-- site__footer -->
<footer class="site__footer">

    <!-- site__footer-layout -->
    <div class="site__footer-layout">
        <a class="footer__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo TEMPLATEURI;?>/img/logo-white.png" width="137" height="31" alt="adoric"/></a>
        <div class="container-fluid">
            <div class="row">
                <div class="site__footer-menu">
                   <?php echo do_shortcode('[social_links]');?>
                    <dl>
                        <dt>about</dt>
                       <?php echo do_shortcode('[get_menu menu_name="about_menu"]');?>
                    </dl>
                    <dl>
                        <dt>support</dt>
                        <?php echo do_shortcode('[get_menu menu_name="support_menu"]');?>
                    </dl>
                    <dl class="contact-us">
                        <dt>contact us now</dt>
                        <dd><a href="<?php echo get_field('personalize_your_site_link','options');?>">Personalize your site
                                to boost conversions</a></dd>
                        <dd><a class="get-demo btn btn_blue btn_try" href="<?php echo get_field('get_a_demo_link','options');?>">get a demo</a></dd>
                        <dd><a class="dropmenu__watch btn_try" href="<?php echo get_field('watch_a_video_link','options');?>">Watch a video</a><!-- /dropmenu__watch --></dd>
                    </dl>
                </div>
            </div>
        </div>
        <p class="copyright">&copy; 2014–<?php echo date("Y");?> All Rights Reserved. Adoric</p><!-- /copyright -->
    </div>
    <!-- /site__footer-layout -->

</footer>
<!-- /site__footer -->

</div>
<link rel="stylesheet" href="<?php echo TEMPLATEURI;?>/css/bootstrap.min.css" />
<?php if(!is_front_page()){
    echo '<link rel="stylesheet" href="'.TEMPLATEURI.'/css/font-awesome.min.css" />';
}?>
<link rel="stylesheet" href="<?php echo TEMPLATEURI;?>/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo TEMPLATEURI;?>/css/main.css" />
<?php if(!is_front_page()){
    echo '<link rel="stylesheet" href="'.TEMPLATEURI.'/css/blog-article.css"/>';
}else{
    echo '<link rel="stylesheet" href="'.TEMPLATEURI.'/css/blog-home.css" />';
}?>


<script src="<?php echo TEMPLATEURI;?>/js/bootstrap.min.js"></script>
<script src="<?php echo TEMPLATEURI;?>/js/iscroll.js"></script>
<script src="<?php echo TEMPLATEURI;?>/js/share42.js"></script>
<script src="<?php echo TEMPLATEURI;?>/js/jquery.main.js"></script>
<?php wp_footer(); ?>
</body>
</html>
