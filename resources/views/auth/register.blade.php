@extends('layouts.app')
@section('title')
  <title>Registrarme</title>
@section('content')
  <div class="container">
    <div class="d-flex justify-content-center">
              <div class="card card-default">
                  <div class="card-header">Registrarme</div>
                  <div class="card-body">
                      <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                          {{ csrf_field() }}

                          <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="name" class="control-label">Nombre y apellido</label>

                              <div class="">
                                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                  @if ($errors->has('name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="control-label">E-Mail</label>

                              <div class="">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="password" class="control-label">Contraseña</label>

                              <div class="">
                                  <input id="password" type="password" class="form-control" name="password" required>


                             </div>
                          </div>

                          <div class="form-group">
                              <label for="password-confirm" class="control-label">Confirmar contraseña</label>

                              <div class="">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      Registrarme
                                  </button>
                              </div>
                         </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
@endsection
