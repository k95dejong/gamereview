<!DOCTYPE HTML>
<html lang = "en">
<head>
    <meta charset = "UTF-8" />
    <title>Document</title>
</head>
<body>

<ul>
    <h1>{{ $game->name }}</h1>

    <p> {{ $game->description }}</p>
    <img src="{{ asset( $game->image ) }}" height="200px"/>

</ul>

</body>
</html>
