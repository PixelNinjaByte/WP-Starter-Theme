<?php

function wpstarter_customize_register($wp_customize) {

    // Example setting
    $wp_customize->add_section('wpstarter_general', [
        'title' => __('General Settings', 'wpstarter'),
        'priority' => 30,
    ]);

    $wp_customize->add_setting('wpstarter_custom_text', [
        'default' => 'Hello World!',
    ]);

    $wp_customize->add_control('wpstarter_custom_text', [
        'label' => __('Homepage Greeting', 'wpstarter'),
        'section' => 'wpstarter_general',
        'type' => 'text',
    ]);
}

add_action('customize_register', 'wpstarter_customize_register');
