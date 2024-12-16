<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class TeamsController extends Controller
{
    public  function index()
    {
        $teams = Team::all();
        return view("teams.index")->with("teams", $teams);
    }

    public function create()
    {
        return view('teams.create');
    }

    public function store(Request $request)
    {
        $newTeam = new Team;
        $newTeam->name = $request->name;
        $newTeam->points = $request->points;
        $newTeam->creator_id = Auth::user()->id;
        $newTeam->save();
        return redirect()->route('teams.index');
    }

    public function edit(Team $team)
    {
        return view('teams.edit')->with('teams', $team);
    }

    public function update(Teams $team, Request $request)
    {
        $team->name = $request->name;
        $team->points = $request->points;
        $team->save();
        return redirect()->route('teams.index');
    }

    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('teams.index');
    }
}
