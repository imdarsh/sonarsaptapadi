@extends('layouts.app')

@section('content')
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <div class="view" style="background-image: url('{{ asset('images/bg.JPG') }}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
      <div class="container">
        <!-- Learn more -->
        <div class="row mt-5">
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
            <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Meet more than 1 Lakh Sonar Bachelors</h1>
            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
            <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">We help you find your perfect someone.</h6>
            <a class="btn btn-outline-white btn-rounded wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
          </div>
          <!-- Learn more ends -->
          <div class="col-md-6 col-xl-5 mb-4">
            <div class="card wow fadeInRight" data-wow-delay="0.3s">
              <div class="card-body">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="text-center">
                  <h3 class="white-text font-weight-bold">
                    <i class="fa fa-user white-text"></i> {{ __('Register') }}</h3>
                  <hr class="hr-light">
                </div>
                <div class="md-form">
                  <select class="mdb-select white-text form-control" id="form4">
                    <option value="" disabled selected>Create Profile For</option>
                    <option value="1">Self</option>
                    <option value="2">Son</option>
                    <option value="2">Daughter</option>
                    <option value="2">Brother</option>
                    <option value="3">Sister</option>
                  </select>
                </div>
                <div class="md-form">
                  <i class="fa fa-user prefix white-text active"></i>
                  <input type="text" id="form3" class="white-text form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                  <label for="form3" class="active">{{ __('Name') }}</label>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="md-form">
                  <i class="fa fa-envelope prefix white-text active"></i>
                  <input type="email" id="form2" class="white-text form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                  <label for="form2" class="active">{{ __('E-Mail Address') }}</label>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="md-form">
                  <i class="fa fa-lock prefix white-text active"></i>
                  <input type="password" id="form4" class="white-text form-control @error('password') is-invalid @enderror" name="password" required>
                  <label for="form4">{{ __('Password') }}</label>
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="md-form">
                  <i class="fa fa-lock prefix white-text active"></i>
                  <input type="password" id="form4" class="white-text form-control" name="password_confirmation" required>
                  <label for="form4">{{ __('Confirm Password') }}</label>
    
                </div>
                <div class="text-center mt-4">
                  <button type="submit" class="btn btn-indigo">{{ __('Register') }}</button>
                  <hr class="hr-light mb-3 mt-4">
                  <!- <div class="inline-ul text-center d-flex justify-content-center">
                    <a class="p-2 m-2 tw-ic">
                      <i class="fab fa-twitter white-text"></i>
                    </a>
                    <a class="p-2 m-2 li-ic">
                      <i class="fab fa-linkedin-in white-text"> </i>
                    </a>
                    <a class="p-2 m-2 ins-ic">
                      <i class="fab fa-instagram white-text"> </i>
                    </a>
                  </div> -
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
