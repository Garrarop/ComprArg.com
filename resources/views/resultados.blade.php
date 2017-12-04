@extends('layouts.app')
@section('title')
  <title>Resultados de la busqueda</title>
@endsection
@section('content')
  <div class="container">
    @forelse ($productos as $producto)
      
    @empty

    @endforelse
  </div>
@endsection
