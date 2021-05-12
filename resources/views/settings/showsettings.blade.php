@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    
    <div class="container my-5">
    @include('layouts.message')
        <!-- Change Password -->
        <p class="h2">Change Password</p>
        <hr>
        <a href="/settings/changepassword" class="btn-link">Change Password</a>
    </div>

@endsection