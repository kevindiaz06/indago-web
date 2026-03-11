<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('estado', 'publicado')->latest()->paginate(7); // 1 destacado + 6 en grilla
        return view('blog', compact('posts'));
    }
}
