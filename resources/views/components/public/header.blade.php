{{-- ============================================================
     Componente: Header público – Indago Constructora
     Uso: <x-public.header />
     ============================================================ --}}
<header class="fixed top-0 z-50 w-full bg-white/95 backdrop-blur-sm border-b border-neutral-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">

            {{-- Logo --}}
            <a class="flex items-center gap-3" href="{{ route('inicio') }}">
                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-secondary text-primary">
                    <span class="material-symbols-outlined text-3xl">apartment</span>
                </div>
                <span class="text-xl font-black tracking-tight text-secondary">
                    INDAGO<span class="text-primary">CONSTRUCTORA</span>
                </span>
            </a>

            {{-- Navigation (desktop) --}}
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-sm font-semibold transition-colors py-1 border-b-2 {{ request()->routeIs('inicio') ? 'text-primary border-primary' : 'text-neutral-800 border-transparent hover:text-primary' }}" href="{{ route('inicio') }}">Inicio</a>
                <a class="text-sm font-semibold transition-colors py-1 border-b-2 {{ request()->routeIs('nosotros') ? 'text-primary border-primary' : 'text-neutral-800 border-transparent hover:text-primary' }}" href="{{ route('nosotros') }}">Nosotros</a>
                <a class="text-sm font-semibold transition-colors py-1 border-b-2 {{ request()->routeIs('servicios') ? 'text-primary border-primary' : 'text-neutral-800 border-transparent hover:text-primary' }}" href="{{ route('servicios') }}">Servicios</a>
                <a class="text-sm font-semibold transition-colors py-1 border-b-2 {{ request()->routeIs('proyectos') ? 'text-primary border-primary' : 'text-neutral-800 border-transparent hover:text-primary' }}" href="{{ route('proyectos') }}">Proyectos</a>
                <a class="text-sm font-semibold transition-colors py-1 border-b-2 {{ request()->routeIs('blog') ? 'text-primary border-primary' : 'text-neutral-800 border-transparent hover:text-primary' }}" href="{{ route('blog') }}">Blog</a>
            </nav>

            {{-- Actions --}}
            <div class="flex items-center gap-3">

                {{-- Botón Contacto: solo visible en desktop --}}
                <a href="{{ route('inicio') }}#contacto" class="hidden md:flex items-center gap-2 rounded-lg bg-primary px-5 py-2.5 text-sm font-bold text-white shadow-lg shadow-primary/30 hover:bg-orange-500 transition-all">
                    <span>Contacto</span>
                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                </a>

                {{-- Botón hamburguesa: solo visible en móvil --}}
                <button id="mobile-menu-btn" class="md:hidden flex items-center justify-center rounded-lg p-2 text-secondary hover:bg-neutral-100 transition-colors" aria-label="Abrir menú">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>

        {{-- Mobile Navigation (aparece al hacer clic en hamburguesa) --}}
        <nav id="mobile-menu" class="hidden border-t border-neutral-100 pb-4 pt-3 flex-col gap-1">
            <a class="block rounded-lg px-3 py-2.5 text-sm font-semibold transition-colors {{ request()->routeIs('inicio') ? 'text-primary bg-primary/10' : 'text-neutral-800 hover:bg-neutral-100 hover:text-primary' }}" href="{{ route('inicio') }}">Inicio</a>
            <a class="block rounded-lg px-3 py-2.5 text-sm font-semibold transition-colors {{ request()->routeIs('nosotros') ? 'text-primary bg-primary/10' : 'text-neutral-800 hover:bg-neutral-100 hover:text-primary' }}" href="{{ route('nosotros') }}">Nosotros</a>
            <a class="block rounded-lg px-3 py-2.5 text-sm font-semibold transition-colors {{ request()->routeIs('servicios') ? 'text-primary bg-primary/10' : 'text-neutral-800 hover:bg-neutral-100 hover:text-primary' }}" href="{{ route('servicios') }}">Servicios</a>
            <a class="block rounded-lg px-3 py-2.5 text-sm font-semibold transition-colors {{ request()->routeIs('proyectos') ? 'text-primary bg-primary/10' : 'text-neutral-800 hover:bg-neutral-100 hover:text-primary' }}" href="{{ route('proyectos') }}">Proyectos</a>
            <a class="block rounded-lg px-3 py-2.5 text-sm font-semibold transition-colors {{ request()->routeIs('blog') ? 'text-primary bg-primary/10' : 'text-neutral-800 hover:bg-neutral-100 hover:text-primary' }}" href="{{ route('blog') }}">Blog</a>

            {{-- Botón Contacto dentro del menú móvil --}}
            <div class="mt-3 px-3">
                <a href="{{ route('inicio') }}#contacto" class="flex w-full items-center justify-center gap-2 rounded-lg bg-primary px-5 py-3 text-sm font-bold text-white shadow-lg shadow-primary/30 hover:bg-orange-500 transition-all">
                    <span>Contacto</span>
                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                </a>
            </div>
        </nav>
    </div>
</header>
