<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
        :root {
            --primary: 110 100% 54%;
            --background: 0 0% 5%;
        }
        .text-glow { text-shadow: 0 0 20px rgba(57, 255, 20, 0.5); }
        .neon-border { border: 1px solid rgba(57, 255, 20, 0.5); box-shadow: 0 0 15px rgba(57, 255, 20, 0.3); }
        html { scroll-behavior: smooth; }
    </style>
</head>
<body <?php body_class('bg-background text-foreground antialiased selection:bg-primary selection:text-primary-foreground font-sans'); ?>>

<header id="main-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 border-b border-transparent py-6">
    <div class="container mx-auto px-4 md:px-6 flex items-center justify-between">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2 z-50">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/siteja_1767366897616.png" alt="Site Já Logo" class="h-10 md:h-12 w-auto object-contain" />
        </a>

        <nav class="hidden md:flex items-center gap-8">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'flex gap-8 items-center',
                'fallback_cb' => false,
                'items_wrap' => '%3$s',
            ));
            ?>
            <a href="#pricing" class="inline-flex items-center justify-center rounded-md px-4 py-2 text-sm font-medium border border-primary text-primary hover:bg-primary hover:text-black transition-all">Ver Planos</a>
        </nav>

        <button id="mobile-menu-toggle" class="md:hidden text-white z-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="menu-icon"><line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line></svg>
        </button>

        <div id="mobile-menu" class="fixed inset-0 bg-black/95 backdrop-blur-xl z-40 flex flex-col items-center justify-center gap-8 translate-x-full transition-transform duration-300 md:hidden">
            <a href="#how-it-works" class="text-2xl font-bold text-white hover:text-primary">Como funciona</a>
            <a href="#features" class="text-2xl font-bold text-white hover:text-primary">Diferenciais</a>
            <a href="#pricing" class="text-2xl font-bold text-white hover:text-primary">Planos</a>
            <a href="#pricing" class="bg-primary text-black px-6 py-3 rounded-lg font-bold">Ver Planos</a>
        </div>
    </div>
</header>
