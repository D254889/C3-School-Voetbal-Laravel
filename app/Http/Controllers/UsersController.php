<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view("users.index")->with("users", $users);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $newTeams = new Team;
        $newTeams->id = $request->id;
        $newTeams->foreignId = $request->foreignid;
        $newTeams->name = $request->name;
        $newTeams->points = $request->points;
        $newTeams->save();
        return redirect()->route('teams.index');
    }
}

