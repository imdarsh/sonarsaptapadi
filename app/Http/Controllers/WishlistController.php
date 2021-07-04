<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Add to Wishlist
    public function store(Request $request,$id)
    {
        $add = new Wishlist;
        $add->uid = auth()->id();
        $add->wishlist_id = $id;
        $add->save();
        return redirect()->back();
    }

    // Show Wishlist Page
    public function show()
    {
        $id = auth()->id(); 
        $users = Wishlist::where('uid',$id)->get('wishlist_id');
        $wishlists = User::find($users);
        return view('user.wishlist',['wishlists'=>$wishlists]);
    }
}
