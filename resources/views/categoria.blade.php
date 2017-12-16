@extends('layouts.app')
@section('title')
  <title>Resultados de la busqueda</title>
@endsection
@section('content')
  <div class="container">
    {{ $productos->links() }}
    @forelse ($productos as $producto)
    <a href="{{ route('producto', $producto) }}">  <div class="media">
        <img class="d-flex mr-3" data-src="holder.js/64x64?theme=sky" alt="Imagen">
        <div class="media-body">
          <h5 class="mt-0">{{ $producto->name }}</h5> <span>${{ $producto->price }}</span>
             <p>{{ $producto->description }}</p>
        </div>
      </div></a>
    @empty
      <p>Tu busqueda no genero resultados :(</p>

    @endforelse
    {{ $productos->links() }}
  </div>
@endsection
