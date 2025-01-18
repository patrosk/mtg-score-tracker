<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['name', 'image'];

    public function games()
    {
        return $this->belongsToMany(Game::class, 'game_player');
    }
}
