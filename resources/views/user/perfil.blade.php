@extends('layouts.perfil')
@section('title')
  <title>Perfil</title>
@endsection
@section('section')
  <div class="d-flex justify-content-around jumbotron">
    <img src="" alt="Foto de perfil">
    <h1>{{ $user->name }}</h1>
    <p>$user->points</p>
  </div>
@endsection
