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



    function my_multi_col_v2($content){
        // run through a couple of essential tasks to prepare the content
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);

        // the first "more" is converted to a span with ID
        $columns = preg_split('/(<span id="more-\d+"><\/span>)|(<!--more-->)<\/p>/', $content);
        $col_count = count($columns);

        if($col_count > 1) {
            for($i=0; $i<$col_count; $i++) {
                // check to see if there is a final </p>, if not add it
                if(!preg_match('/<\/p>\s?$/', $columns[$i]) )  {
                    $columns[$i] .= '</p>';
                }
                // check to see if there is an appending </p>, if there is, remove
                $columns[$i] = preg_replace('/^\s?<\/p>/', '', $columns[$i]);
                // now add the div wrapper
                $columns[$i] = '<div class="dynamic-col-'.($i+1).'">'.$columns[$i].'</div>';
            }
            $content = join($columns, "\n").'<div class="clear"></div>';
        }
        else {
            // this page does not have dynamic columns
            $content = wpautop($content);
        }
        // remove any left over empty <p> tags
        $content = str_replace('<p></p>', '', $content);
        return $content;
    }
