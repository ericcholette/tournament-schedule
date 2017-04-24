@extends('layout.base')
@section('content')
<table>
    <thead>
        <tr>
            <td>Game</td>
            <td>Day</td>
            <td>Time</td>
            <td>Division</td>
            <td>Away Team</td>
            <td>Game Score</td>
            <td>Home Team</td>
            <td>Rink</td>
        </tr>
    </thead>
    <tbody>
        @foreach($games as $game)
            <tr>
                <td>{{ $game->number }}</td>
                <td>{{ $game->game_date }}</td>
                <td>{{ $game->game_time }}</td>
                <td>{{ $game->division->name }}</td>
                <td>{{ $game->away_team->name }}</td>
                <td>{{ $game->game_score }}</td>
                <td>{{ $game->home_team->name }}</td>
                <td>{{ $game->rink }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
