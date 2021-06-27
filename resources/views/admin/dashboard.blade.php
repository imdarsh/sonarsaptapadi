@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
    @include('admin.navbar')

    <div class="container my-2">
    <div class="row text-center text-white">
        <div class="col">
        <a href="/admin/users" class="text-white">
            <div class="card card-body bg-primary">
            <p class="h2">Users</p>
            <p class="h3">{{ $users }}</p>
            </div>
        </a>
        </div>
        <div class="col">
        <a href="/admin/subscriptions" class="text-white">
            <div class="card card-body bg-danger">
            <p class="h2">Subscriptions</p>
            <p class="h3">{{ $subscriptions }}</p>
        </a>
            </div>
        </div>
        <div class="col">
        <a href="/admin/messages" class="text-white">
            <div class="card card-body bg-warning">
            <p class="h2">Messages</p>
            <p class="h3">{{ $messages }}</p>
            </div>
        </a>
        </div>
        <div class="col">
        <a href="/admin/connections" class="text-white">    
            <div class="card card-body bg-info">
            <p class="h2">Connections</p>
            <p class="h3">{{ $connections }}</p>
            </div>
        </a>
        </div>
    </div>

    <div class="row mt-5">
    <p class="h2 text-center">Latest Users</p>
    <hr>
    <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
        @foreach($latest as $recent)
            <tr>
                <td>{{ $recent->id }}</td>
                <td>{{ $recent->name }}</td>
                <td>{{ $recent->email }}</td>
                <td>{{ $recent->gender }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    </div>

    <div class="row mt-5">
    <p class="h2 text-center">Latest Connections</p>
    <hr>
    <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Sender ID</th>
                <th>Recipient ID</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach($conns as $recent)
            <tr>
                <td>{{ $recent->id }}</td>
                <td>{{ $recent->uid1 }}</td>
                <td>{{ $recent->uid2 }}</td>
                <td>{{ $recent->status }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    </div>
    
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>     
@endsection