<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connection;
use App\Models\User;

class ConnectionController extends Controller
{
    //
    public function sendconnection($id)
    {
        $match = 0;
        $ids = auth()->id();
        $send = new Connection;
        $send->party1 = $ids;
        $send->party2 = $id;
        $send->match = $match;
        $send->save();
        return redirect()->back();
    }

    public function sentconnection()
    {
        $id = auth()->id();
        $data = Connection::where('party1',$id)->get('party2');
        $user = User::find($data);
        return view('profile.sentconnection')->with('user',$user);
    }

    public function receivedconnection()
    {
        $id = auth()->id();
        $data = Connection::where('party2',$id)->get('party1');
        $user = User::find($data);
        return view('profile.receivedconnection')->with('user',$user);
    }

    public function matchedconnection()
    {
        return view('profile.matchedconnection');
    }
}
