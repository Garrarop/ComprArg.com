@extends('layouts.app')
@section('title')
  @yield('title')
@endsection
@section('content')
  <div class="row">
      <div class="col-1">

      </div>
      <div class="col-8">
        @yield('section')
      </div>
      <div class="col-md-3">
        <ul class="list-unstyled">
          <li><a href="/perfil/favoritos">Favoritos</a></li>
          <li><a href="/perfil/compras">Compras</a></li>
          <li><a href="/perfil/preguntas">Preguntas</a></li>
          <li><a href="#">Publicaciones</a></li>
          <li><a href="#">Ventas</a></li>
          <li><a href="#">Configuración</a></li>
        </ul>
      </div>
  </div>
@endsection
