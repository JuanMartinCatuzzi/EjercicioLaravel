@extends('plantilla')
@section('principal')

    <form class="" action="/actores/buscar" method="get">
      <input type="text" name="name" placeholder="Buscar">
      <button type="submit">Buscar</button>
    </form>
  <ul>
    @foreach ($actors as $actor)
      <li>
        <a href="/actor/{{$actor->id}}">{{$actor->getNombreCompleto()}}</a>
      </li>
    @endforeach
  </ul>
<a href="/actores/agregar-actor">Agregar Actor</a>
@endsection
