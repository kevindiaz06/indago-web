{{-- ============================================================
     Componente: Footer público – Indago Constructora
     Uso: <x-public.footer />
     ============================================================ --}}

{{-- Toast Newsletter (fuera del footer para evitar overflow-hidden) --}}
<div id="newsletter-toast"
     class="fixed top-20 right-6 z-[9999] max-w-sm w-full pointer-events-none opacity-0 translate-y-4 transition-all duration-500 ease-out">
    <div id="newsletter-toast-inner"
         class="flex items-start gap-4 rounded-2xl border p-4 shadow-2xl backdrop-blur-md">
        <span id="newsletter-toast-icon" class="material-symbols-outlined text-2xl flex-shrink-0 mt-0.5"></span>
        <div>
            <p id="newsletter-toast-title" class="text-sm font-bold mb-0.5"></p>
            <p id="newsletter-toast-msg"   class="text-xs opacity-80"></p>
        </div>
    </div>
</div>

<footer class="bg-secondary text-white pt-12 pb-6 border-t border-neutral-800 relative overflow-hidden">
    {{-- Decorative Background Elements --}}
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary/0 via-primary to-primary/0 opacity-50"></div>
    <div class="absolute -top-24 -right-24 w-64 h-64 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">

        {{-- Newsletter Horizontal Banner --}}
        <div class="mb-12 rounded-2xl border border-white/10 bg-white/5 p-6 md:p-8 backdrop-blur-md">
            <div class="flex flex-col my-auto md:flex-row items-center justify-between gap-6 md:gap-8">
                <div class="md:w-5/12 w-full">
                    <h3 class="text-xl font-bold text-white mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-xl">forward_to_inbox</span> Newsletter
                    </h3>
                    <p class="text-neutral-400 text-sm">
                        Suscríbete y recibe las últimas novedades de nuestros proyectos y blogs.
                    </p>
                </div>
                <div class="md:w-7/12 w-full">
                    <form id="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST" novalidate class="flex flex-col sm:flex-row gap-3 w-full">
                        @csrf
                        <div class="relative flex-grow group">
                            <input id="newsletter-email" type="email" name="email"
                                   placeholder="Tu correo electrónico"
                                   class="w-full rounded-xl border border-white/10 bg-white/5 py-3 pl-4 pr-10 text-sm text-white placeholder-neutral-500 transition-all duration-300 focus:border-primary/50 focus:bg-white/10 focus:outline-none focus:ring-2 focus:ring-primary/20"
                                   required autocomplete="email">
                            <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-neutral-500 text-[18px] group-focus-within:text-primary transition-colors">mail</span>
                        </div>
                        <button id="newsletter-btn" type="submit"
                                class="group relative sm:w-auto w-full shrink-0 overflow-hidden rounded-xl bg-gradient-to-r from-primary to-orange-500 px-6 py-3 text-sm font-bold text-white shadow-lg shadow-primary/20 transition-all duration-300 hover:shadow-xl hover:shadow-primary/40 hover:scale-[1.02] disabled:opacity-60 disabled:cursor-not-allowed disabled:scale-100">
                            <span id="newsletter-btn-text" class="relative z-10 flex items-center justify-center gap-2">
                                Suscribirme
                                <span class="material-symbols-outlined text-[18px] transition-transform group-hover:translate-x-1">arrow_forward</span>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-orange-500 to-primary opacity-0 transition-opacity group-hover:opacity-100"></div>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <script>
        (function () {
            const form     = document.getElementById('newsletter-form');
            const emailIn  = document.getElementById('newsletter-email');
            const btn      = document.getElementById('newsletter-btn');
            const btnText  = document.getElementById('newsletter-btn-text');

            // ── Toast helpers ──────────────────────────────────────────────
            const toast      = document.getElementById('newsletter-toast');
            const toastInner = document.getElementById('newsletter-toast-inner');
            const toastIcon  = document.getElementById('newsletter-toast-icon');
            const toastTitle = document.getElementById('newsletter-toast-title');
            const toastMsg   = document.getElementById('newsletter-toast-msg');
            let toastTimer;

            function showToast(type, title, message) {
                clearTimeout(toastTimer);

                const isSuccess = type === 'success';
                toastInner.className = isSuccess
                    ? 'flex items-start gap-4 rounded-2xl border p-4 shadow-2xl backdrop-blur-md bg-green-950/80 border-green-500/40 text-green-100'
                    : 'flex items-start gap-4 rounded-2xl border p-4 shadow-2xl backdrop-blur-md bg-red-950/80 border-red-500/40 text-red-100';

                toastIcon.textContent  = isSuccess ? 'check_circle' : 'error';
                toastIcon.className    = 'material-symbols-outlined text-2xl flex-shrink-0 mt-0.5 ' + (isSuccess ? 'text-green-400' : 'text-red-400');
                toastTitle.textContent = title;
                toastMsg.textContent   = message;

                toast.classList.remove('opacity-0', 'translate-y-4');
                toast.classList.add('opacity-100', 'translate-y-0', 'pointer-events-auto');

                toastTimer = setTimeout(() => {
                    toast.classList.add('opacity-0', 'translate-y-4');
                    toast.classList.remove('opacity-100', 'translate-y-0', 'pointer-events-auto');
                }, 5000);
            }

            // ── Estado del botón ───────────────────────────────────────────
            function setLoading(loading) {
                btn.disabled = loading;
                btnText.innerHTML = loading
                    ? '<svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path></svg> Enviando...'
                    : '<span class="material-symbols-outlined text-[18px]">arrow_forward</span> Suscribirme';
            }

            // ── Submit ─────────────────────────────────────────────────────
            form.addEventListener('submit', async function (e) {
                e.preventDefault();

                const email = emailIn.value.trim();
                if (!email) return;

                setLoading(true);

                try {
                    // Use the hidden _token input inside the form – always matches the current session
                    const csrfToken = form.querySelector('input[name="_token"]')?.value
                                   || document.querySelector('meta[name="csrf-token"]')?.content
                                   || '';

                    const res  = await fetch('/newsletter/subscribe', {
                        method:  'POST',
                        headers: {
                            'Content-Type':  'application/json',
                            'Accept':        'application/json',
                            'X-CSRF-TOKEN':  csrfToken,
                            'X-Requested-With': 'XMLHttpRequest',
                        },
                        body: JSON.stringify({ email }),
                    });

                    const data = await res.json();

                    if (data.success) {
                        showToast('success', '¡Suscripción exitosa!', data.message);
                        emailIn.value = '';
                        // Desactivar permanentemente el formulario en esta sesión
                        btn.disabled  = true;
                        emailIn.disabled = true;
                        btnText.innerHTML = '<span class="material-symbols-outlined text-[18px]">check_circle</span> ¡Suscrito!';
                    } else {
                        showToast('error', 'No se pudo suscribir', data.message);
                        setLoading(false);
                    }
                } catch (err) {
                    showToast('error', 'Error de conexión', 'Por favor inténtalo de nuevo.');
                    setLoading(false);
                }
            });
        })();
        </script>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">
            
            {{-- Columna 1: Logo y Descripción --}}
            <div class="lg:col-span-1">
                <a class="flex items-center gap-3 mb-6 group inline-flex" href="{{ route('inicio') }}">
                    <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-lg bg-primary p-1.5 transition-transform group-hover:scale-105">
                        <img src="{{ asset('img/indagoblanco1.png') }}" alt="Indago" class="h-full w-auto object-contain">
                    </div>
                    <span class="text-xl font-black tracking-tight text-white flex-shrink-0">
                        INDAGO<span class="text-primary">CONSTRUCTORA</span>
                    </span>
                </a>
                <p class="text-neutral-400 text-sm leading-relaxed mb-6">
                    Construimos el futuro con innovación, calidad y compromiso en cada proyecto. Tu visión es nuestra base estructural.
                </p>
            </div>

            {{-- Columna 2: Enlaces Directos --}}
            <div>
                <h3 class="text-lg font-bold text-white mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-sm">link</span> Enlaces Rápidos
                </h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('inicio') }}" class="text-neutral-400 hover:text-primary hover:translate-x-1 transition-all flex items-center gap-2 text-sm inline-flex">
                            <span class="material-symbols-outlined text-[16px]">chevron_right</span> Inicio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('nosotros') }}" class="text-neutral-400 hover:text-primary hover:translate-x-1 transition-all flex items-center gap-2 text-sm inline-flex">
                            <span class="material-symbols-outlined text-[16px]">chevron_right</span> Nosotros
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('servicios') }}" class="text-neutral-400 hover:text-primary hover:translate-x-1 transition-all flex items-center gap-2 text-sm inline-flex">
                            <span class="material-symbols-outlined text-[16px]">chevron_right</span> Servicios
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('proyectos') }}" class="text-neutral-400 hover:text-primary hover:translate-x-1 transition-all flex items-center gap-2 text-sm inline-flex">
                            <span class="material-symbols-outlined text-[16px]">chevron_right</span> Proyectos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}" class="text-neutral-400 hover:text-primary hover:translate-x-1 transition-all flex items-center gap-2 text-sm inline-flex">
                            <span class="material-symbols-outlined text-[16px]">chevron_right</span> Blog
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Columna 3: Contacto --}}
            <div>
                <h3 class="text-lg font-bold text-white mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-sm">contact_support</span> Info de Contacto
                </h3>
                <ul class="space-y-4 text-sm text-neutral-400">
                    <li class="flex items-start gap-3">
                        <div class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded bg-white/5 text-primary">
                            <span class="material-symbols-outlined text-[20px]">location_on</span>
                        </div>
                        <span class="mt-1">Av. Principal 123, Ciudad<br>Estado, C.P. 12345</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded bg-white/5 text-primary">
                            <span class="material-symbols-outlined text-[20px]">phone</span>
                        </div>
                        <a href="tel:+521234567890" class="hover:text-primary transition-colors">+52 123 456 7890</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded bg-white/5 text-primary">
                            <span class="material-symbols-outlined text-[20px]">mail</span>
                        </div>
                        <a href="mailto:contacto@indago.com" class="hover:text-primary transition-colors">contacto@indago.com</a>
                    </li>
                </ul>
            </div>

            {{-- Columna 4: Redes Sociales --}}
            <div>
                <h3 class="text-lg font-bold text-white mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-sm">share</span> Síguenos
                </h3>
                <p class="text-neutral-400 text-sm mb-6">
                    Mantenemos una comunicación activa. Síguenos en nuestras redes.
                </p>
                <div class="flex gap-3">
                    {{-- Facebook --}}
                    <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="flex h-10 w-10 items-center justify-center rounded-lg bg-white/5 hover:bg-primary hover:text-secondary hover:-translate-y-1 text-neutral-400 transition-all shadow-lg shadow-transparent hover:shadow-primary/30">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    {{-- Instagram --}}
                    <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="flex h-10 w-10 items-center justify-center rounded-lg bg-white/5 hover:bg-primary hover:text-secondary hover:-translate-y-1 text-neutral-400 transition-all shadow-lg shadow-transparent hover:shadow-primary/30">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    {{-- LinkedIn --}}
                    <a href="#" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="flex h-10 w-10 items-center justify-center rounded-lg bg-white/5 hover:bg-primary hover:text-secondary hover:-translate-y-1 text-neutral-400 transition-all shadow-lg shadow-transparent hover:shadow-primary/30">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    {{-- YouTube --}}
                    <a href="#" target="_blank" rel="noopener noreferrer" aria-label="YouTube" class="flex h-10 w-10 items-center justify-center rounded-lg bg-white/5 hover:bg-primary hover:text-secondary hover:-translate-y-1 text-neutral-400 transition-all shadow-lg shadow-transparent hover:shadow-primary/30">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                </div>
            </div>
            
        </div>

        {{-- Bottom Bar --}}
        <div class="border-t border-white/10 pt-6 pb-6 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-neutral-500">
            <p>© {{ date('Y') }} Indago Constructora. Todos los derechos reservados.</p>
            <div class="flex flex-wrap justify-center gap-x-6 gap-y-2">
                <a class="hover:text-primary hover:-translate-y-0.5 transition-transform" href="{{ route('privacidad') }}">Aviso de Privacidad</a>
                <a class="hover:text-primary hover:-translate-y-0.5 transition-transform" href="{{ route('terminos') }}">Términos y Condiciones</a>
            </div>
        </div>
    </div>
</footer>
