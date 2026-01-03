<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-black text-white'); ?>>
<header class="fixed top-0 left-0 right-0 z-50 bg-black/80 backdrop-blur-md border-b border-white/10 py-4">
    <div class="container mx-auto px-4 flex items-center justify-between">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2">
            <span class="text-2xl font-bold text-primary italic">SITE JÁ</span>
        </a>
        <nav class="hidden md:flex items-center gap-8">
            <a href="#how-it-works" class="text-sm font-medium text-gray-300 hover:text-primary transition-colors">Como funciona</a>
            <a href="#features" class="text-sm font-medium text-gray-300 hover:text-primary transition-colors">Diferenciais</a>
            <a href="#pricing" class="text-sm font-medium text-gray-300 hover:text-primary transition-colors">Planos</a>
        </nav>
    </div>
</header>
