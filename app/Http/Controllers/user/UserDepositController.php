<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDepositController extends Controller
{
    public function request()
    {
        return view('user.deposit.request');
    }
}
