@extends('plantilla')
@section('principal')
  <ul>
    @foreach ($movies as $movie)
      <li>
        <a href="/pelicula/{{$movie->id}}">{{$movie->title}}</a>
      </li>
    @endforeach
  </ul>

  <a href="/peliculas/agregar-pelicula">Agregar Película</a>
@endsection
