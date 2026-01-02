import { useState, useEffect } from "react";
import { motion, useScroll, useTransform } from "framer-motion";
import { Link as ScrollLink } from "react-scroll";
import { 
  Rocket, 
  Clock, 
  MonitorSmartphone, 
  CreditCard, 
  CheckCircle2, 
  Menu, 
  X, 
  MessageCircle,
  Code2,
  Zap,
  Layout
} from "lucide-react";
import logoImg from "@assets/siteja_1767366897616.png";
import heroVideo from "@assets/home_-_segunda_opção_1767366905462.mp4";
import { NeonButton } from "@/components/NeonButton";
import { SectionHeading } from "@/components/SectionHeading";
import { PricingCard } from "@/components/PricingCard";

export default function Home() {
  const [isScrolled, setIsScrolled] = useState(false);
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);
  const { scrollY } = useScroll();
  
  const heroOpacity = useTransform(scrollY, [0, 500], [1, 0]);
  const heroY = useTransform(scrollY, [0, 500], [0, 200]);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 50);
    };
    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  const whatsappLink = "https://wa.me/559491614484";
  
  const handleWhatsapp = () => {
    window.open(whatsappLink, "_blank");
  };

  const navItems = [
    { name: "Como funciona", to: "how-it-works" },
    { name: "Diferenciais", to: "features" },
    { name: "Planos", to: "pricing" },
  ];

  return (
    <div className="min-h-screen bg-background text-foreground overflow-x-hidden">
      {/* Header */}
      <header 
        className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 border-b border-transparent ${
          isScrolled ? "bg-black/80 backdrop-blur-md border-white/10 py-4" : "bg-transparent py-6"
        }`}
      >
        <div className="container mx-auto px-4 md:px-6 flex items-center justify-between">
          <a href="/" className="flex items-center gap-2 z-50">
            <img src={logoImg} alt="Site Já Logo" className="h-10 md:h-12 w-auto object-contain" />
          </a>

          {/* Desktop Nav */}
          <nav className="hidden md:flex items-center gap-8">
            {navItems.map((item) => (
              <ScrollLink
                key={item.name}
                to={item.to}
                smooth={true}
                duration={800}
                className="text-sm font-medium text-gray-300 hover:text-primary cursor-pointer transition-colors"
              >
                {item.name}
              </ScrollLink>
            ))}
            <ScrollLink to="pricing" smooth={true} duration={800}>
              <NeonButton size="sm" variant="outline">Ver Planos</NeonButton>
            </ScrollLink>
          </nav>

          {/* Mobile Menu Toggle */}
          <button 
            className="md:hidden text-white z-50"
            onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
          >
            {isMobileMenuOpen ? <X /> : <Menu />}
          </button>

          {/* Mobile Nav Overlay */}
          <div className={`fixed inset-0 bg-black/95 backdrop-blur-xl z-40 flex flex-col items-center justify-center gap-8 transition-transform duration-300 md:hidden ${
            isMobileMenuOpen ? "translate-x-0" : "translate-x-full"
          }`}>
            {navItems.map((item) => (
              <ScrollLink
                key={item.name}
                to={item.to}
                smooth={true}
                duration={800}
                onClick={() => setIsMobileMenuOpen(false)}
                className="text-2xl font-bold text-white hover:text-primary cursor-pointer"
              >
                {item.name}
              </ScrollLink>
            ))}
            <NeonButton onClick={() => {
              setIsMobileMenuOpen(false);
              document.getElementById('pricing')?.scrollIntoView({ behavior: 'smooth' });
            }}>
              Ver Planos
            </NeonButton>
          </div>
        </div>
      </header>

      {/* Hero Section */}
      <section className="relative h-screen flex items-center justify-center overflow-hidden">
        {/* Video Background */}
        <div className="absolute inset-0 z-0">
          <div className="absolute inset-0 bg-black/60 z-10" /> {/* Overlay */}
          <div className="absolute inset-0 bg-gradient-to-t from-background via-transparent to-black/40 z-10" />
          <video
            autoPlay
            loop
            muted
            playsInline
            className="w-full h-full object-cover"
          >
            <source src={heroVideo} type="video/mp4" />
          </video>
        </div>

        {/* Hero Content */}
        <motion.div 
          style={{ opacity: heroOpacity, y: heroY }}
          className="container relative z-20 px-4 text-center"
        >
          <motion.div
            initial={{ opacity: 0, scale: 0.9 }}
            animate={{ opacity: 1, scale: 1 }}
            transition={{ duration: 0.8 }}
            className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-sm font-semibold mb-6 backdrop-blur-sm"
          >
            <span className="relative flex h-2 w-2">
              <span className="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
              <span className="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
            </span>
            Sites Profissionais em 72h
          </motion.div>

          <motion.h1 
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.8, delay: 0.2 }}
            className="text-5xl md:text-7xl lg:text-8xl font-bold font-display tracking-tighter text-white mb-6"
          >
            Sua Empresa <br/>
            <span className="text-primary text-glow">Online Agora</span>
          </motion.h1>

          <motion.p 
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.8, delay: 0.4 }}
            className="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto mb-10 leading-relaxed"
          >
            Tenha um site profissional, rápido e otimizado para vendas.
            Transforme visitantes em clientes com a Site Já.
          </motion.p>

          <motion.div 
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.8, delay: 0.6 }}
            className="flex flex-col sm:flex-row items-center justify-center gap-4"
          >
            <NeonButton 
              size="lg" 
              onClick={handleWhatsapp}
              className="w-full sm:w-auto"
            >
              <MessageCircle className="mr-2 w-5 h-5" />
              Solicitar Orçamento
            </NeonButton>
            <ScrollLink to="pricing" smooth={true} duration={800} className="w-full sm:w-auto">
              <NeonButton 
                variant="outline" 
                size="lg"
                className="w-full sm:w-auto bg-black/40 backdrop-blur-sm"
              >
                Ver Nossos Planos
              </NeonButton>
            </ScrollLink>
          </motion.div>
        </motion.div>

        {/* Scroll Indicator */}
        <motion.div 
          initial={{ opacity: 0 }}
          animate={{ opacity: 1 }}
          transition={{ delay: 1.5, duration: 1 }}
          className="absolute bottom-10 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center gap-2 text-white/50"
        >
          <span className="text-xs uppercase tracking-widest">Role para ver</span>
          <motion.div 
            animate={{ y: [0, 8, 0] }}
            transition={{ repeat: Infinity, duration: 1.5 }}
            className="w-0.5 h-12 bg-gradient-to-b from-primary to-transparent"
          />
        </motion.div>
      </section>

      {/* How It Works Section */}
      <section id="how-it-works" className="py-24 bg-background relative">
        <div className="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary/20 to-transparent" />
        
        <div className="container mx-auto px-4">
          <SectionHeading 
            title="Como Funciona" 
            subtitle="Processo simplificado para você ter seu site no ar sem dor de cabeça."
          />

          <div className="grid md:grid-cols-3 gap-8 relative">
            {/* Connecting Line (Desktop) */}
            <div className="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-gradient-to-r from-transparent via-white/10 to-transparent z-0" />

            {[
              { 
                icon: Layout, 
                title: "1. Escolha o Plano", 
                desc: "Selecione o pacote ideal para o momento do seu negócio." 
              },
              { 
                icon: MessageCircle, 
                title: "2. Envie os Dados", 
                desc: "Nos conte sobre sua empresa e envie seu conteúdo via WhatsApp." 
              },
              { 
                icon: Rocket, 
                title: "3. Site no Ar", 
                desc: "Em até 72 horas seu site estará pronto para vender." 
              },
            ].map((step, index) => (
              <motion.div 
                key={index}
                initial={{ opacity: 0, y: 30 }}
                whileInView={{ opacity: 1, y: 0 }}
                viewport={{ once: true }}
                transition={{ duration: 0.5, delay: index * 0.2 }}
                className="relative z-10 flex flex-col items-center text-center group"
              >
                <div className="w-24 h-24 rounded-2xl bg-secondary border border-white/5 flex items-center justify-center mb-6 shadow-lg shadow-black group-hover:border-primary/50 group-hover:shadow-[0_0_20px_rgba(57,255,20,0.2)] transition-all duration-300">
                  <step.icon className="w-10 h-10 text-white group-hover:text-primary transition-colors" />
                </div>
                <h3 className="text-xl font-bold mb-3 text-white">{step.title}</h3>
                <p className="text-muted-foreground max-w-xs">{step.desc}</p>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Features/Differentiators */}
      <section id="features" className="py-24 bg-secondary/30 relative overflow-hidden">
        {/* Decorative elements */}
        <div className="absolute top-0 right-0 w-1/3 h-full bg-primary/5 blur-3xl pointer-events-none" />
        <div className="absolute bottom-0 left-0 w-1/3 h-full bg-purple-500/5 blur-3xl pointer-events-none" />

        <div className="container mx-auto px-4 relative z-10">
          <SectionHeading 
            title="Por que a Site Já?" 
            subtitle="Não entregamos apenas código, entregamos resultados para o seu negócio."
          />

          <div className="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            {[
              { icon: Clock, title: "Entrega em 72h", desc: "Processo otimizado para você não perder tempo." },
              { icon: MonitorSmartphone, title: "100% Responsivo", desc: "Funciona perfeitamente em celulares, tablets e PCs." },
              { icon: CreditCard, title: "Sem Mensalidade", desc: "Pagamento único pelo desenvolvimento do site." },
              { icon: Code2, title: "Tecnologia Moderna", desc: "Site rápido, seguro e otimizado para o Google (SEO)." },
              { icon: Zap, title: "Alta Performance", desc: "Carregamento instantâneo para não perder visitantes." },
              { icon: CheckCircle2, title: "Suporte Dedicado", desc: "Acompanhamento total durante o processo." },
            ].map((feature, i) => (
              <motion.div
                key={i}
                initial={{ opacity: 0, scale: 0.95 }}
                whileInView={{ opacity: 1, scale: 1 }}
                viewport={{ once: true }}
                transition={{ duration: 0.4, delay: i * 0.1 }}
                className="p-6 rounded-2xl bg-white/5 border border-white/5 hover:border-primary/30 hover:bg-white/10 transition-all duration-300 group"
              >
                <div className="mb-4 inline-flex p-3 rounded-lg bg-black/50 text-primary group-hover:scale-110 transition-transform">
                  <feature.icon className="w-6 h-6" />
                </div>
                <h3 className="text-lg font-bold text-white mb-2">{feature.title}</h3>
                <p className="text-muted-foreground text-sm">{feature.desc}</p>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Pricing Section */}
      <section id="pricing" className="py-24 bg-background relative">
        <div className="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-primary/5 via-transparent to-transparent opacity-50" />
        
        <div className="container mx-auto px-4 relative z-10">
          <SectionHeading 
            title="Nossos Planos" 
            subtitle="Investimento único. Resultado contínuo."
          />

          <div className="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto items-stretch">
            <PricingCard 
              index={0}
              title="Landing Page"
              price="599"
              description="Ideal para campanhas e produtos específicos. Uma página focada em conversão."
              onSelect={handleWhatsapp}
              features={[
                { text: "Página Única (One Page)", included: true },
                { text: "Design Responsivo", included: true },
                { text: "Botão WhatsApp", included: true },
                { text: "Formulário de Contato", included: true },
                { text: "Otimização SEO Básica", included: true },
                { text: "Hospedagem Inclusa (1 ano)", included: false },
                { text: "Contas de E-mail", included: false },
              ]}
            />
            
            <PricingCard 
              index={1}
              isPopular={true}
              title="Site Essencial"
              price="799"
              description="Perfeito para prestadores de serviço e pequenas empresas que precisam de presença digital."
              onSelect={handleWhatsapp}
              features={[
                { text: "Até 3 Páginas", included: true },
                { text: "Design Premium Responsivo", included: true },
                { text: "Botão WhatsApp Flutuante", included: true },
                { text: "Formulário de Contato", included: true },
                { text: "Otimização SEO Completa", included: true },
                { text: "Integração Google Maps", included: true },
                { text: "Painel Administrativo", included: false },
              ]}
            />
            
            <PricingCard 
              index={2}
              title="Site Profissional"
              price="999"
              description="Para empresas que buscam autoridade e funcionalidades avançadas."
              onSelect={handleWhatsapp}
              features={[
                { text: "Até 6 Páginas", included: true },
                { text: "Design Exclusivo", included: true },
                { text: "Tudo do plano Essencial", included: true },
                { text: "Blog / Notícias", included: true },
                { text: "Painel Administrativo", included: true },
                { text: "Integração Redes Sociais", included: true },
                { text: "Google Analytics", included: true },
              ]}
            />
          </div>
          
          <div className="mt-12 text-center">
            <p className="text-muted-foreground mb-4">Precisa de algo mais específico? E-commerce ou Sistema?</p>
            <button onClick={handleWhatsapp} className="text-primary hover:text-primary/80 underline font-medium">
              Fale conosco para um projeto personalizado
            </button>
          </div>
        </div>
      </section>

      {/* CTA Final */}
      <section className="py-24 bg-primary text-black relative overflow-hidden">
        <div className="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10 mix-blend-multiply" />
        
        <div className="container mx-auto px-4 text-center relative z-10">
          <motion.h2 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            className="text-4xl md:text-5xl lg:text-6xl font-bold font-display mb-8 tracking-tight"
          >
            Pronto para Decolar?
          </motion.h2>
          <motion.p 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ delay: 0.2 }}
            className="text-xl md:text-2xl font-medium mb-10 max-w-2xl mx-auto text-black/80"
          >
            Não perca mais clientes para a concorrência. Tenha seu site profissional no ar essa semana.
          </motion.p>
          <motion.div
            initial={{ opacity: 0, scale: 0.9 }}
            whileInView={{ opacity: 1, scale: 1 }}
            viewport={{ once: true }}
            transition={{ delay: 0.4 }}
          >
            <button 
              onClick={handleWhatsapp}
              className="bg-black text-primary px-8 py-5 rounded-xl font-bold text-lg md:text-xl shadow-2xl hover:scale-105 transition-transform flex items-center gap-3 mx-auto"
            >
              <MessageCircle className="w-6 h-6" />
              SOLICITAR MEU SITE AGORA
            </button>
          </motion.div>
        </div>
      </section>

      {/* Footer */}
      <footer className="bg-black text-white py-12 border-t border-white/10">
        <div className="container mx-auto px-4">
          <div className="flex flex-col md:flex-row justify-between items-center gap-8 mb-8">
            <div className="flex items-center gap-2">
              <img src={logoImg} alt="Site Já" className="h-8 grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all" />
            </div>
            <div className="flex gap-8 text-sm text-gray-400">
              <ScrollLink to="how-it-works" smooth={true} className="hover:text-primary cursor-pointer transition-colors">Como funciona</ScrollLink>
              <ScrollLink to="pricing" smooth={true} className="hover:text-primary cursor-pointer transition-colors">Planos</ScrollLink>
              <a href={whatsappLink} target="_blank" rel="noopener noreferrer" className="hover:text-primary transition-colors">Contato</a>
            </div>
            <div className="flex gap-4">
              <a href="#" className="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary hover:text-black transition-all">
                <MessageCircle className="w-5 h-5" />
              </a>
              {/* Add social icons as needed */}
            </div>
          </div>
          <div className="border-t border-white/10 pt-8 text-center text-sm text-gray-500">
            <p>© {new Date().getFullYear()} Site Já – Todos os direitos reservados.</p>
          </div>
        </div>
      </footer>
    </div>
  );
}
