@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
  @include('layouts.navbar')
  <!-- Background Image -->
  <div class="w-100 hero-image">
      <div class="d-flex justify-content-center align-items-center h-100">
    <div class="text-center">
        <div class="text-white">
          <h2 class="mb-3">Meet 10 lakh+ Sonar Brides & Grooms</h2>
          <div class="card m-2">
    <div class="card-body">
    <form action="/search" method="GET">
    <div class="row">
              <div class="col-md-2 form-group">
                <select name="gender" class=" form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select>
              </div>
                <div class="col-md-2 my-1 form-group">
                  <input type="text" name="city" placeholder="City" class="form-control">
                </div>
                <div class="col-md-2 my-1 form-group">
                  <input type="text" name="age_min" placeholder="Minimum Age" class="form-control" required>
                </div>
                <div class="col-md-2 my-1 form-group">
                  <input type="text" name="age_max" placeholder="Maximum Age" class="form-control" required>
                </div>
                <div class="col-md-2 my-1 form-group">
                  <input type="text" name="highest_qualification" placeholder="Education" class="form-control">
                  </select>
                </div>
                <div class="col-md-2 my-1 form-group">
                  <input type="text" name="id" placeholder="Search By ID" class="form-control">
                </div>
                <div class="col-md-2 form-group">
                <select name="manglik" class="form-control" placeholder="Manglik">
                <option value="No">Not Manglik</option>
                <option value="Yes">Manglik</option>
                </select>
              </div>
              </div>
                <div class="col-md-2 my-1 form-group">
                  <button class="btn btn-primary btn-md" type="submit" data-toggle="tooltip" title="Search to find user">Search</button>
                </div>
              </div>
        </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Background Image Ends -->

<!-- Suggestion -->
<section class="justify-content-center aligns-center p-5">
<div class="container">
<h3 class="mb-3 text-center">Suggestions</h3>
<div class="row">
@foreach($getuserlist as $getuser)
  <div class="col-lg-3 col-md-12">
  <div class="card hover-shadow text-center">
  <div class="card-body">
  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
  @if($getuser->image)
          <img src="{{ url('storage/image/'.$getuser->image) }}" class="img-thumbnail" alt="sample image">
          @else
          <img src="{{ asset('images/avatar.png') }}" class="img-thumbnail" alt="sample image">
          @endif
  </div>
    <h5 class="card-title">{{ $getuser->id }}</h5>
    <p class="card-text">
      <p><b> City :</b> {{ $getuser->city }}</p> 
      <p><b>Age :</b> {{ $getuser->age }}</p>
    </p>

    <a class="btn btn-primary" href="/details/{{ $getuser->id }}" data-toggle="tooltip" title="Click here to see user details">See More</a>
  </div>
</div>
  </div>
  @endforeach
</div>
</div>
</section>
<!-- Suggestion Ends -->

@include('layouts.footer')
@endsection
