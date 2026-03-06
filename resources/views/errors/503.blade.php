<x-layouts.public title="Error 503 – Servicio no Disponible">
    <section class="relative flex min-h-[80vh] items-center justify-center overflow-hidden bg-secondary py-20">
        {{-- Background Image + Overlays --}}
        <div class="absolute inset-0 z-0">
            <img
                alt="Fondo de construcción"
                class="h-full w-full object-cover opacity-10"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3Y18_Q3MLN_kagSJUirckmWlWltF8eYFzHS6qa5byMJK7sG6tRXaPJnCE6zzi0WrdR2P4NTctGRdSEBDl4xHtqHMcBs5hKl_09eFua_7lsP8hwp9Q6DLoprrmxUrtj7mdATuEXWOZLQtwiidcPJmMd1QfMsBjTnqLTz1rgBA_IxtIjy96iZ6vfoxUyHrZn0eOqfwPwqwVt6FS64upYL-dR90RU2dEj9HKNgDZQBDxrAu04JUo7sJc8qLbwqXH4Cp5q36IMgrAwgM"
            />
            <div class="absolute inset-0 bg-gradient-to-br from-secondary via-secondary/95 to-secondary/80"></div>
        </div>

        {{-- Decorative Elements --}}
        <div class="absolute -left-32 -top-32 h-64 w-64 rounded-full bg-blue-500/10 blur-3xl"></div>
        <div class="absolute -bottom-20 -right-20 h-80 w-80 rounded-full bg-primary/20 blur-3xl"></div>

        <div class="relative z-10 mx-auto max-w-3xl px-4 text-center sm:px-6 lg:px-8">
            <h1 class="font-display text-[150px] font-black leading-none text-transparent bg-clip-text bg-gradient-to-br from-blue-400 to-cyan-300 drop-shadow-lg md:text-[200px]">
                503
            </h1>
            
            <div class="mt-4 mb-8 inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/5 px-5 py-2 backdrop-blur-md">
                <span class="flex h-2.5 w-2.5 rounded-full bg-blue-400 animate-pulse"></span>
                <span class="text-sm font-bold uppercase tracking-widest text-neutral-400">¿Quién tiene la culpa?</span>
                <span class="text-sm font-bold text-white">El tráfico</span>
            </div>
            
            <h2 class="text-3xl font-bold text-white md:text-5xl tracking-tight">
                "Estamos llenos, vuelve luego".
            </h2>
            
            <p class="mx-auto mt-6 max-w-xl text-lg text-neutral-400 leading-relaxed">
                Nuestros servidores están experimentando una alta demanda de tráfico ahora mismo o están bajo mantenimiento programado. El servicio se reanudará en breve.
            </p>
            
            <div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-4">
                <button onclick="window.location.reload()" class="group relative w-full overflow-hidden rounded-xl bg-gradient-to-r from-blue-500 to-cyan-500 py-4 px-8 font-bold text-white shadow-xl shadow-blue-500/25 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/40 hover:scale-[1.02] sm:w-auto">
                    <span class="relative z-10 flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-xl">refresh</span>
                        Recargar Página
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500 to-blue-500 opacity-0 transition-opacity group-hover:opacity-100"></div>
                </button>
            </div>
        </div>
    </section>
</x-layouts.public>
