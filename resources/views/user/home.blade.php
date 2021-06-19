@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>

<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
  @include('layouts.navbar')
  <!-- Background Image -->
  <div class="p-5 text-center bg-image" style="background-image: url('{{ asset('images/bg.JPG') }}'); height: 400px;">
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
<h3 class="mb-3 text-center">Suggestion</h3>
<div class="row row-cols-1 p-4 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img
        src="https://mdbootstrap.com/img/new/standard/city/044.jpg"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a wider card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img
        src="https://mdbootstrap.com/img/new/standard/city/043.jpg"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This card has supporting text below as a natural lead-in to additional
          content.
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card h-100">
      <img
        src="https://mdbootstrap.com/img/new/standard/city/042.jpg"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a wider card with supporting text below as a natural lead-in to
          additional content. This card has even longer content than the first to show
          that equal height action.
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<!-- Suggestion Ends -->

@include('layouts.footer')
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
@endsection
