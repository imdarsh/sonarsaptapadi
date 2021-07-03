@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
@include('layouts.navbar')
<div class="container my-5">
@include('layouts.message')
<p class="h2 text-center mb-5">Search Results</p>
<div class="row">
@foreach($results as $result)
  <div class="col-lg-3 col-md-12">
  <div class="card hover-shadow text-center">
  <div class="card-body">
  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
  @if($result->image)
          <img src="{{ url('storage/image/'.$result->image) }}" class="img-thumbnail" alt="sample image">
          @else
          <img src="{{ asset('images/avatar.png') }}" class="img-thumbnail" alt="sample image">
          @endif
  </div>
    <h5 class="card-title">{{ $result->id }}</h5>
    <p class="card-text">
      <p><b> City :</b> {{ $result->city }}</p> 
      <p><b>Age :</b> {{ $result->age }}</p>
    </p>

    <a class="btn btn-primary" href="/details/{{ $result->id }}">See More</a>
  </div>
</div>
  </div>
  @endforeach
</div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
@endsection