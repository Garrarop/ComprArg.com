@extends('layouts.app')
@section('title')
  <title>{{ $producto->name }} - Comprarg.com</title>
@endsection
@section('content')
  <div class="container">
    <h1>{{ $producto->name }}</h1>
    <h2>{{ $producto->price }}</h2>
    <button type="button" name="button">Comprar</button>
  </div>
@endsection
