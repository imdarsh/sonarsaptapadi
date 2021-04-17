@extends('layouts.app')

@section('content')
@include('layouts.navbar')
    <div class="container my-5">
    @foreach($data as $info)
    <section class="text-center px-md-5 mx-md-5 dark-grey-text">
    <div class="row mb-5">
      <div class="col-md-4 mx-auto">
        <div class="mb-4 pb-2">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="z-depth-1 rounded-circle img-fluid mx-auto" alt="smaple image">
        </div>
        <a href="profile/edit/{{ $info->id }}" class="btn btn-primary btn-rounded">Upload Picture</a>
        <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0 red-text">
          <li><i class="fab fa-twitter mx-2"></i></li>
          <li><i class="fab fa-facebook-f mx-2"></i></li>
          <li><i class="fab fa-instagram mx-2"></i></li>
          <li><i class="fab fa-linkedin-in mx-2"></i></li>
        </ul>
      </div>
    </div>
    </section>
    <h3 class="font-weight-bold">Basic Information</h3>
    <p class="font-weight-bold">Name: {{ $info->name }}</p>
    <p class="font-weight-bold">Email: {{ $info->email }}</p>
    <p class="font-weight-bold">City: {{ $info->city }}</p>
    <p class="font-weight-bold">Height: {{ $info->height }} cm</p>
    <p class="font-weight-bold">Bio: {{ $info->bio }}</p>
    <p class="font-weight-bold">Mobileno: {{ $info->mobileno }}</p>
    @endforeach
    </div>
@endsection