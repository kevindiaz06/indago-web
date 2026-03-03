<x-guest-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-100 pt-6 sm:pt-0">
        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="flex justify-center mb-6">
                <span class="text-2xl font-black text-secondary">INDAGO<span class="text-primary">CONSTRUCTORA</span></span>
            </div>

            <p class="mb-6 text-sm text-gray-600 text-center">
                {{ __('Gracias por registrarte. Antes de continuar, verifica tu correo electrónico haciendo clic en el enlace que te enviamos. Si no lo recibiste, solicita uno nuevo.') }}
            </p>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ __('Se ha enviado un nuevo enlace de verificación a tu correo.') }}
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <x-primary-button>{{ __('Reenviar Correo') }}</x-primary-button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-gray-600 hover:text-primary">
                        {{ __('Cerrar Sesión') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
