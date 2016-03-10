<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */ ?>
<div class="blog-article__comments">
    <h2>Comments</h2>

    <div class="blog-article__comments-wrap">
        <?php echo do_shortcode('[fbcomments]'); ?>
    </div>
</div>