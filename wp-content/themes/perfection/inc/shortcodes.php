<?php

global $post;

function posts_link_next_class($format)
{
    $format = str_replace('href=', 'class="pagination__next" href=', $format);
    return $format;
}

add_filter('next_post_link', 'posts_link_next_class');

function posts_link_prev_class($format)
{
    $format = str_replace('href=', 'class="pagination__prev" href=', $format);
    return $format;
}

add_filter('previous_post_link', 'posts_link_prev_class');

add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1()
{
    return 'class="pagination__next"';
}

function posts_link_attributes_2()
{
    return 'class="pagination__prev"';
}

if (!function_exists('adoric_paging_nav')) :
    /**
     * Display navigation to next/previous set of posts when applicable.
     *
     * @since Twenty Thirteen 1.0
     */
    function adoric_paging_nav()
    {
        global $wp_query;

        if ($wp_query->max_num_pages < 2)
            return;
        ?>
        <div class="pagination">

            <?php if (get_previous_posts_link()) : ?>
                <?php previous_posts_link('newer posts'); ?>
            <?php endif; ?>

            <?php if (get_next_posts_link()) : ?>
                <?php
                next_posts_link('Older posts');
                ?>
            <?php endif; ?>

        </div>
        <?php
    }
endif;


function my_social_icons($atts, $content)
{
    extract(shortcode_atts(array(
        "facebook" => '',
        "twitter" => '',
        "linkedin" => '',
        "google_plus" => '',
    ), $atts));
    if (!empty($facebook)) {

        $facebook_icon = '<a href="#">
            <div><i class="fa fa-facebook"></i></div>
        </a>';

    } else {
        $facebook_icon = '';
    }

    if (!empty($twitter)) {

        $twitter_icon = '<a href="#">
            <div><i class="fa fa-twitter"></i></div>
        </a>';

    } else {
        $twitter_icon = '';
    }
    if (!empty($linkedin)) {

        $linkedin_icon = '<a href="#">
            <div><i class="fa fa-linkedin"></i></div>
        </a>';

    } else {
        $linkedin_icon = '';
    }
    if (!empty($google_plus)) {

        $google_plus_icon = '<a href="#">
            <div><i class="fa fa-google-plus"></i></div>
        </a>';

    } else {
        $google_plus_icon = '';
    }
    return '
                             <div class="blog-article__pic">
                                   ' . $content . '
                                <a href="#" class="blog-article__btn">
                                    <span class="blog-article__btn-open"></span>
                                </a>

                                <div class="blog-article__tooltip-wrap">
                                    <div class="blog-article__tooltip">
                                        <span class="blog-article__tooltip-title">Share the knowledge!!!</span>

                                        <!-- social-network -->
                                        <div class="social-network">
                                            ' . $facebook_icon . '
                                            ' . $twitter_icon . '
                                            ' . $linkedin_icon . '
                                            ' . $google_plus_icon . '
                                        </div>
                                        <!-- /social-network -->

                                        <span class="blog-article__tooltip-title">Site owner?</span>
                                        <p>Increase your site’s
                                            conversions with adoric</p>
                                        <a href="#" class="blog-article__tooltip-link">get a demo</a>
                                    </div>
                                </div>
                            </div>';
}

add_shortcode('my_social_shortcode', 'my_social_icons');

if (!function_exists('adoric_post_nav')) :

    function adoric_post_nav()
    {
        global $post;

        // Don't print empty markup if there's nowhere to navigate.
        $previous = (is_attachment()) ? get_post($post->post_parent) : get_adjacent_post(false, '', true);
        $next = get_adjacent_post(false, '', false);

        if (!$next && !$previous)
            return;
        ?>
        <div class="pagination">
            <?php previous_post_link('%link', 'Prev article'); ?>
            <?php next_post_link('%link', 'Next article'); ?>
        </div><!-- .navigation -->
        <?php
    }
endif;

function getAuthor($post_id)
{
    $author = array();
    $author['first'] = get_field('first_name', $post_id);
    $author['last'] = get_field('last_name', $post_id);
    $author['photo'] = wp_get_attachment_image_src(get_field('photo', $post_id), '96x97');
    $author['photo'] = $author['photo'][0];
    $author['desc'] = get_field('description', $post_id);

    $author['url'] = get_field('link', $post_id);
    return $author;
}

