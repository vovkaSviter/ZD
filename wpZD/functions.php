<?php
    function theme_enqueue_styles() {
        wp_enqueue_style( 'grid12', get_stylesheet_directory_uri() . '/assets/css/grid12.css' );
        wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css' );
    }
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
