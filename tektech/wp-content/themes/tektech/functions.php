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

    function themename_custom_header_setup() {
        $args = array(
            'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
            'default-text-color' => '000',
            'width'              => 1000,
            'height'             => 250,
            'flex-width'         => true,
            'flex-height'        => true,
        );
        add_theme_support( 'custom-header', $args );
        add_theme_support( 'custom-logo' );	
        add_theme_support( 'custom-background' );
    
    }
    add_action( 'after_setup_theme', 'themename_custom_header_setup' );

?>