function share_knowledge()
{
    $get_demo_link = get_field('get_a_demo_link', 'options');
    $site_owner = get_field('site_owner', 'options');
    $share_the_knowledge = get_field('share_the_knowledge', 'options');
    return '<a href="#" class="blog-article__btn">
                                    <span class="blog-article__btn-open"></span>
                                </a>
                                <div class="blog-article__tooltip-wrap">
                                    <div class="blog-article__tooltip">
                                        <span class="blog-article__tooltip-title">' . $share_the_knowledge . '</span>

                                        <!-- social-network -->
                                        <div class="social-network share42init" id="share42">

                                        </div>
                                        <!-- /social-network -->

                                        <span class="blog-article__tooltip-title">Site owner?</span>
                                        <p>' . $site_owner . '</p>
                                        <a href="' . $get_demo_link . '" class="blog-article__tooltip-link">get a demo</a>
                                    </div>
                                </div>';
}

add_shortcode('share_knowledge', 'share_knowledge');
function social_links()
{
    return ' <dl>
                        <dt>stay tuned!</dt>
                        <dd>

                            <!-- dropmenu__social -->
                            <div class="dropmenu__social">
                                <a class="dropmenu__facebook" title="facebook" href="' . get_field('facebook_link', 'options') . '">facebook</a>
                                <a class="dropmenu__twitter" title="twitter" href="' . get_field('twitter_link', 'options') . '">twitter</a>
                                <a class="dropmenu__google" title="google" href="' . get_field('google_link', 'options') . '">google</a>
                                <a class="dropmenu__pinterest" title="pinterest" href="' . get_field('pinterest_link', 'options') . '">pinterest</a>
                            </div>
                            <!-- /dropmenu__social -->

                        </dd>
                    </dl>';
}

add_shortcode('social_links', 'social_links');

function get_menu($attr)
{
    $menu_name = $attr['menu_name'];
    $menu_items = wp_get_nav_menu_items($menu_name, array(
        'orderby' => 'menu_order',
        'post_type' => 'nav_menu_item',
        'post_status' => 'publish',
        'output' => ARRAY_A,
        'output_key' => 'menu_order',
        'update_post_term_cache' => false));

    $menu_list = '';
    foreach ((array)$menu_items as $key => $menu_item) {

        if ($post->ID == $menu_item->object_id) {
            $class = "class='active'";
        } else {
            $class = "";
        }


        $title = $menu_item->title;
        $url = $menu_item->url;

        $menu_list .= '<dd ' . $class . '><a href="' . $url . '">' . $title . '</a></dd>';

    }
    return $menu_list;
}

add_shortcode('get_menu', 'get_menu');

function get_main_menu()
{
    $menu_name = 'main_menu';
    $menu_items = wp_get_nav_menu_items($menu_name, array(
        'orderby' => 'menu_order',
        'post_type' => 'nav_menu_item',
        'post_status' => 'publish',
        'output' => ARRAY_A,
        'output_key' => 'menu_order',
        'update_post_term_cache' => false));

    $menu_list = '<ul>';
    foreach ((array)$menu_items as $key => $menu_item) {

        if ($post->ID == $menu_item->object_id) {
            $class = "class='active'";
        } else {
            $class = "";
        }


        $title = $menu_item->title;
        $url = $menu_item->url;

        $menu_list .= '<li ' . $class . '><a href="' . $url . '">' . $title . '</a></li>';

    }
    return $menu_list . '</ul>';
}

function get_top_menu()
{
    $menu_name = 'top_menu';
    $menu_items = wp_get_nav_menu_items($menu_name, array(
        'orderby' => 'menu_order',
        'post_type' => 'nav_menu_item',
        'post_status' => 'publish',
        'output' => ARRAY_A,
        'output_key' => 'menu_order',
        'update_post_term_cache' => false));

    $menu_list = '';
    foreach ((array)$menu_items as $key => $menu_item) {


        $title = $menu_item->title;
        $url = $menu_item->url;

        $menu_list .= '<a href="' . $url . '">' . $title . '</a>';

    }
    return $menu_list;
}

function count_icons()
{
    return COUNT_ICONS;
}

add_shortcode('count_icons', 'count_icons');

function count_categories()
{
    return COUNT_CATEGORIES;
}

add_shortcode('count_categories', 'count_categories');


function doublecount_icons()
{
    return (int)COUNT_ICONS * 2;
}

add_shortcode('doublecount_icons', 'doublecount_icons');