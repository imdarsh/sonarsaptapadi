@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <p class="h3 my-5 text-center">Sent Connections</p>
    <div class="container">
        @foreach($data2 as $info)
        <div class="card">
            <p class="my-5">{{ $info->id }}</p>
        </div>
        @endforeach
    </div>
@endsection