@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@include('layouts.header')
  <div class="view" style="background-image: url('{{ asset('images/bg.JPG') }}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
      <div class="container">
        <!-- Learn more -->
        <div class="row mt-5">
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
            <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Meet 10 lakh+ Sonar Brides & Grooms</h1>
            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
            <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Find your Perfect Golden Partner with us...</h6>
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
                  </div> 
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.information')

  <!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 mx-auto">

      <!-- Content -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
      <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
        consectetur
        adipisicing elit.</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 mx-auto">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">Link 1</a>
        </li>
        <li>
          <a href="#!">Link 2</a>
        </li>
        <li>
          <a href="#!">Link 3</a>
        </li>
        <li>
          <a href="#!">Link 4</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 mx-auto">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">Link 1</a>
        </li>
        <li>
          <a href="#!">Link 2</a>
        </li>
        <li>
          <a href="#!">Link 3</a>
        </li>
        <li>
          <a href="#!">Link 4</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 mx-auto">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">Link 1</a>
        </li>
        <li>
          <a href="#!">Link 2</a>
        </li>
        <li>
          <a href="#!">Link 3</a>
        </li>
        <li>
          <a href="#!">Link 4</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<hr>

<!-- Call to action -->
<ul class="list-unstyled list-inline text-center py-2">
  <li class="list-inline-item">
    <h5 class="mb-1">Register for free</h5>
  </li>
  <li class="list-inline-item">
    <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
  </li>
</ul>
<!-- Call to action -->

<hr>

<!-- Social buttons -->
<ul class="list-unstyled list-inline text-center">
  <li class="list-inline-item">
    <a class="btn-floating btn-fb mx-1">
      <i class="fab fa-facebook-f"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-tw mx-1">
      <i class="fab fa-twitter"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-gplus mx-1">
      <i class="fab fa-google-plus-g"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-li mx-1">
      <i class="fab fa-linkedin-in"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-dribbble mx-1">
      <i class="fab fa-dribbble"> </i>
    </a>
  </li>
</ul>
<!-- Social buttons -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
@endsection
