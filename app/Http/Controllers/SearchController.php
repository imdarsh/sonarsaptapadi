<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Connection;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Search Function
    public function search()
    {
        //Search Filter Backend
        

        $gender = $_GET['gender'];
        $city = $_GET['city'];
        $age_min = $_GET['age_min'];
        $age_max = $_GET['age_max'];
        $education = $_GET['highest_qualification'];
        $id = $_GET['id'];
        $manglik = $_GET['manglik'];
        $results = User::where('gender',$gender)->where('city','like','%'.$city.'%')->whereBetween('age',[$age_min-1,$age_max])->where('highest_qualification','like','%'.$education.'%')->where('id',$id)->where('manglik',$manglik)->get();
        if($results->isEmpty()){
            $results = User::where('gender',$gender)->get();
            return view('user.search', ['results' => $results]);   
        }
        else{
            return view('user.search', ['results' => $results]);   
        }
       
    }
}
