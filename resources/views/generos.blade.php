@extends('plantilla')
@section('principal')
  <ul>
    @foreach ($genres as $genre)
      <li>
        {{$genre->name}}
      </li>
    @endforeach
  </ul>
@endsection
