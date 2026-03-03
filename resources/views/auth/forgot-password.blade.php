<x-guest-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-100 pt-6 sm:pt-0">
        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="flex justify-center mb-6">
                <span class="text-2xl font-black text-secondary">INDAGO<span class="text-primary">CONSTRUCTORA</span></span>
            </div>

            <p class="mb-6 text-sm text-gray-600 text-center">
                {{ __('¿Olvidaste tu contraseña? Ingresa tu correo y te enviaremos un enlace para restablecerla.') }}
            </p>

            @if (session('status'))
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-4">
                    <x-input-label for="email" :value="__('Correo Electrónico')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>{{ __('Enviar Enlace') }}</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
