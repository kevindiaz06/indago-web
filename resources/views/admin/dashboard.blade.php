@extends('admin.layouts.app')

@section('header', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    
    <!-- Widget 1: Total Proyectos -->
    <div class="bg-white rounded-xl shadow-sm border border-neutral-100 p-6 flex items-center gap-4 hover:shadow-md transition-shadow">
        <div class="w-14 h-14 rounded-lg bg-primary/10 flex items-center justify-center text-primary flex-shrink-0">
            <span class="material-symbols-outlined text-3xl">work</span>
        </div>
        <div>
            <p class="text-sm font-medium text-neutral-500 mb-1">Proyectos Activos</p>
            <h3 class="text-2xl font-bold text-secondary">12</h3>
        </div>
    </div>

    <!-- Widget 2: Mensajes -->
    <div class="bg-white rounded-xl shadow-sm border border-neutral-100 p-6 flex items-center gap-4 hover:shadow-md transition-shadow">
        <div class="w-14 h-14 rounded-lg bg-blue-500/10 flex items-center justify-center text-blue-600 flex-shrink-0">
            <span class="material-symbols-outlined text-3xl">mail</span>
        </div>
        <div>
            <p class="text-sm font-medium text-neutral-500 mb-1">Nuevos Mensajes</p>
            <h3 class="text-2xl font-bold text-secondary">5</h3>
        </div>
    </div>

    <!-- Widget 3: Servicios -->
    <div class="bg-white rounded-xl shadow-sm border border-neutral-100 p-6 flex items-center gap-4 hover:shadow-md transition-shadow">
        <div class="w-14 h-14 rounded-lg bg-emerald-500/10 flex items-center justify-center text-emerald-600 flex-shrink-0">
            <span class="material-symbols-outlined text-3xl">construction</span>
        </div>
        <div>
            <p class="text-sm font-medium text-neutral-500 mb-1">Servicios Ofrecidos</p>
            <h3 class="text-2xl font-bold text-secondary">8</h3>
        </div>
    </div>

    <!-- Widget 4: Visitas -->
    <div class="bg-white rounded-xl shadow-sm border border-neutral-100 p-6 flex items-center gap-4 hover:shadow-md transition-shadow">
        <div class="w-14 h-14 rounded-lg bg-purple-500/10 flex items-center justify-center text-purple-600 flex-shrink-0">
            <span class="material-symbols-outlined text-3xl">visibility</span>
        </div>
        <div>
            <p class="text-sm font-medium text-neutral-500 mb-1">Visitas del Mes</p>
            <h3 class="text-2xl font-bold text-secondary">1,204</h3>
        </div>
    </div>
</div>

<!-- Welcome Message or Further Insights could go here -->
<div class="bg-white rounded-xl shadow-sm border border-neutral-100 p-6 lg:p-8 text-center text-neutral-500 py-12">
    <span class="material-symbols-outlined text-5xl mb-4 text-neutral-300">query_stats</span>
    <h3 class="text-xl font-bold text-secondary mb-2">Bienvenido al Panel de Control</h3>
    <p>Seleccione una opción del menú lateral para comenzar a administrar el contenido.</p>
</div>

@endsection
