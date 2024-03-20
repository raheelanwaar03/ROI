<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\UserWithdraw;
use Illuminate\Http\Request;

class UserWithdrawController extends Controller
{
    public function request()
    {
        return view('user.withdraw.request');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|integer',
            'account' => 'required',
            'name' => 'required',
            'type' => 'required',
        ]);

        // check if user have enough balance
        if(auth()->user()->balance < $validated['amount'])
        {
            return redirect()->back()->with('error','you have not enough balance');
        }

        $withdraw = new UserWithdraw();
        $withdraw->user_id = auth()->user()->id;
        $withdraw->amount = $validated['amount'];
        $withdraw->account = $validated['account'];
        $withdraw->name = $validated['name'];
        $withdraw->type = $validated['type'];
        $withdraw->save();
        return redirect()->back()->with('success','Successfull!');

    }

    public function index()
    {
        $withdraw = UserWithdraw::where('user_id',auth()->user()->id)->get();
        return view('user.withdraw.all',compact('withdraw'));
    }


}
