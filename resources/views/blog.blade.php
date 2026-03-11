<x-layouts.public title="Blog – Indago Constructora | Actualidad en Construcción e Ingeniería">

    {{-- =============================================
         HERO / INTRO
         ============================================= --}}
    <section class="relative overflow-hidden bg-secondary py-24">
        <div class="absolute inset-0 z-0 opacity-10"
             style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuD3Y18_Q3MLN_kagSJUirckmWlWltF8eYFzHS6qa5byMJK7sG6tRXaPJnCE6zzi0WrdR2P4NTctGRdSEBDl4xHtqHMcBs5hKl_09eFua_7lsP8hwp9Q6DLoprrmxUrtj7mdATuEXWOZLQtwiidcPJmMd1QfMsBjTnqLTz1rgBA_IxtIjy96iZ6vfoxUyHrZn0eOqfwPwqwVt6FS64upYL-dR90RU2dEj9HKNgDZQBDxrAu04JUo7sJc8qLbwqXH4Cp5q36IMgrAwgM');background-size:cover;background-position:center;"></div>
        <div class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-primary to-transparent"></div>
        <div class="absolute right-0 bottom-0 h-1 w-full bg-gradient-to-r from-transparent via-primary/30 to-transparent"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-10 lg:grid-cols-2">

                {{-- Texto --}}
                <div>
                    <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-4 py-1.5">
                        <span class="flex h-2 w-2 rounded-full bg-primary animate-pulse"></span>
                        <span class="text-xs font-semibold uppercase tracking-widest text-primary">Actualidad Constructora</span>
                    </div>
                    <h1 class="font-display text-5xl font-black leading-tight text-white md:text-6xl">
                        Conocimiento<br><span class="text-primary">directo desde la obra</span>
                    </h1>
                    <p class="mt-6 text-lg leading-relaxed text-neutral-300">
                        En este espacio compartimos lo que vivimos cada día en el terreno: avances de proyectos, consejos técnicos de nuestros ingenieros, noticias del sector construcción en la República Dominicana y tendencias en arquitectura e ingeniería civil.
                    </p>
                    <p class="mt-4 text-lg leading-relaxed text-neutral-400">
                        Sin filtros ni buscadores — solo contenido directo, práctico y hecho por profesionales que construyen de verdad.
                    </p>
                </div>

                {{-- Destacado del post más reciente --}}
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <img
                        alt="Post destacado"
                        class="h-72 w-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCjyRgwfDbCRtl8Yy2SCRczQ4aZkCLvcwQOR9s1ALRUZuIovvE7lEvIl1YSPUt3EshBiqJK2w1Q-XecQLsU0NvVq3InpguGm7Vu7kaeDXG1ev0JkNdPA80AK4prnIamHMoyOOrHV6JyVBDBG_8YRYv3Z0mTFTNgMsyk0WlhEhjIwZtHzfylYaiVtfJZassh2gk6QhR8mphf0c0Wkz2CsVwSSdhwR5EVaLlJRZrGfPp_vHd-nUTh6ZaZZd2Hy3G2zJrZxvWSo1TfmHs"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/40 to-transparent"></div>
                    <div class="absolute inset-x-0 bottom-0 p-6">
                        <span class="mb-2 inline-block rounded-full bg-primary px-3 py-1 text-xs font-bold text-white">Artículo Destacado</span>
                        <h3 class="text-xl font-black text-white leading-tight">Cómo el hormigón de alta resistencia está cambiando la construcción en RD</h3>
                        <p class="mt-1 text-sm text-neutral-400">Por Ing. Carlos Taveras · 20 Feb 2026</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =============================================
         LISTADO DE ARTÍCULOS
         ============================================= --}}
    <section class="py-20 bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="mb-12">
                <h2 class="font-display text-3xl font-bold text-secondary">Artículos Recientes</h2>
                <p class="mt-2 text-neutral-500">Lo más nuevo desde el equipo de Indago Constructora.</p>
            </div>

            @if($posts->count() > 0)
                {{-- Grid: primer artículo grande, resto en 3 columnas --}}
                <div class="grid gap-8">

                    {{-- Artículo destacado (primero) --}}
                    @php $destacado = $posts->first(); @endphp
                    <div class="post-card cursor-pointer group grid overflow-hidden rounded-2xl bg-white shadow-md ring-1 ring-neutral-100 transition-all hover:shadow-xl hover:-translate-y-1 lg:grid-cols-5" data-id="{{ $destacado->id }}">
                        <div class="relative lg:col-span-3 h-64 lg:h-auto overflow-hidden">
                            @if($destacado->img)
                                <img alt="{{ $destacado->titulo }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" src="{{ asset('storage/' . $destacado->img) }}">
                            @else
                                <div class="h-full w-full flex items-center justify-center bg-neutral-200"><span class="material-symbols-outlined text-4xl text-neutral-400">image</span></div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent to-secondary/20"></div>
                        </div>
                        <div class="lg:col-span-2 flex flex-col justify-center p-8">
                            <span class="mb-4 inline-block rounded-full px-3 py-1 text-xs font-bold bg-primary/10 text-primary">{{ $destacado->categoria }}</span>
                            <h3 class="mb-3 text-2xl font-black text-secondary leading-tight group-hover:text-primary transition-colors">{{ $destacado->titulo }}</h3>
                            <p class="mb-5 text-neutral-600 leading-relaxed">{{ $destacado->resumen }}</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="h-8 w-8 rounded-full bg-secondary/20 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[16px] text-secondary">person</span>
                                    </div>
                                    <div>
                                        <p class="text-xs font-semibold text-secondary">Indago Constructora</p>
                                        <p class="text-[11px] text-neutral-400">{{ $destacado->created_at->format('d M Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Resto de artículos --}}
                    @if($posts->count() > 1)
                    <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach($posts->slice(1) as $art)
                        <article class="post-card cursor-pointer group flex flex-col overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-neutral-100 transition-all hover:shadow-xl hover:-translate-y-1" data-id="{{ $art->id }}">
                            <div class="relative h-48 overflow-hidden">
                                @if($art->img)
                                    <img alt="{{ $art->titulo }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" src="{{ asset('storage/' . $art->img) }}">
                                @else
                                    <div class="h-full w-full flex items-center justify-center bg-neutral-200"><span class="material-symbols-outlined text-4xl text-neutral-400">image</span></div>
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-t from-secondary/60 to-transparent"></div>
                                <div class="absolute top-4 left-4">
                                    <span class="rounded-full px-3 py-1 text-xs font-bold bg-primary/10 text-white backdrop-blur-sm">{{ $art->categoria }}</span>
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col p-6">
                                <h3 class="mb-3 text-lg font-bold text-secondary leading-tight group-hover:text-primary transition-colors line-clamp-2">{{ $art->titulo }}</h3>
                                <p class="flex-1 mb-4 text-sm leading-relaxed text-neutral-500 line-clamp-3">{{ $art->resumen }}</p>
                                <div class="flex items-center justify-between border-t border-neutral-100 pt-4">
                                    <div class="flex items-center gap-2">
                                        <div class="h-7 w-7 rounded-full bg-secondary/10 flex items-center justify-center shrink-0">
                                            <span class="material-symbols-outlined text-[14px] text-secondary">person</span>
                                        </div>
                                        <div>
                                            <p class="text-[11px] font-semibold text-secondary">Indago Constructora</p>
                                            <p class="text-[10px] text-neutral-400">{{ $art->created_at->format('d M Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                    @endif
                </div>
                
                <div class="mt-12">
                    @if($posts->hasPages())
                        <div class="w-full text-center">
                            {{ $posts->links() }}
                        </div>
                    @endif
                </div>
            @else
                <div class="py-20 text-center">
                    <span class="material-symbols-outlined text-5xl text-neutral-300">article</span>
                    <p class="mt-4 text-neutral-400">Próximamente publicaremos nuevos artículos.</p>
                </div>
            @endif

            {{-- Aviso editorial --}}
            <div class="mt-16 rounded-2xl bg-neutral-50 border border-neutral-100 p-8 flex flex-col sm:flex-row items-center gap-6 text-center sm:text-left">
                <div class="shrink-0 flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary">
                    <span class="material-symbols-outlined text-3xl text-primary">campaign</span>
                </div>
                <div>
                    <h4 class="text-lg font-bold text-secondary">Este blog lo escriben quienes construyen</h4>
                    <p class="mt-1 text-neutral-500">Nuestros ingenieros y arquitectos comparten experiencias reales, sin contenido patrocinado ni relleno. Nuevo artículo cada dos semanas.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- =============================================
         CTA FINAL
         ============================================= --}}
    <section class="py-24 bg-secondary relative overflow-hidden">
        {{-- Decoración --}}
        <div class="absolute -right-20 -top-20 h-80 w-80 rounded-full bg-primary/10"></div>
        <div class="absolute -left-20 -bottom-20 h-80 w-80 rounded-full bg-primary/5"></div>

        <div class="relative z-10 mx-auto max-w-4xl px-4 text-center">
            <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-4 py-2">
                <span class="material-symbols-outlined text-sm text-primary">construction</span>
                <span class="text-sm font-semibold text-primary">De la lectura a la realidad</span>
            </div>
            <h2 class="font-display text-5xl font-black text-white md:text-6xl leading-tight">
                ¿Tienes un proyecto<br>
                <span class="text-primary">en mente?</span>
            </h2>
            <p class="mt-6 text-lg leading-relaxed text-neutral-300 max-w-xl mx-auto">
                Todo gran proyecto empieza con una conversación. Cuéntanos tu idea y nuestro equipo te devolverá una propuesta técnica y económica en menos de 48 horas, sin compromiso.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('inicio') }}#contacto"
                   class="inline-flex h-16 items-center justify-center gap-3 rounded-xl bg-primary px-10 text-base font-black text-white shadow-2xl shadow-primary/40 hover:bg-orange-500 transition-all hover:scale-105">
                    <span class="material-symbols-outlined">home_work</span>
                    COTIZA TU OBRA AQUÍ
                </a>
                <a href="tel:8098968627"
                   class="inline-flex h-16 items-center justify-center gap-2 rounded-xl border-2 border-white/20 px-8 text-base font-bold text-white hover:bg-white/10 transition-all">
                    <span class="material-symbols-outlined">call</span>
                    809-896-8627
                </a>
            </div>
        </div>
    </section>

    {{-- =============================================
         MODAL: LECTURA DE NOTICIA
         ============================================= --}}
    <div id="modal-overlay" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/70 backdrop-blur-sm p-4">
        <div id="modal-box" class="relative w-full max-w-4xl max-h-[90vh] overflow-y-auto rounded-2xl bg-white shadow-2xl">

            {{-- Cerrar --}}
            <button id="modal-close" class="absolute right-4 top-4 z-10 flex h-10 w-10 items-center justify-center rounded-full bg-neutral-100 hover:bg-neutral-200 transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>

            @if(isset($posts) && $posts->count() > 0)
            @foreach($posts as $p)
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
