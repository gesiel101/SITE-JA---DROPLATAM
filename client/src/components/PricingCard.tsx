import { motion } from "framer-motion";
import { Check, X } from "lucide-react";
import { NeonButton } from "./NeonButton";
import { cn } from "@/lib/utils";

interface PricingFeature {
  text: string;
  included: boolean;
}

interface PricingCardProps {
  title: string;
  price: string;
  description: string;
  features: PricingFeature[];
  isPopular?: boolean;
  onSelect: () => void;
  index: number;
}

export function PricingCard({ 
  title, 
  price, 
  description, 
  features, 
  isPopular = false, 
  onSelect,
  index 
}: PricingCardProps) {
  return (
    <motion.div
      initial={{ opacity: 0, y: 50 }}
      whileInView={{ opacity: 1, y: 0 }}
      viewport={{ once: true }}
      transition={{ duration: 0.5, delay: index * 0.1 }}
      className={cn(
        "relative flex flex-col p-8 rounded-2xl h-full backdrop-blur-sm border transition-all duration-300",
        isPopular 
          ? "bg-white/5 border-primary shadow-[0_0_30px_rgba(57,255,20,0.15)] scale-105 z-10" 
          : "bg-black/40 border-white/10 hover:border-white/20 hover:bg-white/5"
      )}
    >
      {isPopular && (
        <div className="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary text-black font-bold px-4 py-1 rounded-full text-sm shadow-lg shadow-primary/30 uppercase tracking-wider">
          Mais Popular
        </div>
      )}

      <div className="mb-8">
        <h3 className="text-xl font-bold text-white mb-2">{title}</h3>
        <div className="flex items-baseline gap-1 mb-4">
          <span className="text-sm text-muted-foreground">R$</span>
          <span className={cn("text-4xl font-bold font-display", isPopular ? "text-primary text-glow" : "text-white")}>
            {price}
          </span>
          <span className="text-sm text-muted-foreground">/único</span>
        </div>
        <p className="text-muted-foreground text-sm leading-relaxed">{description}</p>
      </div>

      <div className="flex-1 space-y-4 mb-8">
        {features.map((feature, i) => (
          <div key={i} className="flex items-start gap-3">
            {feature.included ? (
              <div className="mt-0.5 min-w-5 h-5 rounded-full bg-primary/20 flex items-center justify-center">
                <Check className="w-3 h-3 text-primary" />
              </div>
            ) : (
              <div className="mt-0.5 min-w-5 h-5 rounded-full bg-white/5 flex items-center justify-center">
                <X className="w-3 h-3 text-muted-foreground" />
              </div>
            )}
            <span className={cn("text-sm", feature.included ? "text-gray-200" : "text-gray-500 line-through")}>
              {feature.text}
            </span>
          </div>
        ))}
      </div>

      <NeonButton 
        variant={isPopular ? "primary" : "outline"} 
        className="w-full"
        onClick={onSelect}
      >
        Selecionar Plano
      </NeonButton>
    </motion.div>
  );
}
