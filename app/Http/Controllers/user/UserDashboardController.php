<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function profile_pic(Request $request)
    {
        return $request;
        $pic = $request->profile;


        $user = User::find(auth()->user()->id);
        // $user->profile = ;
    }


}
