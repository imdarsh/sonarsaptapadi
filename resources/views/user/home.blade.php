@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>

<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
  @include('layouts.navbar')
  <!-- Background Image -->
  <div class="p-5 text-center bg-image" style="background-image: url('{{ asset('images/bg.JPG') }}'); height: 500px;">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
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
                  <input type="text" name="age_min" placeholder="Minimum Age" class="form-control">
                </div>
                <div class="col-md-2 my-1 form-group">
                  <input type="text" name="age_max" placeholder="Maximum Age" class="form-control">
                </div>
                <div class="col-md-2 my-1 form-group">
                  <input type="text" name="highest_qualification" placeholder="Education" class="form-control">
                  </select>
                </div>
                <div class="col-md-2 my-1 form-group">
                  <button class="btn btn-primary btn-md" type="submit">Search</button>
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
<div class="row row-cols-1 p-4 row-cols-md-3 g-4">
@foreach($getuserlist as $getuser)
  <div class="col">
  <div class="card  " style="background-color:#ffffff;">
  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.jpg" class="img-fluid" />
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
    </a>
  </div>

  <div class="card-body">
    <h5 class="card-title">{{ $getuser->name }}</h5>
    <p class="card-text">
      <p><b> City :</b> {{ $getuser->city }}</p> 
      <p><b>Age :</b> {{ $getuser->age }}</p>
    </p>

    <button type="button" class="btn btn-primary">Send Connection</button>
  </div>
</div>
  </div>
  @endforeach
</div>
</div>
</section>
<!-- Suggestion Ends -->

@include('layouts.footer')
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
@endsection
