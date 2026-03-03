{{-- ============================================================
     Componente: Footer público – Ferretería Moderna Industrial
     Uso: <x-public.footer />
     ============================================================ --}}
<footer class="bg-secondary text-white">
    <div class="mx-auto max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-2">

            {{-- Left: Contact / Quote Form --}}
            <div class="p-8 lg:p-16">
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
            <div class="relative min-h-[400px] bg-neutral-800 lg:min-h-auto">
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

        {{-- Bottom Bar --}}
        <div class="border-t border-white/10 px-8 py-6 text-center text-sm text-neutral-500 sm:flex sm:justify-between sm:text-left">
            <p>© {{ date('Y') }} Indago Constructora. Todos los derechos reservados.</p>
            <div class="mt-4 flex justify-center gap-6 sm:mt-0">
                <a class="hover:text-white transition-colors" href="#">Aviso de Privacidad</a>
                <a class="hover:text-white transition-colors" href="#">Términos y Condiciones</a>
            </div>
        </div>
    </div>
</footer>
