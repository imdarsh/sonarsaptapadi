@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    
    <div class="container my-5">
        <!-- Change Password -->
        <p class="h2">Change Password</p>
        <hr>
        @include('layouts.message')
        <form action="/settings/changepassword" method="post">
        @csrf
        <div class="form-group">
            <label>Old Password</label>
            <input type="password" name="oldpassword" class="form-control" required>
        </div>
        <div class="form-group">
            <label>New Password</label>
            <input type="password" name="newpassword" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Confirm New Password</label>
            <input type="password" name="cnfpassword" class="form-control" required>
        </div>
        <button class="btn btn-primary">Change Password</button>
        </form>
    </div>

@endsection