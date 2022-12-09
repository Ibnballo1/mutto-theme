<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <base href="/">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Site Header -->
    <header class="site-header">
        <h1><?php bloginfo('name'); ?></h1>
        <h5><?php bloginfo('description'); ?></h5>
    </header>
    <!-- Site Header -->