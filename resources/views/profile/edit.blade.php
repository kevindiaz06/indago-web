<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Update Profile Information --}}
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="text-lg font-semibold text-gray-900 mb-1">Información de Perfil</h2>
                    <p class="text-sm text-gray-600 mb-6">Actualiza el nombre y correo electrónico de tu cuenta.</p>

                    @if (session('status') === 'profile-updated')
                        <div class="mb-4 p-3 rounded bg-green-50 text-green-700 text-sm">Perfil actualizado correctamente.</div>
                    @endif

                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PATCH')

                        <div class="mb-4">
                            <x-input-label for="name" :value="__('Nombre')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="email" :value="__('Correo Electrónico')" />
                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Guardar') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Update Password --}}
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="text-lg font-semibold text-gray-900 mb-1">Actualizar Contraseña</h2>
                    <p class="text-sm text-gray-600 mb-6">Usa una contraseña larga y aleatoria para mayor seguridad.</p>

                    @if (session()->get('status') === 'password-updated')
                        <div class="mb-4 p-3 rounded bg-green-50 text-green-700 text-sm">Contraseña actualizada correctamente.</div>
                    @endif

                    <form method="POST" action="{{ route('profile.password') }}">
                        @csrf

                        <div class="mb-4">
                            <x-input-label for="current_password" :value="__('Contraseña Actual')" />
                            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="password" :value="__('Nueva Contraseña')" />
                            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                        </div>

                        <x-primary-button>{{ __('Guardar') }}</x-primary-button>
                    </form>
                </div>
            </div>

            {{-- Delete Account --}}
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="text-lg font-semibold text-gray-900 mb-1">Eliminar Cuenta</h2>
                    <p class="text-sm text-gray-600 mb-6">Una vez eliminada, no podrás recuperar tu información.</p>

                    <form method="POST" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('DELETE')

                        <div class="mb-4">
                            <x-input-label for="delete_password" :value="__('Confirma tu contraseña para eliminar')" />
                            <x-text-input id="delete_password" name="password" type="password" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                        </div>

                        <x-danger-button>{{ __('Eliminar Cuenta') }}</x-danger-button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
