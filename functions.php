<?php
    function theme_styles() {
        wp_enqueue_style( 'styles', get_stylesheet_uri());
    }
    add_action( 'wp_enqueue_scripts', 'theme_styles');

    // Navigation Menus
    register_nav_menus( array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
    ));
?>