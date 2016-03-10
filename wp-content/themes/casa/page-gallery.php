<?php
/**
 * Template Name: Gallery Page
 */
?>

<?php get_header(); ?>

    <div class="site__content site__content_gallery">

        <div class="gallery">
            <div class="gallery__info">
                <a href="/" class="site-logo">
                    <img src="<?php echo TEMPLATEURI; ?>/img/site-logo2.png" width="137" height="137" alt="logo"/>
                </a>
                <h1 class="gallery__title"><?php echo the_title(); ?></h1>
                <?php echo the_content(); ?>
            </div>
            <!-- /gallery__info -->
            <div class="gallery__mobile">
                <?php
                if (have_rows('images_mobile_list')) {
                    while (have_rows('images_mobile_list')) {
                        the_row();
                        $img = get_sub_field('image_mob_gal');
                        echo wp_get_attachment_image($img, '750x716');
                    }
                }
                ?>
            </div><!-- /gallery__mobile -->
            
            <div class="gallery__desktop">
            <?php
            if (have_rows('images_list')) {
                $i = $k = 0;
                $str = '';
                if (get_locale() == 'he_IL') {
                    $text_hover = 'ראה גלריה';
                } else {
                    $text_hover = 'See Gallery';
                }
                while (have_rows('images_list')) {
                    $i++;
                    if ($i == 1) {
                        $str .= '<div class="gallery__trinity">';
                    }
                    the_row();
                    $img = get_sub_field('image_gal');
                    $img_prew = get_sub_field('image_preview');
                    if ($i == 4 or ($k >= 1 && $i % 5 == 0)) {
                        $str .= '</div>';

                        $str .= '<a href="' . wp_get_attachment_image_src($img, 'full')[0] . '" class="gallery__item" data-lightbox="doc-img">' . wp_get_attachment_image($img_prew, 'full') . '<div class="gallery__hover"><span></span>' . $text_hover . '</div></a>
                        ';
                        $k++;
                        $i = 0;
                    } else {
                        $str .= '<a href="' . wp_get_attachment_image_src($img, 'full')[0] . '" class="gallery__item" data-lightbox="doc-img">' . wp_get_attachment_image($img_prew, 'full') . '<div class="gallery__hover"><span></span>' . $text_hover . '</div></a>
                        ';
                    }

                }
                if (($k >= 1 && $i % 5 != 0)) {
                    $str .= '</div>';
                }
                echo $str;
            }
            ?>
            </div><!-- /gallery__desktop -->
        </div>

    </div><!-- /site__content -->

<?php get_footer(); ?>