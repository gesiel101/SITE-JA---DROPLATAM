    <footer class="bg-black text-white py-12 border-t border-white/10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8 mb-8">
                <div class="flex items-center gap-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/siteja_1767366897616.png" alt="Site Já" class="h-8 grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all" />
                </div>
                <div class="flex gap-8 text-sm text-gray-400">
                    <a href="#how-it-works" class="hover:text-primary transition-colors">Como funciona</a>
                    <a href="#pricing" class="hover:text-primary transition-colors">Planos</a>
                    <a href="https://wa.me/559491614484" target="_blank" rel="noopener noreferrer" class="hover:text-primary transition-colors">Contato</a>
                </div>
                <div class="flex gap-4">
                    <a href="https://wa.me/559491614484" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary hover:text-black transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 1 1-7.6-14.7 8.38 8.38 0 0 1 3.8.9L21 3z"></path></svg>
                    </a>
                    <a href="https://www.instagram.com/siteja.website?igsh=Y216Nml3YWhzZXR5" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary hover:text-black transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61585658536439" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary hover:text-black transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                </div>
            </div>
            <div class="border-t border-white/10 pt-8 text-center text-sm text-gray-500">
                <p>© <?php echo date('Y'); ?> Site Já – Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/559491614484" target="_blank" rel="noopener noreferrer" class="fixed bottom-6 right-6 z-50 bg-[#25D366] text-white p-4 rounded-full shadow-lg hover:shadow-[#25D366]/50 transition-all duration-300 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 1 1-7.6-14.7 8.38 8.38 0 0 1 3.8.9L21 3z"></path></svg>
    </a>

    <?php wp_footer(); ?>
</body>
</html>
