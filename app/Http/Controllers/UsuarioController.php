<?php

namespace App\Http\Controllers;
use App\Categorie;
use App\Product;
use Auth;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
  
    public function configuracion()
    {
      return view('user.config');
    }
    public function publicaciones()
    {
      $user = Auth::user()->id;
      $productos = Product::where('user_id', '=', $user)->paginate(30);
      return view('user.publicaciones', compact('productos'));
    }
    public function publicarform()
    {
      $categorias = Categorie::all();
      return view('vender', compact('categorias'));
    }
    public function publicar(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|max:50',
        'price' => 'required|numeric|min:0',
        'terms' => 'required|accepted',
        'user_id' => 'required|numeric|exists:users,id',
        'description' => 'required|max:400'
      ]
    );
    $producto = new Product($request->all());
    $producto->user_id = Auth::user()->id;
    $producto->save();
    return redirect(route('perfil'));

    }
    public function perfil()
    {
      return view('user.favoritos');
    }
}
