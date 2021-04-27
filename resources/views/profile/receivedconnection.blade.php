@extends('layouts.app')
@section('content')
@include('layouts.navbar')
    <p class="h3 text-center my-5">Received Connection</p>
    <div class="container my-5">
        @foreach($data as $info)
            <p>{{ $info->id }}</p>
        @endforeach
    </div>
@endsection