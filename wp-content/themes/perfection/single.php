<?php get_header('blog'); ?>
<?php while (have_posts()) {
    the_post(); ?>
    <!-- promo -->
    <div class="promo" style="background-image: url(<?php $cur_bg_post=get_field('background_on_post');
    if(empty($cur_bg_post)){
        echo BLOGINFO ?>/pic/blog-head.png<?php } else{
        echo $cur_bg_post;
    }?>)"></div>
    <!-- /promo -->

    <!-- site__content -->
    <div class="site__inner-page">

        <!-- site__centered -->
        <div class="site__centered">

            <?php get_template_part('content', null); ?>

        </div>
        <!-- site__centered -->

    </div>
    <!-- /site__content -->

<?php } ?>

<?php get_footer(); ?>