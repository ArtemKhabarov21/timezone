<?php


include(__DIR__.'/includes/style.php');

include(__DIR__.'/includes/scripts.php');

include(__DIR__.'/includes/menu.php');

include(__DIR__.'/includes/widgets.php');


function logo_theme_setup() {

add_theme_support( 'title-tag' );

add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'logo_theme_setup');





