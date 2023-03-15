<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function edit($id)
    {
        $users = User::find($id);
        return view('frontend.user.edit', compact('users'));
    }
    public function index()
    {
        $users = User::all();
        return view('frontend.dashboard', compact('users'));
    }
}
