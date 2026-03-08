<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('ubicacion');
            $table->string('tipo'); // residencial, comercial, industrial, civil
            $table->string('estado'); // ejecucion, finalizado
            $table->string('m2');
            $table->string('pisos');
            $table->string('tiempo');
            $table->string('cliente');
            $table->string('img')->nullable();
            $table->json('galeria')->nullable();
            $table->text('reto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
