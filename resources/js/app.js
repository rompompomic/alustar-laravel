import './bootstrap';
import { createIcons, icons } from 'lucide';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

createIcons({ icons });

document.addEventListener('DOMContentLoaded', () => {
    // Re-run icons creates if content changes dynamically, but here just run once on load
    createIcons({ icons });

    // Mobile Menu Logic
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenu = document.getElementById('mobile-menu');

    function openMenu() {
        if (!mobileMenuOverlay || !mobileMenu) return;
        mobileMenuOverlay.classList.remove('hidden');
        // small delay to allow display:block to apply before opacity transition
        setTimeout(() => {
            mobileMenuOverlay.classList.remove('opacity-0');
            mobileMenu.classList.remove('translate-x-full');
        }, 10);
    }

    function closeMenu() {
        if (!mobileMenuOverlay || !mobileMenu) return;
        mobileMenuOverlay.classList.add('opacity-0');
        mobileMenu.classList.add('translate-x-full');
        setTimeout(() => {
            mobileMenuOverlay.classList.add('hidden');
        }, 300);
    }

    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', openMenu);
    }

    if (mobileMenuClose) {
        mobileMenuClose.addEventListener('click', closeMenu);
    }

    // Close when clicking overlay (outside menu)
    if (mobileMenuOverlay) {
        mobileMenuOverlay.addEventListener('click', (e) => {
            if (e.target === mobileMenuOverlay) {
                closeMenu();
            }
        });
    }

    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-md');
            } else {
                navbar.classList.remove('shadow-md');
            }
        });
    }
});
