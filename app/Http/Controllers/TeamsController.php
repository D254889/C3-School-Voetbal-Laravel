<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Teams::all();
        return view("teams.index")->with("teams", $teams);
    }

    public function create()
    {
        return view('teams.create');
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
