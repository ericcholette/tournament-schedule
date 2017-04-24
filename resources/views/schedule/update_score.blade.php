@extends('layout.base')
@section('content')

<form class="form-horizontal" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $game->id }}" />
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Game date</label>
    <div class="col-sm-10">
      {{ $game->game_date }} {{ $game->game_time }}
    </div>
    </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Division</label>
    <div class="col-sm-10">{{ $game->division->name }}
    </div>
    </div>

    <div class="form-group">
    <label for="away_team_score" class="col-sm-2 control-label">{{ $game->away_team->name }}</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="away_team_score" value="{{ $game->away_team_score }}" name="away_team_score" placeholder="Away team score">
    </div>
    </div>
    <div class="form-group">
    <label for="home_team_score" class="col-sm-2 control-label">{{ $game->home_team->name }}</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="home_team_score" value="{{ $game->home_team_score }}" name="home_team_score" placeholder="Home team score">
    </div>
    </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Update</button>
    </div>
  </div>


</form>
@endsection
