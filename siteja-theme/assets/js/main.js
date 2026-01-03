document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('main-header');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mobileLinks = mobileMenu.querySelectorAll('a');

    // Header Scroll
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('bg-black/80', 'backdrop-blur-md', 'border-white/10', 'py-4');
            header.classList.remove('bg-transparent', 'py-6');
        } else {
            header.classList.add('bg-transparent', 'py-6');
            header.classList.remove('bg-black/80', 'backdrop-blur-md', 'border-white/10', 'py-4');
        }
    });

    // Mobile Menu
    mobileToggle.addEventListener('click', () => {
        const isOpen = !mobileMenu.classList.contains('translate-x-full');
        if (isOpen) {
            mobileMenu.classList.add('translate-x-full');
        } else {
            mobileMenu.classList.remove('translate-x-full');
        }
    });

    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('translate-x-full');
        });
    });
});
