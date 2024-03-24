<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function all()
    {
        $users = User::get();
        return view('admin.Users.all', compact('users'));
    }

    public function today()
    {
        $users = User::where('created_at',Carbon::today())->get();
        return view('admin.Users.today', compact('users'));
    }

    public function pending()
    {
        $users = User::where('status', 'pending')->get();
        return view('admin.Users.pending', compact('users'));
    }

    public function approved()
    {
        $users = User::where('status', 'approved')->get();
        return view('admin.Users.approved', compact('users'));
    }

    public function reject()
    {
        $users = User::where('status', 'rejected')->get();
        return view('admin.Users.rejected', compact('users'));
    }
}
