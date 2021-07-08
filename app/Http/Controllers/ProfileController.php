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
            $profile->gender = 'Female';            
        }
        else {
            $profile->gender = $request->input('gender');
        }
        $profile->name = $request->input('name');
        $profile->age = $request->input('age');
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

    public function update(Request $request)
    {
        $id = auth()->id();
        $data = User::find($id);
        $data->bio = $request->input('bio');
        $data->name = $request->input('name');
        $data->age = $request->input('age');
        $data->marital_status = $request->input('marital_status');
        $data->living_with_family = $request->input('living_with_family');
        $data->city = $request->input('city');
        $data->gender = $request->input('gender');
        $data->height = $request->input('height');
        $data->blood_group = $request->input('blood_group');
        $data->dob = $request->input('dob');
        $data->highest_qualification = $request->input('highest_qualification');
        $data->college_attended = $request->input('college_attended');
        $data->working_for = $request->input('working_for');
        $data->working_as = $request->input('working_as');
        $data->annual_income = $request->input('annual_income');
        $data->father_name = $request->input('father_name');
        $data->mother_name = $request->input('mother_name');
        $data->no_of_brothers = $request->input('no_of_brothers');
        $data->no_of_sisters = $request->input('no_of_sisters');
        $data->native_place = $request->input('native_place');
        $data->father_occupation = $request->input('father_occupation');
        $data->mother_tongue = $request->input('mother_tongue');
        $data->tob = $request->input('tob');
        $data->cob = $request->input('cob');
        $data->subcaste = $request->input('subcaste');
        $data->gotra = $request->input('gotra');
        $data->manglik = $request->input('manglik');
        $data->sun_sign = $request->input('sun_sign');
        $data->email = $request->input('email');
        $data->mobile_no = $request->input('mobile_no');
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $id. '_'. time().'.'.$extension;
            $path = $request->file('image')->storeAs('image', $fileNameToStore, 'public');
            $data->image = $fileNameToStore;
            }
            else {
            $fileNameToStore = 'noimage.jpg';
            }
        $data->update();
        return redirect('/profile');
    }

    public function uploadimage(Request $request)
    {   
        $id = auth()->id();
        $upload = User::find($id);
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $id. '_'. time().'.'.$extension;
            $path = $request->file('image')->storeAs('image', $fileNameToStore, 'public');
            $upload->image = $fileNameToStore;
            
            $upload->save();
            }
            else {
            $fileNameToStore = 'noimage.jpg';
            }
            return redirect('/profile');
    }

}
