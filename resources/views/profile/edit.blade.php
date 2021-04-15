@extends('layouts.app')

@section('content')
        @foreach($data as $info)
            <h1>{{ $info->name }}</h1>
        @endforeach


@endsection