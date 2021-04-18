<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Sitedata;
use App\Models\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Profile page
    public function show()
    {
        return view('profile.create');
    }

    public function create(Request $request) 
    {   
        $id = auth()->id();
        $profile = User::find($id);  
        $profile->profile_for = $request->input('profile_for');
        if($profile->profile_for == 'Son' || $profile->profile_for == 'Brother')
        {
            $profile->gender = 'Male';
        }
        else if($profile->profile_for == 'Daughter' || $profile->profile_for == 'Sister')
        {
            $profile->profile_for = 'Female';            
        }
        else {
            $profile->gender = $request->input('gender');
        }
        $profile->city = $request->input('city');
        $profile->living_with_family = $request->input('living_with_family');
        $profile->height = $request->input('height');
        $profile->marital_status = $request->input('marital_status');
        $profile->subcaste = $request->input('subcaste');
        $profile->highest_qualification = $request->input('highest_qualification');
        $profile->working_for = $request->input('working_for');
        $profile->working_as = $request->input('working_as');
        $profile->annual_income = $request->input('annual_income');
        $profile->bio = $request->input('bio');
        $profile->mobile_no = $request->input('mobile_no');
        $profile->save();
        // return $profile;
        return redirect('/home');
    }

    public function index()
    {    
        $id = auth()->id();
        $data = User::where('id',$id)->get();
        return view('profile.show')->with('data',$data);
    }

    public function edit()
    {
        $id = auth()->id();
        $data = User::where('id',$id)->get();
        return view('profile.edit')->with('data',$data);
    }

    

}
