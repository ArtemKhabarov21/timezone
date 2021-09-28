<?php
add_action( 'wp_enqueue_scripts', 'true_include_myscript', 25 );

function true_include_myscript() {

// Jquery, Popper, Bootstrap//
wp_enqueue_script( 'jquery-theme', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array(), '1.0', true );
wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array(), '1.0', true );
wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0', true );
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0', true );;

// Jquery Mobile Menu//
wp_enqueue_script( 'jquery-slicknav', get_template_directory_uri() . '//assets/js/jquery.slicknav.min.js', array(), '1.0', true );;

// Jquery Slick , Owl-Carousel Plugins //
wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0', true );;
wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0', true );;

// One Page, Animated-HeadLin//
wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0', true );;
wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array(), '1.0', true );;

//  Scrollup, nice-select, sticky //
wp_enqueue_script( 'scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array(), '1.0', true );;
wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array(), '1.0', true );;
wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array(), '1.0', true );;

// contact js //
wp_enqueue_script( 'contact', get_template_directory_uri() . '/assets/js/contact.js', array(), '1.0', true );;
wp_enqueue_script( 'form', get_template_directory_uri() . '/assets/js/jquery.form.js', array(), '1.0', true );;
wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array(), '1.0', true );;
wp_enqueue_script( 'mail-script', get_template_directory_uri() . '/assets/js/mail-script.js', array(), '1.0', true );;
wp_enqueue_script( 'ajaxchimp', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array(), '1.0', true );;

// Jquery Plugins, main Jquery//
wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), '1.0', true );;
wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );;





}



