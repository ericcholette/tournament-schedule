@extends('layout.base')
@section('content')
    <form method="POST" action="/game/create">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $game->id }}" />
        <table>
            <tr>
                <td>Division</td>
                <td><select name="division_id">
                    @foreach($divisions as $division)
                        <option value="{{ $division->id }}" {{ ($team->division_id == $division->id ? "selected=\"selected\"" : "") }}>{{ $division->name }}</option>
                    @endforeach
                </select></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="{{ $team->name }}" />
            </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="Save" />
                </tr>
        </table>
    </form>
@endsection
