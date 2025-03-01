<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = ['name', 'player_count'];

    public function games()
    {
        return $this->hasMany(Game::class);
    }

    public function players()
    {
        return $this->belongsToMany(Player::class, 'player_tournament');
    }
}
