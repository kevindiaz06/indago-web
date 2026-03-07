@extends('admin.layouts.app')

@section('header', 'Perfil de Usuario')

@section('content')
    <div class="py-6">
        <div class="max-w-7xl mx-auto space-y-6">

            {{-- Update Profile Information --}}
            <div class="p-4 sm:p-8 bg-white shadow-sm sm:rounded-xl border border-neutral-100">
                <div class="max-w-xl">
                    <h2 class="text-lg font-bold text-secondary mb-1">Información de Perfil</h2>
                    <p class="text-sm text-neutral-500 mb-6">Actualiza el nombre y correo electrónico de tu cuenta.</p>

                    @if (session('status') === 'profile-updated')
                        <div class="mb-4 p-3 rounded-lg bg-emerald-50 text-emerald-700 text-sm font-medium border border-emerald-100">Perfil actualizado correctamente.</div>
                    @endif

                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PATCH')

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-semibold text-secondary mb-2">Nombre</label>
                            <input id="name" name="name" type="text" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring-primary/20 transition-all font-medium text-secondary" value="{{ old('name', $user->name) }}" required autofocus />
                            @if($errors->has('name'))
                                <p class="mt-2 text-sm text-red-600 font-medium">{{ $errors->first('name') }}</p>
                            @endif
                        </div>

                        <div class="mb-6">
                            <label for="email" class="block text-sm font-semibold text-secondary mb-2">Correo Electrónico</label>
                            <input id="email" name="email" type="email" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring-primary/20 transition-all font-medium text-secondary" value="{{ old('email', $user->email) }}" required />
                            @if($errors->has('email'))
                                <p class="mt-2 text-sm text-red-600 font-medium">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <div class="flex items-center gap-4">
                            <button type="submit" class="bg-primary hover:bg-orange-500 text-white font-bold py-2.5 px-6 rounded-lg transition-colors shadow-lg shadow-primary/30">Guardar Cambios</button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Update Password --}}
            <div class="p-4 sm:p-8 bg-white shadow-sm sm:rounded-xl border border-neutral-100">
                <div class="max-w-xl">
                    <h2 class="text-lg font-bold text-secondary mb-1">Actualizar Contraseña</h2>
                    <p class="text-sm text-neutral-500 mb-6">Usa una contraseña larga y aleatoria para mayor seguridad.</p>

                    @if (session('status') === 'password-updated')
                        <div class="mb-4 p-3 rounded-lg bg-emerald-50 text-emerald-700 text-sm font-medium border border-emerald-100">Contraseña actualizada correctamente.</div>
                    @endif

                    <form method="POST" action="{{ route('profile.password') }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="update_password_current_password" class="block text-sm font-semibold text-secondary mb-2">Contraseña Actual</label>
                            <input id="update_password_current_password" name="current_password" type="password" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring-primary/20 transition-all font-medium text-secondary" autocomplete="current-password" />
                            @if($errors->updatePassword->has('current_password'))
                                <p class="mt-2 text-sm text-red-600 font-medium">{{ $errors->updatePassword->first('current_password') }}</p>
                            @endif
                        </div>

                        <div class="mb-4">
                            <label for="update_password_password" class="block text-sm font-semibold text-secondary mb-2">Nueva Contraseña</label>
                            <input id="update_password_password" name="password" type="password" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring-primary/20 transition-all font-medium text-secondary" autocomplete="new-password" />
                            @if($errors->updatePassword->has('password'))
                                <p class="mt-2 text-sm text-red-600 font-medium">{{ $errors->updatePassword->first('password') }}</p>
                            @endif
                        </div>

                        <div class="mb-6">
                            <label for="update_password_password_confirmation" class="block text-sm font-semibold text-secondary mb-2">Confirmar Contraseña</label>
                            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring-primary/20 transition-all font-medium text-secondary" autocomplete="new-password" />
                            @if($errors->updatePassword->has('password_confirmation'))
                                <p class="mt-2 text-sm text-red-600 font-medium">{{ $errors->updatePassword->first('password_confirmation') }}</p>
                            @endif
                        </div>

                        <button type="submit" class="bg-primary hover:bg-orange-500 text-white font-bold py-2.5 px-6 rounded-lg transition-colors shadow-lg shadow-primary/30">Guardar Contraseña</button>
                    </form>
                </div>
            </div>

            {{-- Delete Account --}}
            <div class="p-4 sm:p-8 bg-red-50 border border-red-100 shadow-sm sm:rounded-xl">
                <div class="max-w-xl">
                    <h2 class="text-lg font-bold text-red-600 mb-1">Eliminar Cuenta</h2>
                    <p class="text-sm text-red-500/80 mb-6">Una vez eliminada, no podrás recuperar tu información.</p>

                    <form method="POST" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('DELETE')

                        <div class="mb-6">
                            <label for="delete_password" class="block text-sm font-semibold text-red-600 mb-2">Confirma tu contraseña para eliminar</label>
                            <input id="delete_password" name="password" type="password" class="w-full rounded-lg border-red-200 bg-white shadow-sm focus:border-red-500 focus:ring-red-500/20 transition-all font-medium text-secondary" />
                            @if($errors->userDeletion->has('password'))
                                <p class="mt-2 text-sm text-red-600 font-medium">{{ $errors->userDeletion->first('password') }}</p>
                            @endif
                        </div>

                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2.5 px-6 rounded-lg transition-colors shadow-lg shadow-red-600/30">Eliminar Cuenta</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
