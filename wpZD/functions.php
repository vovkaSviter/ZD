<?php
    function theme_enqueue_styles() {
        wp_enqueue_style( 'owl', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css' );
        wp_enqueue_style( 'owl', get_stylesheet_directory_uri() . '/assets/css/owl.theme.default.min.css' );
        wp_enqueue_style( 'grid12', get_stylesheet_directory_uri() . '/assets/css/grid12.css' );
        wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css' );
    }
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

    function theme_enqueue_js() {
        wp_enqueue_script( 'JQ', get_stylesheet_directory_uri() . '/assets/js/jquery-3.3.1.min.js' );
        wp_enqueue_script( 'owl', get_stylesheet_directory_uri() . '/assets/js/OwlCarousel2-2.2.1//dist/owl.carousel.min.js' );
        wp_enqueue_script( 'zhgi', get_stylesheet_directory_uri() . '/assets/js/zhgi.js' );
    }
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_js' );
