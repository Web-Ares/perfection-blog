<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <title><?php document_title(); ?></title>
    <?php wp_head(); ?>
</head>
<?php
    $l_facebook=get_field('link_facebook');
    $l_linkedin=get_field('link_linkedin');
    $l_google=get_field('link_google');
?>
<body <?php if(get_locale()!='he_IL'){
    if(!is_front_page()){
        echo 'class="en inner"';
    }else{
        echo 'class="en"';
    }
}else{
    if(!is_front_page()){
        echo 'class="inner"';
    }
};?>>

<div class="site <?php if(is_page_template('page-gallery.php') ){echo 'site_mobile';} ?>">
<?php if ( is_page() || is_single() || is_singular() || is_404() ) {
    the_post();
} ?>


    <header class="site__header">

        <div class="site__header-wrap">

            <div class="site__header-btn">
                <button></button>
            </div><!-- /site__header-btn -->

            <a href="/" class="site__header-interiors" >
                <img src="<?php echo TEMPLATEURI;?>/img/site__header-interiors.png" width="175" height="27" alt="CASA interiors"/>
            </a><!-- /site__header-interiors -->
            <div class="site__header-slide">
            <nav class="site__header-menu">

                <?php
                    wp_nav_menu( array('theme_location' => 'menu_main', 'container' => 'ul', 'menu_class' => 'menu') );
                ?>

            </nav><!-- /site__header-menu -->


            <div class="social">

                <a target="_blank" href="<?php echo $l_google; ?>" class="social__google">google</a>
                <a target="_blank" href="<?php echo $l_linkedin; ?>" class="social__in">in</a>
                <a target="_blank" href="<?php echo $l_facebook; ?>" class="social__fb">facebook</a>
                <?php dynamic_sidebar( 'switch language' ); ?>

            </div><!-- /social -->
        </div>
        </div><!-- /site__header-wrap -->

        <a href="/" class="logo"><img src="<?php echo TEMPLATEURI;?>/img/logo2.png" width="144" height="137" alt="casa interiors"></a><!-- /logo -->

    </header><!-- /site__header -->