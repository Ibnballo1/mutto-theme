<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <!-- Site Header -->
        <header class="site-header">
            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            <h5><?php bloginfo('description'); ?></h5>
            <!-- Site Nav -->
            <nav class="site-nav">
                <?php
                    $args = array(
                        'theme_location' => 'primary'
                    );
                ?>
                <?php wp_nav_menu( $args ); ?>
            </nav>
        </header>
        <!-- Site Header -->