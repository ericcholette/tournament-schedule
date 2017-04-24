<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Division;
use App\Game;
use App\Arena;

class SeedController extends Controller
{
    public function seed()
    {
        //redacted
    }

    public function createTeam($name, $division)
    {
        $team = new Team;
        $team->name = $name;

        $division->teams()->save($team);

        return $team;
    }

    public function createDivision($name)
    {
        $div = new Division;
        $div->name = $name;
        $div->Save();

        return $div;
    }

    public function createArena($name)
    {
        $arena = new Arena;
        $arena->name = $name;
        $arena->Save();

        return $arena;
    }
}
