<?php
function site_ja_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'site_ja_setup');

function site_ja_scripts() {
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap', array(), null);
    wp_enqueue_style('site-ja-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'site_ja_scripts');

function site_ja_tailwind_config() {
    ?>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: '#39FF14',
              background: '#000000',
              secondary: '#111111',
            }
          }
        }
      }
    </script>
    <?php
}
add_action('wp_head', 'site_ja_tailwind_config');
