@extends('layouts.app')

@section('content')
@include('layouts.navbar')
    <div class="container py-5">
        <p class="h2">Matched Connection</p>
        <hr>
        <div class="container my-5">
        <div class="row text-center text-md-left">
            @if(count($matcheduser) < 1 )
                <div class="h4 text-center">No Connection Matched</div>
            @else
            @foreach($matcheduser as $info)
            <div class="col-lg-6 col-md-12 mb-5 justify-content-between">
                <div class="avatar mb-4 mx-4">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(29).jpg" class="rounded z-depth-1 w-50"
                    alt="Sample avatar">
                </div>
                <div class="mx-4">
                    <h4 class="font-weight-bold mb-3">{{ $info->id }}</h4>
                    <h6 class="font-weight-bold grey-text mb-3">{{ $info->city }}</h6>
                    <h6 class="font-weight-bold grey-text mb-3">{{ $info->age }}</h6>
                    <h6 class="font-weight-bold grey-text mb-3">{{ $info->working_for }}</h6>
                    <h6 class="font-weight-bold grey-text mb-3">{{ $info->city }}</h6>
                    <p class="grey-text">{{ $info->bio }}</p>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
    </div>

@endsection