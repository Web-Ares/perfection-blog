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
            <div class="pagination__social">
                <a href="https://www.facebook.com/Icon54-1762416167312152/?fref=ts"
                   class="pagination__social-item pagination__social-item_fb">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px"
                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <path style="fill:#d9d9d9;" d="M296.296,512H200.36V256h-64v-88.225l64-0.029l-0.104-51.976C200.256,43.794,219.773,0,304.556,0h70.588v88.242h-44.115
                                    c-33.016,0-34.604,12.328-34.604,35.342l-0.131,44.162h79.346l-9.354,88.225L296.36,256L296.296,512z"/>
                            </svg>
                </a>
                <a href="https://twitter.com/54_icon" class="pagination__social-item pagination__social-item_tw">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px"
                         viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;"
                         xml:space="preserve">
	                            <path style="fill:#d9d9d9;" d="M512.002,97.211c-18.84,8.354-39.082,14.001-60.33,16.54c21.686-13,38.342-33.585,46.186-58.115
		c-20.299,12.039-42.777,20.78-66.705,25.49c-19.16-20.415-46.461-33.17-76.674-33.17c-58.011,0-105.042,47.029-105.042,105.039
		c0,8.233,0.929,16.25,2.72,23.939c-87.3-4.382-164.701-46.2-216.509-109.753c-9.042,15.514-14.223,33.558-14.223,52.809
		c0,36.444,18.544,68.596,46.73,87.433c-17.219-0.546-33.416-5.271-47.577-13.139c-0.01,0.438-0.01,0.878-0.01,1.321
		c0,50.894,36.209,93.348,84.261,103c-8.813,2.399-18.094,3.687-27.674,3.687c-6.769,0-13.349-0.66-19.764-1.888
		c13.368,41.73,52.16,72.104,98.126,72.949c-35.95,28.176-81.243,44.967-130.458,44.967c-8.479,0-16.84-0.496-25.058-1.471
		c46.486,29.807,101.701,47.197,161.021,47.197c193.211,0,298.868-160.062,298.868-298.872c0-4.554-0.104-9.084-0.305-13.59
		C480.111,136.775,497.92,118.275,512.002,97.211z"/>
                            </svg>
                </a>
                <a href="#" class="pagination__social-item pagination__social-item_gg">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px"
                         viewBox="0 0 508.52 508.52" style="enable-background:new 0 0 508.52 508.52;"
                         xml:space="preserve">
                                <path style="fill:#d9d9d9;" d="M277.588,39.442H144.547c-59.624,0-115.752,45.195-115.752,97.54
                                    c0,53.49,40.65,96.682,101.354,96.682l12.332-0.381c-3.941,7.532-6.77,16.018-6.77,24.854c0,14.874,8.009,26.92,18.116,36.741
                                    l-23.074,0.254C56.859,295.1,0,342.202,0,390.956c0,48.087,62.357,78.121,136.22,78.121c84.224,0,130.753-47.801,130.753-95.856
                                    c0-38.52-11.378-61.626-46.53-86.48c-12.014-8.518-35.024-29.208-35.024-41.381c0-14.27,4.068-21.294,25.553-38.075
                                    c21.993-17.194,37.567-41.381,37.567-69.477c0-33.467-14.906-66.108-42.906-76.85h42.175L277.588,39.442z M231.154,364.958
                                    c1.049,4.45,1.621,8.994,1.621,13.73c0,38.87-25.013,69.19-96.809,69.19c-51.074,0-87.942-32.323-87.942-71.161
                                    c0-38.044,45.735-69.699,96.809-69.19c11.918,0.159,23.042,2.034,33.117,5.308C205.664,332.063,225.56,342.965,231.154,364.958z
                                     M149.378,220.094c-34.293-1.017-66.87-38.361-72.782-83.365c-5.912-45.036,17.067-79.488,51.329-78.471
                                    c34.262,1.017,66.87,37.154,72.782,82.158C206.65,185.451,183.639,221.111,149.378,220.094z"/>
                        <polygon style="fill:#d9d9d9;" points="413.172,133.741 413.172,39.442 381.39,39.442 381.39,133.741 286.042,133.741
                                    286.042,165.523 381.39,165.523 381.39,261.919 413.172,261.919 413.172,165.523 508.52,165.523 508.52,133.741 			"/>
                            </svg>
                </a>
            </div>
            <?php if (get_next_posts_link()) : ?>
                <?php
                next_posts_link('Older posts');
                ?>
            <?php endif; ?>

        </div>
        <?php
    }
endif;


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


