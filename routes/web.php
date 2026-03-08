<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio')->name('inicio');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/servicios', 'servicios')->name('servicios');
Route::view('/proyectos', 'proyectos')->name('proyectos');
Route::view('/blog', 'blog')->name('blog');
Route::view('/privacidad', 'privacidad')->name('privacidad');
Route::view('/terminos', 'terminos')->name('terminos');

Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Middleware\IsAdmin;

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class)->middleware(IsAdmin::class)->only(['index', 'store', 'update', 'destroy']);
});

Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
