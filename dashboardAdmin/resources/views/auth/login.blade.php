@extends('layouts.app')

@section('content')
<div class="login-logo">
    <a href="{{ url('/') }}">
        <b> {{ __('SlimWebsite Admin') }}</b>     
    </a>
</div>
<div class="card">
<div class="card-header">{{ __('Login') }}</div>
    <div class="card-body login-card-body">
      <p class="login-box-msg">{{ __('Sign in to start your session') }}</p>

      <form action="{{ route('login') }}" method="post">
        @csrf
        <!-- col to show error on form -->
        <div class="input-group mb-3">
          <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember"   name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      @if (Route::has('password.request'))
         <p class="mb-1">
            <a class="btn btn-link" href="{{ route('password.request') }}">I forgot my password</a>
        </p>
      @endif
      <!--
      <p class="mb-0">
        <a class="btn btn-link" href="{{ url('/register') }}">new membership</a>
      </p>
      -->
    </div>
@endsection
