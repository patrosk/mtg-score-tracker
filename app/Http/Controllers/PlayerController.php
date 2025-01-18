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
            Player::create(['name' => $request->name, 'image' => $imagePath]);
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Player added successfully!');
    }
}
