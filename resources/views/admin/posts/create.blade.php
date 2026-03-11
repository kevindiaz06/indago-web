@extends('admin.layouts.app')

@section('header', 'Nueva Noticia')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.posts.index') }}" class="inline-flex items-center gap-1 text-sm font-medium text-neutral-500 hover:text-primary transition-colors">
        <span class="material-symbols-outlined text-[18px]">arrow_back</span>
        Volver al listado
    </a>
</div>

<div class="rounded-xl border border-neutral-200 bg-white shadow-sm overflow-hidden max-w-4xl">
    <div class="border-b border-neutral-200 px-6 py-4 bg-neutral-50">
        <h2 class="font-bold text-neutral-800">Información de la Noticia</h2>
    </div>

    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            {{-- Titulo --}}
            <div class="md:col-span-2">
                <label for="titulo" class="block text-sm font-medium text-neutral-700 mb-1">Título de la Noticia *</label>
                <input type="text" name="titulo" id="titulo" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" value="{{ old('titulo') }}" required>
                @error('titulo') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Categoria --}}
            <div>
                <label for="categoria" class="block text-sm font-medium text-neutral-700 mb-1">Categoría *</label>
                <input type="text" name="categoria" id="categoria" placeholder="Ej: Arquitectura, Ingeniería, Sostenibilidad" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" value="{{ old('categoria') }}" required>
                @error('categoria') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Estado --}}
            <div>
                <label for="estado" class="block text-sm font-medium text-neutral-700 mb-1">Estado *</label>
                <select name="estado" id="estado" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" required>
                    <option value="publicado" {{ old('estado') == 'publicado' ? 'selected' : '' }}>Publicado</option>
                    <option value="borrador" {{ old('estado') == 'borrador' ? 'selected' : '' }}>Borrador</option>
                </select>
                @error('estado') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Resumen --}}
            <div class="md:col-span-2">
                <label for="resumen" class="block text-sm font-medium text-neutral-700 mb-1">Resumen (Breve descripción)</label>
                <textarea name="resumen" id="resumen" rows="2" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" placeholder="Texto corto que aparecerá en la tarjeta de la noticia...">{{ old('resumen') }}</textarea>
                @error('resumen') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>
            
            {{-- Contenido --}}
            <div class="md:col-span-2">
                <label for="contenido" class="block text-sm font-medium text-neutral-700 mb-1">Contenido de la Noticia *</label>
                <textarea name="contenido" id="contenido" rows="10" required class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" placeholder="Escribe el contenido completo del artículo aquí...">{{ old('contenido') }}</textarea>
                @error('contenido') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>
        </div>

        {{-- Destacado --}}
        <div class="mb-6 bg-neutral-50 border border-neutral-200 rounded-xl p-4 flex items-start gap-3">
            <div class="flex h-6 items-center">
                <input id="destacado" name="destacado" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary" {{ old('destacado') ? 'checked' : '' }}>
            </div>
            <div class="text-sm leading-6">
                <label for="destacado" class="font-medium text-neutral-900">Destacar en la página de inicio</label>
                <p class="text-neutral-500">Muestra esta noticia en la sección "Noticias y Tendencias" de la página principal. Se limitará a un máximo de 2 noticias destacadas según el rediseño.</p>
                @error('destacado')
                    <span class="text-sm font-bold text-red-600 mt-2 block">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mb-8">
            {{-- Imagen Principal --}}
            <div>
                <label for="img" class="block text-sm font-medium text-neutral-700 mb-1">Imagen de Portada *</label>
                <input type="file" name="img" id="img" accept="image/*" class="w-full text-sm text-neutral-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20" required>
                <p class="text-xs text-neutral-500 mt-2">Esta será la imagen de cabecera del artículo.</p>
                @error('img') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="flex items-center justify-end gap-3 pt-4 border-t border-neutral-200">
            <a href="{{ route('admin.posts.index') }}" class="px-5 py-2.5 text-sm font-medium text-neutral-600 hover:text-neutral-900 transition-colors">Cancelar</a>
            <button type="submit" class="rounded-lg bg-primary px-5 py-2.5 text-sm font-bold text-white hover:bg-orange-500 transition-colors shadow-lg shadow-primary/30">
                Publicar Noticia
            </button>
        </div>
    </form>
</div>
@if($errors->has('destacado'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Límite Alcanzado',
                text: '{{ $errors->first('destacado') }}',
                icon: 'warning',
                confirmButtonColor: '#fca311',
                confirmButtonText: 'Entendido'
            });
        });
    </script>
@endif

@endsection
