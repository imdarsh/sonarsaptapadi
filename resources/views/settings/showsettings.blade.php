@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    
    <div class="container my-5">
    @include('layouts.message')
        <!-- Change Password -->
        <p class="h2">Settings</p>
        <hr>
        <div class="mb-2"><a href="/settings/changepassword" class="btn-link h5">Change Password</a></div>
    </div>

@endsection