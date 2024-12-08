<?php

use App\Http\Controllers\ProductoDosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accion', function () {
    return view('welcome_dos');
});

// Rutas para mostras productos
Route::get('/productos',
[ProductoDosController::class, 'index'])->name('producto.index');

// Rutas de registro
Route::get('/productos/registro',
[ProductoDosController::class, 'create'])->name('producto.create');
Route::post('/productos/store',
[ProductoDosController::class, 'store'])->name('producto.store');

// Rutas de actualizacion
Route::get('/productos/actualizar/{id}',
[ProductoDosController::class, 'edit'])->name('producto.edit');
Route::put('/productos/update/{id}',
[ProductoDosController::class, 'update'])->name('producto.update');

// Ruta de eliminación
Route::delete('/productos/destroy/{id}',
[ProductoDosController::class, 'destroy'])->name('producto.destroy');
