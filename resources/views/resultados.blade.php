@extends('layouts.app')
@section('title')
  <title>Resultados de la busqueda</title>
@endsection
@section('content')
  <div class="container">
    {{ $productos->links() }}
    @forelse ($productos as $producto)
      <div class="media">
        <img class="d-flex mr-3" data-src="holder.js/64x64?theme=sky" alt="Generic placeholder image">
        <div class="media-body">
          <h5 class="mt-0">{{ $producto->name }}</h5>
             {{-- Poner categoria del producto y precio. Acomodar para que se vea bien.--}}
        </div>
      </div>
    @empty
      <p>Tu busqueda no genero resultados :(</p>
      <div class="media">
        <img class="d-flex mr-3" data-src="holder.js/64x64?theme=sky" alt="Imagen del producto">
        <div class="media-body">
          <h5 class="mt-0">Name</h5>
          Oidos sordos al viento, vista gorda a la verdad, sobre llovido mojado, sobre pasado pisado y más...
        </div>
      </div>
    @endforelse
    {{ $productos->links() }}
  </div>
@endsection
