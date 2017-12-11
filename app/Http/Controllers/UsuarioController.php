<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function publicar()
    {
      return view('vender');
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
