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
      // dd($categorias);
      return view('categorias', compact('categorias'));
    }

    public function info($id)
    {
      $producto = Product::find($id);
      // dd($producto);
      return view('producto', compact('producto'));
    }

    public function buscar($buscar)
    {
      $productos = Product::where('name',  'LIKE' , "%$buscar%");
      return view('resultados', compact('productos'));
    }
}
