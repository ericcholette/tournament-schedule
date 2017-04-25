@extends('layout.base')
@section('content')
<table class="table table-striped table-hover">
    <thead>
        <tr>
            @if(isset($edit) && $edit)
            <th>&nbsp;</th>
            @endif
            <th class="hidden-md hidden-lg">Date</th>
            <th class="hidden-xs hidden-sm">Day</th>
            <th class="hidden-xs hidden-sm">Time</th>
            <th class="hidden-md hidden-lg">Div / Rink</th>
            <th class="hidden-xs hidden-sm">Division</th>
            <th class="right">Away Team</th>
            <th class="center">Game Score</th>
            <th>Home Team</th>
            <th class="hidden-xs hidden-sm">Rink</th>
        </tr>
    </thead>
    <tbody>
    <?php $currentDay = null; ?>
        @foreach($games as $game)
            @if($currentDay == null || $currentDay != $game->date())
                <tr>
                    <td class="center" style="font-weight: bold; text-transform: uppercase;" colspan="{{ (isset($edit) && $edit) ? 10 : 9 }}">{{ $game->date() }}</td>
                </tr>
            @endif
            <?php $currentDay = $game->date(); ?>
            <tr>
                @if(isset($edit) && $edit)
                <td><a href="/game/{{ $game->id }}/edit/score"><span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                @endif
                <td class="hidden-md hidden-lg">{{ $game->small_date() }} {{ $game->time() }}</td>
                <td class="hidden-xs hidden-sm">{{ $game->date() }}</td>
                <td class="hidden-xs hidden-sm">{{ $game->time() }}</td>
                <td class="hidden-md hidden-lg">{{ $game->division->name}}<br />{{ $game->arena->name }}</td>
                <td class="hidden-xs hidden-sm">{{ $game->division->name}}</td>
                <td class="right">{{ $game->away_team->name }}</td>
                <td class="center">{{ $game->getScore() }}</td>
                <td>{{ $game->home_team->name }}</td>
                <td class="hidden-xs hidden-sm">{{ $game->arena->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
