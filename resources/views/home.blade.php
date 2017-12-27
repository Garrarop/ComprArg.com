@extends('layouts.app')
@section('title')
  <title>Inicio</title>
@endsection
@section('content')
<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100 align-self-stretch" src="/images/banner.png" data-src="holder.js/900x400?theme=social" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 align-self-stretch" src="/images/banner.jpg" data-src="holder.js/900x400?theme=industrial" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
@endsection
