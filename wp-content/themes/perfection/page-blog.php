<?php
/**
 * Template Name: Blog main Page
 */
?>

<?php get_header(); ?>

<?php
    if (have_posts()) {

        while (have_posts()) {
            the_post();
            get_template_part('content', 'list');
        };

        echo adoric_paging_nav();

    } else {
        get_template_part('content', 'none');
    };
?>


<?php get_footer(); ?>