<x-guest-layout>
    <div class="min-h-screen w-full flex bg-neutral-900 overflow-hidden font-sans">
        <!-- Parte Izquierda: Área Interactiva de Marca -->
        <div class="hidden lg:flex w-1/2 relative bg-secondary items-center justify-center p-12 overflow-hidden group">
            
            <!-- Fondo animado interactivo (blobs) -->
            <div class="absolute inset-0 w-full h-full z-0 overflow-hidden" id="interactive-bg">
                 <!-- Los blobs se inyectan mediante JS -->
            </div>
            
            <div class="absolute inset-0 bg-secondary/80 z-10 backdrop-blur-[2px]"></div>
            
            <div class="relative z-20 text-white max-w-lg transition-all duration-700 ease-out transform group-hover:scale-105">
                <div class="flex items-center gap-4 mb-10 transform -translate-y-4 opacity-0 animate-[fade-in-down_0.8s_forwards]">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary text-secondary shadow-lg shadow-primary/20">
                        <span class="material-symbols-outlined text-4xl">apartment</span>
                    </div>
                    <span class="text-4xl font-black tracking-tight">
                        INDAGO<span class="text-primary">ADMIN</span>
                    </span>
                </div>
                
                <h1 class="text-5xl lg:text-6xl font-black mb-6 leading-[1.1] tracking-tight opacity-0 animate-[fade-in-up_1s_0.3s_forwards]">
                    <span class="block">Gestión</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-yellow-300 to-white">Inteligente</span>
                </h1>
                
                <p class="text-lg text-neutral-300 mb-10 border-l-4 border-primary pl-5 py-1 opacity-0 animate-[fade-in-up_1s_0.6s_forwards]">
                    Accede al panel de control centralizado de la constructora. Gestiona proyectos, servicios y usuarios con una experiencia moderna y fluida.
                </p>

                <!-- Status indicators just for visuals -->
                <div class="flex gap-6 opacity-0 animate-[fade-in_1.5s_0.9s_forwards]">
                    <div class="flex items-center gap-2 text-sm text-neutral-400">
                        <div class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></div>
                        Sistema en línea
                    </div>
                    <div class="flex items-center gap-2 text-sm text-neutral-400">
                        <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                        V 2.0.1
                    </div>
                </div>
            </div>
        </div>

        <!-- Parte Derecha: Formulario de Login -->
        <div class="w-full lg:w-1/2 flex items-center justify-center bg-white relative z-20">
            <div class="w-full max-w-md px-8 py-10 sm:px-12 sm:py-16 opacity-0 animate-[fade-in-left_0.8s_forwards]">
                
                <!-- Logo para móvil -->
                <div class="lg:hidden flex items-center gap-3 mb-10 justify-center">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-secondary text-primary shadow-md">
                        <span class="material-symbols-outlined text-3xl">apartment</span>
                    </div>
                    <span class="text-3xl font-black tracking-tight text-secondary">
                        INDAGO<span class="text-primary">ADMIN</span>
                    </span>
                </div>

                <div class="text-center lg:text-left mb-10">
                    <h2 class="text-3xl font-bold text-secondary mb-3">Bienvenido/a de nuevo</h2>
                    <p class="text-neutral-500">Por favor, introduce tus credenciales para acceder a tu área de trabajo.</p>
                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div class="relative group mt-2">
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" 
                               class="block w-full px-5 pt-7 pb-3 text-secondary bg-neutral-50/50 border border-neutral-200 rounded-2xl appearance-none focus:outline-none focus:ring-0 focus:border-primary focus:bg-white transition-all peer shadow-sm" placeholder=" ">
                        <label for="email" class="absolute text-neutral-500 duration-300 transform -translate-y-3 scale-75 top-5 z-10 origin-[0] left-5 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 peer-focus:text-primary font-medium cursor-text">
                            Correo Electrónico
                        </label>
                        <div class="absolute inset-y-0 right-5 flex items-center pointer-events-none text-neutral-400 group-focus-within:text-primary transition-colors">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                    </div>

                    <!-- Password -->
                    <div class="relative group mt-2">
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                               class="block w-full px-5 pt-7 pb-3 text-secondary bg-neutral-50/50 border border-neutral-200 rounded-2xl appearance-none focus:outline-none focus:ring-0 focus:border-primary focus:bg-white transition-all peer shadow-sm" placeholder=" ">
                        <label for="password" class="absolute text-neutral-500 duration-300 transform -translate-y-3 scale-75 top-5 z-10 origin-[0] left-5 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3 peer-focus:text-primary font-medium cursor-text">
                            Contraseña
                        </label>
                        
                        <button type="button" id="togglePassword" class="absolute inset-y-0 right-5 flex items-center text-neutral-400 hover:text-primary focus:outline-none focus:text-primary transition-colors cursor-pointer">
                            <span class="material-symbols-outlined select-none" id="visibilityIcon">visibility_off</span>
                        </button>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between mt-6">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer group/rem">
                            <div class="relative flex items-center justify-center w-5 h-5 mr-3 border-2 border-neutral-300 rounded peer-checked:bg-primary peer-checked:border-primary transition-all duration-300 group-hover/rem:border-primary">
                                <input id="remember_me" type="checkbox" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer peer" name="remember">
                                <span class="material-symbols-outlined text-secondary text-[16px] opacity-0 peer-checked:opacity-100 transition-opacity duration-300 font-bold">check</span>
                            </div>
                            <span class="text-sm font-medium text-neutral-600 group-hover/rem:text-secondary transition-colors">{{ __('Recordarme en este equipo') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-sm font-semibold text-primary hover:text-yellow-600 transition-colors" href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit" class="group relative w-full flex justify-center py-4 px-4 border border-transparent text-base font-bold rounded-2xl text-secondary bg-primary hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-primary/30 transition-all duration-300 overflow-hidden shadow-lg hover:shadow-primary/40 hover:-translate-y-1">
                            <div class="absolute inset-0 w-1/4 h-full bg-white/30 skew-x-12 -translate-x-full group-hover:animate-[shimmer_1.5s_infinite]"></div>
                            <span class="relative flex items-center gap-2">
                                {{ __('Acceder al Panel') }}
                                <span class="material-symbols-outlined text-[20px] group-hover:translate-x-2 transition-transform duration-300">arrow_right_alt</span>
                            </span>
                        </button>
                    </div>
                </form>
                
                <div class="mt-12 text-center text-sm text-neutral-400">
                    &copy; {{ date('Y') }} Indago Constructora. Todos los derechos reservados.
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Styles for Animations -->
    <style>
        /* Include material icons if not globally included in guest view */
        @import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200');
        
        @keyframes shimmer {
            100% {
                transform: translateX(400%);
            }
        }
        @keyframes fade-in-down {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes fade-in-up {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes fade-in-left {
            0% { opacity: 0; transform: translateX(20px); }
            100% { opacity: 1; transform: translateX(0); }
        }
        @keyframes fade-in {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        
        .blob {
            position: absolute;
            filter: blur(60px);
            z-index: 0;
            opacity: 0.5;
            animation: float 15s infinite alternate ease-in-out;
            mix-blend-mode: screen;
        }
        
        @keyframes float {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.2); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        
        /* Material symbols basic fixes */
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>

    <!-- Interactivity Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password Toggle functionality
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            const visibilityIcon = document.getElementById('visibilityIcon');

            if(togglePassword && passwordInput) {
                togglePassword.addEventListener('click', function(e) {
                    e.preventDefault(); // prevent form submit just in case
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    visibilityIcon.textContent = type === 'password' ? 'visibility_off' : 'visibility';
                    
                    if(type === 'text') {
                        visibilityIcon.parentElement.classList.add('text-primary');
                        visibilityIcon.parentElement.classList.remove('text-neutral-400');
                    } else {
                        visibilityIcon.parentElement.classList.remove('text-primary');
                        visibilityIcon.parentElement.classList.add('text-neutral-400');
                    }
                });
            }

            // Interactive Background Generator
            const bgContainer = document.getElementById('interactive-bg');
            if(bgContainer) {
                const colors = ['#FACC15', '#3B82F6', '#10B981', '#6366F1']; // Primary yellow, blue, emerald, indigo
                const numBlobs = window.innerWidth > 1200 ? 5 : 3;
                
                for(let i = 0; i < numBlobs; i++) {
                    let blob = document.createElement('div');
                    blob.classList.add('blob');
                    
                    // Random sizes between 200px and 500px
                    const size = Math.random() * 300 + 200;
                    blob.style.width = size + 'px';
                    blob.style.height = size + 'px';
                    blob.style.borderRadius = '50%';
                    
                    // Assign colors
                    blob.style.background = colors[i % colors.length];
                    
                    // Random starting positions
                    blob.style.left = (Math.random() * 80 - 10) + '%';
                    blob.style.top = (Math.random() * 80 - 10) + '%';
                    
                    // Different animation timings for depth
                    blob.style.animationDelay = (Math.random() * 5) + 's';
                    blob.style.animationDuration = (Math.random() * 10 + 10) + 's';
                    
                    bgContainer.appendChild(blob);
                }

                // Interactive mouse follow effect (gentle parallax)
                const leftSection = bgContainer.parentElement;
                
                leftSection.addEventListener('mousemove', function(e) {
                    // Get mouse position relative to center of the container
                    const rect = leftSection.getBoundingClientRect();
                    const x = (e.clientX - rect.left - rect.width/2) * 0.05;
                    const y = (e.clientY - rect.top - rect.height/2) * 0.05;
                    
                    const blobs = bgContainer.querySelectorAll('.blob');
                    blobs.forEach((blob, index) => {
                        // Different depth per blob
                        const depth = (index + 1) * 0.5;
                        blob.style.transform = `translate(${x * depth}px, ${y * depth}px)`;
                    });
                });
                
                // Reset on mouse leave
                leftSection.addEventListener('mouseleave', function() {
                    const blobs = bgContainer.querySelectorAll('.blob');
                    blobs.forEach(blob => {
                        blob.style.transform = 'translate(0px, 0px)';
                    });
                });
            }
        });
    </script>
</x-guest-layout>
