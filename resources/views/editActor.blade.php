@extends('plantilla')
@section('principal')
  <form class="" action="/actores/{id}/editar" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="id" value="{{$actor->id}}">
    <div class="d-flex justify-content-center">
      <label for="first_name">Nombre: </label>
    </div>
    <div class="d-flex justify-content-center">
      <input type="text" name="first_name" value="{{$actor->first_name}}">
    </div>
    <div class="d-flex justify-content-center">
      <label for="last_name">Apellido: </label>
    </div>
    <div class="d-flex justify-content-center">
      <input type="text" name="last_name" value="{{$actor->last_name}}">
    </div>
    <div class="d-flex justify-content-center">
      <label for="rating">Rating: </label>
    </div>
    <div class="d-flex justify-content-center">
      <input type="number" name="rating" value="{{$actor->rating}}">
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit">Editar Actor</button>
    </div>
  </form>
@endsection
