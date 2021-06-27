@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
    @include('admin.navbar')

    <div class="container my-2">
    <p class="h2 text-center">Connections</p>
    <hr>
    <div class="table-responsive my-4">
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
            @foreach($connections as $connection)
                <tr>
                    <td>{{ $connection->id }}</td>
                    <td>{{ $connection->uid1 }}</td>
                    <td>{{ $connection->uid2 }}</td>
                    <td>{{ $connection->status }}</td>
                </tr>
            @endforeach
            </tbody>
        </table> 
    </div>
    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>     
@endsection