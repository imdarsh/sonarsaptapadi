<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //Profile page
    public function index()
    {
        return view('profile.create');
    }
}
