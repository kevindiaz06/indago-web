<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::latest()->paginate(10);
        return view('admin.proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('admin.proyectos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'tipo' => 'required|in:residencial,comercial,industrial,civil',
            'estado' => 'required|in:ejecucion,finalizado',
            'm2' => 'required|string|max:255',
            'pisos' => 'required|string|max:255',
            'tiempo' => 'required|string|max:255',
            'cliente' => 'required|string|max:255',
            'reto' => 'nullable|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'galeria.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->has('destacado')) {
            $count = Proyecto::where('destacado', true)->count();
            if ($count >= 3) {
                throw \Illuminate\Validation\ValidationException::withMessages([
                    'destacado' => 'Ya existen 3 proyectos destacados en la página de inicio. Por favor, desmarca otro proyecto antes de intentar destacar este nuevo.'
                ]);
            }
        }

        $data = $request->except(['img', 'galeria']);
        $data['destacado'] = $request->has('destacado'); // Checkbox evaluation

        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('proyectos', 'public');
        }

        $galeriaUrls = [];
        if ($request->hasFile('galeria')) {
            foreach ($request->file('galeria') as $file) {
                $galeriaUrls[] = $file->store('proyectos/galeria', 'public');
            }
        }
        $data['galeria'] = $galeriaUrls;

        Proyecto::create($data);

        return redirect()->route('admin.proyectos.index')->with('success', 'Proyecto creado exitosamente.');
    }

    public function edit(Proyecto $proyecto)
    {
        return view('admin.proyectos.edit', compact('proyecto'));
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'tipo' => 'required|in:residencial,comercial,industrial,civil',
            'estado' => 'required|in:ejecucion,finalizado',
            'm2' => 'required|string|max:255',
            'pisos' => 'required|string|max:255',
            'tiempo' => 'required|string|max:255',
            'cliente' => 'required|string|max:255',
            'reto' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'galeria.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->has('destacado') && !$proyecto->destacado) {
            $count = Proyecto::where('destacado', true)->count();
            if ($count >= 3) {
                throw \Illuminate\Validation\ValidationException::withMessages([
                    'destacado' => 'Ya existen 3 proyectos destacados en la página de inicio. Por favor, desmarca otro proyecto antes de intentar destacar este.'
                ]);
            }
        }

        $data = $request->except(['img', 'galeria']);
        $data['destacado'] = $request->has('destacado'); // Checkbox evaluation

        if ($request->hasFile('img')) {
            if ($proyecto->img) Storage::disk('public')->delete($proyecto->img);
            $data['img'] = $request->file('img')->store('proyectos', 'public');
        }

        if ($request->hasFile('galeria')) {
            if (is_array($proyecto->galeria)) {
                foreach ($proyecto->galeria as $oldImg) {
                    Storage::disk('public')->delete($oldImg);
                }
            }
            $galeriaUrls = [];
            foreach ($request->file('galeria') as $file) {
                $galeriaUrls[] = $file->store('proyectos/galeria', 'public');
            }
            $data['galeria'] = $galeriaUrls;
        }

        $proyecto->update($data);

        return redirect()->route('admin.proyectos.index')->with('success', 'Proyecto actualizado exitosamente.');
    }

    public function destroy(Proyecto $proyecto)
    {
        if ($proyecto->img) Storage::disk('public')->delete($proyecto->img);
        if (is_array($proyecto->galeria)) {
            foreach ($proyecto->galeria as $oldImg) {
                Storage::disk('public')->delete($oldImg);
            }
        }
        
        $proyecto->delete();

        return redirect()->route('admin.proyectos.index')->with('success', 'Proyecto eliminado exitosamente.');
    }
}
