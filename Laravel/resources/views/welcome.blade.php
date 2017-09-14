@extends('layouts.default')
@section('content')

    <h1>Welcome!</h1>
    <p>Here's an overview of all the games you can review.</p>

    <ul>
        @foreach($games as $game)
            <li>
                {{ $game->name }}
                <a href="/games/{{ $game->id }}">
                    <img src="{{ asset( $game->image ) }}" height="200px"/>
                </a>
            </li>
        @endforeach
    </ul>

@stop
