<?php

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