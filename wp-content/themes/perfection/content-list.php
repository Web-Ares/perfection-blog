<?php
$author_id = get_field('post_author', get_the_ID());

$authors = getAuthor($author_id); ?>
<li>
    <a href="<?php the_permalink(); ?>">

        <?php if (has_post_thumbnail() && !post_password_required() && !is_attachment()) : ?>
        <!-- blog-home__pic -->
        <span class="blog-home__pic">
            <?php the_post_thumbnail('blog-width'); ?>
        </span>
        <!-- /blog-home__pic -->
        <?php endif; ?>

        <!-- blog-home__inner -->
        <div class="blog-home__inner">

            <!-- blog-home__title -->
            <h2 class="blog-home__title"><?php the_title(); ?></h2>
            <!-- blog-home__title -->

            <!-- blog-home__information -->
            <div class="blog-home__information">

                <time datetime="<?php echo get_the_date('Y-j-n'); ?>"><?php echo get_the_date('j').' '.get_the_date('M').' '.get_the_date('Y'); ?></time>
                /
                <!-- blog-home__name -->
                <span class="blog-home__name">By <?php echo $authors['first'] . ' ' . $authors['last'] ?></span>
                <!-- /blog-home__name -->

            </div>
            <!-- /blog-home__information -->

            <?php the_excerpt(); ?>

            <!-- blog-home__more -->
            <span class="blog-home__more"><?php echo get_field('read_more_field', 'options'); ?></span>
            <!-- /blog-home__more -->

        </div>
        <!-- /blog-home__inner -->
    </a>
</li>