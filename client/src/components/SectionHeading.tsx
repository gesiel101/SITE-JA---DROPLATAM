import { motion } from "framer-motion";
import { cn } from "@/lib/utils";

interface SectionHeadingProps {
  title: string;
  subtitle?: string;
  className?: string;
  align?: "left" | "center" | "right";
}

export function SectionHeading({ title, subtitle, className, align = "center" }: SectionHeadingProps) {
  return (
    <div className={cn("mb-12 md:mb-20 space-y-4", className, {
      "text-center": align === "center",
      "text-left": align === "left",
      "text-right": align === "right",
    })}>
      <motion.h2 
        initial={{ opacity: 0, y: 20 }}
        whileInView={{ opacity: 1, y: 0 }}
        viewport={{ once: true }}
        transition={{ duration: 0.6 }}
        className="text-3xl md:text-4xl lg:text-5xl font-bold font-display tracking-tight"
      >
        {title.split(' ').map((word, i) => (
          <span key={i} className={i % 2 !== 0 && align === "center" ? "text-primary text-glow" : "text-white"}>
            {word}{' '}
          </span>
        ))}
      </motion.h2>
      
      {subtitle && (
        <motion.p 
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          transition={{ duration: 0.6, delay: 0.2 }}
          className="text-muted-foreground text-lg md:text-xl max-w-2xl mx-auto leading-relaxed"
        >
          {subtitle}
        </motion.p>
      )}
      
      <motion.div 
        initial={{ scaleX: 0 }}
        whileInView={{ scaleX: 1 }}
        viewport={{ once: true }}
        transition={{ duration: 0.8, delay: 0.4 }}
        className={cn("h-1 w-24 bg-primary rounded-full mt-6", {
          "mx-auto": align === "center",
          "ml-auto": align === "right",
        })}
      />
    </div>
  );
}
