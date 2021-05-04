@extends('layouts.app')

@section('content')
@include('layouts.navbar')
    
    <!-- Received Connection Frontend -->
    <p class="h3 text-center my-5">Received Connection</p>
    <div class="container my-5">
        @include('layouts.message')
        <div class="row text-center text-md-left">
            @if(count($receiveduser) < 1 )
                <div class="h4 text-center">No Connection Received</div>
            @else
            @foreach($receiveduser as $info)
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
                        <a class="btn-success btn" href="/acceptconnection/{{ $info->id }}">Accept Connection</a>
                    </div>
                </div>
            @endforeach
            @endif

        </div>
    </div>
    
    
       
    <!-- Sent Connection Frontend -->
    <p class="h3 my-5 text-center">Sent Connections</p>
    <div class="container my-5">
        <div class="row text-center text-md-left">
            @if(count($sentuser) < 1 )
                <div class="h4 text-center">No Connection Sent</div>
            @else
            @foreach($sentuser as $info)
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


    


@endsection