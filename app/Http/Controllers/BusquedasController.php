<?php

namespace App\Http\Controllers;
use App\Categorie;
use App\Product;
use Illuminate\Http\Request;

class BusquedasController extends Controller
{
    public function categoria($id)
    {
      $productos = Product::where('categorie_id', '=', "$id")->paginate(30);
      return view('categoria', compact('productos'));
    }
    public function categorias()
    {
      $categorias = Categorie::all();
      return view('categorias', compact('categorias'));
    }
    public function buscar(Request $request)
    {
      $buscar = $request->input('buscar');
      $productos = Product::where('name', 'LIKE', "%$buscar%")->paginate(30);
      return view('resultados', compact('productos'));
    }
}
