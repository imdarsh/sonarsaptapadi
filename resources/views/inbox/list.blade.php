@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <div class="container my-5">
    @if(count($list) > 0)
        @foreach($list as $show)
            <p class="h4"><a href="/inbox/chats/{{ $show->id }}">{{ $show->name }}</a></p>
        @endforeach
    @else
        <p class="h4 text-center">Sorry, No Matched Connection</p>
    @endif
    </div>
@endsection