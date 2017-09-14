<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    $games =App\Game::all();
    return view('welcome', compact('games'));
});

Route::get('/games', function() {
    $games =App\Game::all();

    return view('games.index', compact('games'));
});

Route::get('/games/{game}', function($id) {
    $game = App\Game::find($id);
    return view('games.show', compact('game'));
});


Route::get('about', function() {
    return view('pages.about');
});