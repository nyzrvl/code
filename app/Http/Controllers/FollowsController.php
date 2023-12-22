<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user)
    {
        public function __construct()
        {
            $this->middleware('auth');
        }
        return auth()->user()->following()->toggle($user->profile);
    }
}
