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

<!-- Main Section -->
<div class="bg-white rounded-xl shadow-sm border border-neutral-100 p-6 lg:p-8">
    <div class="flex items-center justify-between mb-6">
        <h3 class="text-lg font-bold text-secondary">¡Bienvenido al nuevo Panel de Administración!</h3>
    </div>
    <div class="prose max-w-none text-neutral-600">
        <p>
            Este panel ha sido construido desde cero utilizando <strong>Blade</strong> y <strong>Tailwind CSS</strong>, lo que te permite modificar cualquier aspecto visual de manera directa, tal como haces con el resto del sitio web público.
        </p>
        <p class="mt-4">
            Desde aquí podrás gestionar todo el contenido dinámico de la constructora (Proyectos, Servicios, Contactos, etc.) cuando vayamos añadiendo esos módulos.
        </p>
        <div class="mt-8 p-4 bg-orange-50 border border-orange-100 rounded-lg flex items-start gap-4">
            <span class="material-symbols-outlined text-primary mt-1">lightbulb</span>
            <div>
                <h4 class="font-bold text-secondary mb-1">Próximos pasos</h4>
                <p class="text-sm text-neutral-600">Podemos empezar a crear los módulos (CRUDs) para gestionar la información real de vuestra base de datos.</p>
            </div>
        </div>
    </div>
</div>
@endsection
