<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddTeam;
use App\Models\AddTeamLeader;

class AddTeamController extends Controller
{
    //
    public function index()
    {
        $shownewTeamdata = AddTeam::all();
        return view('executive.add_team',compact('shownewTeamdata'));
    }

    public function addNewTeam(Request $request)
    {
        $addteam = new AddTeam();

        $addteam->team_name = $request->team_name;
        // $addteam->team_leader_code = $request->team_leader_code; 

        $addteam->save();
        return back()->with('success','New team added succesfully');
    }

    public function showteamleader()
    {
        $Teamleaderdata = AddTeamLeader::all();
        return view('executive.add_team_leader',compact('Teamleaderdata'));
    }
  
    public function addteamleader(Request $request)
    {
        $teamleader = new AddTeamLeader();
        $teamleader->team_leader_code = $request->team_leader_code;
        $teamleader->save();

        return back()->with('success','New team added succesfully');
    }
        
}
