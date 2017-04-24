<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    public function getScore() {
        $game_time = Carbon::createFromFormat("Y-m-d H:i:s", $this->game_date . " " . $this->game_time, 'America/Montreal');

        $now = Carbon::now();
        if($now->gte($game_time)) {
            return $this->away_team_score . " - " . $this->home_team_score;
        } else {
            return "";
        }
    }

    public function small_date() {
        $date = Carbon::createFromFormat("Y-m-d", $this->game_date);
        return $date->format('D');
    }
    public function date() {
        $date = Carbon::createFromFormat("Y-m-d", $this->game_date);
        return $date->format('l');
    }
    public function time() {
        return substr($this->game_time, 0, 5);
    }

    public function away_team() {
        return $this->belongsTo('App\Team', 'away_team_id');
    }
    public function home_team() {
        return $this->belongsTo('App\Team', 'home_team_id');
    }
    public function arena() {
        return $this->belongsTo('App\Arena');
    }
    public function division() {
        return $this->belongsTo('App\Division');
    }

}
