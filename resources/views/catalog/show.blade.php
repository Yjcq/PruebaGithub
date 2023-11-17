@extends('layouts.master')

@section('content')

   Vista detalle peliculas

   <div class="row">
    <div class="col-sm-4">
       
        <img src="{{ $pelicula['imagen'] }}" alt="Imagen de la película">
    </div>
    <div class="col-sm-8">

        <h2>{{ $pelicula['titulo'] }}</h2>
        <p><strong>Año:</strong> {{ $pelicula['anio'] }}</p>
        <p><strong>Director:</strong> {{ $pelicula['director'] }}</p>
        <p><strong>Resumen:</strong> {{ $pelicula['resumen'] }}</p>

        @if ($pelicula['rented'])
            <p><strong>Estado:</strong> Película actualmente alquilada</p>
            <button class="btn btn-danger">Devolver película</button>
        @else
            <p><strong>Estado:</strong> Película disponible</p>
            <button class="btn btn-primary">Alquilar película</button>
        @endif

        <a href="{{ route('editarPelicula', ['id' => $pelicula['id']]) }}" class="btn btn-warning">Editar película</a>
        <a href="{{ route('listadoPeliculas') }}" class="btn btn-secondary">Volver al listado</a>
    </div>
</div>
  </div>
@endsection