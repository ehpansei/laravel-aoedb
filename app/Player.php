<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table='players';

    public function games() {
        return $this->hasMany(Game::class);
    }
}
