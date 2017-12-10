<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.fontawesome.com/aa145e23f2.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="margin-top: 63px;">
      <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="/images/comprarg2.png" width="120px" alt="ComprArg.com"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i>Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/categorias"><i class="fa fa-list" aria-hidden="true"></i>Categorias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-money" aria-hidden="true"></i>Vender</a>
            </li>
            @guest
              <li style="margin-right: 3px;" class="nav-item active"><a class="nav-link btn btn-outline-primary my-2 my-sm-0" href="{{ route('login') }}">Iniciar sesión</a></li>
              <li style="margin-right: 3px;" class="nav-item active"><a class="nav-link btn btn-outline-primary my-2 my-sm-0" href="{{ route('register') }}">Registrarme</a></li>
            @else
                <li class="nav-item"><a href="{{ route('perfil') }}" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                  <i class="fa fa-user-circle" aria-hidden="true"></i>{{ Auth::user()->name }} <span class="caret"></span>
                </a></li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <abbr title="Cerrar sesión"><i class="fa fa-power-off" aria-hidden="true"></i></abbr>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
            @endguest
          </ul>
          <div class="inline">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="¿Qué estas buscando?" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>

          </div>
        </div>
      </nav>
        @yield('content')
<footer style="margin-top: 100px;">
  <ul class="nav justify-content-center block">
    <a class="nav-link"href="https://www.facebook.com/Strawberry-Tattoo-118125415529431/" target="_blank"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
    <a class="nav-link" href="http://twitter.com" target="_blank"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
    <a class="nav-link" href="http://instagram.com" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
    <a class="nav-link"href="http://youtube.com" target="_blank"><i class="fa fa-youtube fa-3x" aria-hidden="true"></i></a>
  </ul>
  <ul class="nav justify-content-center block">
    <a href="{{ Route('faq') }}">Preguntas frecuentes</a>
  </ul>
  <div style="text-align: end;">
    <span id="legal">Copyright <b>ComprArg.com</b><i class="fa fa-copyright" aria-hidden="true"></i> 2017 Copyright Holder All Rights Reserved.</span>
  </div>
</footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
