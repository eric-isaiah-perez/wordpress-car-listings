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

    // Lightbox2 CSS
    wp_enqueue_style(
        'lightbox2',
        $theme_uri . '/node_modules/lightbox2/dist/css/lightbox.min.css'
    );

    // Lightbox2 JS
    wp_enqueue_script(
        'lightbox2',
        $theme_uri . '/node_modules/lightbox2/dist/js/lightbox.min.js',
        [],
        null,
        true
    );
});
