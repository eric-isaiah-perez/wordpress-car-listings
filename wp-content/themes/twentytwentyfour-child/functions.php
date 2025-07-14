<?php
add_action( 'wp_enqueue_scripts', function () {
    $theme_uri = get_stylesheet_directory_uri();
    $theme_dir = get_stylesheet_directory();

    // Parent theme styles
    wp_enqueue_style(
        'twentytwentyfour-style',
        get_template_directory_uri() . '/style.css'
    );

    // Compiled Tailwind CSS
    wp_enqueue_style(
        'child-style',
        $theme_uri . '/assets/css/style.css',
        ['twentytwentyfour-style'],
        filemtime($theme_dir . '/assets/css/style.css')
    );

    // WordPress-bundled jQuery
    wp_enqueue_script('jquery');

    // Owl Carousel CSS
    wp_enqueue_style(
        'owl-carousel',
        $theme_uri . '/node_modules/owl.carousel/dist/assets/owl.carousel.min.css'
    );

    // Owl Carousel JS
    wp_enqueue_script(
        'owl-carousel',
        $theme_uri . '/node_modules/owl.carousel/dist/owl.carousel.min.js',
        ['jquery'],
        null,
        true
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        $theme_uri . '/node_modules/@fortawesome/fontawesome-free/css/all.min.css',
        [],
        null
    );

    // Custom JS Scripts
    wp_enqueue_script(
        'child-script',
        $theme_uri . '/assets/js/custom-scripts.js',
        ['jquery', 'owl-carousel'],
        filemtime($theme_dir . '/assets/js/custom-scripts.js'),
        true
    );

    // Custom CSS Stylesheet
    wp_enqueue_style(
        'child-custom-style',
        $theme_uri . '/assets/css/custom-stylesheet.css',
        ['child-style'],
        filemtime($theme_dir . '/assets/css/custom-stylesheet.css')
    );

    // Add Menus in Appearance
    add_action('after_setup_theme', function () {
        remove_theme_support('block-templates');
        add_theme_support('menus');
        register_nav_menus([
            'primary' => __('Primary Menu', 'twentytwentyfour-child'),
        ]);
    });

});
