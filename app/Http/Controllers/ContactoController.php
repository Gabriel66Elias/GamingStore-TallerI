<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function procesar(Request $request)
{
    // Captura los datos del formulario
    $nombre = $request->input('nombre');
    $email = $request->input('email');

    // Retorna la vista de éxito pasando los datos
    return view('exito', [
        'nombre' => $nombre,
        'email' => $email
    ]);
}
}
