<?php get_header(); ?>

<main class="min-h-screen bg-background text-foreground overflow-x-hidden">
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-black/60 z-10"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-black/40 z-10"></div>
            <video autoPlay loop muted playsInline class="w-full h-full object-cover">
                <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/home_-_segunda_opção_1767366905462.mp4" type="video/mp4">
            </video>
        </div>

        <div class="container relative z-20 px-4 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-sm font-semibold mb-6 backdrop-blur-sm">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                Sites Profissionais em 72h
            </div>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold font-display tracking-tighter text-white mb-6">
                Seu site profissional <br/>
                <span class="text-primary text-glow">em até 72 horas</span>
            </h1>

            <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto mb-10 leading-relaxed">
                Criamos sites rápidos, modernos e focados em gerar contatos e vendas.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="https://wa.me/559491614484" target="_blank" class="bg-primary text-black px-8 py-4 rounded-xl font-bold flex items-center gap-2 hover:scale-105 transition-transform w-full sm:w-auto justify-center">
                    Solicitar Orçamento
                </a>
                <a href="#pricing" class="bg-black/40 backdrop-blur-sm border border-white/20 text-white px-8 py-4 rounded-xl font-bold hover:bg-white/10 transition-all w-full sm:w-auto justify-center flex">
                    Ver Nossos Planos
                </a>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="py-12 border-y border-white/5 bg-black/20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-8 text-center">
                <div class="flex flex-col items-center">
                    <span class="text-3xl md:text-4xl font-bold text-primary mb-1">+100</span>
                    <span class="text-xs md:text-sm text-gray-400 uppercase tracking-widest">Sites entregues</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-3xl md:text-4xl font-bold text-primary mb-1">100%</span>
                    <span class="text-xs md:text-sm text-gray-400 uppercase tracking-widest">Design Responsivo</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-3xl md:text-4xl font-bold text-primary mb-1">72h</span>
                    <span class="text-xs md:text-sm text-gray-400 uppercase tracking-widest">Entrega média</span>
                </div>
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section id="how-it-works" class="py-24 bg-background relative">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">Como Funciona</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Processo simplificado para você ter seu site no ar sem dor de cabeça.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-24 h-24 rounded-2xl bg-secondary flex items-center justify-center mb-6 relative">
                        <span class="absolute -top-2 -right-2 w-8 h-8 rounded-full bg-primary text-black font-bold flex items-center justify-center text-sm">1</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><line x1="3" x2="21" y1="9" y2="9"></line><line x1="9" x2="9" y1="21" y2="9"></line></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">1. Escolha o plano</h3>
                    <p class="text-gray-400">Selecione o pacote ideal.</p>
                </div>
                <!-- Step 2 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-24 h-24 rounded-2xl bg-secondary flex items-center justify-center mb-6 relative">
                        <span class="absolute -top-2 -right-2 w-8 h-8 rounded-full bg-primary text-black font-bold flex items-center justify-center text-sm">2</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">2. Envie as informações</h3>
                    <p class="text-gray-400">Nos envie o conteúdo via WhatsApp.</p>
                </div>
                <!-- Step 3 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-24 h-24 rounded-2xl bg-secondary flex items-center justify-center mb-6 relative">
                        <span class="absolute -top-2 -right-2 w-8 h-8 rounded-full bg-primary text-black font-bold flex items-center justify-center text-sm">3</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path><path d="M9 12H4s.55-3.03 2-4.5c1.62-1.62 5-2 5-2"></path><path d="M12 15v5s3.03-.55 4.5-2c1.62-1.62 2-5 2-5"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">3. Site pronto em até 72h</h3>
                    <p class="text-gray-400">Seu site no ar com rapidez.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-24 bg-background relative">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">Nossos Planos</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Investimento único. Resultado contínuo.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- LP -->
                <div class="p-8 rounded-2xl bg-secondary/50 border border-white/10 flex flex-col">
                    <h3 class="text-xl font-bold mb-2">Landing Page</h3>
                    <div class="flex items-baseline gap-1 mb-4">
                        <span class="text-3xl font-bold">R$ 599</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-8">Ideal para campanhas e vendas rápidas.</p>
                    <ul class="space-y-4 mb-8 flex-1">
                        <li class="flex items-center gap-2 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><polyline points="20 6 9 17 4 12"></polyline></svg> Página Única Premium</li>
                        <li class="flex items-center gap-2 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><polyline points="20 6 9 17 4 12"></polyline></svg> 100% Responsivo</li>
                        <li class="flex items-center gap-2 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><polyline points="20 6 9 17 4 12"></polyline></svg> Botão WhatsApp</li>
                    </ul>
                    <a href="https://buy.stripe.com/dRmeVd01mfLT9Eg5Oy1B600" target="_blank" class="w-full py-3 rounded-lg border border-primary text-primary font-bold text-center hover:bg-primary hover:text-black transition-all">Começar Agora</a>
                </div>
                <!-- Essencial -->
                <div class="p-8 rounded-2xl bg-black border border-primary/50 shadow-[0_0_30px_rgba(57,255,20,0.1)] flex flex-col scale-105 relative">
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary text-black text-xs font-black px-4 py-1 rounded-full">POPULAR</div>
                    <h3 class="text-xl font-bold mb-2">Site Essencial</h3>
                    <div class="flex items-baseline gap-1 mb-4">
                        <span class="text-3xl font-bold">R$ 799</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-8">Perfeito para pequenas empresas e serviços.</p>
                    <ul class="space-y-4 mb-8 flex-1">
                        <li class="flex items-center gap-2 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><polyline points="20 6 9 17 4 12"></polyline></svg> Até 3 Páginas</li>
                        <li class="flex items-center gap-2 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><polyline points="20 6 9 17 4 12"></polyline></svg> Design Premium</li>
                        <li class="flex items-center gap-2 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><polyline points="20 6 9 17 4 12"></polyline></svg> WhatsApp Flutuante</li>
                    </ul>
                    <a href="https://buy.stripe.com/eVqbJ101m0QZ2bOfp81B601" target="_blank" class="w-full py-3 rounded-lg bg-primary text-black font-bold text-center hover:scale-105 transition-all">Começar Agora</a>
                </div>
                <!-- Profissional -->
                <div class="p-8 rounded-2xl bg-secondary/50 border border-white/10 flex flex-col">
                    <h3 class="text-xl font-bold mb-2">Site Profissional</h3>
                    <div class="flex items-baseline gap-1 mb-4">
                        <span class="text-3xl font-bold">R$ 999</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-8">Autoridade máxima para o seu negócio.</p>
                    <ul class="space-y-4 mb-8 flex-1">
                        <li class="flex items-center gap-2 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><polyline points="20 6 9 17 4 12"></polyline></svg> Até 5 Seções</li>
                        <li class="flex items-center gap-2 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><polyline points="20 6 9 17 4 12"></polyline></svg> Blog de Notícias</li>
                        <li class="flex items-center gap-2 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><polyline points="20 6 9 17 4 12"></polyline></svg> Google Maps Incluso</li>
                    </ul>
                    <a href="https://buy.stripe.com/14A6oH01mbvDdUw6SC1B602" target="_blank" class="w-full py-3 rounded-lg border border-primary text-primary font-bold text-center hover:bg-primary hover:text-black transition-all">Começar Agora</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="py-24 bg-primary text-black relative overflow-hidden">
        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-4xl md:text-6xl font-bold mb-8">Sites profissionais prontos em até 72 horas</h2>
            <p class="text-xl md:text-2xl font-medium mb-10 max-w-2xl mx-auto opacity-80">Processo simples, sem mensalidade e sem complicação. Atendemos um número limitado de projetos por semana.</p>
            <a href="https://wa.me/559491614484" target="_blank" class="bg-black text-primary px-10 py-5 rounded-xl font-bold text-xl inline-flex items-center gap-3 hover:scale-105 transition-all">
                SOLICITAR MEU SITE AGORA
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
