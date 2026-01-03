<?php
function siteja_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'siteja'),
    ));
}
add_action('after_setup_theme', 'siteja_theme_setup');

function siteja_theme_scripts() {
    wp_enqueue_style('siteja-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap', array(), null);
    wp_enqueue_style('siteja-tailwind', 'https://cdn.tailwindcss.com', array(), null);
    wp_enqueue_style('siteja-main-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
    
    // Add Tailwind Config
    wp_add_inline_script('siteja-tailwind', "
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#39FF14',
                            foreground: '#0d0d0d',
                        },
                        background: '#0d0d0d',
                        foreground: '#f2f2f2',
                        secondary: {
                            DEFAULT: '#1f1f1f',
                            foreground: '#fafafa',
                        },
                        muted: {
                            DEFAULT: '#262626',
                            foreground: '#999999',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Space Grotesk', 'sans-serif'],
                    }
                }
            }
        }
    ", 'after');

    wp_enqueue_script('siteja-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'siteja_theme_scripts');
