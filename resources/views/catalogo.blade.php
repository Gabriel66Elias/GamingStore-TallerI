@extends('layout.main')
@section('titulo', 'Catálogo')
@section('contenido')
    <div class="container mt-5">
        <h2 class="text-center mb-5 text-white">Consolas y Accesorios</h2>
        <div class="row g-4">

            {{-- Iteramos sobre el array de productos --}}
            @foreach($productos as $id => $producto)
                <x-producto-card :producto="$producto" :id="$id" />
            @endforeach

        </div>
    </div>
@endsection
