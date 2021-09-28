<?php


function register_styles() {
    wp_register_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0');
    wp_enqueue_style( 'bootstrap-min' );

    wp_register_style('carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0');
    wp_enqueue_style( 'carousel' );

    wp_register_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.0');
    wp_enqueue_style( 'flaticon' );

    wp_register_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.css', array(), '1.0');
    wp_enqueue_style( 'slicknav' );

    wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0');
    wp_enqueue_style( 'animate' );

    wp_register_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0');
    wp_enqueue_style( 'magnific-popup' );

    wp_register_style('fontawesome-all', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '1.0');
    wp_enqueue_style( 'fontawesome-all' );

    wp_register_style('themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css', array(), '1.0');
    wp_enqueue_style( 'themify-icons' );

    wp_register_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0');
    wp_enqueue_style( 'slick' );

    wp_register_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0');
    wp_enqueue_style( 'nice-select' );

    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
    wp_enqueue_style( 'style' );

}


add_action( 'wp_enqueue_scripts', 'register_styles' );

function register_my_menus() {
    register_nav_menus(
        array('header-menu' => __( 'Header Menu' ) )
    );
}


function reg_menu() {
    $locations = array(
        'Header'   => __( 'Header', 'Timezone' ),
        'Footer'  => __( 'Footer', 'Timezone' ),
    );
    register_nav_menus( $locations );
}

add_action( 'init', 'reg_menu' );


add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}

add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
function clear_nav_menu_item_class($classes, $item, $args) {
    return array();
}




function nd_dosth_theme_setup() {

    // Add <title> tag support
add_theme_support( 'title-tag' );

    // Add custom-logo support
    add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'nd_dosth_theme_setup');







