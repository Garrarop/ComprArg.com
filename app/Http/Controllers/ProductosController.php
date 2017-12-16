<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
  public function editar($id)
  {
    return view('user.editar');
  }
  public function eliminar($id)
  {
  
  }
  public function info($id)
  {
    $producto = Product::find($id);
    return view('producto', compact('producto'));
  }
}
