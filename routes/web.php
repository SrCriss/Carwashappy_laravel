<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


 // Vista para administradores
/* Route::get('/admin/servicios', [ServicioController::class, 'adminIndex'])->name('admin.servicios'); */
Route::resource('/admin/servicios', ServicioController::class);

// Vista para usuarios generales
Route::get('/cliente', [ServicioController::class, 'userIndex'])->name('user.servicios');

Route::get('/citas/create', [ServicioController::class, 'citaIndex'])->name('cita.form');


Route::get('/', function () {
    return redirect('/cliente');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/usuarios', UsuarioController::class);


Route::resource('/citas', CitaController::class);

Route::resource('/usuarios', UsuarioController::class);



Route::resource('/cita', App\Http\Controllers\CitaController::class);
