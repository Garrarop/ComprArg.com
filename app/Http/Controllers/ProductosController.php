<?php

namespace App\Http\Controllers;
use App\Product;
use App\Categorie;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
  public function editarForm($id)
  {
    $producto = Product::findOrFail($id);
    $categorias = Categorie::all();
    return view('user.editar', compact('categorias', 'producto'));
  }
  public function editar($id, Request $request)
  {
    $this->validate(
      $request,[
        'name' => 'required|max:50',
        'price' => 'required|numeric|min:0',
        'terms' => 'required|accepted',
        'description' => 'max:400'
      ]
    );
    $producto = Product::findOrFail($id);
    $producto->fill($request->all());
    $producto->save();
    return redirect(route('publicaciones'));
  }
  public function eliminar($id)
  {
    $publicacion = Product::findOrFail($id);
    $publicacion->delete();
    return redirect(route('publicaciones'));
  }
  public function info($id)
  {
    $producto = Product::find($id);
    return view('producto', compact('producto'));
  }
}
