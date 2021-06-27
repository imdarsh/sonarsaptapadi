@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
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
            <div class="col-lg-3 col-md-12 mb-5 justify-content-between">
                <div class="card card-body hover-shadow">
                <div class="avatar mb-4 mx-4">
                @if($info->image)
                <img src="{{ url('storage/image/'.$info->image) }}" class="img-fluid" alt="sample image" style="width:300px; height:220px;">
                @else
                <img src="{{ asset('images/avatar.png') }}" class="img-fluid" alt="sample image">
                @endif
                </div>
                <div class="mx-4">
                    <h4 class="font-weight-bold mb-3">{{ $info->id }}</h4>
                    <h6 class="font-weight-bold grey-text mb-3">{{ $info->city }}</h6>
                    <h6 class="font-weight-bold grey-text mb-3">{{ $info->age }}</h6>
                    <h6 class="font-weight-bold grey-text mb-3">{{ $info->working_for }}</h6>
                    <h6 class="font-weight-bold grey-text mb-3">{{ $info->city }}</h6>  
                </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
@endsection