<?php
    // Thumbnails
    add_theme_support( 'post-thumbnails' );

    // Clean head of the site
    remove_action( 'wp_head', 'wp_generator' ) ;
    remove_action( 'wp_head', 'wlwmanifest_link' ) ;
    remove_action( 'wp_head', 'rsd_link' ) ;
    add_filter('show_admin_bar', '__return_false');

    // Google fonts
    function theme_font(){
        $link_fonts = 'http://fonts.googleapis.com/css?family=Josefin+Sans';
        wp_register_style('googleFonts', $link_fonts);
        wp_enqueue_style( 'googleFonts');
    }

    add_action('wp_print_styles', 'theme_font');

    function theme_scripts() {
        // Add main style minified
        wp_enqueue_style( 'main-style', get_stylesheet_uri() );

        // Add Modernizr in head
        wp_register_script('modernizr', get_bloginfo('template_directory') . '/scripts/vendor/modernizr-2.8.3.min.js', false, null, false);
        wp_enqueue_script('modernizr');

        // Add jQuery
        if (!is_admin()) {
            wp_deregister_script('jquery');
            wp_register_script('jquery', get_bloginfo('template_directory') . '/scripts/vendor/jquery-1.11.2.min.js', false, null, true);
            wp_enqueue_script('jquery');
        }

        // Main script file minified
        wp_register_script('main-script', get_bloginfo('template_directory') . '/scripts/main.min.js', false, null, true);
        wp_enqueue_script('main-script');
    }

    add_action('wp_enqueue_scripts', 'theme_scripts', 100);