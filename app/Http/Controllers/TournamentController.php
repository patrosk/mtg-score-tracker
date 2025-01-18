<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function addNewTournament(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'players' => 'required|array',
            'players.*' => 'exists:players,id',
        ]);

        // Save tournament data to the database (example)
        $tournament = Tournament::create(['name' => $request->name, 'player_count' => count($request->players)]);

        // Attach players to the tournament
        $tournament->players()->attach($request->players);

        // Redirect back with a success message
        return redirect()->route('tournaments.show', ['tournament' => $tournament->id])->with('success', 'Tournament added successfully!');
    }
}
