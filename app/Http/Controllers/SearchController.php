<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Connection;

class SearchController extends Controller
{
    //
    public function search()
    {
        //Search Filter Backend
        $gender = $_GET['gender'];
        $city = $_GET['city'];
        $age_min = $_GET['age_min'];
        $age_max = $_GET['age_max'];
        $subcaste = $_GET['subcaste'];
        $results = User::where('gender',$gender)->where('city','like','%'.$city.'%')->whereBetween('age',[$age_min-1,$age_max])->where('subcaste',$subcaste)->get();
        
        return view('user.search', ['results' => $results]);
        
        // dd($results);
    }
}
