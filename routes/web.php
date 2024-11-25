<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/usuarios', UsuarioController::class);
Route::resource('/servicios', ServicioController::class);
Route::resource('/citas', CitaController::class);
