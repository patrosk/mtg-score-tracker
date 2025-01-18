<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TournamentController;

// View routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/scoreboard', function () {
    return view('scoreboard');
});

// Player routes
Route::get('/players', function () {
    return view('players', ['players' => App\Models\Player::all()]);
});

Route::get('/players/{player}', function (App\Models\Player $player) {
    return view('player', ['player' => $player]);
});

Route::get('/new-player', function () {
    return view('new-player');
});

//Game routes
Route::get('/games', function () {
    return view('games', ['games' => App\Models\Game::all()]);
});

Route::get('/new-game', function () {
    return view('new-game');
});

// Tournament routes
Route::get('/tournaments', function () {
    return view('tournaments', ['tournaments' => App\Models\Tournament::all()]);
});

Route::get('/tournaments/{tournament}', function (App\Models\Tournament $tournament) {
    return view('tournament', ['tournament' => $tournament]);
});

Route::get('/new-tournament', function () {
    return view('new-tournament', ['players' => App\Models\Player::all()]);
});

// Post routes
Route::post('/add-new-player', [PlayerController::class, 'addNewPlayer']);
Route::post('/add-new-game', [GameController::class, 'addNewGame']);
Route::post('/add-new-tournament', [TournamentController::class, 'addNewTournament']);
