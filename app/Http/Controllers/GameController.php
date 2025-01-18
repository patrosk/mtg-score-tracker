<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Tournament;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function addNewGame(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'tournament_id' => 'required|exists:tournaments,id',
        ]);

        $game = Game::create(['name' => $request->name, 'tournament_id' => $request->tournament_id]);

        // Attach players to the game
        $tournament = Tournament::find($request->tournament);
        $players = $tournament->players;
        $game->players()->attach($players);

        // Redirect back with a success message
        return redirect()->route('games.show', ['game' => $game->id])->with('success', 'Game added successfully!');
    }
}
