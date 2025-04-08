@extends('layouts.app')

@section('title', 'Fotos')

@section('content')
    <h1>Galería de Fotos</h1>
    <p>Aquí puedes ver nuestras imágenes más recientes.</p>
    
    <div class="row">
        <div class="col-md-4 mb-4">
            <img src="https://via.placeholder.com/300" class="img-thumbnail" alt="Imagen 1">
        </div>
        <div class="col-md-4 mb-4">
            <img src="https://via.placeholder.com/300" class="img-thumbnail" alt="Imagen 2">
        </div>
        <div class="col-md-4 mb-4">
            <img src="https://via.placeholder.com/300" class="img-thumbnail" alt="Imagen 3">
        </div>
    </div>
@endsection