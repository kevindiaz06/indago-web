<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $proyectosDestacados = Proyecto::where('destacado', true)->latest()->take(3)->get();
        return view('inicio', compact('proyectosDestacados'));
    }
}
