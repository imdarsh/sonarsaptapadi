@extends('layouts.app')

@section('content')
@include('layouts.navbar')
@foreach($data as $info)
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-6 text-center mb-5">
      <div class="mb-4 pb-2">
          @if(auth()->user()->image)
          <img src="{{ url('storage/image/'.$info->image) }}" class="m-2 rounded z-depth-1 w-50" alt="sample image">
          @else
          <img src="{{ asset('images/avatar.png') }}" class="m-2 rounded z-depth w-50" alt="sample image">
          @endif
        </div>
        <p class="h3">{{ $info->id }}</p>
        <a href="profile/edit/{{ $info->id }}" class="btn btn-primary btn-rounded">Edit Profile</a>
      </div>
      <div class="col-md-6 mb-5">
      <p class="h3">Bio</p>
      <p>{{ $info->bio }}</p>
      </div>
    </div>
    <div class="row">
    <div class="col-md-6 mb-5">
      <table class="table table-hover table-fixed">
        <thead>
          <tr>
            <th class="h3 text-nowrap">Personal Information</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Name : </th>
            <td>{{ $info->name }}</td>
          </tr>
          <tr>
            <th>Age : </th>
            <td>{{ $info->age }}</td>
          </tr>
          <tr>
            <th>Height : </th>
            <td>{{ $info->height }} cm</td>
          </tr>
          <tr>
            <th>Date Of Birth :   </th>
            <td>{{ $info->dob }}</td>
          </tr>
          <tr>
            <th>City : </th>
            <td>{{ $info->city }}</td>
          </tr>
        </tbody>
        </table>
      </div>
      <div class="col-md-6 mb-5">
      <table class="table table-hover table-fixed">
        <thead>
          <tr>
            <th class="h3 text-nowrap">Education and Career</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Working As : </th>
            <td>{{ $info->working_as }}</td>
          </tr>
          <tr>
            <th>Working For : </th>
            <td>{{ $info->working_for }}</td>
          </tr>
          <tr>
            <th>Annual Income : </th>
            <td>{{ $info->annual_income }}</td>
          </tr>
          <tr>
            <th>College Attended :   </th>
            <td>{{ $info->college_attended }}</td>
          </tr>
          <tr>
            <th>City : </th>
            <td>{{ $info->city }}</td>
          </tr>
        </tbody>
        </table>
      </div>
    </div>
    <div class="row">
    <div class="col-md-6 mb-5">
    <table class="table table-hover table-fixed">
        <thead>
          <tr>
            <th class="h3 text-nowrap">Family Details</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Father Name : </th>
            <td>{{ $info->father_name }}</td>
          </tr>
          <tr>
            <th>Mother Name : </th>
            <td>{{ $info->mother_name }}</td>
          </tr>
          <tr>
            <th>No of Brothers : </th>
            <td>{{ $info->no_of_brothers }}</td>
          </tr>
          <tr>
            <th>No of Sisters :   </th>
            <td>{{ $info->no_of_sisters }}</td>
          </tr>
          <tr>
            <th>Native Place : </th>
            <td>{{ $info->native_place }}</td>
          </tr>
          <tr>
            <th>Mother Tongue : </th>
            <td>{{ $info->mother_tongue }}</td>
          </tr>
        </tbody>
        </table>
    </div>
    <div class="col-md-6 mb-5">
    <table class="table table-hover table-fixed">
        <thead>
          <tr>
            <th class="h3 text-nowrap">Astro Details</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Time of Birth : </th>
            <td>{{ $info->tob }}</td>
          </tr>
          <tr>
            <th>City of Birth : </th>
            <td>{{ $info->cob }}</td>
          </tr>
          <tr>
            <th>Sub Caste : </th>
            <td>{{ $info->subcaste }}</td>
          </tr>
          <tr>
            <th>Gotra :   </th>
            <td>{{ $info->gotra }}</td>
          </tr>
          <tr>
            <th>Are You Manglik : </th>
            <td>{{ $info->manglik }}</td>
          </tr>
          <tr>
            <th>Sun Sign : </th>
            <td>{{ $info->sun_sign }}</td>
          </tr>
        </tbody>
        </table>
    </div>
    </div>
  </div>
  @endforeach
@endsection