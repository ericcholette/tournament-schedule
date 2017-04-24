@extends('layout.base')
@section('content')

<form class="form-horizontal" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $game->id }}" />
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
    <div class="col-sm-10">
      <input type="game_date" class="form-control" value="{{ $game->game_date }}" id="game_date" placeholder="Date">
    </div>
    </div>

    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Time</label>
      <div class="col-sm-10">
        <input type="game_time" class="form-control" value="{{ $game->game_time }}" id="game_time" placeholder="Time">
      </div>
    </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Division</label>
    <div class="col-sm-10"><select class="form-control" name="division_id">
        @foreach($divisions as $division)
            <option value="{{ $division->id }}" {{ ($division->id == $game->division_id ? "selected=\"selected\"" : "") }}>{{ $division->name }}</option>
        @endforeach
    </select>
    </div>
    </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Away team</label>
    <div class="col-sm-10"><select class="form-control" name="away_team_id">
        @foreach($teams as $team)
            <option value="{{ $team->id }}" {{ ($team->id == $game->away_team_id ? "selected=\"selected\"" : "") }}>{{ $team->name }}</option>
        @endforeach
    </select>
    </div>
    </div>

    <div class="form-group">
    <label for="away_team_score" class="col-sm-2 control-label">Away team score</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="away_team_score" name="away_team_score" placeholder="Away team score">
    </div>
    </div>

    <div class="form-group">
    <label for="home_team_id" class="col-sm-2 control-label">Home team</label>
    <div class="col-sm-10"><select class="form-control" id="home_team_id" name="home_team_id">
        @foreach($teams as $team)
            <option value="{{ $team->id }}" {{ ($team->id == $game->home_team_id ? "selected=\"selected\"" : "") }}>{{ $team->name }}</option>
        @endforeach
    </select>
    </div>
    </div>

    <div class="form-group">
    <label for="home_team_score" class="col-sm-2 control-label">Home team score</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="home_team_score" name="home_team_score" placeholder="Home team score">
    </div>
    </div>

  <div class="form-group">
    <label for="arena_id" class="col-sm-2 control-label">Rink</label>
    <div class="col-sm-10">
        <select class="form-control" id="arena_id" name="arena_id">
            @foreach($arenas as $arena)
                <option value="{{ $arena->id }}" {{ ($arena->id == $game->arena_id ? "selected=\"selected\"" : "") }}>{{ $arena->name }}</option>
            @endforeach
        </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Update</button>
    </div>
  </div>


</form>
@endsection
