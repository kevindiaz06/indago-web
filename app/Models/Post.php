<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'titulo', 'slug', 'resumen', 'contenido', 
        'categoria', 'estado', 'img', 'destacado'
    ];

    protected $casts = [
        'destacado' => 'boolean'
    ];
}
