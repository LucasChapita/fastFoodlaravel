<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',HomeController::class);
// Rutas para el registro y el inicio de sesión
Route::get('/registrarse', [HomeController::class, 'registrarse'])->name('registro');
Route::get('/login', [HomeController::class, 'login'])->name('login');

// Ruta para la página principal (index)
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/', [HomeController::class, 'volver'])->name('volver');
/* registros */
Route::post('/registrarse', [UserController::class, 'store'])->name('registrarse.store');



