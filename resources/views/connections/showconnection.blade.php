@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
@include('layouts.navbar')
    <div class="container my-5">
    <!-- Received Connection Frontend -->
    <p class="h2">Received Connection</p>
    <hr>
    <div class="container my-5">
        @include('layouts.message')
        <div class="row text-center text-md-left">
            @if(count($receiveduser) < 1 )
                <div class="h4 text-center">No Connection Received</div>
            @else
            <div class="row">
        @foreach($receiveduser as $getuser)
        <div class="col-lg-3 col-md-12">
        <div class="card hover-shadow text-center">
        <div class="card-body">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
        @if($getuser->image)
                <img src="{{ url('storage/image/'.$getuser->image) }}" class="img-thumbnail" alt="sample image">
                @else
                <img src="{{ asset('images/avatar.png') }}" class="img-thumbnail" alt="sample image">
                @endif
        </div>
            <h5 class="card-title">{{ $getuser->id }}</h5>
            <p class="card-text">
            <p><b> City :</b> {{ $getuser->city }}</p> 
            <p><b>Age :</b> {{ $getuser->age }}</p>
            </p>
            <a class="btn btn-primary" href="/acceptconnection/{{ $getuser->id}}" data-toggle="tooltip" title="Accept Connection">Accept</a>
            <a class="btn btn-primary" href="/cancelconnection/{{ $getuser->id}}" data-toggle="tooltip" title="Reject Connection">Cancel</a>
            <!-- <a class="btn btn-primary" href="/details/{{ $getuser->id }}">See More</a> -->
        </div>
        </div>
        </div>
        @endforeach
        </div>
            @endif

        </div>
    </div>
    
    
       
    <!-- Sent Connection Frontend -->
    <p class="h2">Sent Connections</p>
    <hr>
    <div class="container my-5">
    @if(count($sentuser) < 1 )
                <div class="h4 text-center">No Connection Sent</div>
            @else
    <div class="row">
        @foreach($sentuser as $getuser)
        <div class="col-lg-3 col-md-12">
        <div class="card hover-shadow text-center">
        <div class="card-body">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
        @if($getuser->image)
                <img src="{{ url('storage/image/'.$getuser->image) }}" class="img-thumbnail" alt="sample image">
                @else
                <img src="{{ asset('images/avatar.png') }}" class="img-thumbnail" alt="sample image">
                @endif
        </div>
            <h5 class="card-title">{{ $getuser->id }}</h5>
            <p class="card-text">
            <p><b> City :</b> {{ $getuser->city }}</p> 
            <p><b>Age :</b> {{ $getuser->age }}</p>
            </p>

            <a class="btn btn-primary" href="/details/{{ $getuser->id }}">See More</a>
        </div>
        </div>
        </div>
        @endforeach
        </div>
        @endif
    </div>

    </div>
    

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
@endsection