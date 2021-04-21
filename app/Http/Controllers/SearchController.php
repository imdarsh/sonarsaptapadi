<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
    //
    public function search()
    {
        $gender = $_GET['gender'];
        $city = $_GET['city'];
        $age_min = $_GET['age_min'];
        $age_max = $_GET['age_max'];
        $subcaste = $_GET['subcaste'];
        $results = User::where('gender',$gender)->where('city','like','%'.$city.'%')->whereBetween('age',[$age_min-1,$age_max])->where('subcaste',$subcaste)->get();
        return view('user.search')->with('results',$results);
        // dd($results);
    }
}
