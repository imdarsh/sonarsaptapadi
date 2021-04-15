<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Sitedata;
use App\Models\User;

class ProfileController extends Controller
{
    //Profile page
    public function show()
    {
        return view('profile.create');
    }

    public function create(Request $request) 
    {   
        $id = auth()->id();
        $profile = User::find($id);   
        $profile->city = $request->input('city');
        $profile->live_with_family = $request->input('live_with_family');
        $profile->height = $request->input('height');
        $profile->marital_status = $request->input('marital_status');
        $profile->subcaste = $request->input('subcaste');
        $profile->highest_qualification = $request->input('highest_qualification');
        $profile->working_in = $request->input('working_in');
        $profile->jobprofile = $request->input('jobprofile');
        $profile->annual_income = $request->input('annual_income');
        $profile->bio = $request->input('bio');
        $profile->mobileno = $request->input('mobileno');
        $profile->save();
        // return $profile;
        return redirect('/home');
    }

    public function index()
    {    
        $id = auth()->id();
        $data = User::where('id',$id)->get();
        return view('profile.profile')->with('data',$data);
    }
}
