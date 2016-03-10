<?php
/**
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>

<?php if (have_posts()) {
    the_post();

    echo do_shortcode(get_the_content());
} ?>


<?php get_footer(); ?>