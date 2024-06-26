<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="shortcut icon" href="/wp-content/themes/depyl-theme/assets/images/logo.png" type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <img src="/wp-content/themes/depyl-theme/assets/images/logo.png" alt="logo" class="logo">
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
    </header>