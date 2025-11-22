<?php

function wpstarter_enqueue_scripts() {

    // Load root style.css (required for theme)
    wp_enqueue_style(
        'wpstarter-style',
        get_stylesheet_uri()
    );

    // Load custom CSS in assets/css/style.css
    wp_enqueue_style(
        'wpstarter-custom',
        get_template_directory_uri() . '/assets/css/style.css',
        array('wpstarter-style'),
        false
    );

    // Load JS
    wp_enqueue_script(
        'wpstarter-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        false,
        true
    );
}

add_action('wp_enqueue_scripts', 'wpstarter_enqueue_scripts');
