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
        $conn1 = Connection::where('uid1',$ids)->where('uid2',$id)->get('id')->first();
        $conn2 = Connection::where('uid2',$ids)->where('uid1',$id)->get('id')->first();
        if($conn1 == '' and $conn2 == '')
        {
            $send = new Connection;
            $send->uid1 = $ids;
            $send->uid2 = $id;
            $send->status = $status;
            $send->save();
            return redirect()->back()->with('success','Connection Sent Successfully');
        }
        else{
            return redirect()->back()->with('exists','Connection Already Sent');
        }
        
        // dd($conn1,$conn2);
    }

    public function sentconnection()
    {
        $id = auth()->id();
        $data = Connection::where('uid1',$id)->where('status',0)->get('uid2','status');
        $user = User::find($data);
        return view('profile.sentconnection')->with('user',$user);
    }

    public function receivedconnection()
    {
        $id = auth()->id();
        $data = Connection::where('uid2',$id)->where('status',0)->get('uid1','status');
        $user = User::find($data);
        return view('profile.receivedconnection')->with('user',$user);
    }

    public function acceptconnection($id)
    {
        $ids = auth()->id();
        $conn = Connection::where('uid1',$id)->where('uid2',$ids)->where('status',0)->first();
        $conn->status = 1;
        $conn->update();
        return redirect()->back()->with('success','Connection Accepted Successfully');
        dd($conn);
    }

    public function matchedconnection()
    {
        return view('profile.matchedconnection');
    }
}
