@extends('layouts.default')
@section('content')

    <ul>
        <h1>{{ $game->name }}</h1>
        <p> {{ $game->description }}</p>
        <img src="{{ asset( $game->image ) }}" height="200px"/>
    </ul>

@stop
