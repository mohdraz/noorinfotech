<?php 

// register CSS and JS Files
// wp fuctnion to get version -> wp_get_theme()->get('Version')
add_action('wp_enqueue_scripts', 'noor_scripts');
function noor_scripts() {
    wp_enqueue_style('noor-style', get_stylesheet_uri(), array(), microtime());
}

// register menu
add_action('after_setup_theme', 'noor_features');
function noor_features() {
    register_nav_menu('mainMenu', 'Main Menu');
}

// register custom logo in customizer
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );