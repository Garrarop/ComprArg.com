@extends('layouts.app')
@section('title')
  <title>Iniciar sesión</title>
@section('content')
  <div class="container">
    <div class="d-flex justify-content-center">
              <div class="card card-default">
                  <div class="card-header">Iniciar sesión</div>
                  <div class="card-body">
                      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                          {{ csrf_field() }}

                          <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="control-label">E-Mail</label>

                              <div class="">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <label for="password" class="control-label">Contraseña</label>

                              <div class="">
                                  <input id="password" type="password" class="form-control" name="password" required>

                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <div class="checkbox">
                                      <label class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                          <span class="custom-control-indicator"></span>
                                          <span class="custom-control-description">Recordarme</span>
                                      </label>
                                  </div>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-8 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      Iniciar
                                  </button>

                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                      ¿Olvidaste tu contraseña?
                                  </a>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
    </div>
@endsection
