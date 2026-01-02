import { ButtonHTMLAttributes, forwardRef } from "react";
import { cn } from "@/lib/utils";
import { motion } from "framer-motion";

interface NeonButtonProps extends ButtonHTMLAttributes<HTMLButtonElement> {
  variant?: "primary" | "outline" | "ghost";
  size?: "sm" | "md" | "lg";
}

const NeonButton = forwardRef<HTMLButtonElement, NeonButtonProps>(
  ({ className, variant = "primary", size = "md", children, ...props }, ref) => {
    
    const baseStyles = "relative inline-flex items-center justify-center rounded-lg font-bold transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed z-10 overflow-hidden";
    
    const variants = {
      primary: "bg-primary text-black hover:bg-primary/90 shadow-[0_0_20px_rgba(57,255,20,0.4)] hover:shadow-[0_0_30px_rgba(57,255,20,0.6)] hover:-translate-y-0.5",
      outline: "bg-transparent border-2 border-primary text-primary hover:bg-primary/10 shadow-[0_0_10px_rgba(57,255,20,0.1)] hover:shadow-[0_0_20px_rgba(57,255,20,0.3)]",
      ghost: "bg-transparent text-white hover:text-primary hover:bg-white/5",
    };
    
    const sizes = {
      sm: "text-sm px-4 py-2",
      md: "text-base px-6 py-3",
      lg: "text-lg px-8 py-4",
    };

    return (
      <motion.button
        ref={ref}
        whileTap={{ scale: 0.98 }}
        className={cn(baseStyles, variants[variant], sizes[size], className)}
        {...props}
      >
        {children}
      </motion.button>
    );
  }
);

NeonButton.displayName = "NeonButton";

export { NeonButton };
