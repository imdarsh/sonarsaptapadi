<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            $getuserlist = User::inRandomOrder()->limit(4)->get();
             return view('user.home')->with('getuserlist',$getuserlist);
        
    }
    public function details($id)
    {
        $user = User::find($id);
        return view('user.details',['user'=>$user]);
    }
}
