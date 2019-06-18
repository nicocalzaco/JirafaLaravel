@extends('master')

@section('title')
  Register
@endsection

@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="formulario">
                <h1 id="section-register">Register</h1>
                <h3>¿No tenes cuenta? Completá tus datos</h3>

                <div class="panel-body">
                    <form class="tarjets" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="form-control">Nombre</label>

                            <div>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                            <label for="lastName" class="form-control">Apellido</label>

                            <div>
                                <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}" required autofocus>

                                @if ($errors->has('lastName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : ''}}">
                          <label for="gender">Género:</label><br>
                          <input type="radio" name="gender" value="fem" checked>Femenino
                          <input type="radio" name="gender" value="masc" checked>Masculino
                          <input type="radio" name="gender" value="other" checked>Prefiero no decirlo
                          @if ($errors->has('gender'))
                            <span class="help-block">
                              <strong>{{ $errors->first('gender')}}</strong>
                            </span>
                          @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email</label>

                            <div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Contraseña</label>

                            <div>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Repetí la contraseña</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <!--<div class="form-group">
                          <label class="form-check-label" for="adult">Soy mayor de 18 años</label>
                          <p class="term-conditions">Al registrarme, declaro que soy mayor de edad y acepto los Terminos y condiciones y las Políticas de privacidad.</p>
                          <input type="checkbox" name="adult" class="form-check-adult">

                        </div>-->

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn-standard">
                                    Registrarme
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
