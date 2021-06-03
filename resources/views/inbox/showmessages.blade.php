@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <div class="container my-5">
        <div class="card">
            <div class="card-header">{{ $username->id }}</div>
            <div class="card-body mh-100" style="min-height:500px">
                @foreach($message as $text)
                @if($text->sender_id == auth()->id())
                    <div class="text-right">{{$text->message}}</div>
                @else
                    <div class="text-left">{{$text->message}}</div>
                @endif
                @endforeach
            </div>
            <div class="card-footer">
           <form action="/inbox/chats/{{$username->id}}" method="post">
           @csrf
           <div class="input-group ">
            <input type="text" class="form-control" name="message" placeholder="Type a message" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-md btn-success m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon2">Send</button>
            </div>
            </div>
           </form>
            </div>
        </div>
    </div>
@endsection