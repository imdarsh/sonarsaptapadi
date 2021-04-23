@extends('layouts.app')

@section('content')
@include('layouts.navbar')
<div class="container my-5">
<div class="row text-center text-md-left">
    @foreach($results as $result)
<!-- Grid column -->
<div class="col-lg-6 col-md-12 mb-5 justify-content-between">
  <div class="avatar mb-4 mx-4">
    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(29).jpg" class="rounded z-depth-1 w-50"
      alt="Sample avatar">
  </div>
  <div class="mx-4">
    <h4 class="font-weight-bold mb-3">{{ $result->id }}</h4>
    <h6 class="font-weight-bold grey-text mb-3">{{ $result->city }}</h6>
    <h6 class="font-weight-bold grey-text mb-3">{{ $result->age }}</h6>
    <h6 class="font-weight-bold grey-text mb-3">{{ $result->working_for }}</h6>
    <h6 class="font-weight-bold grey-text mb-3">{{ $result->city }}</h6>
    <p class="grey-text">{{ $result->bio }}</p>
    <a class="btn-success btn" href="/sendconnection/{{ $result->id }}">Send Connection</a>
  </div>
</div>
<!-- Grid column -->
    @endforeach
    </div>
    </div>
@endsection