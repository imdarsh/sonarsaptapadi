<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connection;
use App\Models\User;
use App\Models\Message;
use App\Events\ChatEvent;
use DB;
use Pusher\Pusher;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Show Inbox List
    public function showList()
    {
        $uid = auth()->id();
        $query = DB::raw("if(`uid1` = '$uid',`uid2`,`uid1`)");
        $conn = Connection::where('status',1)->where('uid1',$uid)->orWhere('uid2',$uid,)->where('status',1)->get($query);
        $list = User::find($conn);
        // dd($conn);
        return view('inbox.list')->with('list',$list);
    }

    public function fetchMessages($id)
    {
        // dd($id);
        $messages = Message::where('sender_id',auth()->id())->where('recipient_id',$id)->orWhere('recipient_id',auth()->id())->where('sender_id',$id)->get();
        // dd($messages);
        return view('inbox.showmessages',['messages'=>$messages,'id'=>$id]);

    }

    // Function To Send Message
    public function sendMessage(Request $request)
    {
        $chat = new Message;
        $chat->sender_id = auth()->id();
        $chat->recipient_id = $request->receiver_id;;
        $chat->message = $message = $request->message;
        $chat->save();


        $options =  array(
            'cluster' => 'ap2',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $pusher->trigger('chat','ChatEvent',$chat);
        // broadcast(new ChatEvent($message))->toOthers();
    }
}
