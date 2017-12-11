@extends('layouts.app')
@section('title')
  <title>Categorias</title>
@endsection
@section('content')
  <div class="container">
    @foreach ($categorias as $categoria)
      <a href="/categoria/{{ $categoria->id }}">{{ $categoria->name }}</a>
    @endforeach
  </div>
@endsection
