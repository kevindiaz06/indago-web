<x-layouts.public title="Inicio – Indago Constructora | Ingeniería & Arquitectura">

    {{-- ========================================================
         Hero Section
         ======================================================== --}}
    <section class="relative h-[85vh] w-full overflow-hidden bg-secondary">

        {{-- Background Image with Overlay --}}
        <div class="absolute inset-0 z-0">
            <img
                alt="Sitio de construcción en República Dominicana"
                class="h-full w-full object-cover opacity-60"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3Y18_Q3MLN_kagSJUirckmWlWltF8eYFzHS6qa5byMJK7sG6tRXaPJnCE6zzi0WrdR2P4NTctGRdSEBDl4xHtqHMcBs5hKl_09eFua_7lsP8hwp9Q6DLoprrmxUrtj7mdATuEXWOZLQtwiidcPJmMd1QfMsBjTnqLTz1rgBA_IxtIjy96iZ6vfoxUyHrZn0eOqfwPwqwVt6FS64upYL-dR90RU2dEj9HKNgDZQBDxrAu04JUo7sJc8qLbwqXH4Cp5q36IMgrAwgM"
            />
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/90 via-secondary/50 to-transparent"></div>
        </div>

        {{-- Hero Content --}}
        <div class="relative z-10 mx-auto flex h-full max-w-7xl flex-col justify-center px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <div class="mb-4 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-1.5 backdrop-blur-md">
                    <span class="flex h-2 w-2 rounded-full bg-primary"></span>
                    <span class="text-xs font-medium text-white uppercase tracking-wider">Ingeniería &amp; Arquitectura · Santo Domingo, RD</span>
                </div>

                <h1 class="font-display text-5xl font-black leading-[1.1] text-white md:text-7xl tracking-tight">
                    Construimos el <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-yellow-200">Futuro de RD</span>
                </h1>

                <p class="mt-6 text-lg text-neutral-200 max-w-xl leading-relaxed">
                    Somos una empresa dominicana especializada en ingeniería civil y arquitectura. Diseñamos y ejecutamos proyectos residenciales, comerciales e industriales con los más altos estándares de calidad.
                </p>

                <div class="mt-10 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('proyectos') }}" class="inline-flex h-14 items-center justify-center rounded-lg bg-primary px-8 text-base font-bold text-white transition-transform hover:scale-105 shadow-xl shadow-primary/20">
                        Ver Nuestros Proyectos
                    </a>
                    <a href="{{ route('nosotros') }}" class="inline-flex h-14 items-center justify-center rounded-lg border border-white/30 bg-white/5 px-8 text-base font-bold text-white backdrop-blur-sm transition-colors hover:bg-white/10">
                        Conocer la Empresa
                        <span class="material-symbols-outlined ml-2">arrow_right_alt</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================================
         Trust Stats (Interactive Counters)
         ======================================================== --}}
    <section id="trust-stats" class="bg-secondary py-12 border-t border-white/10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div class="stat-card flex flex-col items-center justify-center border-r border-white/10 text-center md:items-start md:text-left last:border-0"
                     style="opacity: 0; transform: translateY(20px);">
                    <span class="text-5xl font-black text-primary tracking-tighter">
                        <span class="stat-prefix">+</span><span class="counter" data-target="15">0</span>
                    </span>
                    <span class="mt-2 text-sm font-medium uppercase tracking-widest text-neutral-400">Años de Experiencia</span>
                </div>
                <div class="stat-card flex flex-col items-center justify-center border-r border-white/10 text-center md:items-start md:text-left last:border-0"
                     style="opacity: 0; transform: translateY(20px);">
                    <span class="text-5xl font-black text-primary tracking-tighter">
                        <span class="stat-prefix">+</span><span class="counter" data-target="200">0</span>
                    </span>
                    <span class="mt-2 text-sm font-medium uppercase tracking-widest text-neutral-400">Proyectos Completados</span>
                </div>
                <div class="stat-card flex flex-col items-center justify-center text-center md:items-start md:text-left"
                     style="opacity: 0; transform: translateY(20px);">
                    <span class="text-5xl font-black text-primary tracking-tighter">
                        <span class="counter" data-target="100" data-suffix="%">0</span><span class="stat-suffix"></span>
                    </span>
                    <span class="mt-2 text-sm font-medium uppercase tracking-widest text-neutral-400">Clientes Satisfechos</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================================
         Services Section
         ======================================================== --}}
    <section class="py-24 bg-background-light">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-16 md:flex md:items-end md:justify-between">
                <div class="max-w-xl">
                    <h2 class="text-sm font-bold uppercase tracking-widest text-primary mb-2">Lo Que Hacemos</h2>
                    <h3 class="font-display text-4xl font-bold text-secondary tracking-tight">Soluciones integrales de ingeniería y arquitectura</h3>
                </div>
                <a class="hidden md:flex items-center gap-2 font-bold text-secondary hover:text-primary transition-colors group" href="{{ route('servicios') }}">
                    Ver todos los servicios
                    <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_right_alt</span>
                </a>
            </div>

            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">

                {{-- Service 1 --}}
                <div class="group relative overflow-hidden rounded-xl bg-white p-8 shadow-sm ring-1 ring-neutral-100 transition-all hover:shadow-xl hover:-translate-y-1" onclick="window.location.href='{{ route('servicios') }}'">
                    <div class="mb-6 inline-flex h-14 w-14 items-center justify-center rounded-lg bg-neutral-100 text-secondary transition-colors group-hover:bg-primary group-hover:text-white">
                        <span class="material-symbols-outlined text-3xl">apartment</span>
                    </div>
                    <h4 class="mb-3 text-xl font-bold text-secondary">Arquitectura</h4>
                    <p class="text-neutral-600 leading-relaxed">Diseño arquitectónico de espacios residenciales, comerciales e institucionales adaptados a tus necesidades.</p>
                    <div class="absolute bottom-0 left-0 h-1 w-0 bg-primary transition-all duration-300 group-hover:w-full"></div>
                </div>

                {{-- Service 2 --}}
                <div class="group relative overflow-hidden rounded-xl bg-white p-8 shadow-sm ring-1 ring-neutral-100 transition-all hover:shadow-xl hover:-translate-y-1" onclick="window.location.href='{{ route('servicios') }}'">
                    <div class="mb-6 inline-flex h-14 w-14 items-center justify-center rounded-lg bg-neutral-100 text-secondary transition-colors group-hover:bg-primary group-hover:text-white">
                        <span class="material-symbols-outlined text-3xl">engineering</span>
                    </div>
                    <h4 class="mb-3 text-xl font-bold text-secondary">Ingeniería Civil</h4>
                    <p class="text-neutral-600 leading-relaxed">Cálculo estructural, supervisión de obras y soluciones de ingeniería civil para proyectos de toda escala.</p>
                    <div class="absolute bottom-0 left-0 h-1 w-0 bg-primary transition-all duration-300 group-hover:w-full"></div>
                </div>

                {{-- Service 3 --}}
                <div class="group relative overflow-hidden rounded-xl bg-white p-8 shadow-sm ring-1 ring-neutral-100 transition-all hover:shadow-xl hover:-translate-y-1" onclick="window.location.href='{{ route('servicios') }}'">
                    <div class="mb-6 inline-flex h-14 w-14 items-center justify-center rounded-lg bg-neutral-100 text-secondary transition-colors group-hover:bg-primary group-hover:text-white">
                        <span class="material-symbols-outlined text-3xl">construction</span>
                    </div>
                    <h4 class="mb-3 text-xl font-bold text-secondary">Construcción</h4>
                    <p class="text-neutral-600 leading-relaxed">Ejecución de obras con los más altos estándares de calidad, cumplimiento de plazos y control de costos.</p>
                    <div class="absolute bottom-0 left-0 h-1 w-0 bg-primary transition-all duration-300 group-hover:w-full"></div>
                </div>

                {{-- Service 4 --}}
                <div class="group relative overflow-hidden rounded-xl bg-white p-8 shadow-sm ring-1 ring-neutral-100 transition-all hover:shadow-xl hover:-translate-y-1" onclick="window.location.href='{{ route('servicios') }}'">
                    <div class="mb-6 inline-flex h-14 w-14 items-center justify-center rounded-lg bg-neutral-100 text-secondary transition-colors group-hover:bg-primary group-hover:text-white">
                        <span class="material-symbols-outlined text-3xl">draw</span>
                    </div>
                    <h4 class="mb-3 text-xl font-bold text-secondary">Diseño Interior</h4>
                    <p class="text-neutral-600 leading-relaxed">Planificación y diseño de interiores que combinan funcionalidad, estética y el estilo de vida dominicano.</p>
                    <div class="absolute bottom-0 left-0 h-1 w-0 bg-primary transition-all duration-300 group-hover:w-full"></div>
                </div>

            </div>
        </div>
    </section>

    {{-- ========================================================
         Clients / Partners Section
         ======================================================== --}}
    <section class="py-16 bg-white overflow-hidden border-y border-neutral-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mb-12 text-center">
            <h2 class="text-sm font-bold uppercase tracking-widest text-primary mb-2">Alianzas y Clientes</h2>
            <h3 class="font-display text-3xl font-bold text-secondary tracking-tight">Empresas que confían en nosotros</h3>
            <p class="mt-4 text-neutral-500 max-w-2xl mx-auto text-lg">Trabajamos con las marcas e instituciones más prestigiosas, manteniendo los más altos estándares de calidad.</p>
        </div>

        {{-- Infinite Scroll Carousel --}}
        <div class="relative flex w-full overflow-hidden group">
            {{-- Fade effects on edges --}}
            <div class="absolute left-0 top-0 z-10 h-full w-24 bg-gradient-to-r from-white to-transparent md:w-32 pointer-events-none"></div>
            <div class="absolute right-0 top-0 z-10 h-full w-24 bg-gradient-to-l from-white to-transparent md:w-32 pointer-events-none"></div>

            {{-- First set of logos --}}
            <div class="flex shrink-0 animate-marquee items-center justify-around gap-12 sm:gap-20 px-8 group-hover:[animation-play-state:paused] min-w-full">
                {{-- REEMPLAZAR LOS SRC CON LAS RUTAS DE TUS LOGOS --}}
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Cliente" class="h-10 w-auto object-contain grayscale opacity-50 transition-all duration-300 hover:grayscale-0 hover:opacity-100 hover:scale-110 cursor-pointer mx-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="Cliente" class="h-10 w-auto object-contain grayscale opacity-50 transition-all duration-300 hover:grayscale-0 hover:opacity-100 hover:scale-110 cursor-pointer mx-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Cliente" class="h-9 w-auto object-contain grayscale opacity-50 transition-all duration-300 hover:grayscale-0 hover:opacity-100 hover:scale-110 cursor-pointer mx-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Cliente" class="h-8 w-auto object-contain grayscale opacity-50 transition-all duration-300 hover:grayscale-0 hover:opacity-100 hover:scale-110 cursor-pointer mx-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Cisco_logo_blue_2016.svg" alt="Cliente" class="h-10 w-auto object-contain grayscale opacity-50 transition-all duration-300 hover:grayscale-0 hover:opacity-100 hover:scale-110 cursor-pointer mx-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Samsung_lettermark.svg" alt="Cliente" class="h-8 w-auto object-contain grayscale opacity-50 transition-all duration-300 hover:grayscale-0 hover:opacity-100 hover:scale-110 cursor-pointer mx-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png" alt="Cliente" class="h-12 w-auto object-contain grayscale opacity-50 transition-all duration-300 hover:grayscale-0 hover:opacity-100 hover:scale-110 cursor-pointer mx-2">
            </div>
            
            {{-- Second set (Duplicate) for infinite loop --}}
            <div class="flex shrink-0 animate-marquee items-center justify-around gap-12 sm:gap-20 px-8 group-hover:[animation-play-state:paused] min-w-full" aria-hidden="true">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Cliente" class="h-10 w-auto object-contain grayscale opacity-50 transition-all duration-300 hover:grayscale-0 hover:opacity-100 hover:scale-110 cursor-pointer mx-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="Cliente" class="h-10 w-auto object-contain grayscale opacity-50 transition-all duration-300 hover:grayscale-0 hover:opacity-100 hover:scale-110 cursor-pointer mx-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Cliente" class="h-9 w-auto object-contain grayscale opacity-50 transition-all duration-300 hover:grayscale-0 hover:opacity-100 hover:scale-110 cursor-pointer mx-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Cliente" class="h-8 w-auto object-contain grayscale opacity-50 transition-all duration-300 hover:grayscale-0 hover:opacity-100 hover:scale-110 cursor-pointer mx-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Cisco_logo_blue_2016.svg" alt="Cliente" class="h-10 w-auto object-contain grayscale opacity-50 transition-all duration-300 hover:grayscale-0 hover:opacity-100 hover:scale-110 cursor-pointer mx-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Samsung_lettermark.svg" alt="Cliente" class="h-8 w-auto object-contain grayscale opacity-50 transition-all duration-300 hover:grayscale-0 hover:opacity-100 hover:scale-110 cursor-pointer mx-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png" alt="Cliente" class="h-12 w-auto object-contain grayscale opacity-50 transition-all duration-300 hover:grayscale-0 hover:opacity-100 hover:scale-110 cursor-pointer mx-2">
            </div>
        </div>
        

    </section>

    {{-- ========================================================
         Featured Projects
         ======================================================== --}}
    <section class="py-24 bg-neutral-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="text-3xl font-bold text-secondary md:text-4xl">Proyectos Destacados</h2>
                <p class="mt-4 text-neutral-600">Nuestra huella en las obras más emblemáticas de la República Dominicana.</p>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                @forelse($proyectosDestacados as $p)
                {{-- Dynamic Project Card --}}
                <div class="group relative h-96 cursor-pointer overflow-hidden rounded-xl {{ $loop->index === 2 ? 'lg:hidden xl:block' : '' }}" onclick="window.location.href='{{ route('proyectos') }}'">
                    @if($p->img)
                        <img
                            alt="{{ $p->titulo }}"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110"
                            src="{{ asset('storage/' . $p->img) }}"
                        />
                    @else
                        <div class="h-full w-full bg-neutral-200 flex items-center justify-center transition-transform duration-500 group-hover:scale-110">
                            <span class="material-symbols-outlined text-4xl text-neutral-400">image</span>
                        </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent p-8 flex flex-col justify-end">
                        <span class="text-sm font-bold text-primary mb-2 capitalize">{{ $p->tipo }}</span>
                        <h3 class="text-2xl font-bold text-white">{{ $p->titulo }}</h3>
                        <p class="mt-2 text-sm text-neutral-300 opacity-0 transform translate-y-4 transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0 line-clamp-2">
                            {{ $p->reto ?? $p->ubicacion }}
                        </p>
                    </div>
                </div>
                @empty
                <div class="col-span-full py-12 text-center">
                    <p class="text-neutral-500">Próximamente estaremos publicando nuestros nuevos proyectos destacados.</p>
                </div>
                @endforelse
            </div>

            </div>
        </div>
    </section>

    {{-- ========================================================
         Blog / News Section
         ======================================================== --}}
    <section class="py-24 bg-background-light">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 flex items-center justify-between">
                <h2 class="text-3xl font-bold text-secondary">Noticias y Tendencias</h2>
                <a href="{{ route('blog') }}" class="inline-flex items-center gap-1 font-semibold text-primary hover:underline">Ver todo el blog <span class="material-symbols-outlined text-base">arrow_right_alt</span></a>
            </div>

            <div class="grid gap-8 lg:grid-cols-2">
                @forelse($postsDestacados as $post)
                <article class="post-card cursor-pointer flex flex-col overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-neutral-100 transition-all hover:shadow-lg sm:flex-row" data-id="{{ $post->id }}">
                    <div class="h-48 w-full shrink-0 overflow-hidden sm:h-auto sm:w-56 bg-neutral-100">
                        @if($post->img)
                        <img
                            alt="{{ $post->titulo }}"
                            class="h-full w-full object-cover transition-transform hover:scale-105"
                            src="{{ asset('storage/' . $post->img) }}"
                        />
                        @else
                        <div class="h-full w-full flex items-center justify-center bg-neutral-200">
                            <span class="material-symbols-outlined text-4xl text-neutral-400">image</span>
                        </div>
                        @endif
                    </div>
                    <div class="flex flex-col justify-center p-6">
                        <span class="mb-2 text-xs font-bold uppercase tracking-wider text-primary">{{ $post->categoria }}</span>
                        <h3 class="mb-2 text-xl font-bold text-secondary hover:text-primary cursor-pointer">{{ $post->titulo }}</h3>
                        <p class="mb-4 text-sm text-neutral-600 line-clamp-2">{{ $post->resumen }}</p>
                        <a class="inline-flex items-center text-sm font-bold text-secondary hover:text-primary" href="{{ route('blog') }}">
                            Leer más <span class="material-symbols-outlined text-base ml-1">arrow_forward</span>
                        </a>
                    </div>
                </article>
                @empty
                <div class="col-span-full py-12 text-center">
                    <p class="text-neutral-500">Próximamente estaremos publicando nuevas noticias y tendencias del sector.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- ========================================================
         Contact / Quote Form – Premium Redesign
         ======================================================== --}}
    <section id="contacto" class="relative overflow-hidden bg-secondary">

        {{-- Background Image + Overlays --}}
        <div class="absolute inset-0 z-0">
            <img
                alt="Proyecto de construcción en proceso"
                class="h-full w-full object-cover opacity-20"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3Y18_Q3MLN_kagSJUirckmWlWltF8eYFzHS6qa5byMJK7sG6tRXaPJnCE6zzi0WrdR2P4NTctGRdSEBDl4xHtqHMcBs5hKl_09eFua_7lsP8hwp9Q6DLoprrmxUrtj7mdATuEXWOZLQtwiidcPJmMd1QfMsBjTnqLTz1rgBA_IxtIjy96iZ6vfoxUyHrZn0eOqfwPwqwVt6FS64upYL-dR90RU2dEj9HKNgDZQBDxrAu04JUo7sJc8qLbwqXH4Cp5q36IMgrAwgM"
            />
            <div class="absolute inset-0 bg-gradient-to-br from-secondary via-secondary/95 to-secondary/80"></div>
        </div>

        {{-- Decorative Elements --}}
        <div class="absolute -left-32 -top-32 h-64 w-64 rounded-full bg-primary/5 blur-3xl"></div>
        <div class="absolute -bottom-20 -right-20 h-80 w-80 rounded-full bg-primary/10 blur-3xl"></div>
        <div class="absolute right-1/4 top-20 h-1 w-24 rounded bg-gradient-to-r from-primary/50 to-transparent"></div>

        <div class="relative z-10 py-20 lg:py-28">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                {{-- Section Header --}}
                <div class="mb-16 text-center">
                    <div class="mb-4 inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-4 py-1.5 backdrop-blur-md">
                        <span class="material-symbols-outlined text-primary text-sm">mail</span>
                        <span class="text-xs font-semibold text-primary uppercase tracking-widest">Contáctanos</span>
                    </div>
                    <h2 class="font-display text-4xl font-black text-white md:text-5xl tracking-tight">
                        ¿Tienes un proyecto <br class="hidden sm:block">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-yellow-300">en mente?</span>
                    </h2>
                    <p class="mx-auto mt-4 max-w-2xl text-lg text-neutral-400 leading-relaxed">
                        Completa el formulario y un especialista de Indago Constructora se pondrá en contacto contigo en menos de 2 horas.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 items-stretch">

                    {{-- Left: Glassmorphism Form Card (3 cols) --}}
                    <div class="lg:col-span-3 rounded-2xl border border-white/10 bg-white/5 p-8 shadow-2xl backdrop-blur-xl lg:p-10">
                        <form class="space-y-6" id="contacto-form" action="{{ route('contacto.enviar') }}" method="POST">
                            @csrf

                            {{-- Row 1: Nombre Completo + Correo Electrónico --}}
                            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                                <div class="group">
                                    <label class="mb-2 block text-xs font-bold uppercase tracking-widest text-neutral-400 group-focus-within:text-primary transition-colors">
                                        Nombre Completo <span class="text-red-400">*</span>
                                    </label>
                                    <input
                                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3.5 text-white placeholder-neutral-600 transition-all duration-300 focus:border-primary/50 focus:bg-white/10 focus:ring-2 focus:ring-primary/20 focus:outline-none"
                                        placeholder="Juan Pérez"
                                        type="text"
                                        name="nombre"
                                        value="{{ old('nombre') }}"
                                        required
                                    />
                                </div>
                                <div class="group">
                                    <label class="mb-2 block text-xs font-bold uppercase tracking-widest text-neutral-400 group-focus-within:text-primary transition-colors">
                                        Correo Electrónico <span class="text-red-400">*</span>
                                    </label>
                                    <input
                                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3.5 text-white placeholder-neutral-600 transition-all duration-300 focus:border-primary/50 focus:bg-white/10 focus:ring-2 focus:ring-primary/20 focus:outline-none"
                                        placeholder="correo@ejemplo.com"
                                        type="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                    />
                                </div>
                            </div>

                            {{-- Row 2: Teléfono + Tipo de Obra --}}
                            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                                <div class="group">
                                    <label class="mb-2 block text-xs font-bold uppercase tracking-widest text-neutral-400 group-focus-within:text-primary transition-colors">
                                        Teléfono <span class="text-red-400">*</span>
                                    </label>
                                    <input
                                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3.5 text-white placeholder-neutral-600 transition-all duration-300 focus:border-primary/50 focus:bg-white/10 focus:ring-2 focus:ring-primary/20 focus:outline-none"
                                        placeholder="+1 809 123 4567"
                                        type="tel"
                                        name="telefono"
                                        value="{{ old('telefono') }}"
                                        required
                                    />
                                </div>
                                <div class="group">
                                    <label class="mb-2 block text-xs font-bold uppercase tracking-widest text-neutral-400 group-focus-within:text-primary transition-colors">
                                        Tipo de Obra <span class="text-red-400">*</span>
                                    </label>
                                    <select
                                        class="w-full appearance-none rounded-xl border border-white/10 bg-white/5 px-4 py-3.5 text-white transition-all duration-300 focus:border-primary/50 focus:bg-white/10 focus:ring-2 focus:ring-primary/20 focus:outline-none"
                                        name="tipo_obra"
                                        required
                                    >
                                        <option value="" class="bg-secondary" {{ old('tipo_obra') == '' ? 'selected' : '' }}>Selecciona una opción</option>
                                        <option class="bg-secondary" value="civil" {{ old('tipo_obra') == 'civil' ? 'selected' : '' }}>Ingeniería Civil</option>
                                        <option class="bg-secondary" value="vial" {{ old('tipo_obra') == 'vial' ? 'selected' : '' }}>Ingeniería Vial</option>
                                        <option class="bg-secondary" value="hidraulica" {{ old('tipo_obra') == 'hidraulica' ? 'selected' : '' }}>Ingeniería hidráulica</option>
                                        <option class="bg-secondary" value="arquitectonico" {{ old('tipo_obra') == 'arquitectonico' ? 'selected' : '' }}>Diseño Arquitectónico</option>
                                        <option class="bg-secondary" value="presupuesto" {{ old('tipo_obra') == 'presupuesto' ? 'selected' : '' }}>Presupuesto</option>
                                        <option class="bg-secondary" value="asesoria" {{ old('tipo_obra') == 'asesoria' ? 'selected' : '' }}>Asesoría</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Row 3: Empresa (Opcional) --}}
                            <div class="group">
                                <label class="mb-2 block text-xs font-bold uppercase tracking-widest text-neutral-400 group-focus-within:text-primary transition-colors">
                                    Empresa <span class="text-neutral-600 text-[10px] font-normal normal-case tracking-normal">(Opcional)</span>
                                </label>
                                <input
                                    class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3.5 text-white placeholder-neutral-600 transition-all duration-300 focus:border-primary/50 focus:bg-white/10 focus:ring-2 focus:ring-primary/20 focus:outline-none"
                                    placeholder="Nombre de tu empresa o razón social"
                                    type="text"
                                    name="empresa"
                                    value="{{ old('empresa') }}"
                                />
                            </div>

                            {{-- Row 4: Mensaje --}}
                            <div class="group">
                                <label class="mb-2 block text-xs font-bold uppercase tracking-widest text-neutral-400 group-focus-within:text-primary transition-colors">
                                    Cuéntanos sobre tu proyecto <span class="text-red-400">*</span>
                                </label>
                                <textarea
                                    class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3.5 text-white placeholder-neutral-600 transition-all duration-300 focus:border-primary/50 focus:bg-white/10 focus:ring-2 focus:ring-primary/20 focus:outline-none resize-none"
                                    placeholder="Describe brevemente qué tipo de obra necesitas, la ubicación y tus plazos estimados..."
                                    rows="4"
                                    name="mensaje"
                                    required
                                >{{ old('mensaje') }}</textarea>
                            </div>

                            {{-- Required fields note + Submit --}}
                            <div class="flex flex-col sm:flex-row items-center gap-4 pt-2">
                                <button
                                    class="group relative w-full overflow-hidden rounded-xl bg-gradient-to-r from-primary to-orange-500 py-4 font-bold text-white shadow-xl shadow-primary/25 transition-all duration-300 hover:shadow-2xl hover:shadow-primary/40 hover:scale-[1.02] sm:w-auto sm:px-14"
                                    type="submit"
                                >
                                    <span class="relative z-10 flex items-center justify-center gap-2">
                                        Enviar Solicitud
                                        <span class="material-symbols-outlined text-lg transition-transform group-hover:translate-x-1">arrow_forward</span>
                                    </span>
                                    <div class="absolute inset-0 bg-gradient-to-r from-orange-500 to-primary opacity-0 transition-opacity group-hover:opacity-100"></div>
                                </button>
                                <div class="text-xs text-neutral-500 flex flex-col gap-1">
                                    <p>
                                        <span class="text-red-400 mr-0.5">*</span>
                                        Campos obligatorios
                                    </p>
                                    <p>
                                        <span class="material-symbols-outlined text-[14px] align-middle mr-0.5">lock</span>
                                        Tu información está segura y protegida.
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>

                    {{-- Right: Contact Info Cards (2 cols) --}}
                    <div class="lg:col-span-2 flex flex-col justify-between h-full gap-5">

                        {{-- Card: Phone --}}
                        <a href="tel:8098968627" class="group flex items-start gap-4 rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-xl transition-all duration-300 hover:border-primary/30 hover:bg-white/10 hover:shadow-lg hover:shadow-primary/5">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary transition-colors group-hover:bg-primary group-hover:text-white">
                                <span class="material-symbols-outlined text-2xl">call</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-white">Llámanos</h4>
                                <p class="mt-0.5 text-sm text-neutral-400">Lunes a Viernes, 8:00 AM – 6:00 PM</p>
                                <p class="mt-2 text-lg font-bold text-primary">809-896-8627</p>
                            </div>
                        </a>

                        {{-- Card: Email --}}
                        <a href="mailto:grupoindago@gmail.com" class="group flex items-start gap-4 rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-xl transition-all duration-300 hover:border-primary/30 hover:bg-white/10 hover:shadow-lg hover:shadow-primary/5">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary transition-colors group-hover:bg-primary group-hover:text-white">
                                <span class="material-symbols-outlined text-2xl">mail</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-white">Escríbenos</h4>
                                <p class="mt-0.5 text-sm text-neutral-400">Respondemos en menos de 2 horas</p>
                                <p class="mt-2 text-lg font-bold text-primary">grupoindago@gmail.com</p>
                            </div>
                        </a>

                        {{-- Card: Location --}}
                        <div class="group flex items-start gap-4 rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-xl transition-all duration-300 hover:border-primary/30 hover:bg-white/10 hover:shadow-lg hover:shadow-primary/5">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary transition-colors group-hover:bg-primary group-hover:text-white">
                                <span class="material-symbols-outlined text-2xl">location_on</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-white">Sede Principal</h4>
                                <p class="mt-0.5 text-sm text-neutral-400">Edif. B10, Local 1D</p>
                                <p class="text-sm text-neutral-400">Av. Pedro Livio Cedeño, Ensanche La Fé</p>
                                <p class="mt-2 text-sm font-semibold text-neutral-300">Santo Domingo, DN – RD</p>
                            </div>
                        </div>

                        {{-- WhatsApp CTA --}}
                        <a href="https://wa.me/18098968627" target="_blank" rel="noopener" class="group flex items-center justify-center gap-3 rounded-2xl border border-green-500/20 bg-green-500/10 p-5 transition-all duration-300 hover:border-green-500/40 hover:bg-green-500/20 hover:shadow-lg hover:shadow-green-500/10">
                            <svg class="h-6 w-6 text-green-400" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            <span class="font-bold text-green-400 group-hover:text-green-300">Chatea por WhatsApp</span>
                            <span class="material-symbols-outlined text-green-400 text-lg transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>

                        {{-- Redes Sociales --}}
                        <div class="group flex flex-col items-center justify-center gap-4 rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur-xl transition-all duration-300 hover:border-primary/30 hover:bg-white/10 hover:shadow-lg hover:shadow-primary/5">
                            <h4 class="font-bold text-white text-sm uppercase tracking-widest">Síguenos</h4>
                            <div class="flex items-center gap-6">
                                {{-- Facebook --}}
                                <a href="#" target="_blank" rel="noopener" class="text-neutral-400 hover:text-[#1877F2] transition-colors hover:scale-110">
                                    <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                </a>
                                {{-- Instagram --}}
                                <a href="https://www.instagram.com/indagoconstructora?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener" class="text-neutral-400 hover:text-[#E1306C] transition-colors hover:scale-110">
                                    <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                                </a>
                                {{-- YouTube --}}
                                <a href="#" target="_blank" rel="noopener" class="text-neutral-400 hover:text-[#FF0000] transition-colors hover:scale-110">
                                    <svg class="h-8 w-9" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.5 12 3.5 12 3.5s-7.505 0-9.377.55a3.016 3.016 0 00-2.122 2.136C0 8.188 0 12 0 12s0 3.812.501 5.814a3.016 3.016 0 002.122 2.136c1.871.55 9.377.55 9.377.55s7.505 0 9.377-.55a3.016 3.016 0 002.122-2.136C24 15.812 24 12 24 12s0-3.812-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- SweetAlert2 CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Script de Alerta con diseño oscuro/naranja integrado a tu tema --}}
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: '¡Recibido!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    background: '#242424',
                    color: '#ffffff',
                    iconColor: '#fca311',
                    confirmButtonColor: '#fca311',
                    confirmButtonText: 'Aceptar',
                    customClass: {
                        popup: 'border border-white/10 rounded-2xl shadow-2xl',
                        title: 'font-display font-black text-2xl',
                        confirmButton: 'rounded-xl px-10 py-3 font-bold text-white transition-transform hover:scale-105 shadow-xl shadow-primary/20'
                    }
                });
            });
        </script>
    @endif

    {{-- Script de error (Opcional, en caso de fallo de validación) --}}
    @if($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Verifica los campos',
                    text: 'Asegúrate de haber llenado todos los campos obligatorios y correctamente.',
                    icon: 'error',
                    background: '#242424',
                    color: '#ffffff',
                    confirmButtonColor: '#fca311',
                    customClass: {
                        popup: 'border border-white/10 rounded-2xl shadow-2xl',
                        confirmButton: 'rounded-xl px-10 py-3 font-bold text-white'
                    }
                });
            });
        </script>
    @endif



    {{-- =============================================
         MODAL: LECTURA DE NOTICIA
         ============================================= --}}
    <div id="modal-overlay" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/70 backdrop-blur-sm p-4">
        <div id="modal-box" class="relative w-full max-w-4xl max-h-[90vh] overflow-y-auto rounded-2xl bg-white shadow-2xl">

            {{-- Cerrar --}}
            <button id="modal-close" class="absolute right-4 top-4 z-10 flex h-10 w-10 items-center justify-center rounded-full bg-neutral-100 hover:bg-neutral-200 transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>

            @if(isset($postsDestacados) && $postsDestacados->count() > 0)
            @foreach($postsDestacados as $p)
            <div id="modal-{{ $p->id }}" class="modal-content hidden">

                {{-- Imagen Principal --}}
                <div class="relative h-72 sm:h-96 w-full overflow-hidden rounded-t-2xl bg-neutral-100">
                    @if($p->img)
                        <img alt="{{ $p->titulo }}" class="h-full w-full object-cover" src="{{ asset('storage/' . $p->img) }}">
                    @else
                        <div class="h-full w-full flex items-center justify-center bg-neutral-200"><span class="material-symbols-outlined text-5xl text-neutral-400">image</span></div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <span class="mb-3 inline-block rounded-full bg-primary px-3 py-1 text-xs font-bold text-white">{{ $p->categoria }}</span>
                        <h2 class="text-3xl font-black text-white leading-tight drop-shadow-md">{{ $p->titulo }}</h2>
                        <div class="mt-4 flex items-center gap-3 text-sm text-neutral-200">
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                                {{ $p->created_at->format('d M Y') }}
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px]">person</span>
                                Indago Constructora
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-8">
                    {{-- Contenido --}}
                    <div class="prose prose-neutral max-w-none prose-p:leading-relaxed prose-headings:text-secondary">
                        {!! nl2br(e($p->contenido)) !!}
                    </div>

                    {{-- CTA --}}
                    <div class="mt-10 border-t border-neutral-100 pt-6 flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('inicio') }}#contacto" class="flex-1 inline-flex items-center justify-center gap-2 rounded-lg bg-primary px-6 py-3 text-sm font-bold text-white hover:bg-orange-500 transition-colors shadow-lg shadow-primary/30">
                            ¿Tienes un proyecto en mente? <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                        </a>
                        <button onclick="document.getElementById('modal-overlay').classList.add('hidden'); document.getElementById('modal-overlay').classList.remove('flex'); document.body.style.overflow = '';" class="flex-1 inline-flex items-center justify-center gap-2 rounded-lg border-2 border-neutral-200 px-6 py-3 text-sm font-bold text-secondary hover:bg-neutral-50 transition-colors">
                            Cerrar Noticia
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
            @endif

        </div>
    </div>

</x-layouts.public>
