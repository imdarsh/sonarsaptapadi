@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <p class="h3 my-5 text-center">Sent Connections</p>
    <div class="container">
        @foreach($data as $info)
        <div class="card">
            <p>{{ $info->party2 }}</p>
        </div>
        @endforeach
    </div>
@endsection