<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros');

Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
