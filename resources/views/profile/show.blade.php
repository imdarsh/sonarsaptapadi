@extends('layouts.app')

@section('content')
@include('layouts.navbar')
<link rel="stylesheet" href="{{ asset('css/profiledetail.css') }}">
    @include('layouts.message')
    @foreach($data as $info)
<div class="container my-2">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    @if($info->image)
                    <a href="{{ url('storage/image/'.$info->image) }}" data-size="1600x1067"><img src="{{ url('storage/image/'.$info->image) }}" class="m-2 rounded z-depth-1 w-50" alt="sample image"></a>
                    @else
                    <img src="{{ asset('images/avatar.png') }}" class="rounded-circle" alt="User Image" width="150">
                    @endif
                    <div class="mt-3">
                      <h4>{{ $info->id }}</h4>
                      <p class="text-secondary mb-1">{{ $info->working_as }}</p>
                      <p class="text-muted font-size-sm">{{ $info->city }}</p>
                      <a href="/profile/edit/{{ $info->id }}" class="btn btn-primary">Edit Profile</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3 p-4">
              <p class="h3">Bio</p>
                {{ $info->bio }}
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <p class="h3 mb-4">User Info</p>
                    <div class="col-sm-3">
                      <h6 class="mb-0">Height</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $info->height }} cm
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Age</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $info->age }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $info->gender }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Marital Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $info->marital_status }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Do you live with your family?</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $info->living_with_family }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Sub-Caste</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $info->subcaste }}
                    </div>
                  </div>
                  <!-- <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div>
                  </div> -->
                </div>
              </div>

              <div class="row">
              <div class="col">
              <div class="card  mb-3">
                <div class="card-body">
                  <div class="row">
                    <p class="h3 mb-4">Career Info</p>
                    <div class="col-sm-3">
                      <h6 class="mb-0">Highest Qualification</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $info->highest_qualification }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Working In</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $info->working_for }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Working As</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $info->working_as }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Annual Income</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $info->annual_income }}
                    </div>
                  </div>
                </div>
              </div>
              </div>

              <!-- <div class="row">
              <div class="col">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <p class="h3 mb-4">Astro Info</p>
                    <div class="col-sm-3">
                      <h6 class="mb-0"></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $info->highest_qualification }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Working In</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $info->working_for }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Working As</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $info->working_as }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Annual Income</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $info->annual_income }}
                    </div>
                  </div>
                </div>
              </div>
              </div> -->

              
                <!-- <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

        </div>
    </div>
    @endforeach
@endsection