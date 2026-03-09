<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = [
        'titulo', 'ubicacion', 'tipo', 'estado', 'm2', 'pisos', 
        'tiempo', 'cliente', 'destacado', 'img', 'galeria', 'reto'
    ];

    protected $casts = [
        'destacado' => 'boolean',
        'galeria' => 'array'
    ];
}
