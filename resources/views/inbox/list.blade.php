@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
@endsection