<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/scoreboard', function () {
    return view('scoreboard');
});

Route::get('/new-game', function () {
    return view('new-game');
});

Route::get('/players', function () {
    return view('players');
});

Route::get('/new-player', function () {
    return view('new-player');
});
