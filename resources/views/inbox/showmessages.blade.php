@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <div class="container my-5">
        <div class="card">
            <div class="card-header">{{ $username->id }}</div>
            <div class="card-body mh-100" style="min-height:500px">
                
            </div>
            <div class="card-footer">
            <div class="input-group ">
            <input type="text" class="form-control" placeholder="Type a message" aria-label="Recipient's username"
                aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-md btn-success m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon2">Send</button>
            </div>
            </div>
            </div>
        </div>
    </div>
@endsection