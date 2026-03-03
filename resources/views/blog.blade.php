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

            @php
            $articulos = [
                [
                    'cat'    => 'Ingeniería',
                    'cat_color' => 'bg-blue-50 text-blue-700',
                    'titulo' => 'Cómo el hormigón de alta resistencia está cambiando la construcción en RD',
                    'resumen'=> 'Las mezclas de 50–70 MPa permiten losas más delgadas y mayor altura en menos tiempo. Analizamos su impacto en proyectos verticales dominicanos.',
                    'autor'  => 'Ing. Carlos Taveras',
                    'fecha'  => '20 Feb 2026',
                    'tiempo' => '5 min',
                    'img'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCjyRgwfDbCRtl8Yy2SCRczQ4aZkCLvcwQOR9s1ALRUZuIovvE7lEvIl1YSPUt3EshBiqJK2w1Q-XecQLsU0NvVq3InpguGm7Vu7kaeDXG1ev0JkNdPA80AK4prnIamHMoyOOrHV6JyVBDBG_8YRYv3Z0mTFTNgMsyk0WlhEhjIwZtHzfylYaiVtfJZassh2gk6QhR8mphf0c0Wkz2CsVwSSdhwR5EVaLlJRZrGfPp_vHd-nUTh6ZaZZd2Hy3G2zJrZxvWSo1TfmHs',
                ],
                [
                    'cat'    => 'Proyectos',
                    'cat_color' => 'bg-amber-50 text-amber-700',
                    'titulo' => 'Avance de obra: Torre Aqua Residences, Mes 8',
                    'resumen'=> 'Ya tenemos la estructura de los primeros 10 pisos. Compartimos el cronograma, las decisiones técnicas y las fotos del proceso de este proyecto en Piantini.',
                    'autor'  => 'Ing. María Peralta',
                    'fecha'  => '14 Feb 2026',
                    'tiempo' => '4 min',
                    'img'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCVvpXvUKpHDaWrd8KTYho9VV4SBUS9DqqdJF_qVVcfuGwXSvawfVbnsCGwngDoBgpnq8PtSMQca01MzIRUFKyoPaGYf8FwgaqrKPIA6jd3wd4QKaNs1i-HJOkU4Ud36hjiEWawsoJCvBXS4uktmfNfj1vwvwJ3kbu4rTAnLrbfQ0f7sKMoo2Mxwb7fJ0lGykv1Xid_O-T9aSPGBqGQiZhsjoccGLwFvgx26PiUgGqQBuv5sEY55nulM4I69EcB6e3I3r3fgYAjNFA',
                ],
                [
                    'cat'    => 'Consejos',
                    'cat_color' => 'bg-green-50 text-green-700',
                    'titulo' => '5 errores comunes al contratar una constructora en RD',
                    'resumen'=> 'Desde no pedir garantías escritas hasta ignorar las licencias de obra: te contamos los errores más frecuentes y cómo evitarlos antes de firmar cualquier contrato.',
                    'autor'  => 'Ing. Ricardo Méndez',
                    'fecha'  => '7 Feb 2026',
                    'tiempo' => '6 min',
                    'img'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDdlQJnNzaaXsRUTVKSvFPss7OVxlLfaCNgAI2bt3tDydVlHofZomK-J_OOc58qoRH7sMKA4ecP6DEWU2Q3WXVjCXLy719CsSsM1s4OWYHcuv0dkN6w-ry3UoB57g-kjDH_Z5oXDcyDyTn-SaTSgakPUzo05UyHaC1QisnfDx_HNdld6QvhY4QoLgD06oPFMZYLWmuQjLktAiShHMjplxO9ml8mxWKcfRJvu38yK3mfOa_p2VtAgaUlSbHhL5KeC-bc6f5Jhcs7GMA',
                ],
                [
                    'cat'    => 'Arquitectura',
                    'cat_color' => 'bg-purple-50 text-purple-700',
                    'titulo' => 'Tendencias en arquitectura residencial para el Caribe en 2026',
                    'resumen'=> 'Fachadas ventiladas, ventanas de piso a techo y patios interiores son las apuestas del año. Arq. Valeria Sosa analiza lo que está revolutionando el diseño en Santo Domingo.',
                    'autor'  => 'Arq. Valeria Sosa',
                    'fecha'  => '1 Feb 2026',
                    'tiempo' => '7 min',
                    'img'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBx1UmMJG8uucbHKXwEXYfja1UEL6hd9hX9qLjL9kOVBA7WUipbkXk_TnytGK0Spz8_ybcKDKPCcEsf3kbEmdYZFrr3c35pSu7ClDoHg2iOcf3FoMPc8A4AQp_TXX85AmVhW-7_MfGVTR0pp9Gka5ij9WJjjbD8MU8dHpdagShkuT3SPqu5vl97LDfN8S7tK5RFu8TA1pJZI4NaMNBZguPFP9Cb1qscTut92WeJZvKtf331eqIdtizZguAB218gIl2_Lr-uFhrG16o',
                ],
                [
                    'cat'    => 'Seguridad',
                    'cat_color' => 'bg-red-50 text-red-700',
                    'titulo' => 'Por qué la cultura de seguridad en obra salva vidas (y proyectos)',
                    'resumen'=> 'Un accidente no solo impacta al trabajador — paraliza toda la obra, genera costos legales y daña la reputación del proyecto. Cómo lo gestionamos en Indago.',
                    'autor'  => 'Ing. Ricardo Méndez',
                    'fecha'  => '24 Ene 2026',
                    'tiempo' => '5 min',
                    'img'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAhGDEZ9vIzTKNqLovc5XRYi89t1WivczkHuuDDp1mgFvjFIlMTJv5DoGNYZQ2c8FBCK8XmP8qVnbycmQ3Y3tKW5hn_YiU1bZ9TqSqnNGMFj0Gvv3PYxfgxdBuVhPvuHR5pK_aIETAv-5kkV9e5lRr7HvH-p8DK2Zn_6iLv4d9RdqKo3m8wQjdV2FMoJ56WsJXXi-2MlN_sZqcXuY7bvU13Yc1QJqaHzE1Nq7pZ1eNHHLwkjEp5d4P0',
                ],
                [
                    'cat'    => 'Obras Civiles',
                    'cat_color' => 'bg-neutral-100 text-neutral-700',
                    'titulo' => 'Rehabilitación vial en RD: oportunidades para el sector privado',
                    'resumen'=> 'El MOPC tiene abiertos más de 40 contratos de mantenimiento vial este año. Analizamos los requisitos y cómo una empresa como Indago puede participar.',
                    'autor'  => 'Ing. Carlos Taveras',
                    'fecha'  => '17 Ene 2026',
                    'tiempo' => '8 min',
                    'img'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD3Y18_Q3MLN_kagSJUirckmWlWltF8eYFzHS6qa5byMJK7sG6tRXaPJnCE6zzi0WrdR2P4NTctGRdSEBDl4xHtqHMcBs5hKl_09eFua_7lsP8hwp9Q6DLoprrmxUrtj7mdATuEXWOZLQtwiidcPJmMd1QfMsBjTnqLTz1rgBA_IxtIjy96iZ6vfoxUyHrZn0eOqfwPwqwVt6FS64upYL-dR90RU2dEj9HKNgDZQBDxrAu04JUo7sJc8qLbwqXH4Cp5q36IMgrAwgM',
                ],
            ];
            @endphp

            {{-- Grid: primer artículo grande, resto en 3 columnas --}}
            <div class="grid gap-8">

                {{-- Artículo destacado (primero) --}}
                <div class="group grid overflow-hidden rounded-2xl bg-white shadow-md ring-1 ring-neutral-100 transition-all hover:shadow-xl hover:-translate-y-1 lg:grid-cols-5">
                    <div class="relative lg:col-span-3 h-64 lg:h-auto overflow-hidden">
                        <img alt="{{ $articulos[0]['titulo'] }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" src="{{ $articulos[0]['img'] }}">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent to-secondary/20"></div>
                    </div>
                    <div class="lg:col-span-2 flex flex-col justify-center p-8">
                        <span class="mb-4 inline-block rounded-full px-3 py-1 text-xs font-bold {{ $articulos[0]['cat_color'] }}">{{ $articulos[0]['cat'] }}</span>
                        <h3 class="mb-3 text-2xl font-black text-secondary leading-tight group-hover:text-primary transition-colors">{{ $articulos[0]['titulo'] }}</h3>
                        <p class="mb-5 text-neutral-600 leading-relaxed">{{ $articulos[0]['resumen'] }}</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="h-8 w-8 rounded-full bg-secondary/20 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[16px] text-secondary">person</span>
                                </div>
                                <div>
                                    <p class="text-xs font-semibold text-secondary">{{ $articulos[0]['autor'] }}</p>
                                    <p class="text-[11px] text-neutral-400">{{ $articulos[0]['fecha'] }}</p>
                                </div>
                            </div>
                            <span class="flex items-center gap-1 text-xs text-neutral-400">
                                <span class="material-symbols-outlined text-[14px]">schedule</span>
                                {{ $articulos[0]['tiempo'] }} lectura
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Resto de artículos --}}
                <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach(array_slice($articulos, 1) as $art)
                    <article class="group flex flex-col overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-neutral-100 transition-all hover:shadow-xl hover:-translate-y-1">
                        <div class="relative h-48 overflow-hidden">
                            <img alt="{{ $art['titulo'] }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" src="{{ $art['img'] }}">
                            <div class="absolute inset-0 bg-gradient-to-t from-secondary/60 to-transparent"></div>
                            <div class="absolute top-4 left-4">
                                <span class="rounded-full px-3 py-1 text-xs font-bold {{ $art['cat_color'] }}">{{ $art['cat'] }}</span>
                            </div>
                        </div>
                        <div class="flex flex-1 flex-col p-6">
                            <h3 class="mb-3 text-lg font-bold text-secondary leading-tight group-hover:text-primary transition-colors line-clamp-2">{{ $art['titulo'] }}</h3>
                            <p class="flex-1 mb-4 text-sm leading-relaxed text-neutral-500 line-clamp-3">{{ $art['resumen'] }}</p>
                            <div class="flex items-center justify-between border-t border-neutral-100 pt-4">
                                <div class="flex items-center gap-2">
                                    <div class="h-7 w-7 rounded-full bg-secondary/10 flex items-center justify-center shrink-0">
                                        <span class="material-symbols-outlined text-[14px] text-secondary">person</span>
                                    </div>
                                    <div>
                                        <p class="text-[11px] font-semibold text-secondary">{{ $art['autor'] }}</p>
                                        <p class="text-[10px] text-neutral-400">{{ $art['fecha'] }}</p>
                                    </div>
                                </div>
                                <span class="flex items-center gap-0.5 text-[11px] text-neutral-400">
                                    <span class="material-symbols-outlined text-[13px]">schedule</span>
                                    {{ $art['tiempo'] }}
                                </span>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>

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

</x-layouts.public>
