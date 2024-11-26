<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    public function usagers()
    {
        return $this->belongsToMany(Usager::class, 'team_usager');
    }
    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
