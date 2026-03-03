<x-guest-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-100 pt-6 sm:pt-0">
        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="flex justify-center mb-6">
                <span class="text-2xl font-black text-secondary">INDAGO<span class="text-primary">CONSTRUCTORA</span></span>
            </div>

            <p class="mb-6 text-sm text-gray-600 text-center">
                {{ __('Esta es una zona protegida. Por favor, confirma tu contraseña para continuar.') }}
            </p>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="mb-4">
                    <x-input-label for="password" :value="__('Contraseña')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex justify-end mt-4">
                    <x-primary-button>{{ __('Confirmar') }}</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
