<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Show Setting Page
    public function showsettings()
    {
        return view('settings.showsettings');
    }

    // Show Change Password
    public function showchangepassword()
    {
        return view('settings.changepassword');
    }

    //Change Password Backend
    public function changepassword(Request $request)
    {   
        $id = auth()->id();
        $checkpassword = User::find($id);
        $oldpassword = $request->oldpassword;
        $newpassword = $request->newpassword;
        $cnfpassword = $request->cnfpassword;
        if(Hash::check($oldpassword,$checkpassword->password))
        {
            if($newpassword == $cnfpassword)
            {
                $changepass = User::find($id);
                $changepass->password = Hash::make($newpassword);
                $changepass->update();
                return redirect('/settings')->with('success','Password Changed Successfully');
            }
            else{
                return redirect()->back()->with('exists','Password Does Not Match');    
            }
        }
        else{
            return redirect()->back()->with('exists','Old Password Is Wrong');
        }
        // dd($id,$oldpassword,$newpassword,$cnfpassword);
    }
}
