@extends('layouts.app')
@section('title')
  <title>Vender</title>
@endsection
 @guest
   <div class="container">
     <div class="card card-default">
       <div class="card-header">
         <h2>Para publicar un producto primero debes:</h2>
       </div>
       <div class="d-flex justify-content-center">
         <h4 style="margin: 10;"><a href="/login">INICIAR SESIÓN</a></h4>
         <p style="margin: 10;">ó</p>
         <h4 style="margin: 10;"><a href="/register">REGISTRARSE</a></h4>
       </div>
     </div>
   </div>
 @else


 @endguest
