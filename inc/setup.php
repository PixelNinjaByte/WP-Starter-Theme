<?php

function wpstarter_theme_setup() {
    // Add title tag support
    add_theme_support('title-tag');

    // Featured images
    add_theme_support('post-thumbnails');

    // Register menus
    register_nav_menus([
        'primary' => __('Primary Menu', 'wpstarter'),
    ]);
}

add_action('after_setup_theme', 'wpstarter_theme_setup');
