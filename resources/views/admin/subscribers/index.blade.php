@extends('admin.layouts.app')

@section('header', 'Suscriptores Newsletter')

@section('content')

{{-- Flash Messages --}}
@if(session('success'))
<div id="flash-alert" class="mb-6 flex items-center gap-3 rounded-xl bg-green-50 border border-green-200 px-5 py-4 text-green-800 shadow-sm">
    <span class="material-symbols-outlined text-green-600">check_circle</span>
    <span class="text-sm font-medium">{{ session('success') }}</span>
    <button onclick="document.getElementById('flash-alert').remove()" class="ml-auto text-green-500 hover:text-green-700">
        <span class="material-symbols-outlined text-lg">close</span>
    </button>
</div>
@endif

@if(session('error'))
<div id="flash-alert" class="mb-6 flex items-center gap-3 rounded-xl bg-red-50 border border-red-200 px-5 py-4 text-red-800 shadow-sm">
    <span class="material-symbols-outlined text-red-600">error</span>
    <span class="text-sm font-medium">{{ session('error') }}</span>
    <button onclick="document.getElementById('flash-alert').remove()" class="ml-auto text-red-500 hover:text-red-700">
        <span class="material-symbols-outlined text-lg">close</span>
    </button>
</div>
@endif

{{-- Stats Cards --}}
<div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">
    {{-- Total --}}
    <div class="bg-white rounded-2xl shadow-sm border border-neutral-100 p-6 flex items-center gap-5">
        <div class="w-14 h-14 rounded-xl bg-secondary/10 flex items-center justify-center flex-shrink-0">
            <span class="material-symbols-outlined text-3xl text-secondary">group</span>
        </div>
        <div>
            <p class="text-sm text-neutral-500 font-medium">Total suscriptores</p>
            <p class="text-3xl font-black text-secondary mt-0.5">{{ $totalCount }}</p>
        </div>
    </div>

    {{-- Activos --}}
    <div class="bg-white rounded-2xl shadow-sm border border-neutral-100 p-6 flex items-center gap-5">
        <div class="w-14 h-14 rounded-xl bg-green-50 flex items-center justify-center flex-shrink-0">
            <span class="material-symbols-outlined text-3xl text-green-500">mark_email_read</span>
        </div>
        <div>
            <p class="text-sm text-neutral-500 font-medium">Activos</p>
            <p class="text-3xl font-black text-green-600 mt-0.5">{{ $activeCount }}</p>
        </div>
    </div>

    {{-- Inactivos --}}
    <div class="bg-white rounded-2xl shadow-sm border border-neutral-100 p-6 flex items-center gap-5">
        <div class="w-14 h-14 rounded-xl bg-neutral-100 flex items-center justify-center flex-shrink-0">
            <span class="material-symbols-outlined text-3xl text-neutral-400">unsubscribe</span>
        </div>
        <div>
            <p class="text-sm text-neutral-500 font-medium">Inactivos</p>
            <p class="text-3xl font-black text-neutral-500 mt-0.5">{{ $inactiveCount }}</p>
        </div>
    </div>
</div>

