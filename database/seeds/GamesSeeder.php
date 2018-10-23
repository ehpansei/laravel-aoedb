<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table('games')->insert([
            'user_id' => 1,
            'enemy_elo' => 1200,
            'difficulty' => 2,
            'result' => 1,
            'player_id' => 1,
            'comment' => 'Game 1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // 2
        DB::table('games')->insert([
            'user_id' => 1,
            'enemy_elo' => 1100,
            'difficulty' => 2,
            'result' => 2,
            'player_id' => 2,
            'comment' => 'Game 1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // 3
        DB::table('games')->insert([
            'user_id' => 1,
            'enemy_elo' => 1000,
            'difficulty' => 2,
            'result' => 1,
            'player_id' => 3,
            'comment' => 'Game 1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // 4
        DB::table('games')->insert([
            'user_id' => 1,
            'enemy_elo' => 1250,
            'difficulty' => 2,
            'result' => 2,
            'player_id' => 1,
            'comment' => 'Game 1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
