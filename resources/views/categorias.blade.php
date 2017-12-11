@extends('layouts.app')
@section('title')
  <title>Categorias</title>
@endsection
@section('content')
  <div class="container d-flex justify-content-center">
    <table>
      @foreach ($categorias as $categoria)
        <tr>
          <td><a href="/categoria/{{ $categoria->id }}">{{ $categoria->name }}</a></td>
        </tr>
      @endforeach

    </table>
  </div>
@endsection
