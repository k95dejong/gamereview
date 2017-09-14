<!DOCTYPE HTML>
<html lang = "en">
<head>
    <meta charset = "UTF-8" />
    <title>Document</title>
</head>
<body>

<h1>Game Overview</h1>

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

</body>
</html>
