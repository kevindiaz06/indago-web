<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $proyectosDestacados = Proyecto::where('destacado', true)->latest()->take(3)->get();
        $postsDestacados = Post::where('estado', 'publicado')->where('destacado', true)->latest()->take(2)->get();
        return view('inicio', compact('proyectosDestacados', 'postsDestacados'));
    }
}
