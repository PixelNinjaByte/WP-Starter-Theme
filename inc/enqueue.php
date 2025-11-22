<?php

function wpstarter_enqueue_scripts() {
    wp_enqueue_style('wpstarter-style', get_stylesheet_uri());

    wp_enqueue_script(
        'wpstarter-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        false,
        true
    );
}

add_action('wp_enqueue_scripts', 'wpstarter_enqueue_scripts');
