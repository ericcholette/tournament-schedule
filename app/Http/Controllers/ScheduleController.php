<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Team;
use App\Division;
use App\Arena;

class ScheduleController extends Controller
{
    public function viewSchedule() {
        return view('schedule.view')->with('games', Game::All());
    }

    public function editSchedule() {
        return $this->viewSchedule()->with('edit', true);
    }

    public function edit($game_id) {
        $game = Game::find($game_id);
        return view('schedule.create')
            ->with('game', $game)
            ->with('teams', Team::all())
            ->with('divisions', Division::all())
            ->with('arenas', Arena::all());
    }

    public function editScore($game_id) {
        $game = Game::find($game_id);
        return view('schedule.update_score')
            ->with('game', $game);
    }

    public function saveScore(Request $request) {
        $game = Game::find($request->id);
        $game->away_team_score = $request->away_team_score;
        $game->home_team_score = $request->home_team_score;
        $game->save();

        return redirect('/');
    }
}
