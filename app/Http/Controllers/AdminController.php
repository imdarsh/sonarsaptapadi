<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subscription;
use App\Models\Message;
use App\Models\Connection;

class AdminController extends Controller
{
    // Main List of Dashboard
    public function index(Request $request){
        $users = count(User::all());
        $subscriptions = count(Subscription::all());
        $messages = count(Message::all());
        $connections = count(Connection::all());
        $latest = User::orderBy('created_at','desc')->take(3)->get();
        $conns = Connection::orderBy('created_at','desc')->take(3)->get();
        // dd($latest);
        return view('admin.dashboard', ['users'=>$users,'subscriptions'=>$subscriptions,'messages'=>$messages,'connections'=>$connections,'latest'=>$latest,'conns'=>$conns]);
    }

    // Users Data Table
    public function usersData()
    {
        $users = User::all();
        return view('admin.users',['users'=>$users]);
    }

    // Subscriptions Data Table
    public function subscriptionsData()
    {
        $subscriptions = Subscription::all();
        $small = count(Subscription::where('subscription','small')->get());
        $medium = count(Subscription::where('subscription','medium')->get());
        $large = count(Subscription::where('subscription','large')->get());
        $active = count(Subscription::where('subscription','active')->get());
        return view('admin.subscriptions',['subscriptions'=>$subscriptions,'small'=>$small,'medium'=>$medium,'large'=>$large,'active'=>$active]);
    }

    // Messages Data Table
    public function messagesData()
    {
        $messages = Message::all();
        return view('admin.messages',['messages'=>$messages]);
    }

    // Connections Data Table
    public function connectionsData()
    {
        $connections = Connection::all();
        return view('admin.connections',['connections'=>$connections]);
    }
}
