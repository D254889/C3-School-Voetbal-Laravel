<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contest;

class MatchesController extends Controller
{
    public  function index()
    {
        $contests = Contest::all();
        return view("matches.index")->with("matches", $contests);
    }

    public function create()
    {
        return view('matches.create');
    }

    public function store(Request $request)
    {
        $newContest = new Contest;
        $newContest->team1_id = $request->team1_id;
        $newContest->team2_id = $request->team2_id;
        $newContest->field = $request->field;
        $newContest->time = $request->time;
        $newContest->save();
        return redirect()->route('matches.index');
    }

    public function edit(Contest $contest)
    {
        return view('matches.edit')->with('matches', $contest);
    }

    public function update(Contest $contest, Request $request)
    {
        $contest->team1_id = $request->team1_id;
        $contest->team2_id = $request->team2_id;
        $contest->field = $request->field;
        $contest->time = $request->time;
        $contest->save();
        return redirect()->route('matches.index');
    }

    public function destroy(Contest $contest)
    {
        $contest->delete();
        return redirect()->route('matches.index');
    }
}
