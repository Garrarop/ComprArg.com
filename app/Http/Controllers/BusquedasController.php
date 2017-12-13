<?php

namespace App\Http\Controllers;
use App\Categorie;
use App\Product;
use Illuminate\Http\Request;

class BusquedasController extends Controller
{
    public function categorias()
    {
      $categorias = Categorie::all();
      return view('categorias', compact('categorias'));
    }
    public function info($id)
    {
      $producto = Product::find($id);
      return view('producto', compact('producto'));
    }

    public function buscar(Request $request)
    {
      $buscar = $request->input('buscar');
      $productos = Product::where('name', 'LIKE', "%$buscar%")->paginate(30);
      return view('resultados', compact('productos'));
    }
}
