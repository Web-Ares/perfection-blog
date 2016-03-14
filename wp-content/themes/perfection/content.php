<?php

$author_id = get_field('post_author', get_the_ID());

$authors = getAuthor($author_id);
?>

<!-- article -->
<div class="article">

    <h1><?php the_title(); ?></h1>

    <!-- article-author -->
    <div class="article-author">

        <!-- article-author__ava -->
        <div class="article-author__ava">
            <img src="<?php echo $authors['photo'] ?>" alt="ava"/>
        </div>
        <!-- /article-author__ava -->

        <!-- article-author__content -->
        <div class="article-author__content">

            <!-- article-author__name -->
            <span class="article-author__name"><?php echo $authors['first'] . ' ' . $authors['last'] ?></span>
            <!-- /article-author__name -->

            <time datetime="<?php echo get_the_date('Y-j-n'); ?>"><?php echo get_the_date('j F Y'); ?></time>
        </div>
        <!-- /article-author__content -->

    </div>
    <!-- /article-author -->

    <?php the_content(); ?>
    <?php
    if (!empty($authors['first'])) {
        ?>
        <!-- author -->
        <div class="author">

            <!-- author__ava -->
            <div class="author__ava">
                <img src="<?php echo $authors['photo'] ?>" alt="photo"/>
            </div>
            <!-- /author__ava -->

            <!-- author__content -->
            <div class="author__content">

                <!-- author__name -->
                <span class="author__name">By <?php echo $authors['first'] . ' ' . $authors['last'] ?></span>
                <!-- /author__name -->

                <?php echo $authors['desc'] ?>
            </div>
            <!-- /author__content -->

        </div>
        <!-- /author -->
    <?php }; ?>
</div>
<!-- /article -->
    <?php comments_template();
        echo similar_posts($post->ID);
    ?>




