<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getMatches(){
        $matches = Contest::select('team1_id', 'teams2_id', 'time')->get();
    return response()->json($matches);
    }
}
