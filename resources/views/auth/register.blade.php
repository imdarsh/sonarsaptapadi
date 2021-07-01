@extends('layouts.app')

@section('content')

<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@include('layouts.navbar')
<div class="container">
    <div class="row ">
      <div class="col-md-8 col-lg-6 mx-auto">
      <!-- @include('layouts.message') -->
        <div class="card card-signin flex-row my-5">
          <div class="d-none d-md-flex shadow-lg">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h4 class="card-title text-center">Register</h4>
            <p class="text-center">Register to find your perfect partner</p>
            <form class="form-signin" method="POST" action="{{ route('register') }}">
            @csrf
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email address" required>
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

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password_confirmation" required>
                <label for="inputPassword">{{ __('Confirm Password') }}</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <!-- <div><a class="btn" href="">Did you forget your password?</a></div> -->
              <div class="justify-content-center text-center">
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Register') }}</button>
             
              </div>
              <hr>
              <a class="d-block text-center mt-2 small" href="/login">Login</a>
             </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
