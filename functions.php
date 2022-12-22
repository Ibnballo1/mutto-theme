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

    // Get Top Ancestor
    function get_top_ancestors_id() {
        global $post;
        if ($post->post_parent) {
            $ancestors = array_reverse(get_post_ancestors($post->ID));
            return $ancestors[0];
        }
        return $post->ID;
    }

    // Does page has children
    function has_children() {
        global $post;
        $pages = get_pages( 'child_of=' . $post->ID );
        return count($pages);
    }
?>