<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Obtener conteo de usuarios por rol
        $rolesData = User::select('role', DB::raw('count(*) as total'))
            ->groupBy('role')
            ->get();
            
        $rolesLabels = $rolesData->pluck('role')->map(function ($role) {
            return ucfirst($role);
        })->toArray();
        $rolesValues = $rolesData->pluck('total')->toArray();

        // 2. Obtener usuarios registrados en los últimos 6 meses
        $monthsLabels = collect();
        $registrationsValues = collect();

        for ($i = 5; $i >= 0; $i--) {
            // Obtenemos mes y año, restando X meses a la fecha actual
            $date = Carbon::now()->subMonths($i);
            
            // Etiqueta del mes para el gráfico (ej: "Oct", "Nov")
            $monthsLabels->push($date->translatedFormat('M'));
            
            // Conteo de usuarios en ese mes y año específico
            $count = User::whereYear('created_at', $date->year)
                         ->whereMonth('created_at', $date->month)
                         ->count();
                         
            $registrationsValues->push($count);
        }

        return view('admin.dashboard', compact(
            'rolesLabels', 
            'rolesValues', 
            'monthsLabels', 
            'registrationsValues'
        ));
    }
}
