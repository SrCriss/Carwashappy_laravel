<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


// Vista para administradores
Route::get('/admin/servicios', [ServicioController::class, 'adminIndex'])->name('admin.servicios');

// Vista para usuarios generales
Route::get('/cliente', [ServicioController::class, 'userIndex'])->name('user.servicios');

Route::get('/', function () {
    return redirect('/cliente');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/usuarios', UsuarioController::class);
/* Route::resource('/servicios', ServicioController::class); */
Route::resource('/citas', CitaController::class);

Route::resource('/usuarios', UsuarioController::class);



