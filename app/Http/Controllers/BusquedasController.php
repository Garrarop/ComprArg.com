<?php

namespace App\Http\Controllers;

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
      $producto = " " ;
      return view('producto', compact('producto'));
    }

    public function buscar($buscar)
    {
      $productos = " " ;
      return view('resultados', compact('productos'));
    }
}
