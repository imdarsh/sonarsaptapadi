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
        $status = 0;
        $ids = auth()->id();
        $conn = Connection::where('uid1',$ids)->orWhere('uid1',$ids)->where('uid2',$id)->orWhere('uid2',$id)->get();
        if($conn == '')
        {
            $send = new Connection;
            $send->uid1 = $ids;
            $send->uid2 = $id;
            $send->status = $status;
            $send->save();
            return redirect()->back();
        }
        
        // dd($conn);
    }

    public function sentconnection()
    {
        $id = auth()->id();
        $data = Connection::where('party1',$id)->get('party2','match');
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
