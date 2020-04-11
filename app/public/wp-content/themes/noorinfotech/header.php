<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="site-container">
    <header class="site-header">
        <div class="site-header__logo">
            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
                <a href="<?php echo site_url('/'); ?>"><img class="site-header__logo-image" src="<?php echo $image[0]; ?>" alt=""></a>
        </div>
        <nav class="main-navigation">
            <?php wp_nav_menu(array(
                'theme_location' => 'mainMenu'
            ))?>
        </nav>
    </header>
    <main id="content" class="site-content">
        <div class="top-scrolling-ad">
            hi
        </div>

