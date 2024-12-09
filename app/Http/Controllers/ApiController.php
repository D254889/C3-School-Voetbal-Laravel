<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getMatches(){
        $matches = Contest::select('team1_id', 'teams2_id', 'team1_score', 'team2_score')->get();
    return response()->json($matches);
    }
}
