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
         Featured Projects
         ======================================================== --}}
    <section class="py-24 bg-neutral-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="text-3xl font-bold text-secondary md:text-4xl">Proyectos Destacados</h2>
                <p class="mt-4 text-neutral-600">Nuestra huella en las obras más emblemáticas de la República Dominicana.</p>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

                {{-- Project 1 --}}
                <div class="group relative h-96 cursor-pointer overflow-hidden rounded-xl">
                    <img
                        alt="Torre corporativa de vidrio moderna"
                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVvpXvUKpHDaWrd8KTYho9VV4SBUS9DqqdJF_qVVcfuGwXSvawfVbnsCGwngDoBgpnq8PtSMQca01MzIRUFKyoPaGYf8FwgaqrKPIA6jd3wd4QKaNs1i-HJOkU4Ud36hjiEWawsoJCvBXS4uktmfNfj1vwvwJ3kbu4rTAnLrbfQ0f7sKMoo2Mxwb7fJ0lGykv1Xid_O-T9aSPGBqGQiZhsjoccGLwFvgx26PiUgGqQBuv5sEY55nulM4I69EcB6e3I3r3fgYAjNFA"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent p-8 flex flex-col justify-end">
                        <span class="text-sm font-bold text-primary mb-2">Comercial</span>
                        <h3 class="text-2xl font-bold text-white">Torre Empresarial Indago</h3>
                        <p class="mt-2 text-sm text-neutral-300 opacity-0 transform translate-y-4 transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">Diseño y construcción integral de edificio corporativo.</p>
                    </div>
                </div>

                {{-- Project 2 --}}
                <div class="group relative h-96 cursor-pointer overflow-hidden rounded-xl">
                    <img
                        alt="Interior de complejo residencial moderno"
                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCjyRgwfDbCRtl8Yy2SCRczQ4aZkCLvcwQOR9s1ALRUZuIovvE7lEvIl1YSPUt3EshBiqJK2w1Q-XecQLsU0NvVq3InpguGm7Vu7kaeDXG1ev0JkNdPA80AK4prnIamHMoyOOrHV6JyVBDBG_8YRYv3Z0mTFTNgMsyk0WlhEhjIwZtHzfylYaiVtfJZassh2gk6QhR8mphf0c0Wkz2CsVwSSdhwR5EVaLlJRZrGfPp_vHd-nUTh6ZaZZd2Hy3G2zJrZxvWSo1TfmHs"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent p-8 flex flex-col justify-end">
                        <span class="text-sm font-bold text-primary mb-2">Residencial</span>
                        <h3 class="text-2xl font-bold text-white">Complejo Residencial La Fé</h3>
                        <p class="mt-2 text-sm text-neutral-300 opacity-0 transform translate-y-4 transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">24 unidades habitacionales con acabados premium.</p>
                    </div>
                </div>

                {{-- Project 3 --}}
                <div class="group relative h-96 cursor-pointer overflow-hidden rounded-xl lg:hidden xl:block">
                    <img
                        alt="Infraestructura vial moderna"
                        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAhGDEZ9vIzTKNqLovc5XRYi89t1WivczkHuuDDp1mgFvjFIlMTJv5DoGNYYNB0tEmC-602Ger1IjNYZGZxxQnbBd68dAtXQpEumj657qBD833Hziyb2sK7CjXPXFQt98qJJfF1ozmRkLXPtTnnaOLP8-tCw6UYAT6BuN7mA7UUPdRxNS3UrJB9C7sfYLHW62H8RB_qfWjRrC1UOI7t7b_yl025D7NifVcDatT4AkhrqhoCqreoC2o5qwYckTXanDWgPfIqITgP6LE"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent p-8 flex flex-col justify-end">
                        <span class="text-sm font-bold text-primary mb-2">Infraestructura</span>
                        <h3 class="text-2xl font-bold text-white">Proyecto Vial Este</h3>
                        <p class="mt-2 text-sm text-neutral-300 opacity-0 transform translate-y-4 transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">Ingeniería vial y supervisión de obra civil.</p>
                    </div>
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

                {{-- Blog Card 1 --}}
                <article class="flex flex-col overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-neutral-100 transition-all hover:shadow-lg sm:flex-row">
                    <div class="h-48 w-full shrink-0 overflow-hidden sm:h-auto sm:w-56">
                        <img
                            alt="Arquitecto revisando planos de proyecto"
                            class="h-full w-full object-cover transition-transform hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdlQJnNzaaXsRUTVKSvFPss7OVxlLfaCNgAI2bt3tDydVlHofZomK-J_OOc58qoRH7sMKA4ecP6DEWU2Q3WXVjCXLy719CsSsM1s4OWYHcuv0dkN6w-ry3UoB57g-kjDH_Z5oXDcyDyTn-SaTSgakPUzo05UyHaC1QisnfDx_HNdld6QvhY4QoLgD06oPFMZYLWmuQjLktAiShHMjplxO9ml8mxWKcfRJvu38yK3mfOa_p2VtAgaUlSbHhL5KeC-bc6f5Jhcs7GMA"
                        />
                    </div>
                    <div class="flex flex-col justify-center p-6">
                        <span class="mb-2 text-xs font-bold uppercase tracking-wider text-primary">Arquitectura</span>
                        <h3 class="mb-2 text-xl font-bold text-secondary hover:text-primary cursor-pointer">Tendencias en construcción sostenible para RD en 2024</h3>
                        <p class="mb-4 text-sm text-neutral-600 line-clamp-2">Cómo los materiales ecoeficientes y las técnicas modernas están transformando el sector de la construcción en República Dominicana.</p>
                        <a class="inline-flex items-center text-sm font-bold text-secondary hover:text-primary" href="{{ route('blog') }}">
                            Leer más <span class="material-symbols-outlined text-base ml-1">arrow_forward</span>
                        </a>
                    </div>
                </article>

                {{-- Blog Card 2 --}}
                <article class="flex flex-col overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-neutral-100 transition-all hover:shadow-lg sm:flex-row">
                    <div class="h-48 w-full shrink-0 overflow-hidden sm:h-auto sm:w-56">
                        <img
                            alt="Obra de construcción en proceso"
                            class="h-full w-full object-cover transition-transform hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBx1UmMJG8uucbHKXwEXYfja1UEL6hd9hX9qLjL9kOVBA7WUipbkXk_TnytGK0Spz8_ybcKDKPCcEsf3kbEmdYZFrr3c35pSu7ClDoHg2iOcf3FoMPc8A4AQp_TXX85AmVhW-7_MfGVTR0pp9Gka5ij9WJjjbD8MU8dHpdagShkuT3SPqu5vl97LDfN8S7tK5RFu8TA1pJZI4NaMNBZguPFP9Cb1qscTut92WeJZvKtf331eqIdtizZguAB218gIl2_Lr-uFhrG16o"
                        />
                    </div>
                    <div class="flex flex-col justify-center p-6">
                        <span class="mb-2 text-xs font-bold uppercase tracking-wider text-primary">Ingeniería</span>
                        <h3 class="mb-2 text-xl font-bold text-secondary hover:text-primary cursor-pointer">Normativa de construcción en República Dominicana: Guía 2024</h3>
                        <p class="mb-4 text-sm text-neutral-600 line-clamp-2">Todo lo que debes saber sobre los reglamentos, permisos y normas técnicas vigentes para construir en Santo Domingo y el resto del país.</p>
                        <a class="inline-flex items-center text-sm font-bold text-secondary hover:text-primary" href="{{ route('blog') }}">
                            Leer más <span class="material-symbols-outlined text-base ml-1">arrow_forward</span>
                        </a>
                    </div>
                </article>

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

                <div class="grid grid-cols-1 items-start gap-12 lg:grid-cols-5">

                    {{-- Left: Glassmorphism Form Card (3 cols) --}}
                    <div class="lg:col-span-3 rounded-2xl border border-white/10 bg-white/5 p-8 shadow-2xl backdrop-blur-xl lg:p-10">
                        <form class="space-y-6" id="contacto-form">

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
                                        <option value="" class="bg-secondary">Selecciona una opción</option>
                                        <option class="bg-secondary" value="civil">Ingeniería Civil</option>
                                        <option class="bg-secondary" value="arquitectonico">Diseño Arquitectónico</option>
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
                                ></textarea>
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
                    <div class="lg:col-span-2 flex flex-col gap-5">

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
                    </div>

                </div>
            </div>
        </div>
    </section>

</x-layouts.public>
