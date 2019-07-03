@extends('plantilla')
@section('principal')
  <ul>
    <li>
      Nombre: {{$actor->getNombreCompleto()}}
    </li>
    <li>
      Rating: {{$actor->rating}}
    </li>
  </ul>

  <a href="/actores/{{$actor->id}}/editar">Editar Actor</a>
@endsection
