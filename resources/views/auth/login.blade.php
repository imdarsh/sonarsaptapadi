@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@include('layouts.navbar')
<div class="container">
    <div class="row ">
      <div class="col-md-8 col-lg-6 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="d-none d-md-flex shadow-lg">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h4 class="card-title text-center">Login</h4>
            <p class="text-center">Login to find your perfect partner</p>
            <form class="form-signin" method="POST" action="{{ route('login') }}">
            @csrf
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{ old('email') }}" required>
                <label for="inputEmail">Email address</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
                <label for="inputPassword">Password</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <!-- <div><a class="btn" href="">Did you forget your password?</a></div> -->
              <div class="justify-content-center text-center">
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Login') }}</button>
              @if (Route::has('password.request'))
                                    <div>
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    </div>
                                @endif
              </div>
              <hr>
              <a class="d-block text-center mt-2 small" href="/register">Register</a>
             </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  

@endsection
