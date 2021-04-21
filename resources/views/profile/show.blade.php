@extends('layouts.app')

@section('content')
@include('layouts.navbar')
    <div class="container my-5">
    @foreach($data as $info)
    <section class="text-center px-md-5 mx-md-5 dark-grey-text">
    <div class="row mb-5">
      <div class="col-md-4 mx-auto">
        <div class="file-field">
        <div class="mb-4 pb-2">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="z-depth-1 rounded-circle img-fluid mx-auto" alt="smaple image">
        </div>
    <form action="/profile/uploadimage" method="POST" enctype="multipart/form-data">
    <div class="d-flex justify-content-center">
      <div class="btn btn-primary btn-rounded float-left">
        <span>Add photo</span>
        <input type="file" name="image" class="file-input">
        <button type="submit">upload</button>
      </div>
    </div>
    </form>
  </div>
        <!-- <a href="profile/edit/{{ $info->id }}" class="btn btn-primary btn-rounded">Update Profile</a> -->
        <a href="profile/edit/{{ $info->id }}" class="btn btn-primary btn-rounded">Update Profile</a>
        <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0 red-text">
          <li><i class="fab fa-twitter mx-2"></i></li>
          <li><i class="fab fa-facebook-f mx-2"></i></li>
          <li><i class="fab fa-instagram mx-2"></i></li>
          <li><i class="fab fa-linkedin-in mx-2"></i></li>
        </ul>
      </div>
    </div>
    </section>
    <div class="my-5">
    <p class="h1">Basic Information</p>
    <p class="font-weight-bold">Name: {{ $info->name }}</p>
    <p class="font-weight-bold">Age: {{ $info->age }}</p>
    <p class="font-weight-bold">Date of Birth: {{ $info->dob }}</p>
    <p class="font-weight-bold">Height: {{ $info->height }} cm</p>
    <p class="font-weight-bold">Blood Group: {{ $info->blood_group }}</p>
    </div>

    <div class="my-5">
    <h3 class="font-weight-bold">Education and Career</h3>
    <p class="font-weight-bold">Highest Qualification: {{ $info->highest_qualification }}</p>
    <p class="font-weight-bold">College Attended: {{ $info->college_attended }}</p>
    <p class="font-weight-bold">Working For: {{ $info->working_for }}</p>
    <p class="font-weight-bold">Working As: {{ $info->working_as }}</p>
    <p class="font-weight-bold">Annual Income: {{ $info->annual_income }}</p>
    </div>
    
    <div class="my-5">
    <h3 class="font-weight-bold">Family Details</h3>
    <p class="font-weight-bold">Father's Name: {{ $info->father_name }}</p>
    <p class="font-weight-bold">Mother's Name: {{ $info->mother_name }}</p>
    <p class="font-weight-bold">No of Brothers: {{ $info->no_of_brothers }}</p>
    <p class="font-weight-bold">No of Sisters: {{ $info->no_of_sisters }}</p>
    <p class="font-weight-bold">Native Place: {{ $info->native_place }}</p>
    <p class="font-weight-bold">Father's Occupation: {{ $info->father_occupation }}</p>
    <p class="font-weight-bold">Mother Tongue: {{ $info->mother_tongue }}</p>
    </div>
    
    <div class="my-5">
    <h3 class="font-weight-bold">Astro Details</h3>
    <p class="font-weight-bold">Date of Birth: {{ $info->dob }}</p>
    <p class="font-weight-bold">Time of Birth: {{ $info->tob }}</p>
    <p class="font-weight-bold">City of Birth: {{ $info->cob }}</p>
    <p class="font-weight-bold">Sub Caste: {{ $info->subcaste }}</p>
    <p class="font-weight-bold">Gotra: {{ $info->gotra }}</p>
    <p class="font-weight-bold">Are you Manglik: {{ $info->manglik }}</p>
    <p class="font-weight-bold">Sun Sign: {{ $info->sun_sign }}</p>
    </div>

    <div class="my-5">
    <h3 class="font-weight-bold">Contact Information</h3>
    <p class="font-weight-bold">Email: {{ $info->email }}</p>
    <p class="font-weight-bold">Mobile No: {{ $info->mobile_no }}</p>
    </div>
    
    @endforeach
    </div>
@endsection