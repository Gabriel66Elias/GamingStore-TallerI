<?php

use Illuminate\Support\Facades\Route;

// Rutas estáticas de tu página
Route::get('/', function () {
    return view('principal');
});
Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});
Route::get('/comercializacion', function () {
    return view('comercializacion');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/terminos', function () {
    return view('terminos');
});
Route::get('/catalogo', function () {
    return view('catalogo');
});

// Ruta dinámica para el detalle de cada producto
Route::get('/consulta/{id}', function ($id) {
    // Simulación de base de datos
    $productos = [
        0 => [
            'nombre' => 'PlayStation 5',
            'descripcion' => 'Vive una experiencia de juego de nueva generación con la PlayStation 5. Incluye tecnología de trazado de rayos y carga ultra rápida.',
            'imagen' => '/img/ps5.webp',
            'specs' => ['Procesador AMD Ryzen Zen 2', 'Gráficos RDNA 2', '825GB SSD de ultra alta velocidad']
        ],
        1 => [
            'nombre' => 'Mando - PlayStation 5',
            'descripcion' => 'Descubre una experiencia de juego más profunda con el innovador mando de PS5, con retroalimentación háptica.',
            'imagen' => '/img/mando-ps5.webp',
            'specs' => ['Retroalimentación háptica', 'Gatillos adaptativos', 'Micrófono integrado', 'Batería recargable']
        ],
        2 => [
            'nombre' => 'Nintendo Switch',
            'descripcion' => 'La consola que se adapta a tu ritmo de vida. Juega en el televisor o en modo portátil con total libertad.',
            'imagen' => '/img/switch.webp',
            'specs' => ['Pantalla de 6.2 pulgadas', '32GB de almacenamiento', 'Mandos Joy-Con incluidos', 'Autonomía de 4.5 a 9 horas']
        ]
    ];

    // Si el usuario pone un ID que no existe (ej: /consulta/99), lo devolvemos al catálogo
    if (!isset($productos[$id])) {
        return redirect('/catalogo');
    }

    $producto = $productos[$id];

    // Enviamos los datos a la vista "consulta.blade.php"
    return view('consultas', compact('producto'));
});