<?php

    function custom_theme_assets() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
    }

    add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );










    function add_featured_image_support_to_your_wordpress_theme() {
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', [
            'aside',
            'gallery',
            'link',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
            'standard'
        ] );
    }
    
    add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );

    function initialize_widgets() {
        register_sidebar( [
            'name' => 'Right Sidebar',
            'id'   => 'rightsidebar'
        ] );
    }
    
    add_action( 'widgets_init', 'initialize_widgets' );

?>