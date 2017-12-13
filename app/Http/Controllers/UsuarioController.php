<?php

namespace App\Http\Controllers;
use App\Categorie;
use App\Product;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function publicarform()
    {
      $categorias = Categorie::all();
      return view('vender', compact('categorias'));
    }
    public function publicar(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|size:50',
        'price' => 'required|numeric|min:0',
        'terms' => 'required|accepted',
        'user_id' => 'required|numeric|exists:users,id'
      ]
    );


      $producto = new Product;
      $producto->name = $request->input('name');
      $producto->user_id = $request->input('user_id');
      $producto->price = $request->input('price');
      $producto->categorie_id = $request->input('categorie_id');
      $producto->description = $request->input('description');
      dd($producto);
    }
    public function perfil()
    {
      return view('user.favoritos');
    }
    public function fav()
    {
      return view('user.favoritos');
    }
}
