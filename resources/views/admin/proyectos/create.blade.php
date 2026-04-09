@extends('admin.layouts.app')

@section('header', 'Nuevo Proyecto')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.proyectos.index') }}" class="inline-flex items-center gap-1 text-sm font-medium text-neutral-500 hover:text-primary transition-colors">
        <span class="material-symbols-outlined text-[18px]">arrow_back</span>
        Volver al listado
    </a>
</div>

<div class="rounded-xl border border-neutral-200 bg-white shadow-sm overflow-hidden max-w-4xl">
    <div class="border-b border-neutral-200 px-6 py-4 bg-neutral-50">
        <h2 class="font-bold text-neutral-800">Información del Proyecto</h2>
    </div>

    <form action="{{ route('admin.proyectos.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            {{-- Titulo --}}
            <div>
                <label for="titulo" class="block text-sm font-medium text-neutral-700 mb-1">Título del Proyecto *</label>
                <input type="text" name="titulo" id="titulo" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" value="{{ old('titulo') }}" required>
                @error('titulo') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Ubicacion --}}
            <div>
                <label for="ubicacion" class="block text-sm font-medium text-neutral-700 mb-1">Ubicación *</label>
                <input type="text" name="ubicacion" id="ubicacion" placeholder="Ej: Piantini, Santo Domingo" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" value="{{ old('ubicacion') }}" required>
                @error('ubicacion') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Tipo --}}
            <div>
                <label for="tipo" class="block text-sm font-medium text-neutral-700 mb-1">Tipo de Obra *</label>
                <select name="tipo" id="tipo" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" required>
                    <option value="" disabled selected>Seleccione...</option>
                    <option value="residencial" {{ old('tipo') == 'residencial' ? 'selected' : '' }}>Residencial</option>
                    <option value="comercial" {{ old('tipo') == 'comercial' ? 'selected' : '' }}>Comercial</option>
                    <option value="industrial" {{ old('tipo') == 'industrial' ? 'selected' : '' }}>Industrial</option>
                    <option value="civil" {{ old('tipo') == 'civil' ? 'selected' : '' }}>Obras Civiles</option>
                </select>
                @error('tipo') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Estado --}}
            <div>
                <label for="estado" class="block text-sm font-medium text-neutral-700 mb-1">Estado *</label>
                <select name="estado" id="estado" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" required>
                    <option value="" disabled selected>Seleccione...</option>
                    <option value="ejecucion" {{ old('estado') == 'ejecucion' ? 'selected' : '' }}>En Ejecución</option>
                    <option value="finalizado" {{ old('estado') == 'finalizado' ? 'selected' : '' }}>Finalizado</option>
                </select>
                @error('estado') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- M2 --}}
            <div>
                <label for="m2" class="block text-sm font-medium text-neutral-700 mb-1">Superficie (m²) *</label>
                <input type="text" name="m2" id="m2" placeholder="Ej: 8,400 m²" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" value="{{ old('m2') }}" required>
                @error('m2') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Niveles --}}
            <div>
                <label for="niveles" class="block text-sm font-medium text-neutral-700 mb-1">Estructura / Niveles *</label>
                <input type="text" name="niveles" id="niveles" placeholder="Ej: 18 Niveles" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" value="{{ old('niveles') }}" required>
                @error('niveles') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Tiempo --}}
            <div>
                <label for="tiempo" class="block text-sm font-medium text-neutral-700 mb-1">Tiempo de Duración *</label>
                <input type="text" name="tiempo" id="tiempo" placeholder="Ej: 28 meses" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" value="{{ old('tiempo') }}" required>
                @error('tiempo') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Cliente --}}
            <div>
                <label for="cliente" class="block text-sm font-medium text-neutral-700 mb-1">Cliente *</label>
                <input type="text" name="cliente" id="cliente" placeholder="Ej: Grupo Aqua RD" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20" value="{{ old('cliente') }}" required>
                @error('cliente') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>
        </div>

        {{-- Reto --}}
        <div class="mb-6">
            <label for="reto" class="block text-sm font-medium text-neutral-700 mb-1">Reto Constructivo</label>
            <textarea name="reto" id="reto" rows="4" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/20">{{ old('reto') }}</textarea>
            @error('reto') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
        </div>

        {{-- Destacado --}}
        <div class="mb-6 bg-neutral-50 border border-neutral-200 rounded-xl p-4 flex items-start gap-3">
            <div class="flex h-6 items-center">
                <input id="destacado" name="destacado" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary" {{ old('destacado') ? 'checked' : '' }}>
            </div>
            <div class="text-sm leading-6">
                <label for="destacado" class="font-medium text-neutral-900">Destacar en la página de inicio</label>
                <p class="text-neutral-500">Muestra este proyecto en la sección "Proyectos Destacados" de la página principal. Se recomienda destacar un máximo de 3 proyectos.</p>
                @error('destacado')
                    <span class="text-sm font-bold text-red-600 mt-2 block">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            {{-- Imagen Principal --}}
            <div>
                <label for="img" class="block text-sm font-medium text-neutral-700 mb-1">Imagen Principal *</label>
                <input type="file" name="img" id="img" accept="image/*" class="w-full text-sm text-neutral-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20" required>
                <p class="text-xs text-neutral-500 mt-2">Esta será la imagen de portada en la grilla.</p>
                @error('img') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>

            {{-- Galeria --}}
            <div>
                <label for="galeria" class="block text-sm font-medium text-neutral-700 mb-1">Galería de Imágenes</label>
                <input type="file" name="galeria[]" id="galeria" accept="image/*" multiple class="w-full text-sm text-neutral-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
                <p class="text-xs text-neutral-500 mt-2">Puedes seleccionar varias imágenes para la ficha técnica.</p>
                @error('galeria') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                @error('galeria.*') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="flex items-center justify-end gap-3 pt-4 border-t border-neutral-200">
            <a href="{{ route('admin.proyectos.index') }}" class="px-5 py-2.5 text-sm font-medium text-neutral-600 hover:text-neutral-900 transition-colors">Cancelar</a>
            <button type="submit" class="rounded-lg bg-primary px-5 py-2.5 text-sm font-bold text-white hover:bg-orange-500 transition-colors shadow-lg shadow-primary/30">
                Guardar Proyecto
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
