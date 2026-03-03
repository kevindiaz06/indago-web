{{-- ============================================================
     Componente: Footer público – Indago Constructora
     Uso: <x-public.footer />
     ============================================================ --}}
<footer class="bg-secondary text-white">
    <div class="mx-auto max-w-7xl">

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
