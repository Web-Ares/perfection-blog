<?php
/**
 * Template Name: Importers Page
 */
?>

<?php get_header(); ?>
    <div class="site__content">
        <div class="about-importers">
            <div class="importers-title">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
            <!-- /importers-title -->
            <?php
            if (have_rows('importers_list')) {
                while (have_rows('importers_list')) {
                    the_row();
                    $link=get_sub_field('link_imp');
                    $str = '';
                    $full_image= wp_get_attachment_image_src(get_sub_field('logo_comp'), 'full')[0];
                    $str .= '<div class="importers"><div class="importers__wrap"><a target="_blank" href="'.$link.'" class="company-name company-name_desktop"><img width="100%" src="' .$full_image . '"/></a>';
                    $str .= '<div class="importers-pic">';
                    while (have_rows('images_importer')) {
                        the_row();
                        $str .= '<a target="_blank" href="'.$link.'"><img src="' . get_sub_field('image_imp') . '" alt="imp-pic"/></a>
                        ';
                    }
                    $str .= '</div>';
                    $str .= '<div class="importers__inner"><a target="_blank" href="'.$link.'" class="company-name company-name_mobile"><img width="100%" src="' . $full_image . '"/></a>' . get_sub_field('imp_text') . '</div>';
                    $str .= '</div></div>';
                    echo $str;
                }
            }
            ?>

        </div>
        <!-- /text -->
    </div><!-- /site__content -->
<?php get_footer(); ?>