<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connection;

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
        $data = Connection::where('party1',$id)->get();
        return view('profile.sentconnection',)->with('data',$data);
    }

    public function receivedconnection()
    {
        return view('profile.receivedconnection');
    }

    public function matchedconnection()
    {
        return view('profile.matchedconnection');
    }
}
