<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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
        return view('frontend.dashboard.userdashboard', compact('users'));
    }
}
