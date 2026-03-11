<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'resumen' => 'nullable|string',
            'contenido' => 'required|string',
            'categoria' => 'required|string|max:255',
            'estado' => 'required|in:borrador,publicado',
            'img' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->has('destacado')) {
            $count = Post::where('destacado', true)->count();
            if ($count >= 3) {
                throw \Illuminate\Validation\ValidationException::withMessages([
                    'destacado' => 'Ya existen 3 noticias destacadas. Por favor, desmarca otra antes de intentar destacar esta nueva.'
                ]);
            }
        }

        $data = $request->except(['img']);
        $data['destacado'] = $request->has('destacado');
        
        // Generate unique slug
        $slug = Str::slug($data['titulo']);
        $count = Post::where('slug', 'LIKE', "{$slug}%")->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }
        $data['slug'] = $slug;

        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('posts', 'public');
        }

        Post::create($data);

        return redirect()->route('admin.posts.index')->with('success', 'Noticia creada exitosamente.');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'resumen' => 'nullable|string',
            'contenido' => 'required|string',
            'categoria' => 'required|string|max:255',
            'estado' => 'required|in:borrador,publicado',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->has('destacado') && !$post->destacado) {
            $count = Post::where('destacado', true)->count();
            if ($count >= 3) {
                throw \Illuminate\Validation\ValidationException::withMessages([
                    'destacado' => 'Ya existen 3 noticias destacadas. Por favor, desmarca otra antes de intentar destacar esta.'
                ]);
            }
        }

        $data = $request->except(['img']);
        $data['destacado'] = $request->has('destacado');
        
        if ($data['titulo'] !== $post->titulo) {
            $slug = Str::slug($data['titulo']);
            $count = Post::where('slug', 'LIKE', "{$slug}%")->where('id', '!=', $post->id)->count();
            if ($count > 0) {
                $slug .= '-' . ($count + 1);
            }
            $data['slug'] = $slug;
        }

        if ($request->hasFile('img')) {
            if ($post->img) Storage::disk('public')->delete($post->img);
            $data['img'] = $request->file('img')->store('posts', 'public');
        }

        $post->update($data);

        return redirect()->route('admin.posts.index')->with('success', 'Noticia actualizada exitosamente.');
    }

    public function destroy(Post $post)
    {
        if ($post->img) Storage::disk('public')->delete($post->img);
        
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Noticia eliminada exitosamente.');
    }
}
