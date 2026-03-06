<x-layouts.public title="Error 403 – Acceso Denegado">
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
        <div class="absolute -left-32 -top-32 h-64 w-64 rounded-full bg-red-500/10 blur-3xl"></div>
        <div class="absolute -bottom-20 -right-20 h-80 w-80 rounded-full bg-primary/20 blur-3xl"></div>

        <div class="relative z-10 mx-auto max-w-3xl px-4 text-center sm:px-6 lg:px-8">
            <h1 class="font-display text-[150px] font-black leading-none text-transparent bg-clip-text bg-gradient-to-br from-red-500 to-orange-400 drop-shadow-lg md:text-[200px]">
                403
            </h1>
            
            <div class="mt-4 mb-8 inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/5 px-5 py-2 backdrop-blur-md">
                <span class="flex h-2.5 w-2.5 rounded-full bg-red-500 animate-pulse"></span>
                <span class="text-sm font-bold uppercase tracking-widest text-neutral-400">¿Quién tiene la culpa?</span>
                <span class="text-sm font-bold text-white">Permisos</span>
            </div>
            
            <h2 class="text-3xl font-bold text-white md:text-5xl tracking-tight">
                "No puedes pasar".
            </h2>
            
            <p class="mx-auto mt-6 max-w-xl text-lg text-neutral-400 leading-relaxed">
                Esta área está restringida solo para personal autorizado. No tienes los permisos necesarios para acceder a esta sección de la obra.
            </p>
            
            <div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ url('/') }}" class="group relative w-full overflow-hidden rounded-xl bg-gradient-to-r from-primary to-orange-500 py-4 px-8 font-bold text-white shadow-xl shadow-primary/25 transition-all duration-300 hover:shadow-2xl hover:shadow-primary/40 hover:scale-[1.02] sm:w-auto">
                    <span class="relative z-10 flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-xl">home</span>
                        Volver al Inicio
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-500 to-primary opacity-0 transition-opacity group-hover:opacity-100"></div>
                </a>
            </div>
        </div>
    </section>
</x-layouts.public>
