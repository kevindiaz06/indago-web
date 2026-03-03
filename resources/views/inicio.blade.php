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
                <div class="group relative overflow-hidden rounded-xl bg-white p-8 shadow-sm ring-1 ring-neutral-100 transition-all hover:shadow-xl hover:-translate-y-1">
                    <div class="mb-6 inline-flex h-14 w-14 items-center justify-center rounded-lg bg-neutral-100 text-secondary transition-colors group-hover:bg-primary group-hover:text-white">
                        <span class="material-symbols-outlined text-3xl">apartment</span>
                    </div>
                    <h4 class="mb-3 text-xl font-bold text-secondary">Arquitectura</h4>
                    <p class="text-neutral-600 leading-relaxed">Diseño arquitectónico de espacios residenciales, comerciales e institucionales adaptados a tus necesidades.</p>
                    <div class="absolute bottom-0 left-0 h-1 w-0 bg-primary transition-all duration-300 group-hover:w-full"></div>
                </div>

                {{-- Service 2 --}}
                <div class="group relative overflow-hidden rounded-xl bg-white p-8 shadow-sm ring-1 ring-neutral-100 transition-all hover:shadow-xl hover:-translate-y-1">
                    <div class="mb-6 inline-flex h-14 w-14 items-center justify-center rounded-lg bg-neutral-100 text-secondary transition-colors group-hover:bg-primary group-hover:text-white">
                        <span class="material-symbols-outlined text-3xl">engineering</span>
                    </div>
                    <h4 class="mb-3 text-xl font-bold text-secondary">Ingeniería Civil</h4>
                    <p class="text-neutral-600 leading-relaxed">Cálculo estructural, supervisión de obras y soluciones de ingeniería civil para proyectos de toda escala.</p>
                    <div class="absolute bottom-0 left-0 h-1 w-0 bg-primary transition-all duration-300 group-hover:w-full"></div>
                </div>

                {{-- Service 3 --}}
                <div class="group relative overflow-hidden rounded-xl bg-white p-8 shadow-sm ring-1 ring-neutral-100 transition-all hover:shadow-xl hover:-translate-y-1">
                    <div class="mb-6 inline-flex h-14 w-14 items-center justify-center rounded-lg bg-neutral-100 text-secondary transition-colors group-hover:bg-primary group-hover:text-white">
                        <span class="material-symbols-outlined text-3xl">construction</span>
                    </div>
                    <h4 class="mb-3 text-xl font-bold text-secondary">Construcción</h4>
                    <p class="text-neutral-600 leading-relaxed">Ejecución de obras con los más altos estándares de calidad, cumplimiento de plazos y control de costos.</p>
                    <div class="absolute bottom-0 left-0 h-1 w-0 bg-primary transition-all duration-300 group-hover:w-full"></div>
                </div>

                {{-- Service 4 --}}
                <div class="group relative overflow-hidden rounded-xl bg-white p-8 shadow-sm ring-1 ring-neutral-100 transition-all hover:shadow-xl hover:-translate-y-1">
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
                        <a class="inline-flex items-center text-sm font-bold text-secondary hover:text-primary" href="#">
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
                        <a class="inline-flex items-center text-sm font-bold text-secondary hover:text-primary" href="#">
                            Leer más <span class="material-symbols-outlined text-base ml-1">arrow_forward</span>
                        </a>
                    </div>
                </article>

            </div>
        </div>
    </section>

    {{-- ========================================================
         Contact / Quote Form
         ======================================================== --}}
    <section id="contacto" class="bg-secondary py-16 lg:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                {{-- Left: Form --}}
                <div>
                    <h2 class="mb-2 text-3xl font-bold text-white">Solicita una Consulta</h2>
                    <p class="mb-8 text-neutral-400">Completa el formulario y un especialista de Indago Constructora se pondrá en contacto contigo en menos de 2 horas.</p>
                    <form class="space-y-4">
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="mb-1 block text-sm font-medium text-neutral-300">Nombre Completo</label>
                                <input
                                    class="w-full rounded-lg border-neutral-700 bg-secondary/50 px-4 py-3 text-white placeholder-neutral-500 focus:border-primary focus:ring-primary"
                                    placeholder="Juan Pérez"
                                    type="text"
                                />
                            </div>
                            <div>
                                <label class="mb-1 block text-sm font-medium text-neutral-300">Empresa</label>
                                <input
                                    class="w-full rounded-lg border-neutral-700 bg-secondary/50 px-4 py-3 text-white placeholder-neutral-500 focus:border-primary focus:ring-primary"
                                    placeholder="Constructora SA"
                                    type="text"
                                />
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="mb-1 block text-sm font-medium text-neutral-300">Teléfono</label>
                                <input
                                    class="w-full rounded-lg border-neutral-700 bg-secondary/50 px-4 py-3 text-white placeholder-neutral-500 focus:border-primary focus:ring-primary"
                                    placeholder="+52 55 1234 5678"
                                    type="tel"
                                />
                            </div>
                            <div>
                                <label class="mb-1 block text-sm font-medium text-neutral-300">Tipo de Obra</label>
                                <select class="w-full rounded-lg border-neutral-700 bg-secondary/50 px-4 py-3 text-white focus:border-primary focus:ring-primary">
                                    <option>Construcción Residencial</option>
                                    <option>Construcción Comercial</option>
                                    <option>Construcción Industrial</option>
                                    <option>Ingeniería Civil</option>
                                    <option>Diseño Arquitectónico</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="mb-1 block text-sm font-medium text-neutral-300">Mensaje</label>
                            <textarea
                                class="w-full rounded-lg border-neutral-700 bg-secondary/50 px-4 py-3 text-white placeholder-neutral-500 focus:border-primary focus:ring-primary"
                                placeholder="Cuéntanos sobre tu proyecto de construcción o diseño..."
                                rows="4"
                            ></textarea>
                        </div>
                        <button
                            class="mt-2 w-full rounded-lg bg-primary py-4 text-center font-bold text-white transition-colors hover:bg-orange-600 sm:w-auto sm:px-12"
                            type="button"
                        >
                            Enviar Solicitud
                        </button>
                    </form>
                </div>

                {{-- Right: Map & Contact Info --}}
                <div class="relative min-h-[400px] rounded-xl overflow-hidden bg-neutral-800">
                    <img
                        alt="Ubicación de la sede central"
                        class="absolute inset-0 h-full w-full object-cover opacity-60 grayscale"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHsMzeHb88braFlj_009KB-HXZL84wHKhnhnpPHvOVGTCmWl6Kgeipe3dxiA_v65ndbwUtmVWdmV69JTCccwAL3KVtwhZkq9G6eef2s9VJiwEHxN9Qr4UWCquPyFYbQv57Jsx45GzcVoSWMEOQHnNzZxbn5aCpBGLLgxLcV_6_8cSn6IZQwPPjPBsGqbNkEKdAb_D4EaVwypJxMh4J0lhwdMkoh3zw-StlmQu7mgf9hwobuk-IP3oybybp6AK4NkQLy-SIzAG5Bb4"
                    />
                    <div class="absolute inset-0 bg-secondary/60"></div>
                    <div class="absolute bottom-8 left-8 right-8 rounded-xl bg-white p-6 shadow-2xl text-neutral-900 max-w-sm">
                        <h4 class="mb-4 flex items-center gap-2 text-lg font-bold text-secondary">
                            <span class="material-symbols-outlined text-primary">location_on</span>
                            Sede Principal
                        </h4>
                        <p class="mb-1 text-sm text-neutral-600">Edif. B10, Local 1D</p>
                        <p class="mb-1 text-sm text-neutral-600">Av. Pedro Livio Cedeño, Ensanche La Fé</p>
                        <p class="mb-4 text-sm text-neutral-600">Santo Domingo, DN – República Dominicana</p>
                        <div class="flex gap-4 border-t border-neutral-100 pt-4">
                            <a class="flex items-center gap-1 text-sm font-bold text-secondary hover:text-primary" href="tel:8098968627">
                                <span class="material-symbols-outlined text-[18px]">call</span> 809-896-8627
                            </a>
                            <a class="flex items-center gap-1 text-sm font-bold text-secondary hover:text-primary" href="mailto:grupoindago@gmail.com">
                                <span class="material-symbols-outlined text-[18px]">mail</span> grupoindago@gmail.com
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layouts.public>
