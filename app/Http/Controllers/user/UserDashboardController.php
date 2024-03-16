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
        $image = $request->pic;
        $imageName = rand(11111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $imageName);

        $user = User::where('id', auth()->user()->id)->first();

        if (file_exists(public_path('profile/', auth()->user()->pic))) {
            file_exists(public_path('profile/', auth()->user()->pic));
        }

        $user->pic = $imageName;
        $user->save();

        return redirect()->back()->with('success', 'Profile Picture Updated');
    }
}
