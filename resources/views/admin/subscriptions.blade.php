@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
    @include('admin.navbar')

    <div class="container my-2">
    <p class="h1 text-center">Subscription Data</p>
    <hr>
    <div class="row text-center text-white">
        <div class="col">
            <div class="card card-body bg-primary">
            <p class="h2">Small Package</p>
            <p class="h3">{{ $small }}</p>
            </div>
        </div>
        <div class="col">
            <div class="card card-body bg-danger">
            <p class="h2">Medium Package</p>
            <p class="h3">{{ $medium }}</p>
            </div>
        </div>
        <div class="col">
            <div class="card card-body bg-warning">
            <p class="h2">Large Package</p>
            <p class="h3">{{ $large }}</p>
            </div>
        </div>
        <div class="col">
            <div class="card card-body bg-info">
            <p class="h2">Active Package</p>
            <p class="h3">{{ $active }}</p>
            </div>
        </div>
    </div>
    <div class="table-responsive my-4">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Subscription</th>
                    <th>Messages</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            @foreach($subscriptions as $sub)
                <tr>
                    <td>{{ $sub->id }}</td>
                    <td>{{ $sub->uid }}</td>
                    <td>{{ $sub->subscription }}</td>
                    <td>{{ $sub->messages }}</td>
                    <td>{{ $sub->status }}</td>
                </tr>
            @endforeach
            </tbody>
        </table> 
    </div>
    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>     
@endsection