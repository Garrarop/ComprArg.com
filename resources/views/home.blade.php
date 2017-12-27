@extends('layouts.app')
@section('title')
  <title>Inicio</title>
@endsection
@section('content')
  <div id="wowslider-container1">
  <div class="ws_images"><ul>
  		<li><img src="data1/images/banner.jpg" alt="html5 slideshow" title="banner" id="wows1_0"/></li>
  		<li><img src="data1/images/banner_0.png" alt="banner" title="banner" id="wows1_1"/></li>
  	</ul></div>
  	<div class="ws_bullets"><div>
  		<a href="#" title="banner"><span><img src="data1/tooltips/banner.jpg" alt="banner"/>1</span></a>
  		<a href="#" title="banner"><span><img src="data1/tooltips/banner_0.png" alt="banner"/>2</span></a>
  	</div></div>
  <div class="ws_shadow"></div>
  </div>
  <script type="text/javascript" src="engine1/wowslider.js"></script>
  <script type="text/javascript" src="engine1/script.js"></script>
@endsection
