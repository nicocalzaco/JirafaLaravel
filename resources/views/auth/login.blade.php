@extends('master')

@section('title')
  Login
@endsection

@section('main')
<div class="section-forms">
  <div class="formulario">
    <h1>Login</h1>

    <form class="tarjets" method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}

      <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">Email:</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
        <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      </div>


      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password">Contraseña:</label>
        <input id="password" type="password" class="form-control" name="password" required>

          @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif

      </div>

      <div class="form-group">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
      </div>

      <div class="form-group">
          <button type="submit" class="btn btn-primary">
            Login
          </button>

          <a class="btn btn-link" href="{{ route('password.request') }}">
            Forgot Your Password?
          </a>
      </div>

    </form>
  </div>
</div>

@endsection
