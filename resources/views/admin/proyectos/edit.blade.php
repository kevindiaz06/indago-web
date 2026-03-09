@extends('admin.layouts.app')

@section('header', 'Editar Proyecto')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.proyectos.index') }}" class="inline-flex items-center gap-1 text-sm font-medium text-neutral-500 hover:text-primary transition-colors">
        <span class="material-symbols-outlined text-[18px]">arrow_back</span>
        Volver al listado
    </a>
</div>

<div class="rounded-xl border border-neutral-200 bg-white shadow-sm overflow-hidden max-w-4xl">
    <div class="border-b border-neutral-200 px-6 py-4 bg-neutral-50 flex items-center justify-between">
        <h2 class="font-bold text-neutral-800">Editando: {{ $proyecto->titulo }}</h2>
        @if($proyecto->estado === 'ejecucion')
            <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-100 px-2.5 py-0.5 text-xs font-medium text-amber-800 border border-amber-200">
                <span class="h-1.5 w-1.5 rounded-full bg-amber-600 animate-pulse"></span>
                En Ejecución
            </span>
        @else
            <span class="inline-flex items-center gap-1.5 rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 border border-green-200">
                <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                Finalizado
            </span>
        @endif
    </div>

    <form action="{{ route('admin.proyectos.update', $proyecto) }}" method="POST" enctype="multipart/form-data" class="p-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            {{-- Titulo --}}
            <div>
                <label for="titulo" class="block text-sm font-medium text-neutral-700 mb-1">Título del Proyecto *</label>
                <input type="text" name="titulo" id="titulo" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" value="{{ old('titulo', $proyecto->titulo) }}" required>
                @error('titulo') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Ubicacion --}}
            <div>
                <label for="ubicacion" class="block text-sm font-medium text-neutral-700 mb-1">Ubicación *</label>
                <input type="text" name="ubicacion" id="ubicacion" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" value="{{ old('ubicacion', $proyecto->ubicacion) }}" required>
                @error('ubicacion') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Tipo --}}
            <div>
                <label for="tipo" class="block text-sm font-medium text-neutral-700 mb-1">Tipo de Obra *</label>
                <select name="tipo" id="tipo" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" required>
                    <option value="residencial" {{ old('tipo', $proyecto->tipo) == 'residencial' ? 'selected' : '' }}>Residencial</option>
                    <option value="comercial" {{ old('tipo', $proyecto->tipo) == 'comercial' ? 'selected' : '' }}>Comercial</option>
                    <option value="industrial" {{ old('tipo', $proyecto->tipo) == 'industrial' ? 'selected' : '' }}>Industrial</option>
                    <option value="civil" {{ old('tipo', $proyecto->tipo) == 'civil' ? 'selected' : '' }}>Obras Civiles</option>
                </select>
                @error('tipo') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Estado --}}
            <div>
                <label for="estado" class="block text-sm font-medium text-neutral-700 mb-1">Estado *</label>
                <select name="estado" id="estado" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" required>
                    <option value="ejecucion" {{ old('estado', $proyecto->estado) == 'ejecucion' ? 'selected' : '' }}>En Ejecución</option>
                    <option value="finalizado" {{ old('estado', $proyecto->estado) == 'finalizado' ? 'selected' : '' }}>Finalizado</option>
                </select>
                @error('estado') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- M2 --}}
            <div>
                <label for="m2" class="block text-sm font-medium text-neutral-700 mb-1">Superficie (m²) *</label>
                <input type="text" name="m2" id="m2" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" value="{{ old('m2', $proyecto->m2) }}" required>
                @error('m2') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Pisos --}}
            <div>
                <label for="pisos" class="block text-sm font-medium text-neutral-700 mb-1">Estructura / Pisos *</label>
                <input type="text" name="pisos" id="pisos" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" value="{{ old('pisos', $proyecto->pisos) }}" required>
                @error('pisos') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Tiempo --}}
            <div>
                <label for="tiempo" class="block text-sm font-medium text-neutral-700 mb-1">Tiempo de Duración *</label>
                <input type="text" name="tiempo" id="tiempo" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" value="{{ old('tiempo', $proyecto->tiempo) }}" required>
                @error('tiempo') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Cliente --}}
            <div>
                <label for="cliente" class="block text-sm font-medium text-neutral-700 mb-1">Cliente *</label>
                <input type="text" name="cliente" id="cliente" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" value="{{ old('cliente', $proyecto->cliente) }}" required>
                @error('cliente') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>
        </div>

        {{-- Reto --}}
        <div class="mb-6">
            <label for="reto" class="block text-sm font-medium text-neutral-700 mb-1">Reto Constructivo</label>
            <textarea name="reto" id="reto" rows="4" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20">{{ old('reto', $proyecto->reto) }}</textarea>
            @error('reto') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
        </div>

        {{-- Destacado --}}
        <div class="mb-6 bg-neutral-50 border border-neutral-200 rounded-xl p-4 flex items-start gap-3">
            <div class="flex h-6 items-center">
                <input id="destacado" name="destacado" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary" {{ old('destacado', $proyecto->destacado) ? 'checked' : '' }}>
            </div>
            <div class="text-sm leading-6">
                <label for="destacado" class="font-medium text-neutral-900">Destacar en la página de inicio</label>
                <p class="text-neutral-500">Muestra este proyecto en la sección "Proyectos Destacados" de la página principal. Se recomienda destacar un máximo de 3 proyectos.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            {{-- Imagen Principal --}}
            <div class="rounded-xl border border-neutral-200 bg-neutral-50 p-4">
                <label for="img" class="block text-sm font-medium text-neutral-700 mb-3">Imagen Principal</label>
                @if($proyecto->img)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $proyecto->img) }}" alt="Imagen actual" class="h-32 w-auto rounded-lg object-cover shadow-sm">
                </div>
                @endif
                <input type="file" name="img" id="img" accept="image/*" class="w-full text-sm text-neutral-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
                <p class="text-xs text-neutral-500 mt-2">Dejar en blanco para mantener la imagen actual.</p>
                @error('img') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Galeria --}}
            <div class="rounded-xl border border-neutral-200 bg-neutral-50 p-4">
                <label for="galeria" class="block text-sm font-medium text-neutral-700 mb-3">Galería de Imágenes</label>
                @if($proyecto->galeria && count($proyecto->galeria) > 0)
                <div class="mb-4 flex flex-wrap gap-2">
                    @foreach($proyecto->galeria as $foto)
                        <img src="{{ asset('storage/' . $foto) }}" alt="Galeria" class="h-16 w-16 rounded object-cover shadow-sm">
                    @endforeach
                </div>
                @endif
                <input type="file" name="galeria[]" id="galeria" accept="image/*" multiple class="w-full text-sm text-neutral-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
                <p class="text-xs text-neutral-500 mt-2">Si subes nuevas imágenes, reemplazarán la galería actual. Dejar en blanco para mantener las actuales.</p>
                @error('galeria') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                @error('galeria.*') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="flex items-center justify-end gap-3 pt-4 border-t border-neutral-200">
            <a href="{{ route('admin.proyectos.index') }}" class="px-5 py-2.5 text-sm font-medium text-neutral-600 hover:text-neutral-900 transition-colors">Cancelar</a>
            <button type="submit" class="rounded-lg bg-primary px-5 py-2.5 text-sm font-bold text-white hover:bg-orange-500 transition-colors shadow-lg shadow-primary/30">
                Actualizar Proyecto
            </button>
        </div>
    </form>
</div>
@endsection
