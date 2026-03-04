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

    // ─── Scroll-to-Top Button ───────────────────────────────────
    const scrollToTopBtn = document.getElementById('scroll-to-top');

    if (scrollToTopBtn) {
        const SCROLL_THRESHOLD = 400; // px from top to show button
        let ticking = false;

        function toggleScrollBtn() {
            if (window.scrollY > SCROLL_THRESHOLD) {
                scrollToTopBtn.classList.add('visible');
            } else {
                scrollToTopBtn.classList.remove('visible');
            }
            ticking = false;
        }

        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(toggleScrollBtn);
                ticking = true;
            }
        }, { passive: true });

        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ─── Proyectos · Filtros + Modal ─────────
    const filterButtons = document.querySelectorAll('.filter-btn');
    const proyectoCards = document.querySelectorAll('.proyecto-card');
    const emptyState = document.getElementById('empty-state');

    if (filterButtons.length && proyectoCards.length) {
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                // estilos activos
                filterButtons.forEach(b => {
                    b.classList.remove('active-filter', 'bg-secondary', 'text-white', 'border-secondary');
                    b.classList.add('border-neutral-200', 'text-neutral-600', 'hover:border-primary', 'hover:text-primary');
                });
                btn.classList.add('active-filter', 'bg-secondary', 'text-white', 'border-secondary');
                btn.classList.remove('border-neutral-200', 'text-neutral-600');

                const filter = btn.dataset.filter;
                let visible = 0;

                proyectoCards.forEach(card => {
                    const tipo = card.dataset.tipo || '';
                    const estado = card.dataset.estado || '';
                    const match = filter === 'all' || tipo.includes(filter) || estado === filter;
                    card.style.display = match ? '' : 'none';
                    if (match) visible++;
                });

                if (emptyState) emptyState.classList.toggle('hidden', visible > 0);
            });
        });

        // Inicializar estilos del botón "Todos"
        const allBtn = document.querySelector('[data-filter="all"]');
        if (allBtn) {
            allBtn.classList.add('bg-secondary', 'text-white', 'border-secondary');
        }
        document.querySelectorAll('.filter-btn:not([data-filter="all"])').forEach(b => {
            b.classList.add('border-neutral-200', 'text-neutral-600', 'hover:border-primary', 'hover:text-primary');
        });
    }

    // ── Modal de Proyectos ──────────────────────────────────────
    const modalOverlay = document.getElementById('modal-overlay');
    const modalCloseBtn = document.getElementById('modal-close');

    if (modalOverlay && proyectoCards.length) {
        proyectoCards.forEach(card => {
            card.addEventListener('click', () => {
                const id = card.dataset.id;
                // ocultar todos los contenidos del modal
                document.querySelectorAll('.modal-content').forEach(mc => mc.classList.add('hidden'));
                // mostrar el correcto
                const target = document.getElementById('modal-' + id);
                if (target) target.classList.remove('hidden');
                // mostrar overlay
                modalOverlay.classList.remove('hidden');
                modalOverlay.classList.add('flex');
                document.body.style.overflow = 'hidden';
            });
        });

        const closeModal = () => {
            modalOverlay.classList.add('hidden');
            modalOverlay.classList.remove('flex');
            document.body.style.overflow = '';
        };

        if (modalCloseBtn) modalCloseBtn.addEventListener('click', closeModal);
        modalOverlay.addEventListener('click', e => { if (e.target === modalOverlay) closeModal(); });
        document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
    }

});
