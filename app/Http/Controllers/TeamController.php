<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Division;

class TeamController extends Controller
{
    public function create() {
        return $this->viewForm(new Team);
    }
    public function edit($id) {
        return $this->viewForm(Team::find($id));
    }

    private function viewForm(Team $team) {
        return view('team.create')->with('team', $team)->with('divisions', Division::All());
    }

    public function store(Request $request) {
        if($request->id != "") {
            $team = Team::find($request->id);
        } else {
            $team = new Team;
        }
        $team->division_id = $request->division_id;
        $team->name = $request->name;
        $team->Save();
        return redirect('/');
    }
}
