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

    }

    public function receivedconnection()
    {
        $id = auth()->id();
        $data = Connection::find($id)->connection;
        // dd($data);
        // foreach($data as $info)
        // {
        //     $data2 = User::where('id',$info->party1)->get();
        // }
        return view('profile.receivedconnection')->with('data',$data);
    }

    public function matchedconnection()
    {
        return view('profile.matchedconnection');
    }
}
