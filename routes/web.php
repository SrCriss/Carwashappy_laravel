<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


 // Vista para administradores
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('servicios', ServicioController::class);
        Route::resource('citas', CitaController::class);
        
    });
    
});

// Vista para usuarios generales
Route::get('/cliente', [ServicioController::class, 'userIndex'])->middleware('guest')->name('user.servicios');

Route::get('/', function () {
    return redirect('/cliente');
})->name('cliente');
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/cliente/storeCliente', [CitaController::class, 'storeCliente'])->name('citas.storeCliente');

Route::prefix('admin')->group(function () {
    
    Route::middleware(['guest'])->group(function () {
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [LoginController::class, 'login']);
        
    });
    
    Route::post('register', [RegisterController::class, 'register']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    
});

