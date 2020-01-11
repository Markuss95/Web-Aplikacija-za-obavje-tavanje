<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function store(\App\User $user)
    {
        auth()->user()->following()->toggle($user->profile);

        return redirect('profile/'.$user->id);
    }
}
