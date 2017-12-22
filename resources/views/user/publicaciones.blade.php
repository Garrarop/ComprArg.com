@extends('layouts.app')
@section('title')
  <title>Publicaciones</title>
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
      <a class="btn btn-outline-success" href="{{ route('editar_form', $producto) }}">Editar</a>
      <form  class="d-inline" method="POST" action="{{ route('eliminar_publicacion', $producto) }}" onsubmit="return confirm('¿Está seguro que desea borrar esta publicación?')">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button class="btn btn-outline-danger" type="submit">Eliminar</button>
      </form>
    @empty
      <h6>No tenes ninguna publicacion!</h6>
      <h6>Que estas esperando? <a href="/Vender"><strong>Publica tu primer producto</strong> </a> </h6>
    @endforelse
    {{ $productos->links() }}
  </div>
@endsection
