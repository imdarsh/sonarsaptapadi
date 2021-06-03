<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connection;
use App\Models\User;
use App\Models\Message;
use App\Events\MessageSent;
use DB;

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
        $username = User::find($id);
        $message = Message::where('sender_id',auth()->id())->where('recipient_id',$id)->orWhere('recipient_id',auth()->id())->where('sender_id',$id)->get();
        return view('inbox.showmessages',['username'=>$username,'message'=>$message]);        
    }

    public function sendMessage($id, Request $request)
    {
        $chat = new Message; 
        $user = auth()->id();
        // $message = $user->messages()->create([
        //     'message' => $request->input('message')
        // ]);
        $chat->sender_id = auth()->id();
        $chat->recipient_id = $id;
        $message = $chat->message = $request->input('message');
        $chat->save();
        broadcast(new MessageSent($message))->toOthers();
        // return redirect()->back();
        return ['status' => 'Message Sent!'];
    }

}
