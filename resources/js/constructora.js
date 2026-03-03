/**
 * Indago Constructora – Public Page JS
 * Add any interactive behaviour for the public site here.
 */

document.addEventListener('DOMContentLoaded', () => {
    // Mobile menu toggle (if needed in the future)
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
});
