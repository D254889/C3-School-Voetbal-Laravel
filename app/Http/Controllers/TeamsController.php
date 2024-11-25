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
        $newTeams->name = $request->name;
        $newTeams->age = $request->age;
        $newTeams->email = $request->email;
        $newTeams->save();
        return redirect()->route('customers.index');
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit')->with('customer', $customer);
    }

    public function update(Customer $customer, Request $request)
    {
        $customer->name = $request->name;
        $customer->age = $request->age;
        $customer->email = $request->email;
        $customer->save();
        return redirect()->route('customers.index');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
