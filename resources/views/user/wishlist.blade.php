@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <div class="container my-4">
        <p class="h2 text-center mb-5">Wishlist</p>
        <div class="row">
        @foreach($wishlists as $wishlist)
        <div class="col-lg-3 col-md-12">
        <div class="card hover-shadow text-center">
        <div class="card-body">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
        @if($wishlist->image)
                <img src="{{ url('storage/image/'.$wishlist->image) }}" class="img-thumbnail" alt="sample image">
                @else
                <img src="{{ asset('images/avatar.png') }}" class="img-thumbnail" alt="sample image">
                @endif
        </div>
            <h5 class="card-title">{{ $wishlist->id }}</h5>
            <p class="card-text">
            <p><b> City :</b> {{ $wishlist->city }}</p> 
            <p><b>Age :</b> {{ $wishlist->age }}</p>
            </p>

            <a class="btn btn-primary" href="/details/{{ $wishlist->id }}" data-toggle="tooltip" title="Click here to see user details">See More</a>
        </div>
        </div>
        </div>
        @endforeach
        </div>
    </div>

@endsection