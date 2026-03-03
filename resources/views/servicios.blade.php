<x-layouts.public title="Servicios – Indago Constructora | Ingeniería & Arquitectura en RD">

    {{-- =============================================
         HERO
         ============================================= --}}
    <section class="relative overflow-hidden bg-secondary py-28">
        <div class="absolute inset-0 z-0 opacity-10"
             style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuBx1UmMJG8uucbHKXwEXYfja1UEL6hd9hX9qLjL9kOVBA7WUipbkXk_TnytGK0Spz8_ybcKDKPCcEsf3kbEmdYZFrr3c35pSu7ClDoHg2iOcf3FoMPc8A4AQp_TXX85AmVhW-7_MfGVTR0pp9Gka5ij9WJjjbD8MU8dHpdagShkuT3SPqu5vl97LDfN8S7tK5RFu8TA1pJZI4NaMNBZguPFP9Cb1qscTut92WeJZvKtf331eqIdtizZguAB218gIl2_Lr-uFhrG16o');background-size:cover;background-position:center;"></div>
        <div class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-primary to-transparent"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-4 py-1.5">
                <span class="flex h-2 w-2 rounded-full bg-primary animate-pulse"></span>
                <span class="text-xs font-semibold uppercase tracking-widest text-primary">Lo que hacemos</span>
            </div>
            <h1 class="font-display text-5xl font-black leading-tight text-white md:text-6xl">
                Soluciones integrales de<br>
                <span class="text-primary">Ingeniería & Construcción</span>
            </h1>
            <p class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-neutral-300">
                Desde el diseño hasta la entrega de llaves, Indago Constructora ofrece servicios especializados para cada etapa de su proyecto en la República Dominicana.
            </p>
            {{-- Stat bar --}}
            <div id="hero-stat-bar" class="mt-12 grid grid-cols-3 gap-4 max-w-xl mx-auto">
                <div class="hero-stat-card rounded-xl bg-white/5 border border-white/10 px-4 py-4 backdrop-blur-sm cursor-default" style="opacity:0;transform:translateY(24px)">
                    <span class="block text-3xl font-black text-primary hero-stat-counter" data-target="15" data-prefix="+">+0</span>
                    <span class="text-xs uppercase tracking-wider text-neutral-400">Años</span>
                </div>
                <div class="hero-stat-card rounded-xl bg-white/5 border border-white/10 px-4 py-4 backdrop-blur-sm cursor-default" style="opacity:0;transform:translateY(24px)">
                    <span class="block text-3xl font-black text-primary hero-stat-counter" data-target="200" data-prefix="+">+0</span>
                    <span class="text-xs uppercase tracking-wider text-neutral-400">Proyectos</span>
                </div>
                <div class="hero-stat-card rounded-xl bg-white/5 border border-white/10 px-4 py-4 backdrop-blur-sm cursor-default" style="opacity:0;transform:translateY(24px)">
                    <span class="block text-3xl font-black text-primary hero-stat-counter" data-target="4">0</span>
                    <span class="text-xs uppercase tracking-wider text-neutral-400">Líneas de servicio</span>
                </div>
            </div>
        </div>
    </section>

    {{-- =============================================
         SERVICIO 1: CONSTRUCCIÓN RESIDENCIAL
         ============================================= --}}
    <section class="py-24 bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-2">

                {{-- Imagen --}}
                <div class="relative">
                    <div class="absolute -left-4 -top-4 h-full w-full rounded-2xl border-2 border-primary/20"></div>
                    <img
                        alt="Torre de apartamentos Indago Constructora"
                        class="relative z-10 h-[480px] w-full rounded-2xl object-cover shadow-2xl"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCjyRgwfDbCRtl8Yy2SCRczQ4aZkCLvcwQOR9s1ALRUZuIovvE7lEvIl1YSPUt3EshBiqJK2w1Q-XecQLsU0NvVq3InpguGm7Vu7kaeDXG1ev0JkNdPA80AK4prnIamHMoyOOrHV6JyVBDBG_8YRYv3Z0mTFTNgMsyk0WlhEhjIwZtHzfylYaiVtfJZassh2gk6QhR8mphf0c0Wkz2CsVwSSdhwR5EVaLlJRZrGfPp_vHd-nUTh6ZaZZd2Hy3G2zJrZxvWSo1TfmHs"
                    />
                    {{-- Badge flotante --}}
                    <div class="absolute -bottom-5 -right-5 z-20 rounded-xl bg-primary px-6 py-4 shadow-xl shadow-primary/30 text-white">
                        <span class="block text-3xl font-black">+80</span>
                        <span class="text-xs font-semibold uppercase tracking-wider">Proyectos residenciales</span>
                    </div>
                </div>

                {{-- Texto --}}
                <div>
                    <div class="mb-4 inline-flex items-center gap-2 rounded-lg bg-primary/10 px-3 py-1.5">
                        <span class="material-symbols-outlined text-sm text-primary">apartment</span>
                        <span class="text-xs font-bold uppercase tracking-wider text-primary">Servicio 01</span>
                    </div>
                    <h2 class="mb-4 font-display text-4xl font-black text-secondary">Construcción Residencial</h2>
                    <p class="mb-6 text-lg leading-relaxed text-neutral-600">
                        Diseñamos y construimos desde villas unifamiliares hasta torres de apartamentos de gran altura, integrando arquitectura moderna con la funcionalidad que exige el mercado dominicano.
                    </p>

                    <div class="space-y-4 mb-8">
                        @php $items1 = [
                            ['icon'=>'domain','texto'=>'Torres de apartamentos premium de hasta 20 pisos'],
                            ['icon'=>'villa','texto'=>'Villas y residencias de lujo en urbanizaciones cerradas'],
                            ['icon'=>'holiday_village','texto'=>'Complejos habitacionales VIS y proyectos sociales'],
                            ['icon'=>'pool','texto'=>'Áreas de amenidades: piscinas, gimnasios y terrazas'],
                        ]; @endphp
                        @foreach($items1 as $it)
                        <div class="flex items-center gap-3">
                            <div class="shrink-0 flex h-9 w-9 items-center justify-center rounded-lg bg-secondary/10">
                                <span class="material-symbols-outlined text-[18px] text-secondary">{{ $it['icon'] }}</span>
                            </div>
                            <span class="text-neutral-700">{{ $it['texto'] }}</span>
                        </div>
                        @endforeach
                    </div>

                    <a href="{{ route('inicio') }}#contacto" class="inline-flex items-center gap-2 rounded-lg bg-secondary px-6 py-3 text-sm font-bold text-white hover:bg-secondary/80 transition-colors">
                        Solicitar propuesta <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- =============================================
         SERVICIO 2: CONSTRUCCIÓN COMERCIAL E INDUSTRIAL
         ============================================= --}}
    <section class="py-24 bg-neutral-50">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-2">

                {{-- Texto --}}
                <div class="lg:order-1">
                    <div class="mb-4 inline-flex items-center gap-2 rounded-lg bg-primary/10 px-3 py-1.5">
                        <span class="material-symbols-outlined text-sm text-primary">warehouse</span>
                        <span class="text-xs font-bold uppercase tracking-wider text-primary">Servicio 02</span>
                    </div>
                    <h2 class="mb-4 font-display text-4xl font-black text-secondary">Construcción Comercial e Industrial</h2>
                    <p class="mb-6 text-lg leading-relaxed text-neutral-600">
                        Ejecutamos proyectos comerciales e industriales con estructuras de acero y concreto diseñadas para máxima eficiencia operativa, cumpliendo todas las normas técnicas vigentes en la República Dominicana.
                    </p>

                    <div class="space-y-4 mb-8">
                        @php $items2 = [
                            ['icon'=>'storefront',   'texto'=>'Centros comerciales, plazas y locales comerciales'],
                            ['icon'=>'factory',      'texto'=>'Naves industriales y almacenes de gran escala'],
                            ['icon'=>'business',     'texto'=>'Edificios corporativos y torres de oficinas'],
                            ['icon'=>'local_parking','texto'=>'Parqueos multinivel y estructuras de soporte'],
                        ]; @endphp
                        @foreach($items2 as $it)
                        <div class="flex items-center gap-3">
                            <div class="shrink-0 flex h-9 w-9 items-center justify-center rounded-lg bg-secondary/10">
                                <span class="material-symbols-outlined text-[18px] text-secondary">{{ $it['icon'] }}</span>
                            </div>
                            <span class="text-neutral-700">{{ $it['texto'] }}</span>
                        </div>
                        @endforeach
                    </div>

                    <a href="{{ route('inicio') }}#contacto" class="inline-flex items-center gap-2 rounded-lg bg-secondary px-6 py-3 text-sm font-bold text-white hover:bg-secondary/80 transition-colors">
                        Solicitar propuesta <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>

                {{-- Imagen --}}
                <div class="relative lg:order-2">
                    <div class="absolute -right-4 -top-4 h-full w-full rounded-2xl border-2 border-primary/20"></div>
                    <img
                        alt="Nave industrial Indago Constructora"
                        class="relative z-10 h-[480px] w-full rounded-2xl object-cover shadow-2xl"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVvpXvUKpHDaWrd8KTYho9VV4SBUS9DqqdJF_qVVcfuGwXSvawfVbnsCGwngDoBgpnq8PtSMQca01MzIRUFKyoPaGYf8FwgaqrKPIA6jd3wd4QKaNs1i-HJOkU4Ud36hjiEWawsoJCvBXS4uktmfNfj1vwvwJ3kbu4rTAnLrbfQ0f7sKMoo2Mxwb7fJ0lGykv1Xid_O-T9aSPGBqGQiZhsjoccGLwFvgx26PiUgGqQBuv5sEY55nulM4I69EcB6e3I3r3fgYAjNFA"
                    />
                    <div class="absolute -bottom-5 -left-5 z-20 rounded-xl bg-primary px-6 py-4 shadow-xl shadow-primary/30 text-white">
                        <span class="block text-3xl font-black">+60</span>
                        <span class="text-xs font-semibold uppercase tracking-wider">Proyectos comerciales</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =============================================
         SERVICIO 3: OBRAS CIVILES
         ============================================= --}}
    <section class="py-24 bg-secondary relative overflow-hidden">
        <div class="absolute inset-0 opacity-5" style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuAhGDEZ9vIzTKNqLovc5XRYi89t1WivczkHuuDDp1mgFvjFIlMTJv5DoGNYZQ2c8FBCK8XmP8qVnbycmQ3Y3tKW5hn_YiU1bZ9TqSqnNGMFj0Gvv3PYxfgxdBuVhPvuHR5pK_aIETAv-5kkV9e5lRr7HvH-p8DK2Zn_6iLv4d9RdqKo3m8wQjdV2FMoJ56WsJXXi-2MlN_sZqcXuY7bvU13Yc1QJqaHzE1Nq7pZ1eNHHLwkjEp5d4P0'); background-size:cover;background-position:center;"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-16 text-center">
                <div class="mb-4 inline-flex items-center gap-2 rounded-lg bg-primary/15 px-3 py-1.5">
                    <span class="material-symbols-outlined text-sm text-primary">road</span>
                    <span class="text-xs font-bold uppercase tracking-wider text-primary">Servicio 03</span>
                </div>
                <h2 class="font-display text-4xl font-black text-white md:text-5xl">Obras Civiles</h2>
                <p class="mt-4 mx-auto max-w-2xl text-lg leading-relaxed text-neutral-300">
                    Contamos con la maquinaria y la experiencia técnica para intervenir el territorio con precisión: desde movimiento de tierra a gran escala hasta sistemas de drenaje urbano.
                </p>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @php $civiles = [
                    ['icon'=>'construction', 'titulo'=>'Movimiento de Tierra',      'desc'=>'Nivelación, corte, relleno y compactación de suelos con maquinaria pesada certificada.'],
                    ['icon'=>'road',         'titulo'=>'Asfaltado y Pavimentación', 'desc'=>'Vías primarias y secundarias, estacionamientos y caminos interiores con mezcla asfáltica de calidad.'],
                    ['icon'=>'water',        'titulo'=>'Redes de Drenaje',          'desc'=>'Diseño e instalación de sistemas pluviales y sanitarios para entornos urbanos e industriales.'],
                    ['icon'=>'water',       'titulo'=>'Puentes e Infraestructura', 'desc'=>'Obras de arte vial: alcantarillas, puentes peatonales y estructuras de soporte de vías.'],
                ]; @endphp

                @foreach($civiles as $c)
                <div class="group rounded-xl bg-white/5 border border-white/10 p-8 backdrop-blur-sm transition-all hover:bg-white/10 hover:border-primary/50">
                    <div class="mb-5 inline-flex h-14 w-14 items-center justify-center rounded-xl bg-primary/15 group-hover:bg-primary transition-colors">
                        <span class="material-symbols-outlined text-2xl text-primary group-hover:text-white">{{ $c['icon'] }}</span>
                    </div>
                    <h4 class="mb-3 text-lg font-bold text-white">{{ $c['titulo'] }}</h4>
                    <p class="text-sm leading-relaxed text-neutral-400">{{ $c['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- =============================================
         SERVICIO 4: CONSULTORÍA E INGENIERÍA
         ============================================= --}}
    <section class="py-24 bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-2">

                {{-- Imagen --}}
                <div class="relative">
                    <div class="absolute -left-4 -bottom-4 h-full w-full rounded-2xl bg-primary/10"></div>
                    <img
                        alt="Ingenieros revisando planos en obra"
                        class="relative z-10 h-[460px] w-full rounded-2xl object-cover shadow-2xl"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdlQJnNzaaXsRUTVKSvFPss7OVxlLfaCNgAI2bt3tDydVlHofZomK-J_OOc58qoRH7sMKA4ecP6DEWU2Q3WXVjCXLy719CsSsM1s4OWYHcuv0dkN6w-ry3UoB57g-kjDH_Z5oXDcyDyTn-SaTSgakPUzo05UyHaC1QisnfDx_HNdld6QvhY4QoLgD06oPFMZYLWmuQjLktAiShHMjplxO9ml8mxWKcfRJvu38yK3mfOa_p2VtAgaUlSbHhL5KeC-bc6f5Jhcs7GMA"
                    />
                </div>

                {{-- Texto --}}
                <div>
                    <div class="mb-4 inline-flex items-center gap-2 rounded-lg bg-primary/10 px-3 py-1.5">
                        <span class="material-symbols-outlined text-sm text-primary">engineering</span>
                        <span class="text-xs font-bold uppercase tracking-wider text-primary">Servicio 04</span>
                    </div>
                    <h2 class="mb-4 font-display text-4xl font-black text-secondary">Consultoría e Ingeniería</h2>
                    <p class="mb-6 text-lg leading-relaxed text-neutral-600">
                        Nuestro equipo técnico ofrece asesoría especializada en todas las etapas del ciclo de un proyecto: desde la concepción hasta la entrega y recepción ante las autoridades competentes.
                    </p>

                    <div class="grid gap-4 sm:grid-cols-2 mb-8">
                        @php $consul = [
                            ['icon'=>'calculate',        'titulo'=>'Presupuestos',          'desc'=>'Estimaciones precisas con control de costos en tiempo real.'],
                            ['icon'=>'supervised_user_circle','titulo'=>'Supervisión Técnica','desc'=>'Residentes de obra certificados en cada proyecto.'],
                            ['icon'=>'architecture',     'titulo'=>'Diseño BIM',            'desc'=>'Modelado 3D y detección de interferencias antes de construir.'],
                            ['icon'=>'gavel',            'titulo'=>'Gestión de Permisos',   'desc'=>'Trámites ante MOPC, ayuntamientos y CODIA.'],
                        ]; @endphp

                        @foreach($consul as $con)
                        <div class="rounded-xl border border-neutral-100 bg-neutral-50 p-5 transition-all hover:border-primary hover:shadow-md">
                            <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-secondary text-primary">
                                <span class="material-symbols-outlined text-xl">{{ $con['icon'] }}</span>
                            </div>
                            <h5 class="mb-1 font-bold text-secondary">{{ $con['titulo'] }}</h5>
                            <p class="text-sm text-neutral-500">{{ $con['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>

                    <a href="{{ route('inicio') }}#contacto" class="inline-flex items-center gap-2 rounded-lg bg-primary px-6 py-3 text-sm font-bold text-white hover:bg-orange-500 transition-colors shadow-lg shadow-primary/30">
                        Hablar con un especialista <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- =============================================
         METODOLOGÍA DE TRABAJO
         ============================================= --}}
    <section class="py-24 bg-neutral-50">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-16 text-center">
                <h2 class="text-sm font-bold uppercase tracking-widest text-primary mb-2">Cómo Trabajamos</h2>
                <h3 class="font-display text-4xl font-bold text-secondary">Metodología de Trabajo</h3>
                <p class="mt-4 mx-auto max-w-xl text-neutral-500">Un proceso claro y transparente que garantiza la entrega a tiempo, dentro del presupuesto y con la calidad prometida.</p>
            </div>

            {{-- Proceso visual --}}
            <div class="relative">
                {{-- Línea conectora (solo desktop) --}}
                <div class="absolute left-0 right-0 top-16 hidden h-0.5 bg-gradient-to-r from-transparent via-primary to-transparent lg:block"></div>

                <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-5">
                    @php $pasos = [
                        ['num'=>'01','icon'=>'search',             'titulo'=>'Diagnóstico',    'desc'=>'Analizamos el terreno, el contexto y los requerimientos del cliente.'],
                        ['num'=>'02','icon'=>'architecture',       'titulo'=>'Planificación',  'desc'=>'Planos, presupuesto, cronograma y gestión de permisos ante autoridades.'],
                        ['num'=>'03','icon'=>'construction',       'titulo'=>'Ejecución',      'desc'=>'Construcción con supervisión técnica diaria y control de calidad.'],
                        ['num'=>'04','icon'=>'rule',               'titulo'=>'Control',        'desc'=>'Inspecciones, pruebas de materiales y correcciones en tiempo real.'],
                        ['num'=>'05','icon'=>'key',                'titulo'=>'Entrega',        'desc'=>'Recepción final, documentación legal y garantías post-obra.'],
                    ]; @endphp

                    @foreach($pasos as $i => $paso)
                    <div class="relative flex flex-col items-center text-center">
                        {{-- Número y círculo --}}
                        <div class="relative mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-secondary shadow-xl shadow-secondary/20 ring-4 ring-white z-10">
                            <span class="material-symbols-outlined text-2xl text-primary">{{ $paso['icon'] }}</span>
                            <div class="absolute -right-1 -top-1 flex h-6 w-6 items-center justify-center rounded-full bg-primary text-[10px] font-black text-white">{{ $paso['num'] }}</div>
                        </div>
                        {{-- Flecha entre pasos (solo desktop, no en el último) --}}
                        @if($i < count($pasos) - 1)
                        <div class="absolute left-[calc(50%+2rem)] top-7 hidden w-[calc(100%-4rem)] lg:block">
                            {{-- decorative, handled by the line above --}}
                        </div>
                        @endif
                        <h5 class="mb-2 text-lg font-bold text-secondary">{{ $paso['titulo'] }}</h5>
                        <p class="text-sm leading-relaxed text-neutral-500">{{ $paso['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Garantías --}}
            <div class="mt-20 grid gap-6 sm:grid-cols-3">
                @php $garantias = [
                    ['icon'=>'timer',         'color'=>'bg-blue-50 text-blue-700',    'titulo'=>'Entrega en plazo',          'desc'=>'Garantizamos el cronograma acordado o aplicamos penalizaciones contractuales.'],
                    ['icon'=>'price_check',   'color'=>'bg-green-50 text-green-700',  'titulo'=>'Presupuesto sin sorpresas', 'desc'=>'Transparencia total en costos. Cualquier variación se notifica y aprueba antes de ejecutarse.'],
                    ['icon'=>'workspace_premium','color'=>'bg-amber-50 text-amber-700','titulo'=>'Garantía post-obra',       'desc'=>'12 meses de garantía en acabados y estructura, con soporte técnico disponible.'],
                ]; @endphp
                @foreach($garantias as $g)
                <div class="flex items-start gap-4 rounded-xl bg-white border border-neutral-100 p-6 shadow-sm">
                    <div class="shrink-0 flex h-12 w-12 items-center justify-center rounded-xl {{ $g['color'] }}">
                        <span class="material-symbols-outlined text-xl">{{ $g['icon'] }}</span>
                    </div>
                    <div>
                        <h5 class="mb-1 font-bold text-secondary">{{ $g['titulo'] }}</h5>
                        <p class="text-sm text-neutral-500">{{ $g['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- =============================================
         CTA Final
         ============================================= --}}
    <section class="py-20 bg-primary">
        <div class="mx-auto max-w-4xl px-4 text-center">
            <h2 class="font-display text-4xl font-black text-white md:text-5xl">¿Tienes un proyecto en mente?</h2>
            <p class="mt-4 text-lg text-white/80">Cuéntanos los detalles y te presentamos una propuesta técnica sin costo en menos de 48 horas.</p>
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
