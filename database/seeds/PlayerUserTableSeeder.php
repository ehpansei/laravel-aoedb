<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PlayerUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //castro players
        DB::table('player_user')->insert([
            'player_id' => 1,
            'user_id' => 1,
        ]);
        DB::table('player_user')->insert([
            'player_id' => 2,
            'user_id' => 1,
        ]);
        DB::table('player_user')->insert([
            'player_id' => 3,
            'user_id' => 1,
        ]);
        //joana players
        DB::table('player_user')->insert([
            'player_id' => 1,
            'user_id' => 2,
        ]);
        DB::table('player_user')->insert([
            'player_id' => 2,
            'user_id' => 2,
        ]);
        DB::table('player_user')->insert([
            'player_id' => 3,
            'user_id' => 2,
        ]);
        DB::table('player_user')->insert([
            'player_id' => 4,
            'user_id' => 2,
        ]);
        DB::table('player_user')->insert([
            'player_id' => 5,
            'user_id' => 2,
        ]);
        //andrew players
        DB::table('player_user')->insert([
            'player_id' => 1,
            'user_id' => 3,
        ]);
        DB::table('player_user')->insert([
            'player_id' => 2,
            'user_id' => 3,
        ]);
        DB::table('player_user')->insert([
            'player_id' => 3,
            'user_id' => 3,
        ]);
    }
}
