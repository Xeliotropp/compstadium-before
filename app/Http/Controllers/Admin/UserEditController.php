<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserEditController extends Controller
{
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.users.edit', compact('users'));
    }
    public function update(UserEditRequest $request, $users)
    {
        $validatedData = $request->validated();
        $users = User::findOrFail($users);
        $users->name = $validatedData['name'];
        $users->email = $validatedData['email'];
        $users->password = $validatedData['password'];
        $users->role_as = $validatedData['role_as'];

        $users->save();

        return redirect('admin/brands/')->with('message', 'Успешно редактиране на марка');
    }
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
}
