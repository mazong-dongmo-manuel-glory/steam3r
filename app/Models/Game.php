<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    protected $fillable = ['name','count','link','version','category','description','created_at','updated_at'];
    public function medias()
    {
        return $this->hasMany(Media::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