{{-- Main Card --}}
<div class="bg-white rounded-2xl shadow-sm border border-neutral-100 overflow-hidden">

    {{-- Card Header: Search & Export --}}
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 p-6 border-b border-neutral-100">
        <div>
            <h3 class="text-base font-bold text-secondary">Lista de suscriptores</h3>
            @if($search)
                <p class="text-xs text-neutral-400 mt-0.5">
                    Mostrando resultados para: <span class="font-semibold text-primary">{{ $search }}</span>
                </p>
            @endif
        </div>

        <div class="flex items-center gap-3 w-full sm:w-auto">
            {{-- Search Form --}}
            <form method="GET" action="{{ route('admin.subscribers.index') }}" class="flex items-center gap-2 flex-1 sm:flex-none">
                <div class="relative flex-1 sm:w-64">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-neutral-400 text-lg">search</span>
                    <input
                        type="text"
                        name="search"
                        value="{{ $search ?? '' }}"
                        placeholder="Buscar por email..."
                        class="w-full pl-9 pr-4 py-2.5 text-sm rounded-xl border border-neutral-200 bg-neutral-50 text-secondary placeholder-neutral-400 focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition"
                    >
                </div>
                <button type="submit" class="px-4 py-2.5 bg-secondary text-white text-sm font-semibold rounded-xl hover:bg-secondary/80 transition-colors whitespace-nowrap">
                    Buscar
                </button>
                @if($search)
                    <a href="{{ route('admin.subscribers.index') }}" class="px-3 py-2.5 text-neutral-500 hover:text-secondary text-sm rounded-xl border border-neutral-200 hover:border-neutral-300 transition-colors" title="Limpiar búsqueda">
                        <span class="material-symbols-outlined text-lg">close</span>
                    </a>
                @endif
            </form>

            {{-- Export Excel --}}
            <a href="{{ route('admin.subscribers.export') }}"
               class="flex items-center gap-2 px-4 py-2.5 bg-primary text-secondary text-sm font-bold rounded-xl hover:bg-primary/80 transition-colors whitespace-nowrap shadow-sm">
                <span class="material-symbols-outlined text-lg">table_view</span>
                Exportar Excel
            </a>
        </div>
    </div>

    {{-- Table --}}
    @if($subscribers->isEmpty())
        <div class="flex flex-col items-center justify-center py-20 text-center text-neutral-400">
            <span class="material-symbols-outlined text-5xl mb-3">mail_off</span>
            <p class="font-semibold text-lg">No hay suscriptores</p>
            <p class="text-sm mt-1">
                @if($search)
                    No se encontraron resultados para "<span class="text-primary">{{ $search }}</span>".
                @else
                    Aún nadie se ha suscrito al newsletter.
                @endif
            </p>
        </div>
    @else
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-neutral-50 text-neutral-500 text-xs uppercase tracking-wider">
                        <th class="px-6 py-4 text-left font-semibold w-12">#</th>
                        <th class="px-6 py-4 text-left font-semibold">Email</th>
                        <th class="px-6 py-4 text-left font-semibold">Fecha de alta</th>
                        <th class="px-6 py-4 text-center font-semibold">Estado</th>
                        <th class="px-6 py-4 text-right font-semibold">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-neutral-100">
                    @foreach($subscribers as $index => $subscriber)
                    <tr class="hover:bg-neutral-50/60 transition-colors group">
                        <td class="px-6 py-4 text-neutral-400 font-medium">
                            {{ ($subscribers->currentPage() - 1) * $subscribers->perPage() + $loop->iteration }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold text-xs flex-shrink-0">
                                    {{ strtoupper(substr($subscriber->email, 0, 1)) }}
                                </div>
                                <span class="font-medium text-secondary">{{ $subscriber->email }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-neutral-500">
                            @if($subscriber->subscribed_at)
                                <span title="{{ $subscriber->subscribed_at->format('d/m/Y H:i:s') }}">
                                    {{ $subscriber->subscribed_at->format('d M Y') }}
                                </span>
                            @elseif($subscriber->created_at)
                                <span title="{{ $subscriber->created_at->format('d/m/Y H:i:s') }}">
                                    {{ $subscriber->created_at->format('d M Y') }}
                                </span>
                            @else
                                <span class="text-neutral-300">—</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-center">
                            @if($subscriber->is_active)
                                <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 inline-block"></span>
                                    Activo
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-semibold bg-neutral-100 text-neutral-500">
                                    <span class="w-1.5 h-1.5 rounded-full bg-neutral-400 inline-block"></span>
                                    Inactivo
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-end gap-2">
                                {{-- Toggle Active/Inactive --}}
                                <form method="POST" action="{{ route('admin.subscribers.toggle', $subscriber) }}">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit"
                                        class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-semibold transition-colors
                                        {{ $subscriber->is_active
                                            ? 'bg-amber-50 text-amber-700 hover:bg-amber-100 border border-amber-200'
                                            : 'bg-green-50 text-green-700 hover:bg-green-100 border border-green-200' }}"
                                        title="{{ $subscriber->is_active ? 'Desactivar' : 'Activar' }}">
                                        <span class="material-symbols-outlined text-base">
                                            {{ $subscriber->is_active ? 'toggle_off' : 'toggle_on' }}
                                        </span>
                                        {{ $subscriber->is_active ? 'Desactivar' : 'Activar' }}
                                    </button>
                                </form>

                                {{-- Delete --}}
                                <form method="POST" action="{{ route('admin.subscribers.destroy', $subscriber) }}"
                                      onsubmit="return confirm('¿Estás seguro de que quieres eliminar el suscriptor {{ $subscriber->email }}? Esta acción no se puede deshacer.')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-semibold bg-red-50 text-red-600 hover:bg-red-100 border border-red-200 transition-colors"
                                        title="Eliminar suscriptor">
                                        <span class="material-symbols-outlined text-base">delete</span>
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        @if($subscribers->hasPages())
        <div class="px-6 py-4 border-t border-neutral-100 flex items-center justify-between">
            <p class="text-xs text-neutral-400">
                Mostrando {{ $subscribers->firstItem() }}–{{ $subscribers->lastItem() }} de {{ $subscribers->total() }} suscriptores
            </p>
            <div class="flex items-center gap-1">
                {{-- Previous --}}
                @if($subscribers->onFirstPage())
                    <span class="px-3 py-2 rounded-lg text-neutral-300 text-sm cursor-not-allowed">
                        <span class="material-symbols-outlined text-lg">chevron_left</span>
                    </span>
                @else
                    <a href="{{ $subscribers->previousPageUrl() }}" class="px-3 py-2 rounded-lg text-neutral-500 hover:bg-neutral-100 hover:text-secondary transition-colors text-sm">
                        <span class="material-symbols-outlined text-lg">chevron_left</span>
                    </a>
                @endif

                {{-- Page numbers --}}
                @foreach($subscribers->getUrlRange(max(1, $subscribers->currentPage()-2), min($subscribers->lastPage(), $subscribers->currentPage()+2)) as $page => $url)
                    @if($page == $subscribers->currentPage())
                        <span class="px-3.5 py-1.5 rounded-lg bg-primary text-secondary text-sm font-bold">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="px-3.5 py-1.5 rounded-lg text-neutral-500 hover:bg-neutral-100 hover:text-secondary transition-colors text-sm">{{ $page }}</a>
                    @endif
                @endforeach

                {{-- Next --}}
                @if($subscribers->hasMorePages())
                    <a href="{{ $subscribers->nextPageUrl() }}" class="px-3 py-2 rounded-lg text-neutral-500 hover:bg-neutral-100 hover:text-secondary transition-colors text-sm">
                        <span class="material-symbols-outlined text-lg">chevron_right</span>
                    </a>
                @else
                    <span class="px-3 py-2 rounded-lg text-neutral-300 text-sm cursor-not-allowed">
                        <span class="material-symbols-outlined text-lg">chevron_right</span>
                    </span>
                @endif
            </div>
        </div>
        @endif
    @endif

</div>

@endsection
