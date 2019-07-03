@extends('plantilla')
@section('principal')
  <form class="" action="/peliculas/agregar-pelicula" method="post">
    @csrf
    <div class="d-flex justify-content-center">
      <input type="text" name="title" placeholder="Título">
    </div>
    <div class="d-flex justify-content-center">
      <input type="number" name="rating" placeholder="Rating">
    </div>
    <div class="d-flex justify-content-center">
      <input type="number" name="awards" placeholder="Cantidad de premios">
    </div>
    <div class="d-flex justify-content-center">
      <div class="">
        <label class="" for="release_date">Fecha de emisión</label>
      </div>
      <input class="" type="date" name="release_date">
    </div>
    <div class="d-flex justify-content-center">
      <input type="number" name="length" placeholder="Duración">
    </div>
    <div class="d-flex justify-content-center">
      <select class="" name="genre">
        @foreach ($genres as $genre)
          <option>{{$genre->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit">Agregar Película</button>
    </div>
  </form>
@endsection
