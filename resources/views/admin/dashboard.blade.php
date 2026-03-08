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

<!-- Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
    
    <!-- User Roles Doughnut Chart -->
    <div class="bg-white rounded-xl shadow-sm border border-neutral-100 p-6 lg:col-span-1">
        <h3 class="text-lg font-bold text-secondary mb-4 border-b border-neutral-100 pb-2">Distribución de Roles</h3>
        <div class="relative w-full aspect-square flex items-center justify-center">
            <canvas id="rolesChart"></canvas>
        </div>
    </div>

    <!-- User Registrations Line Chart -->
    <div class="bg-white rounded-xl shadow-sm border border-neutral-100 p-6 lg:col-span-2">
        <h3 class="text-lg font-bold text-secondary mb-4 border-b border-neutral-100 pb-2">Crecimiento de Usuarios (Últimos 6 Meses)</h3>
        <div class="relative w-full h-64 md:h-72 lg:h-80">
            <canvas id="registrationsChart"></canvas>
        </div>
    </div>
    
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Variables desde el Backend
        const rolesLabels = {!! json_encode($rolesLabels) !!};
        const rolesValues = {!! json_encode($rolesValues) !!};
        
        const monthsLabels = {!! json_encode($monthsLabels) !!};
        const registrationsValues = {!! json_encode($registrationsValues) !!};

        // Configuración común de Tailwind Colors
        const primaryColor = '#FBBF24'; // yellow-400
        const secondaryColor = '#1F2937'; // gray-800
        const blueColor = '#3B82F6'; // blue-500

        // 1. Gráfico de Roles (Doughnut)
        const ctxRoles = document.getElementById('rolesChart').getContext('2d');
        new Chart(ctxRoles, {
            type: 'doughnut',
            data: {
                labels: rolesLabels,
                datasets: [{
                    label: 'Usuarios por Rol',
                    data: rolesValues,
                    backgroundColor: [
                        primaryColor,
                        secondaryColor,
                        blueColor
                    ],
                    borderWidth: 0,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            padding: 20,
                            font: { family: 'Inter', size: 13 }
                        }
                    }
                },
                cutout: '70%'
            }
        });

        // 2. Gráfico de Registros (Line)
        const ctxRegs = document.getElementById('registrationsChart').getContext('2d');
        
        // Crear gradiente para el gráfico de líneas
        let gradient = ctxRegs.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(251, 191, 36, 0.4)'); // primary border transparent
        gradient.addColorStop(1, 'rgba(251, 191, 36, 0.0)');

        new Chart(ctxRegs, {
            type: 'line',
            data: {
                labels: monthsLabels,
                datasets: [{
                    label: 'Nuevos Usuarios',
                    data: registrationsValues,
                    borderColor: primaryColor,
                    backgroundColor: gradient,
                    borderWidth: 3,
                    pointBackgroundColor: '#ffffff',
                    pointBorderColor: primaryColor,
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6,
                    fill: true,
                    tension: 0.4 // Hace que la línea sea curva (smooth)
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false // Ocultamos leyenda ya que solo hay una línea
                    },
                    tooltip: {
                        backgroundColor: secondaryColor,
                        titleFont: { family: 'Inter', size: 13 },
                        bodyFont: { family: 'Inter', size: 14, weight: 'bold' },
                        padding: 12,
                        displayColors: false,
                        callbacks: {
                            label: function(context) {
                                return context.parsed.y + ' usuarios';
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1,
                            font: { family: 'Inter' },
                            color: '#9CA3AF'
                        },
                        grid: {
                            color: '#F3F4F6',
                            drawBorder: false
                        }
                    },
                    x: {
                        ticks: {
                            font: { family: 'Inter' },
                            color: '#6B7280'
                        },
                        grid: {
                            display: false,
                            drawBorder: false
                        }
                    }
                }
            }
        });
    });
</script>

@endsection
