<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    public  function index()
    {
        $users = User::all();
        return view("users.index")->with("users", $users);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $newUser = new User;
        $newUser->name = $request->name;
        $newUser->age = $request->age;
        $newUser->email = $request->email;
        $newUser->save();
        return redirect()->route('customers.index');
    }

    public function edit(User $user)
    {
        return view('users.edit')->with('user', $user);
    }

    public function update(User $user, Request $request)
    {
        $user->name = $request->name;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}

