<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
