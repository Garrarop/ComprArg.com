@extends('layouts.app')
@section('title')
  <title>Vender</title>
@endsection
 @section('content')
   <div class="container">
     <div class="card card-default">
       <div class="card-header">
         <h1>Publicar un producto</h1>
       </div>
       <div class="card-body">
         <form class="" action="/Vender" method="post">
           {{ csrf_field() }}
           <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
           <div class="form-group">
             <label for="name">Título de la publicación:</label><input required class="form-control" id="name" type="text" name="name" value="{{ old('name') }}"><br>
           </div>
           <div class="form-group">
             <label for="price">Precio del producto:</label>
             <div class="input-group">
               <span class="input-group-addon">$</span>
               <input  required class="form-control" id="price" type="number" name="price" value="{{ old('price') }}"><br>
               <span class="input-group-addon">ARS</span>
             </div>
           </div>
           <div class="form-group">
             <label for="categorie_id">Seleccione una categoría:</label><select required class="form-control" id="categorie_id" class="" name="categorie_id">
               @foreach ($categorias as $categoria)
                 <option class="form-control" value="{{ $categoria->id }}">{{ $categoria->name }}</option>
               @endforeach
             </select><br>
           </div>
           <div class="form-group">
             <label for="description">Introduzca una descripción: (Opcional)</label><textarea class="form-control" id="description" name="description" rows="8" cols="80" value="{{ old('description') }}"></textarea><br>
           </div>
           <div class="form-group">
             <label for="foto">Imagen principal del producto</label>
             <input type="file" class="form-control-file btn-outline-success">
           </div>
           <div class="form-group">
             <label for="check">Acepto los <a href="/terms">Términos y condiciones</a> </label><input required style="margin-left: 5px;" id="check" type="checkbox" name="terms" value="">
           </div>
           <div class="form-group">
             <input type="submit" class="btn btn-primary" name="" value="Publicar">
           </div>
         </form>
       </div>
     </div>
   </div>
 @endsection
