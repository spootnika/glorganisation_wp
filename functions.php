<?php 
    function glo_scripts() {
        // Theme stylesheet.
        wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css' );
        wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
        wp_enqueue_script( 'javascript', get_stylesheet_directory_uri() . '/script.js', array(), '1.0', true );
        wp_enqueue_style( 'glo-style', get_stylesheet_uri(), null, date("YmdHis") );
    }
    add_action( 'wp_enqueue_scripts', 'glo_scripts' );
    
    register_nav_menus(array(
        "main"=>"Main menu",
    ));
