<?php

get_header('blog'); ?>
<!-- promo -->
<div class="promo promo_inner">

    <!-- promo__wrap -->
    <div class="promo__wrap">

        <!-- site__centered -->
        <div class="site__centered">

            <!-- promo__content -->
            <div class="promo__content">

                <!-- promo__topic -->
                <h1 class="promo__topic"><?php single_post_title(); ?></h1>
                <!-- /promo__topic -->

                <p>Words of wisdom</p>

            </div>
            <!-- /promo__content -->

        </div>
        <!-- /site__centered -->

    </div>
    <!-- /promo__wrap -->

</div>
<!-- /promo -->


<!-- site__content -->
<section class="site__inner-page">

    <!-- site__centered -->
    <div class="site__centered">

        <!-- blog-home -->
        <div class="blog-home">

            <!-- blog-home__list -->
            <ul class="blog-home__list">

                <?php if (have_posts()) : ?>

                    <?php /* The loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('content', 'list'); ?>
                    <?php endwhile; ?>


                <?php else : ?>
                    <?php get_template_part('content', 'none'); ?>
                <?php endif; ?>
            </ul>
            <!-- /blog-home__list -->
            <?php echo adoric_paging_nav(); ?>

        </div>
        <!-- /blog-home -->

    </div>
    <!-- site__centered -->

</section>
<!-- /site__content -->



<?php get_footer(); ?>
