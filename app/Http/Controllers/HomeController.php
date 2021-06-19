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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentuser = User::find(auth()->id());
        if($currentuser->gender == "Male")
        {
            $getuserlist = User::where('gender','Female')->get();
             return view('user.home')->with('getuserlist',$getuserlist);
        }
        else{
            $getuserlist = User::where('gender','Male')->get();
             return view('user.home')->with('getuserlist',$getuserlist);
        }
    }
}
