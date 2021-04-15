@extends('layouts.app')

@section('content')
@include('layouts.navbar')
    <div class="container">
        @foreach($data as $info)
            <h1>{{ $info->name }}</h1>
        @endforeach
    </div>
@endsection