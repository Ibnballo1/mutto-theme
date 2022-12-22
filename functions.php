<?php
    function theme_styles() {
        wp_enqueue_style( 'styles', get_stylesheet_uri());
    }
    add_action( 'wp_enqueue_scripts', 'theme_styles');
?>