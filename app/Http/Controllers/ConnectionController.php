<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connection;
use App\Models\User;
use DB;

class ConnectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Show Connections
    public function connections(){
       
        // Sent Connection Data
        $id = auth()->id();
        $data = Connection::where('uid1',$id)->where('status',0)->get('uid2','status');
        $sentuser = User::find($data);

        // Received Connection Data
        $id = auth()->id();
        $data = Connection::where('uid2',$id)->where('status',0)->get('uid1','status');
        $receiveduser = User::find($data);
       
        return view('connections.showconnection',['sentuser'=>$sentuser,'receiveduser'=>$receiveduser]);
    }

    // Send Connection Backend
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
    }


    // Accept Connection Backend 
    public function acceptconnection($id)
    {
        $ids = auth()->id();
        $conn = Connection::where('uid1',$id)->where('uid2',$ids)->where('status',0)->first();
        $conn->status = 1;
        $conn->update();
        return redirect()->back()->with('success','Connection Accepted Successfully');
    }

    // Matched Connection Data
    public function matches()
    {
        $uid = auth()->id();
        $query = DB::raw("if(`uid1` = '$uid',`uid2`,`uid1`)");
        $conn = Connection::where('status',1)->where('uid1',$uid)->orWhere('uid2',$uid,)->where('status',1)->get($query);
        $matcheduser = User::find($conn);
        // dd($conn);
        return view('connections.matches')->with('matcheduser',$matcheduser);
    }

}
