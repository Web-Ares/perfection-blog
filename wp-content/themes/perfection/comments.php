<?php

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */ ?>
<!-- comments -->
<section class="comments">

    <!-- comments__title -->
    <h2 class="comments__title">Comments</h2>
    <!-- /comments__title -->

    <!-- comments__frame -->
    <div class="comments__frame">
        <?php echo do_shortcode('[fbcomments]'); ?>
    </div>
    <!-- /comments__frame -->

</section>
<!-- /comments -->