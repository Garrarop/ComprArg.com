@extends('layouts.app')
@section('title')
  <title>Vender</title>
  <script src="/js/main.js" charset="utf-8"></script>
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
           @if(count($errors)>0)
            	<p>
            		<ul>
            			@foreach($errors->all() as $error)
            				<li style="color:red">{{ $error }}</li>
            			@endforeach
            		</ul>
            	</p>
          	@endif
           <div class="form-group">
             <label for="name">Título de la publicación:</label>
             <div class="input-group">
               <input autofocus required class="form-control" id="name" type="text" name="name" value="{{ old('name') }}">
               <span id="cant" class="input-group-addon">0/50</span>
             </div>
           </div>
           <div class="form-group">
             <label for="price">Precio del producto:</label>
             <div class="input-group">
               <span class="input-group-addon">$</span>
               <input  required class="form-control" id="price" type="number" name="price" value="{{ old('price') }}">
               <span class="input-group-addon">ARS</span>
             </div>
           </div>
           <div class="form-group">
             <label for="categorie_id">Seleccione una categoría:</label><select required class="form-control" id="categorie_id" class="" name="categorie_id">
               @foreach ($categorias as $categoria)
                 <option class="form-control" value="{{ $categoria->id }}">{{ $categoria->name }}</option>
               @endforeach
               <option  class="form-control" value="0">Otro</option>
             </select>
           </div>
           <div class="form-group">
             <label for="description">Introduzca una descripción: (Opcional)</label><textarea value="{{ old('description') }}" class="form-control" id="description" name="description" rows="8" cols="80" value="{{ old('description') }}"></textarea>
           </div>
           <div class="form-group">
             <label for="foto">Imagen principal del producto</label>
             <input type="file" class="form-control-file btn-outline-success">
           </div>
           <div class="form-group">
             <label class="custom-control custom-checkbox">
               <input required class="custom-control-input" style="margin-left: 5px;" id="check" type="checkbox" name="terms" {{ old('terms') ? 'checked' : '' }}>
               <span class="custom-control-indicator"></span>
               <span class="custom-control-description">Acepto los <a href="/terms">Términos y condiciones</a></span>
             </label>
           </div>
           <div class="form-group">
             <input type="submit" class="btn btn-primary" name="" value="Publicar">
           </div>
         </form>
       </div>
     </div>
   </div>
 @endsection
