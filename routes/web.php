<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

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

// --- Lógica de Productos (Mock de Base de Datos) ---
// Definimos el array una sola vez para evitar errores de inconsistencia
$productos = [
    0 => [
        'nombre' => 'PlayStation 5',
        'descripcion' => 'Vive una experiencia de juego de nueva generación con la PlayStation 5.',
        'imagen' => '/img/ps5.webp',
        'precio' => 1200000,
        'stock' => 1,
        'specs' => ['Procesador AMD Ryzen Zen 2', '825GB SSD', 'DualSense included']
    ],
    1 => [
        'nombre' => 'Mando - PlayStation 5',
        'descripcion' => 'Descubre una experiencia de juego más profunda con retroalimentación háptica.',
        'imagen' => '/img/mando-ps5.webp',
        'precio' => 75000,
        'stock' => 5,
        'specs' => ['Retroalimentación háptica', 'Gatillos adaptativos']
    ],
    2 => [
        'nombre' => 'Nintendo Switch',
        'descripcion' => 'Juega en el televisor o en modo portátil con total libertad.',
        'imagen' => '/img/sw2.webp',
        'precio' => 459999,
        'stock' => 10,
        'specs' => ['Pantalla 6.2"', '32GB memoria', 'Joy-Con']
    ],
    3 => [
        'nombre' => 'Tarjeta grafica RTX 5090',
        'descripcion' => 'Descubre la tarjeta grafica mas poderosa de nvidea.',
        'imagen' => '/img/rtx5090.webp',
        'precio' => 2600000,
        'stock' => 2,
        'specs' => ['32GB GDDR7', 'Arquitectura Blackwell', 'DLSS 4.0']
    ],
    4 => [
        'nombre' => 'Tarjeta grafica RX 6600xt',
        'descripcion' => 'Tarjeta grafica de gama media exelente para juego en 1080p',
        'imagen' => '/img/rx6600xt.webp',
        'precio' => 450000,
        'stock' => 3,
        'specs' => ['8GB GDDR6', 'FSR 3.0', '1080p Ultra']
    ],
    5 => [
        'nombre' => 'Memoria RAM 32gb (x2 16gb) HyperX',
        'descripcion' => 'Pack de 2 memorias ram de 16gb 3200hz con rgb',
        'imagen' => '/img/ram.webp',
        'precio' => 9800999,
        'stock' => 3,
        'specs' => ['3200MHz', 'CL16', 'RGB Lighting']
    ],
];

// --- Rutas Dinámicas ---

// Catálogo: Pasamos el array completo
Route::get('/catalogo', function () use ($productos) {
    return view('catalogo', ['productos' => $productos]);
});

// Detalle de Producto: Esta es la ruta que te faltaba y causaba el 404
Route::get('/consulta/{id}', function ($id) use ($productos) {
    // Verificamos si el ID existe en nuestro array
    if (!isset($productos[$id])) {
        return redirect('/catalogo');
    }

    $producto = $productos[$id];
    return view('consultas', compact('producto'));
});

// --- Funcionalidad de Contacto ---
Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', [ContactoController::class, 'procesar']);