function get_visible_menu($post_id)
{
    $menu_name = 'visible_menu';
    $menu_items = wp_get_nav_menu_items($menu_name, array(
        'orderby' => 'menu_order',
        'post_type' => 'nav_menu_item',
        'post_status' => 'publish',
        'output' => ARRAY_A,
        'output_key' => 'menu_order',
        'update_post_term_cache' => false));

    $menu_list = '';

    foreach ((array)$menu_items as $key => $menu_item) {

        if ($post_id == $menu_item->object_id) {
            $class = "class='header-menu__item active'";
        } else {
            $class = "class='header-menu__item'";
        }


        $title = $menu_item->title;
        $url = $menu_item->url;

        $menu_list .= '<a ' . $class . ' href="' . $url . '">' . $title . '</a>';

    }
    return $menu_list;
}

function get_menus($post_id, $menu_name)
{
    $menu_items = wp_get_nav_menu_items($menu_name, array(
        'orderby' => 'menu_order',
        'post_type' => 'nav_menu_item',
        'post_status' => 'publish',
        'output' => ARRAY_A,
        'output_key' => 'menu_order',
        'update_post_term_cache' => false));
    $menu_class = 'drop-menu__menu';

    if ($menu_name == 'middle_menu') {
        $menu_class = 'drop-menu__navigation';
    }
    if ($menu_name == 'bottom_menu') {
        $menu_class = 'drop-menu__legally';
    }
    $menu_list = '<ul class="' . $menu_class . '">';

    foreach ((array)$menu_items as $key => $menu_item) {

        if ($post_id == $menu_item->object_id) {
            $class = "class='active " . $menu_item->classes[0] . "'";
        } else {
            $class = "class = '" . $menu_item->classes[0] . "'";
        }


        $title = $menu_item->title;
        $url = $menu_item->url;

        $menu_list .= '<li><a ' . $class . ' href="' . $url . '">' . $title . '</a></li>';

    }
    return $menu_list . '</ul>';
}

function similar_posts($post_id = false)
{

    $args = array(
        'posts_per_page' => 3,
        'post_type' => 'post',
        'post_status' => 'publish',
        'post__not_in' => array($post_id),
    );
    $q = new WP_Query($args);

    $post_list = '  <!-- similar-records -->
            <section class="similar-records">

                <!-- similar-records__title -->
                <h2 class="similar-records__title">You might also like ...</h2>
                <!-- /similar-records__title -->';

    while ($q->have_posts()) :
        $q->the_post();
        $serv_title = get_the_title();
        $link = get_the_permalink();
        if (has_post_thumbnail() && !post_password_required() && !is_attachment()) {
            $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'blog-width');
        } else {
            $img = '';
        }
        $post_list .= '<!-- similar-records__item -->
                <article class="similar-records__item">

                    <a href="' . $link . '">
                        <img src="' . $img[0] . '" alt="' . $serv_title . '">

                        <!-- similar-records__item -->
                        <h3 class="similar-records__topic">
                            <span>' . $serv_title . '</span>
                        </h3>
                        <!-- /similar-records__item -->

                    </a>

                </article>
                <!-- /similar-records__item -->';

    endwhile;
    $post_list .= '</section>
            <!-- /similar-records -->';

    wp_reset_query();
    return $post_list;

}

function getIconsControl($get_icons, $post_id)
{

    if ($get_icons == 3) {
        $permalink = get_the_permalink($post_id);
        if ($_GET['type'] == 'solid') {
            $active = '';
            $active_solid = 'active';
        } else {
            $active = 'active';
            $active_solid = '';
        };
        echo '<div class="tabs__controls">

                <!-- tabs__controls-wrap -->
                <div class="tabs__controls-wrap">
                <div class="' . $active . '">
                        <a class="tabs__links" href="' . $permalink . '">Line version</a>
                    </div>

                <div class="' . $active_solid . '">
                        <a class="tabs__links" href="' . $permalink . '?type=solid' . '">Solid version</a>
                    </div>
                </div>
                <!-- /tabs__controls-wrap -->

            </div>';
    }
}

function get_all_categories($field_name)
{
    if ($field_name == 1) {
        $field_name = 'inline';
    } else {
        $field_name = 'solid';
    }

    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'icons',
        'post_status' => 'publish'
    );
    $q = new WP_Query($args);
    $list = '';
    while ($q->have_posts()) {
        $q->the_post();
        $icons_title = get_the_title();

        $list .= '<div><h2 class="pack-preview__title">' . $icons_title . '</h2>
             <img src="' . get_field($field_name . '_icons_image', get_the_ID()) . '" alt="icon ' . $icons_title . '"/></div>';

    }
    return $list;
    wp_reset_query();
}