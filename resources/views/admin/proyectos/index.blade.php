@extends('admin.layouts.app')

@section('header', 'Proyectos')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <div>
        <h1 class="text-2xl font-bold text-neutral-800">Listado de Proyectos</h1>
        <p class="text-sm text-neutral-500 mt-1">Administra los proyectos del portafolio.</p>
    </div>
    <a href="{{ route('admin.proyectos.create') }}" class="inline-flex items-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-bold text-white hover:bg-orange-500 transition-colors shadow-lg shadow-primary/30">
        <span class="material-symbols-outlined text-[20px]">add</span>
        Nuevo Proyecto
    </a>
</div>

@if(session('success'))
<div class="mb-6 rounded-lg bg-green-50 p-4 border border-green-200">
    <div class="flex items-center gap-3">
        <span class="material-symbols-outlined text-green-600">check_circle</span>
        <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
    </div>
</div>
@endif

<div class="rounded-xl border border-neutral-200 bg-white shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-neutral-600">
            <thead class="bg-neutral-50 text-neutral-800">
                <tr>
                    <th class="px-6 py-4 font-semibold">Proyecto</th>
                    <th class="px-6 py-4 font-semibold">Tipo</th>
                    <th class="px-6 py-4 font-semibold">Estado</th>
                    <th class="px-6 py-4 font-semibold">Cliente</th>
                    <th class="px-6 py-4 font-semibold text-right">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-neutral-200">
                @forelse($proyectos as $p)
                <tr class="hover:bg-neutral-50 transition-colors">
                    <td class="px-6 py-4 px-6 text-neutral-900">
                        <div class="flex items-center gap-3">
                            <div class="h-10 w-10 flex-shrink-0 overflow-hidden rounded-lg bg-neutral-100">
                                @if($p->img)
                                    <img src="{{ asset('storage/' . $p->img) }}" alt="{{ $p->titulo }}" class="h-full w-full object-cover">
                                @else
                                    <span class="material-symbols-outlined h-full w-full flex items-center justify-center text-neutral-400">image</span>
                                @endif
                            </div>
                            <div>
                                <div class="font-bold flex items-center gap-1.5">
                                    {{ $p->titulo }}
                                    @if($p->destacado)
                                        <span class="material-symbols-outlined text-[16px] text-yellow-500" title="Proyecto Destacado en Inicio">star</span>
                                    @endif
                                </div>
                                <div class="text-xs text-neutral-500">{{ $p->ubicacion }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 capitalize">{{ $p->tipo }}</td>
                    <td class="px-6 py-4">
                        @if($p->estado === 'ejecucion')
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
                    </td>
                    <td class="px-6 py-4">{{ $p->cliente }}</td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('admin.proyectos.edit', $p) }}" class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-neutral-100 text-neutral-600 hover:bg-primary hover:text-white transition-colors" title="Editar">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </a>
                            <form action="{{ route('admin.proyectos.destroy', $p) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro de eliminar este proyecto?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-neutral-100 text-neutral-600 hover:bg-red-500 hover:text-white transition-colors" title="Eliminar">
                                    <span class="material-symbols-outlined text-[18px]">delete</span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-8 text-center text-neutral-500">
                        <div class="flex flex-col items-center justify-center">
                            <span class="material-symbols-outlined text-4xl mb-2 text-neutral-300">folder_off</span>
                            <p>No hay proyectos registrados.</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($proyectos->hasPages())
    <div class="border-t border-neutral-200 px-6 py-4">
        {{ $proyectos->links() }}
    </div>
    @endif
</div>
@endsection
