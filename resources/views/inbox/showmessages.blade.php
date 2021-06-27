@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
    @include('layouts.navbar')
    <style>
    .list-overflow{
        overflow-y:scroll;
        height:200px;
    }
    </style>
    <div class="container">
    <div class="card" id="app">
            <div class="card-header"></div>
            <div class="card-body mh-100 list-overflow" style="min-height:500px" v-chat-scroll>
                @foreach($messages as $message)
                    @if($message->sender_id == auth()->id())
                    <div class="d-flex justify-content-end">
                    <div class="text-right text-dark alert alert-primary col-6">{{ $message->message }}</div>
                    </div>
                    @else
                    <div class="d-flex justify-content-start">
                    <div class="text-left text-dark alert alert-primary col-6">{{ $message->message }}</div>
                    </div>
                        
                    @endif
                  @endforeach
                
            </div>
            <div class="card-footer">

           <div class="input-group ">
            <input type="text" class="form-control message_input" name="message" placeholder="Type a message">
            <div class="input-group-append">
                <button class="btn btn-md btn-success m-0 px-3 py-2 z-depth-0 waves-effect" id="submit" type="button">Send</button>
            </div>
            </div>

            </div>
    </div>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script>
    // Enable pusher logging - don't include this in production
    


$(document).ready(function () {
    var my_id = "{{ auth()->id() }}";
    var receiver_id = "{{ $id }}";

    Pusher.logToConsole = false;

    var pusher = new Pusher('11336dd02946497e3d91', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('chat');
    channel.bind('ChatEvent', function(data) {
      // console.log(JSON.stringify(data));
     
    });
      
      //Csrf Token
      $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }); 

            

      //Send Message
      $(document).on('keyup', '.message_input', function (e) {
        var message = $(this).val();        
        if (e.keyCode == 13 && message != '' && receiver_id != ''){
          $(this).val('');
          var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                    $.ajax({
                        type: "post",
                        url: "/inbox/chats", // need to create this post route
                        data: datastr,
                        cache: false,
                        success: function (data) {
                            
                        
                        },
                        error: function (jqXHR, status, err) {
                        },
                    })
          console.log(receiver_id);
        }
      });
    });

    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
@endsection