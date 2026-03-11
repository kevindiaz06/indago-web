@extends('admin.layouts.app')

@section('header', 'Blog - Noticias y Tendencias')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <div>
        <h1 class="text-2xl font-bold text-neutral-800">Listado de Noticias</h1>
        <p class="text-sm text-neutral-500 mt-1">Administra los artículos del blog.</p>
    </div>
    @if(auth()->check() && auth()->user()->isAdmin())
    <a href="{{ route('admin.posts.create') }}" class="inline-flex items-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-bold text-white hover:bg-orange-500 transition-colors shadow-lg shadow-primary/30">
        <span class="material-symbols-outlined text-[20px]">add</span>
        Nueva Noticia
    </a>
    @endif
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
                    <th class="px-6 py-4 font-semibold">Noticia</th>
                    <th class="px-6 py-4 font-semibold">Categoría</th>
                    <th class="px-6 py-4 font-semibold">Estado</th>
                    <th class="px-6 py-4 font-semibold">Fecha</th>
                    @if(auth()->check() && auth()->user()->isAdmin())
                    <th class="px-6 py-4 font-semibold text-right">Acciones</th>
                    @endif
                </tr>
            </thead>
            <tbody class="divide-y divide-neutral-200">
                @forelse($posts as $p)
                <tr class="hover:bg-neutral-50 transition-colors">
                    <td class="px-6 py-4 text-neutral-900">
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
                                        <span class="material-symbols-outlined text-[16px] text-yellow-500" title="Noticia Destacada en Inicio">star</span>
                                    @endif
                                </div>
                                <div class="text-xs text-neutral-500 line-clamp-1 max-w-xs">{{ $p->resumen }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 capitalize">{{ $p->categoria }}</td>
                    <td class="px-6 py-4">
                        @if($p->estado === 'borrador')
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-neutral-100 px-2.5 py-0.5 text-xs font-medium text-neutral-800 border border-neutral-200">
                                <span class="h-1.5 w-1.5 rounded-full bg-neutral-600"></span>
                                Borrador
                            </span>
                        @else
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 border border-green-200">
                                <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                Publicado
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4">{{ $p->created_at->format('d/m/Y') }}</td>
                    @if(auth()->check() && auth()->user()->isAdmin())
                    <td class="px-6 py-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('admin.posts.edit', $p) }}" class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-neutral-100 text-neutral-600 hover:bg-primary hover:text-white transition-colors" title="Editar">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </a>
                            <form action="{{ route('admin.posts.destroy', $p) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro de eliminar esta noticia?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-neutral-100 text-neutral-600 hover:bg-red-500 hover:text-white transition-colors" title="Eliminar">
                                    <span class="material-symbols-outlined text-[18px]">delete</span>
                                </button>
                            </form>
                        </div>
                    </td>
                    @endif
                </tr>
                @empty
                <tr>
                    <td colspan="{{ auth()->check() && auth()->user()->isAdmin() ? '5' : '4' }}" class="px-6 py-8 text-center text-neutral-500">
                        <div class="flex flex-col items-center justify-center">
                            <span class="material-symbols-outlined text-4xl mb-2 text-neutral-300">article</span>
                            <p>No hay noticias registradas.</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($posts->hasPages())
    <div class="border-t border-neutral-200 px-6 py-4">
        {{ $posts->links() }}
    </div>
    @endif
</div>
@endsection
