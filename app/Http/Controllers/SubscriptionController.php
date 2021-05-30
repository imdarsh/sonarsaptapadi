<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    // Show Subscription Page
    public function index()
    {
        return view('subscriptions.package');
    }

    public function subscribe(Request $request)
    {
        
    }
    
}
