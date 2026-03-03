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

    // ─── Infra Stats · Animated Counters (Nosotros) ────────────
    const infraSection = document.getElementById('infra-stats');

    if (infraSection) {
        const infraCounters = infraSection.querySelectorAll('.infra-counter');
        const infraCards = infraSection.querySelectorAll('.infra-stat-card');
        let infraAnimated = false;

        function easeOutExpoInfra(t) {
            return t === 1 ? 1 : 1 - Math.pow(2, -10 * t);
        }

        function animateInfraCounter(el, duration) {
            const target = parseInt(el.dataset.target, 10);
            const prefix = el.dataset.prefix || '';
            const suffix = el.dataset.suffix || '';
            const start = performance.now();

            function update(now) {
                const elapsed = now - start;
                const progress = Math.min(elapsed / duration, 1);
                const eased = easeOutExpoInfra(progress);
                const current = Math.round(eased * target);

                el.textContent = prefix + current + suffix;

                if (progress < 1) {
                    requestAnimationFrame(update);
                }
            }
            requestAnimationFrame(update);
        }

        function revealInfraCards() {
            infraCards.forEach((card, i) => {
                setTimeout(() => {
                    card.style.transition = 'opacity 0.7s ease, transform 0.7s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, i * 200);
            });
        }

        const infraObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !infraAnimated) {
                    infraAnimated = true;
                    revealInfraCards();
                    setTimeout(() => {
                        infraCounters.forEach(c => animateInfraCounter(c, 5000));
                    }, 300);
                    infraObserver.unobserve(infraSection);
                }
            });
        }, { threshold: 0.3 });

        infraObserver.observe(infraSection);
    }

    // ─── Misión & Visión · 3D Tilt + Scroll Reveal ─────────────
    // 3D tilt on mouse move
    document.querySelectorAll('[data-mv-tilt]').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = ((y - centerY) / centerY) * -8;  // max 8deg
            const rotateY = ((x - centerX) / centerX) * 8;

            card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'rotateX(0) rotateY(0)';
        });
    });

    // Scroll reveal for mv-cards
    const mvCards = document.getElementById('mv-cards');
    if (mvCards) {
        const mvItems = mvCards.querySelectorAll('.mv-reveal');
        const mvObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    mvItems.forEach(item => item.classList.add('mv-visible'));
                    mvObserver.unobserve(mvCards);
                }
            });
        }, { threshold: 0.2 });
        mvObserver.observe(mvCards);
    }

    // ─── Hero Stat Bar · Bounce-in + Counter ───────────────────
    const heroStatBar = document.getElementById('hero-stat-bar');

    if (heroStatBar) {
        const heroCards = heroStatBar.querySelectorAll('.hero-stat-card');
        const heroCounters = heroStatBar.querySelectorAll('.hero-stat-counter');
        let heroAnimated = false;

        function easeOutExpoHero(t) {
            return t === 1 ? 1 : 1 - Math.pow(2, -10 * t);
        }

        function animateHeroCounter(el, duration) {
            const target = parseInt(el.dataset.target, 10);
            const prefix = el.dataset.prefix || '';
            const suffix = el.dataset.suffix || '';
            const start = performance.now();

            function update(now) {
                const elapsed = now - start;
                const progress = Math.min(elapsed / duration, 1);
                const eased = easeOutExpoHero(progress);
                const current = Math.round(eased * target);

                el.textContent = prefix + current + suffix;

                if (progress < 1) {
                    requestAnimationFrame(update);
                }
            }
            requestAnimationFrame(update);
        }

        const heroObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !heroAnimated) {
                    heroAnimated = true;

                    // Staggered bounce-in for each card
                    heroCards.forEach((card, i) => {
                        setTimeout(() => {
                            card.style.animation = `heroStatBounceIn 0.6s ease forwards`;
                        }, i * 150);
                    });

                    // Start counters after first card begins animating
                    setTimeout(() => {
                        heroCounters.forEach(c => animateHeroCounter(c, 3000));
                    }, 200);

                    heroObserver.unobserve(heroStatBar);
                }
            });
        }, { threshold: 0.3 });

        heroObserver.observe(heroStatBar);
    }

});
