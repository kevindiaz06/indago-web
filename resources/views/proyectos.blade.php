<x-layouts.public title="Proyectos – Indago Constructora | Obras en RD">

    {{-- =============================================
         HERO
         ============================================= --}}
    <section class="relative overflow-hidden bg-secondary py-24">
        <div class="absolute inset-0 z-0 opacity-10"
             style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuCVvpXvUKpHDaWrd8KTYho9VV4SBUS9DqqdJF_qVVcfuGwXSvawfVbnsCGwngDoBgpnq8PtSMQca01MzIRUFKyoPaGYf8FwgaqrKPIA6jd3wd4QKaNs1i-HJOkU4Ud36hjiEWawsoJCvBXS4uktmfNfj1vwvwJ3kbu4rTAnLrbfQ0f7sKMoo2Mxwb7fJ0lGykv1Xid_O-T9aSPGBqGQiZhsjoccGLwFvgx26PiUgGqQBuv5sEY55nulM4I69EcB6e3I3r3fgYAjNFA');background-size:cover;background-position:center;"></div>
        <div class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-primary to-transparent"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-8">
                <div>
                    <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-4 py-1.5">
                        <span class="flex h-2 w-2 rounded-full bg-primary animate-pulse"></span>
                        <span class="text-xs font-semibold uppercase tracking-widest text-primary">Portafolio de Obras</span>
                    </div>
                    <h1 class="font-display text-5xl font-black leading-tight text-white md:text-6xl">
                        Nuestra prueba<br>
                        <span class="text-primary">está en el terreno</span>
                    </h1>
                    <p class="mt-5 max-w-xl text-lg leading-relaxed text-neutral-300">
                        Más de 200 proyectos ejecutados en toda la República Dominicana. Cada obra es testimonio de nuestra capacidad técnica, compromiso y excelencia constructiva.
                    </p>
                </div>
                <div class="grid grid-cols-3 gap-4 shrink-0">
                    <div class="rounded-xl bg-white/5 border border-white/10 px-5 py-4 text-center">
                        <span class="block text-3xl font-black text-primary">+200</span>
                        <span class="text-[11px] uppercase tracking-wider text-neutral-400">Proyectos</span>
                    </div>
                    <div class="rounded-xl bg-white/5 border border-white/10 px-5 py-4 text-center">
                        <span class="block text-3xl font-black text-primary">12</span>
                        <span class="text-[11px] uppercase tracking-wider text-neutral-400">En ejecución</span>
                    </div>
                    <div class="rounded-xl bg-white/5 border border-white/10 px-5 py-4 text-center">
                        <span class="block text-3xl font-black text-primary">18</span>
                        <span class="text-[11px] uppercase tracking-wider text-neutral-400">Provincias</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =============================================
         FILTROS + GRILLA DE PROYECTOS
         ============================================= --}}
    <section class="py-16 bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- Filtros --}}
            <div class="mb-10 flex flex-wrap items-center gap-3" id="filtros">
                <button data-filter="all"          class="filter-btn active-filter rounded-full px-5 py-2 text-sm font-bold border-2 transition-all">Todos</button>
                <button data-filter="ejecucion"    class="filter-btn rounded-full px-5 py-2 text-sm font-bold border-2 transition-all">En Ejecución</button>
                <button data-filter="finalizado"   class="filter-btn rounded-full px-5 py-2 text-sm font-bold border-2 transition-all">Finalizados</button>
                <div class="mx-2 hidden sm:block h-6 w-px bg-neutral-200"></div>
                <button data-filter="residencial"  class="filter-btn rounded-full px-5 py-2 text-sm font-bold border-2 transition-all">Residencial</button>
                <button data-filter="comercial"    class="filter-btn rounded-full px-5 py-2 text-sm font-bold border-2 transition-all">Comercial</button>
                <button data-filter="industrial"   class="filter-btn rounded-full px-5 py-2 text-sm font-bold border-2 transition-all">Industrial</button>
                <button data-filter="civil"        class="filter-btn rounded-full px-5 py-2 text-sm font-bold border-2 transition-all">Obras Civiles</button>
            </div>

            {{-- Grilla --}}
            <div id="proyecto-grid" class="grid gap-7 sm:grid-cols-2 lg:grid-cols-3">

                @php
                // Los proyectos vienen dinámicamente desde el controlador
                @endphp

                @foreach($proyectos as $p)
                @php
                    $badge = $p->estado === 'ejecucion' ? 'En Ejecución' : 'Finalizado';
                    $badge_color = $p->estado === 'ejecucion' ? 'bg-amber-400 text-amber-900' : 'bg-green-400 text-green-900';
                    $imgUrl = $p->img ? asset('storage/' . $p->img) : 'https://placehold.co/800x600/e2e8f0/64748b?text=Procesando...';
                @endphp
                <div
                    class="proyecto-card group relative overflow-hidden rounded-2xl bg-white shadow-lg ring-1 ring-neutral-100 cursor-pointer transition-all hover:-translate-y-2 hover:shadow-2xl"
                    data-tipo="{{ $p->tipo }}"
                    data-estado="{{ $p->estado }}"
                    data-id="p-{{ $p->id }}"
                >
                    {{-- Imagen --}}
                    <div class="relative h-60 overflow-hidden">
                        <img alt="{{ $p->titulo }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" src="{{ $imgUrl }}">
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 via-secondary/20 to-transparent"></div>

                        {{-- Badge estado --}}
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center gap-1.5 rounded-full px-3 py-1 text-xs font-bold {{ $badge_color }}">
                                <span class="flex h-1.5 w-1.5 rounded-full {{ $p->estado === 'ejecucion' ? 'bg-amber-700 animate-pulse' : 'bg-green-700' }}"></span>
                                {{ $badge }}
                            </span>
                        </div>

                        {{-- Tipo --}}
                        <div class="absolute top-4 right-4">
                            <span class="rounded-full bg-white/20 backdrop-blur-sm border border-white/30 px-3 py-1 text-xs font-semibold text-white capitalize">{{ explode(' ', $p->tipo)[0] }}</span>
                        </div>

                        {{-- Info en imagen --}}
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-lg font-black text-white leading-tight">{{ $p->titulo }}</h3>
                            <p class="mt-1 flex items-center gap-1 text-sm text-neutral-300">
                                <span class="material-symbols-outlined text-[14px] text-primary">location_on</span>
                                {{ $p->ubicacion }}
                            </p>
                        </div>

                        {{-- Hover overlay --}}
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity group-hover:opacity-100 bg-secondary/40">
                            <div class="flex items-center gap-2 rounded-full bg-primary px-5 py-2.5 text-sm font-bold text-white shadow-lg">
                                <span class="material-symbols-outlined text-[18px]">open_in_full</span>
                                Ver Ficha Técnica
                            </div>
                        </div>
                    </div>

                    {{-- Footer tarjeta --}}
                    <div class="flex items-center justify-between p-4">
                        <div class="flex gap-4 text-xs text-neutral-500">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px] text-secondary">square_foot</span> {{ $p->m2 }}</span>
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px] text-secondary">schedule</span> {{ $p->tiempo }}</span>
                        </div>
                        <span class="text-xs font-semibold text-primary">Ver más →</span>
                    </div>
                </div>
                @endforeach

            </div>

            {{-- Empty state --}}
            <div id="empty-state" class="hidden py-20 text-center">
                <span class="material-symbols-outlined text-5xl text-neutral-300">search_off</span>
                <p class="mt-4 text-neutral-400">No hay proyectos con ese filtro.</p>
            </div>
        </div>
    </section>

    {{-- =============================================
         MODAL: FICHA INDIVIDUAL
         ============================================= --}}
    <div id="modal-overlay" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/70 backdrop-blur-sm p-4">
        <div id="modal-box" class="relative w-full max-w-4xl max-h-[90vh] overflow-y-auto rounded-2xl bg-white shadow-2xl">

            {{-- Cerrar --}}
            <button id="modal-close" class="absolute right-4 top-4 z-10 flex h-10 w-10 items-center justify-center rounded-full bg-neutral-100 hover:bg-neutral-200 transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>

            @foreach($proyectos as $p)
            @php
                $badge = $p->estado === 'ejecucion' ? 'En Ejecución' : 'Finalizado';
                $badge_color = $p->estado === 'ejecucion' ? 'bg-amber-400 text-amber-900' : 'bg-green-400 text-green-900';
            @endphp
            <div id="modal-p-{{ $p->id }}" class="modal-content hidden">

                {{-- Galería --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-1">
                    @if(is_array($p->galeria) && count($p->galeria) > 0)
                        @foreach($p->galeria as $i => $foto)
                        <div class="relative {{ $i === 0 ? 'sm:col-span-2 h-72' : 'h-48' }} overflow-hidden {{ $i === 0 ? 'rounded-t-2xl' : '' }}">
                            <img alt="Foto {{ $i+1 }} de {{ $p->titulo }}" class="h-full w-full object-cover" src="{{ asset('storage/' . $foto) }}">
                            @if($i === 0)
                            <div class="absolute inset-0 bg-gradient-to-t from-secondary/60 to-transparent"></div>
                            <div class="absolute bottom-5 left-6">
                                <h2 class="text-2xl font-black text-white">{{ $p->titulo }}</h2>
                                <p class="flex items-center gap-1 text-sm text-neutral-300 mt-1">
                                    <span class="material-symbols-outlined text-[14px] text-primary">location_on</span> {{ $p->ubicacion }}
                                </p>
                            </div>
                            <div class="absolute top-5 right-6">
                                <span class="inline-flex items-center gap-1.5 rounded-full px-3 py-1 text-xs font-bold {{ $badge_color }}">
                                    {{ $badge }}
                                </span>
                            </div>
                            @endif
                        </div>
                        @endforeach
                    @else
                        {{-- Imagen principal si no hay galeria --}}
                        <div class="relative sm:col-span-2 h-72 overflow-hidden rounded-t-2xl">
                            <img alt="{{ $p->titulo }}" class="h-full w-full object-cover" src="{{ $p->img ? asset('storage/' . $p->img) : 'https://placehold.co/800x600/e2e8f0/64748b?text=Procesando...' }}">
                            <div class="absolute inset-0 bg-gradient-to-t from-secondary/60 to-transparent"></div>
                            <div class="absolute bottom-5 left-6">
                                <h2 class="text-2xl font-black text-white">{{ $p->titulo }}</h2>
                                <p class="flex items-center gap-1 text-sm text-neutral-300 mt-1">
                                    <span class="material-symbols-outlined text-[14px] text-primary">location_on</span> {{ $p->ubicacion }}
                                </p>
                            </div>
                            <div class="absolute top-5 right-6">
                                <span class="inline-flex items-center gap-1.5 rounded-full px-3 py-1 text-xs font-bold {{ $badge_color }}">
                                    {{ $badge }}
                                </span>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="p-7">
                    {{-- Ficha técnica --}}
                    <div class="mb-7 grid grid-cols-2 gap-4 sm:grid-cols-4">
                        <div class="rounded-xl bg-neutral-50 border border-neutral-100 p-4 text-center">
                            <span class="material-symbols-outlined text-secondary text-2xl">square_foot</span>
                            <span class="mt-1 block text-lg font-black text-secondary">{{ $p->m2 }}</span>
                            <span class="text-xs uppercase tracking-wider text-neutral-400">Superficie</span>
                        </div>
                        <div class="rounded-xl bg-neutral-50 border border-neutral-100 p-4 text-center">
                            <span class="material-symbols-outlined text-secondary text-2xl">apartment</span>
                            <span class="mt-1 block text-lg font-black text-secondary">{{ $p->pisos }}</span>
                            <span class="text-xs uppercase tracking-wider text-neutral-400">Estructura</span>
                        </div>
                        <div class="rounded-xl bg-neutral-50 border border-neutral-100 p-4 text-center">
                            <span class="material-symbols-outlined text-secondary text-2xl">schedule</span>
                            <span class="mt-1 block text-lg font-black text-secondary">{{ $p->tiempo }}</span>
                            <span class="text-xs uppercase tracking-wider text-neutral-400">Duración</span>
                        </div>
                        <div class="rounded-xl bg-neutral-50 border border-neutral-100 p-4 text-center">
                            <span class="material-symbols-outlined text-secondary text-2xl">groups</span>
                            <span class="mt-1 block text-sm font-black text-secondary leading-tight">{{ $p->cliente }}</span>
                            <span class="text-xs uppercase tracking-wider text-neutral-400">Cliente</span>
                        </div>
                    </div>

                    {{-- Reto constructivo --}}
                    @if($p->reto)
                    <div class="rounded-xl bg-secondary/5 border-l-4 border-primary p-5">
                        <h4 class="mb-2 flex items-center gap-2 font-bold text-secondary">
                            <span class="material-symbols-outlined text-primary text-lg">emoji_objects</span>
                            Reto Constructivo Superado
                        </h4>
                        <p class="text-sm leading-relaxed text-neutral-600">{{ $p->reto }}</p>
                    </div>
                    @endif

                    {{-- CTA --}}
                    <div class="mt-6 flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('inicio') }}#contacto" class="flex-1 inline-flex items-center justify-center gap-2 rounded-lg bg-primary px-6 py-3 text-sm font-bold text-white hover:bg-orange-500 transition-colors shadow-lg shadow-primary/30">
                            Solicitar proyecto similar <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                        </a>
                        <button onclick="document.getElementById('modal-overlay').classList.add('hidden'); document.getElementById('modal-overlay').classList.remove('flex');" class="flex-1 inline-flex items-center justify-center gap-2 rounded-lg border-2 border-neutral-200 px-6 py-3 text-sm font-bold text-secondary hover:bg-neutral-50 transition-colors">
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    {{-- =============================================
         CTA Final
         ============================================= --}}
    <section class="py-20 bg-primary">
        <div class="mx-auto max-w-4xl px-4 text-center">
            <h2 class="font-display text-4xl font-black text-white md:text-5xl">¿El próximo proyecto es el tuyo?</h2>
            <p class="mt-4 text-lg text-white/80">Únete a los más de 200 clientes que han confiado en Indago Constructora.</p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('inicio') }}#contacto" class="inline-flex h-14 items-center justify-center rounded-lg bg-white px-8 text-base font-bold text-primary shadow-xl hover:bg-neutral-100 transition-colors">
                    Solicitar Propuesta Gratis
                </a>
                <a href="tel:8098968627" class="inline-flex h-14 items-center justify-center gap-2 rounded-lg border-2 border-white/40 px-8 text-base font-bold text-white hover:bg-white/10 transition-colors">
                    <span class="material-symbols-outlined">call</span> 809-896-8627
                </a>
            </div>
        </div>
    </section>

</x-layouts.public>
