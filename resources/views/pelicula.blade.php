@extends('plantilla')
@section('principal')
  <ul>
    <li>
      Título: {{$movie->title}}
    </li>
    <li>
      Rating: {{$movie->rating}}
    </li>
    <li>
      Premios: {{$movie->awards}}
    </li>
  </ul>
@endsection
