@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
    @include('admin.navbar')

    <div class="container my-2">
    <p class="h2 text-center">Messages</p>
    <hr>
    <div class="table-responsive my-4">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Sender ID</th>
                    <th>Recipient ID</th>
                    <th>Message</th>
                    <th>Seen</th>
                </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->sender_id }}</td>
                    <td>{{ $message->recipient_id }}</td>
                    <td>{{ $message->message }}</td>
                    <td>{{ $message->seen }}</td>
                </tr>
            @endforeach
            </tbody>
        </table> 
    </div>
    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>     
@endsection