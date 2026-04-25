<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProductoController; // <-- Importamos tu nuevo controlador

// --- Rutas estáticas ---
Route::get('/', function () {
    return view('principal');
});

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

Route::get('/comercializacion', function () {
    return view('comercializacion');
});

Route::get('/terminos', function () {
    return view('terminos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', [ContactoController::class, 'procesar']);


// --- Rutas dinámicas manejadas por el Controlador ---

// Ruta para ver el catálogo entero (apunta al método 'index')
Route::get('/catalogo', [ProductoController::class, 'index']);

// Ruta para ver el detalle de un producto (apunta al método 'show')
Route::get('/consulta/{id}', [ProductoController::class, 'show']);

Route::get('/confirmacion-pedido', function () {
    return view('confirmacionpedido');
});