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
        $a = $this->createDivision("A");
        $b1 = $this->createDivision("B1");
        $b2 = $this->createDivision("B2");
        $c1 = $this->createDivision("C1");
        $c2 = $this->createDivision("C2");
        $d = $this->createDivision("D");
        $e1 = $this->createDivision("E1");
        $e2 = $this->createDivision("E2");

        $capitals = $this->createTeam("PC Capitals", $c2);
        $shootout = $this->createTeam("Shootout in the Annex", $c2);
        $hogan = $this->createTeam("Hogan's Heroes", $c1);
        $cunningham = $this->createTeam("Cunningham's Brew Crew", $c1);
        $puck = $this->createTeam("Puck Buddies", $b2);
        $blues = $this->createTeam("Blues", $b2);
        $eagles = $this->createTeam("Eagles", $e1);
        $tenequip = $this->createTeam("Tenequip", $e1);
        $drews = $this->createTeam("Drews Castle Tours", $b2);
        $annies = $this->createTeam("Annies", $b2);
        $nova = $this->createTeam("Nova Scotia Voyageurs", $d);
        $bopelouse = $this->createTeam("Bo-pelouse Landscaping Inc.", $d);
        $miller = $this->createTeam("Miller Highlife", $a);
        $bar = $this->createTeam("Bar Stars", $a);
        $reebok = $this->createTeam("Reebok", $d);
        $unlimited = $this->createTeam("Unlimited Media", $d);
        $xstars = $this->createTeam("X Stars", $e1);
        $patriotes = $this->createTeam("Patriotes", $e1);
        $referees = $this->createTeam("Referees", $e2);
        $mda = $this->createTeam("MDA Space", $e2);

        $plugs = $this->createTeam("The Plugs", $c2);
        $dirtbags = $this->createTeam("Dirtbags", $c2);
        $dirty = $this->createTeam("Dirty Birds", $b1);
        $labatt = $this->createTeam("Labatt 50", $a);
        $saints = $this->createTeam("The Saints", $c1);
        $eliminators = $this->createTeam("PC Eliminators", $e2);
        $wildcats = $this->createTeam("Wildcats", $d);
        $ccm = $this->createTeam("CCM", $a);
        $eskimoes = $this->createTeam("Eskimoes", $d);
        $winnie = $this->createTeam("Winnie Ted Jets", $e2);
        $aqua = $this->createTeam("Aquahydrate", $d);
        $vermont = $this->createTeam("Vermont", $d);
        $van = $this->createTeam("Van Buren Boys", $d);
        $nolans = $this->createTeam("The Nolans", $b1);
        $rockets = $this->createTeam("Rockets", $c1);
        $irish = $this->createTeam("Kahnawake Irish", $a);
        $dagwoods = $this->createTeam("Dagwoods", $d);
        $afternoon = $this->createTeam("Afternoon Delight", $a);
        $rumble = $this->createTeam("Rumble in the Jungle", $b1);
        $wingnuts = $this->createTeam("Wingnuts", $b1);

        $arena = $this->createArena("ARENA");
        $annex = $this->createArena("ANNEX");


        $games = [
            //0         1           2   3       4           5           6
            //wednesday
            ["1", "2017/04/26", "18:00", $c2, $capitals, $shootout, $arena],
            ["2", "2017/04/26", "18:30", $c1, $hogan, $cunningham, $annex],
            ["3", "2017/04/26", "19:00", $b2, $puck, $blues, $arena],
            ["4", "2017/04/26", "19:30", $e1, $eagles, $tenequip, $annex],
            ["5", "2017/04/26", "20:00", $b2, $drews, $annies, $arena],
            ["6", "2017/04/26", "20:30", $d, $nova, $bopelouse, $annex],
            ["7", "2017/04/26", "21:00", $a, $miller, $bar, $arena],
            ["8", "2017/04/26", "21:30", $d, $reebok, $unlimited, $annex],
            ["9", "2017/04/26", "22:00", $e1, $xstars, $patriotes, $arena],
            ["10", "2017/04/26", "22:30", $e2, $referees, $mda, $annex],
            //thursday

            /*
            11 Thu/Jeu 18:00 B2 Drews Castle Tours - Blues ARENA
            12 Thu/Jeu 18:30 C2 The Plugs - Dirtbags ANNEX
            13 Thu/Jeu 19:00 B1 Rumble in the Jungle - Dirty Birds ARENA
            14 Thu/Jeu 19:30 E1 Patriotes - Eagles ANNEX
            15 Thu/Jeu 20:00 A Miller Highlife - Labatt 50 ARENA
            16 Thu/Jeu 20:30 C1 The Saints - Cunningham's Brew Crew ANNEX
            17 Thu/Jeu 21:00 E2 PC Eliminators - Referees ARENA
            18 Thu/Jeu 21:30 D Reebok - Wildcats ANNEX
            19 Thu/Jeu 22:00 A CCM - Bar Stars ARENA
            20 Thu/Jeu 22:30 D Eskimoes - Van Buren Boys ANNEX
            **/
            ["11", "2017/04/27", "18:00", $b2, $drews, $blues, $arena],
            ["12", "2017/04/27", "18:30", $c2, $plugs, $dirtbags, $annex],
            ["13", "2017/04/27", "19:00", $b1, $rumble, $dirty, $arena],
            ["14", "2017/04/27", "19:30", $e1, $patriotes, $eagles, $annex],
            ["15", "2017/04/27", "20:00", $a, $miller, $labatt, $arena],
            ["16", "2017/04/27", "20:30", $c1, $saints, $cunningham, $annex],
            ["17", "2017/04/27", "21:00", $e2, $eliminators, $referees, $arena],
            ["18", "2017/04/27", "21:30", $d, $reebok, $wildcats, $annex],
            ["19", "2017/04/27", "22:00", $a, $ccm, $bar, $arena],
            ["20", "2017/04/27", "22:30", $d, $eskimoes, $van, $annex],
            //friday
            /*
            21 Fri/Ven 17:30 C2 Dirtbags - Shootout in the Annex ANNEX
            22 Fri/Ven 18:00 B2 Annies - Puck Buddies ARENA
            23 Fri/Ven 18:30 C2 PC Capitals - The Plugs ANNEX
            24 Fri/Ven 19:00 E2 Winnie Ted Jets - PC Eliminators ARENA
            25 Fri/Ven 19:30 D Aquahydrate - Bo-pelouse Landscaping Inc. ANNEX
            26 Fri/Ven 20:00 E1 X Stars - Tenequip ARENA
            27 Fri/Ven 20:30 D Vermont - Van Buren Boys ANNEX
            28 Fri/Ven 21:00 B1 The Nolans - Wingnuts ARENA
            29 Fri/Ven 21:30 C1 Rockets - The Saints ANNEX
            30 Fri/Ven 22:00 A Labatt 50 - Kahnawake Irish ARENA
            31 Fri/Ven 22:30 D Nova Scotia Voyageurs - Dagwoods ANNEX
            32 Fri/Ven 23:00 A Afternoon Delight - CCM ARENA
            **/
            ["21", "2017/04/28", "17:30", $c2, $dirtbags, $shootout, $annex],
            ["22", "2017/04/28", "18:00", $b2, $annies, $puck, $arena],
            ["23", "2017/04/28", "18:30", $c2, $capitals, $plugs, $annex],
            ["24", "2017/04/28", "19:00", $e2, $winnie, $eliminators, $arena],
            ["25", "2017/04/28", "19:30", $d, $aqua, $bopelouse, $annex],
            ["26", "2017/04/28", "20:00", $e1, $xstars, $tenequip, $arena],
            ["27", "2017/04/28", "20:30", $d, $vermont, $van, $annex],
            ["28", "2017/04/28", "21:00", $b1, $nolans, $wingnuts, $arena],
            ["29", "2017/04/28", "21:30", $c1, $rockets, $saints, $annex],
            ["30", "2017/04/28", "22:00", $a, $labatt, $irish, $arena],
            ["31", "2017/04/28", "22:30", $d, $nova, $dagwoods, $annex],
            ["32", "2017/04/28", "23:00", $a, $afternoon, $ccm, $arena],
            //saturday
            /*
            - Sat/Sam 8:00 X ARENA
            33 Sat/Sam 8:30 B1 Dirty Birds - The Nolans ANNEX
            34 Sat/Sam 9:00 D Eskimoes - Aquahydrate ARENA
            35 Sat/Sam 9:30 B1 Rumble in the Jungle - Wingnuts ANNEX
            36 Sat/Sam 10:00 D Vermont - Unlimited Media ARENA
            37 Sat/Sam 10:30 E1 Tenequip - Patriotes ANNEX
            38 Sat/Sam 11:00 E2 Winnie Ted Jets - MDA Space ARENA
            39 Sat/Sam 11:30 B2 Blues - Annies ANNEX
            **/
            ["33", "2017/04/29", "08:30", $b1, $dirty, $nolans, $annex],
            ["34", "2017/04/29", "09:00", $d, $eskimoes, $aqua, $arena],
            ["35", "2017/04/29", "09:30", $b1, $rumble, $wingnuts, $annex],
            ["36", "2017/04/29", "10:00", $d, $vermont, $unlimited, $arena],
            ["37", "2017/04/29", "10:30", $e1, $tenequip, $patriotes, $annex],
            ["38", "2017/04/29", "11:00", $e2, $winnie, $mda, $arena],
            ["39", "2017/04/29", "11:30", $b1, $blues, $annies, $annex],
            /*
            40 Sat/Sam 12:00 C1 Hogan's Heroes - Rockets ARENA
            41 Sat/Sam 12:30 D Reebok - Dagwoods ANNEX
            42 Sat/Sam 13:00 A Kahnawake Irish - Afternoon Delight ARENA
            43 Sat/Sam 13:30 C2 PC Capitals - Dirtbags ANNEX
            44 Sat/Sam 14:00 D Wildcats - Bo-pelouse Landscaping Inc. ARENA
            45 Sat/Sam 14:30 D Nova Scotia Voyageurs - Eskimoes ANNEX
            46 Sat/Sam 15:00 B1 Rumble in the Jungle - The Nolans ARENA
            47 Sat/Sam 15:30 D Vermont - Aquahydrate ANNEX
            48 Sat/Sam 16:00 B1 Wingnuts - Dirty Birds ARENA
            49 Sat/Sam 16:30 C2 Shootout in the Annex - The Plugs ANNEX*/
            ["40", "2017/04/29", "12:00", $c1, $hogan, $rockets, $arena],
            ["41", "2017/04/29", "12:30", $d, $reebok, $dagwoods, $annex],
            ["42", "2017/04/29", "13:00", $a, $irish, $afternoon, $arena],
            ["43", "2017/04/29", "13:30", $c2, $capitals, $dirtbags, $annex],
            ["44", "2017/04/29", "14:00", $d, $wildcats, $bopelouse, $arena],
            ["45", "2017/04/29", "14:30", $d, $nova, $eskimoes, $annex],
            ["46", "2017/04/29", "15:00", $b1, $rumble, $nolans, $arena],
            ["47", "2017/04/29", "15:30", $d, $vermont, $aqua, $annex],
            ["48", "2017/04/29", "16:00", $b1, $wingnuts, $dirty, $arena],
            ["49", "2017/04/29", "16:30", $c2, $shootout, $plugs, $annex],
            /*
            50 Sat/Sam 17:00 C1 Hogan's Heroes - The Saints ARENA
            51 Sat/Sam 17:30 E2 Winnie Ted Jets - Referees ANNEX
            52 Sat/Sam 18:00 A Miller Highlife - CCM ARENA
            53 Sat/Sam 18:30 E2 MDA Space - PC Eliminators ANNEX
            54 Sat/Sam 19:00 A Afternoon Delight - Labatt 50 ARENA
            55 Sat/Sam 19:30 E1 X Stars - Eagles ANNEX
            56 Sat/Sam 20:00 A Bar Stars - Kahnawake Irish ARENA
            57 Sat/Sam 20:30 C1 Cunningham's Brew Crew - Rockets ANNEX
            58 Sat/Sam 21:00 D Wildcats - Dagwoods ARENA
            59 Sat/Sam 21:30 D Unlimited Media - Van Buren Boys ANNEX
            60 Sat/Sam 22:00 B2 Drews Castle Tours - Puck Buddies ARENA*/
            ["50", "2017/04/29", "17:00", $c1, $hogan, $saints, $arena],
            ["51", "2017/04/29", "17:30", $e2, $winnie, $referees, $annex],
            ["52", "2017/04/29", "18:00", $a, $miller, $ccm, $arena],
            ["53", "2017/04/29", "18:30", $e2, $mda, $eliminators, $annex],
            ["54", "2017/04/29", "19:00", $a, $afternoon, $labatt, $arena],
            ["55", "2017/04/29", "19:30", $e1, $xstars, $eagles, $arena],
            ["56", "2017/04/29", "20:00", $a, $bar, $irish, $arena],
            ["57", "2017/04/29", "20:30", $c1, $cunningham, $rockets, $annex],
            ["58", "2017/04/29", "21:00", $d, $wildcats, $dagwoods, $arena],
            ["59", "2017/04/29", "21:30", $d, $unlimited, $van, $annex],
            ["60", "2017/04/29", "22:00", $b2, $drews, $puck, $arena],
        ];

        foreach($games as $scheduleGame) {
            $game = new Game;
            $game->game_number = $scheduleGame[0];
            $game->game_date = $scheduleGame[1];
            $game->game_time = $scheduleGame[2];
            $game->division_id = $scheduleGame[3]->id;
            $game->away_team_id = $scheduleGame[4]->id;
            $game->home_team_id = $scheduleGame[5]->id;
            $game->arena_id = $scheduleGame[6]->id;
            $game->Save();
        }
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
