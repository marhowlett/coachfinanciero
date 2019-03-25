<?php
require_once get_stylesheet_directory() . "/class.wp-auto-theme-update.php";


function theme_js() {
    wp_enqueue_script( 'scrollreveal', get_stylesheet_directory_uri() . '/js/scrollreveal.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'theme_js');

