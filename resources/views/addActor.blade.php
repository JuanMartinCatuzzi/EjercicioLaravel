@extends('plantilla')
@section('principal')
  <form class="" action="/actores/agregar-actor" method="post">
    @csrf
    <div class="d-flex justify-content-center">
      <input type="text" name="first_name" placeholder="Nombre">
    </div>
    <div class="d-flex justify-content-center">
      <input type="text" name="last_name" placeholder="Apellido">
    </div>
    <div class="d-flex justify-content-center">
      <input type="number" name="rating" placeholder="Rating">
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit">Agregar Actor</button>
    </div>
  </form>
@endsection
