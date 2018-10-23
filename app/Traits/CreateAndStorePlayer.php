<?php

namespace App\Traits;

use App\Player;
use Illuminate\Support\Facades\Log;

trait CreateAndStorePlayer {
    public function createAndStorePlayer($name) {

        Log::info('createAndStorePlayer');

        //create player entity
        $entity = new Player();
        $entity->name = $name;

        //store player entity
        $entity->save();

        //return entity id
        return $entity->id;
    }
}