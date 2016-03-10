<?php get_header('article'); ?>

    <!-- site__content -->
    <div class="site__content">
        <?php while (have_posts()) {
            the_post();
            get_template_part('content', null);
        } ?>
    </div>
    <!-- /site__content -->

<?php get_footer(); ?>