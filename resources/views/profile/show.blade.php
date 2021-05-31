@extends('layouts.app')

@section('content')
@include('layouts.navbar')
@foreach($data as $info)
  <div class="container-fluid pt-5">
    <div class="row">
      
      <div class="col-md-3">
      <div class="card pt-5">
      <div class="mb-4 pb-2 text-center">
          @if(auth()->user()->image)
          <a href="{{ url('storage/image/'.$info->image) }}" data-size="1600x1067"><img src="{{ url('storage/image/'.$info->image) }}" class="m-2 rounded z-depth-1 w-50" alt="sample image"></a>
          @else
          <img src="{{ asset('images/avatar.png') }}" class="m-2 rounded z-depth w-50" alt="sample image">
          @endif
        <p class="h3">{{ $info->id }}</p>
        <a href="profile/edit/{{ $info->id }}" class="btn btn-primary btn-rounded">Edit Profile</a>
        </div>
        
        <div class="card-body">
        <div class="h3">{{ $info->name }}</div>
        <div class="h5 mt-3"><i class="fa fa-map-marker-alt"></i> {{ $info->city }}</div>
        <div class="h5 mt-3">Age : <span>{{ $info->age }}</span></div>
        <div class="h5 mt-3">Height : <span>{{ $info->height }} cm</span></div>
        @if($info->living_with_family == 'Yes')
            <div class="h5 mt-3">I live with my Family</div>
        @else
            <div class="h5 mt-3">I do not live with my Family</div>
        @endif
        <div class="mt-3">{{ $info->bio }}</div>
      </div>
      </div>
      </div>
      
      <div class="col-md-8">
      <div class="card card-body mb-5">
    <div class="col mb-5">
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
    <div class="row">
    <div class="col-md-6">
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
    <div class="col-md-6">
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
  </div>
  @endforeach
@endsection