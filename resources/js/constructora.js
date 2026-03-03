/**
 * Indago Constructora – Public Page JS
 * Add any interactive behaviour for the public site here.
 */

document.addEventListener('DOMContentLoaded', () => {

    // ─── Mobile Menu Toggle ─────────────────────────────────────
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // ─── Trust Stats · Animated Counters ────────────────────────
    const statsSection = document.getElementById('trust-stats');

    if (statsSection) {
        const counters = statsSection.querySelectorAll('.counter');
        const statCards = statsSection.querySelectorAll('.stat-card');
        let animated = false;

        // Easing — easeOutExpo: starts fast, decelerates smoothly
        function easeOutExpo(t) {
            return t === 1 ? 1 : 1 - Math.pow(2, -10 * t);
        }

        function animateCounter(el, duration) {
            const target = parseInt(el.dataset.target, 10);
            const suffix = el.dataset.suffix || '';
            const start = performance.now();

            function update(now) {
                const elapsed = now - start;
                const progress = Math.min(elapsed / duration, 1);
                const easedProgress = easeOutExpo(progress);
                const current = Math.round(easedProgress * target);

                el.textContent = current + suffix;

                if (progress < 1) {
                    requestAnimationFrame(update);
                }
            }
            requestAnimationFrame(update);
        }

        function revealCards() {
            statCards.forEach((card, i) => {
                setTimeout(() => {
                    card.style.transition = 'opacity 0.7s ease, transform 0.7s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, i * 200);
            });
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !animated) {
                    animated = true;
                    revealCards();
                    // Start counters after the first card begins fading in
                    setTimeout(() => {
                        counters.forEach(counter => animateCounter(counter, 5000));
                    }, 300);
                    observer.unobserve(statsSection);
                }
            });
        }, { threshold: 0.3 });

        observer.observe(statsSection);
    }

});
