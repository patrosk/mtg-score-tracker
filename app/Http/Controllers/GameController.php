<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function addNewGame(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'tournament_id' => 'required|exists:tournaments,id',
            'players' => 'required|array',
            'players.*' => 'exists:players,id',
        ]);

        // Save game data to the database (example)
        $game = Game::create(['name' => $request->name, 'tournament_id' => $request->tournament_id]);

        // Attach players to the game
        $game->players()->attach($request->players);

        // Redirect back with a success message
        return redirect()->route('games/{game}', ['game' => $game->id])->with('success', 'Game added successfully!');
    }
}
