<?php

function siteja_assets() {
  wp_enqueue_style(
    'siteja-style',
    get_template_directory_uri() . '/assets/css/style.css',
    [],
    '1.0'
  );

  wp_enqueue_script(
    'siteja-js',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    '1.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'siteja_assets');

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
