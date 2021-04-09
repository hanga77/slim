@extends('layouts.app')

@section('content')
<div class="login-logo">
    <a href="{{ url('/') }}">
        <b> {{ __('SlimWebSite') }}</b>     
    </a>
</div>
<div class="card">
<div class="card-header">{{ __('New Account User') }}</div>
    <div class="card-body login-card-body">
      <p class="login-box-msg">{{ __('register to start your session') }}</p>

      <form action="{{ route('register') }}" method="post">
        @csrf
        <!-- col to show error on form -->
        <div class="input-group mb-3">
          <input id="name" type="text" placeholder="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
            @error('name')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
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
          <input id="password" type="password" placeholder="Password" 
          class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password-confirm" type="password" 
          class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re-Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      @if (Route::has('password.request'))
         <p class="mb-1">
            <a class="btn btn-link" href="{{ route('login') }}">Already have an Account?</a>
        </p>
      @endif
      <!--
      <p class="mb-0">
        <a class="btn btn-link" href="{{ url('/register') }}">new membership</a>
      </p>
      -->
    </div>

@endsection
