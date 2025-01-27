<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function addNewPlayer(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the file upload and save player data
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('player_images', 'public');
            // Save player data to the database (example)
            $player = Player::create(['name' => $request->name, 'image' => $imagePath]);
        }

        // Redirect to the new player's page with a success message
        return redirect()->route('players.show', ['player' => $player->id])->with('success', 'Player added successfully!');
    }

    public function editPlayer(Request $request, Player $player)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the file upload and update player data
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('player_images', 'public');
            $player->update(['name' => $request->name, 'image' => $imagePath]);
        } else {
            $player->update(['name' => $request->name]);
        }

        // Redirect back to the player's page with a success message
        return redirect()->route('players.show', ['player' => $player->id])->with('success', 'Player updated successfully!');
    }
}
