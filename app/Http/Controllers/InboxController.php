<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connection;
use App\Models\User;
use DB;

class InboxController extends Controller
{
    // Show Inbox List
    public function showlist()
    {
        $uid = auth()->id();
        $query = DB::raw("if(`uid1` = '$uid',`uid2`,`uid1`)");
        $conn = Connection::where('status',1)->where('uid1',$uid)->orWhere('uid2',$uid,)->where('status',1)->get($query);
        $list = User::find($conn);
        // dd($conn);
        return view('inbox.list')->with('list',$list);
    }

    public function showmessages($id)
    {
        $username = User::find($id);
        return view('inbox.showmessages',['username'=>$username]);        
    }
}
