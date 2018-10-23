<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CastroGamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1 - 1
        DB::table('games')->insert([
            'user_id' => 1,
            'enemy_elo' => 1300,
            'difficulty' => 1,
            'result' => 1,
            'enemy_name' => 'PlayerOne',
            'created_at' => Carbon::now()->subMonth(1),
            'updated_at' => Carbon::now()->subMonth(1),
        ]);
        //1 - 2
        DB::table('games')->insert([
            'user_id' => 1,
            'enemy_elo' => 300,
            'difficulty' => 3,
            'result' => 2,
            'enemy_name' => 'PlayerOne',
            'created_at' => Carbon::now()->subMonth(2),
            'updated_at' => Carbon::now()->subMonth(2),
        ]);
        //1 - 3
        DB::table('games')->insert([
            'user_id' => 1,
            'enemy_elo' => 1704,
            'difficulty' => 4,
            'result' => 1,
            'enemy_name' => 'PlayerOne',
            'created_at' => Carbon::now()->subMonth(2),
            'updated_at' => Carbon::now()->subMonth(2),
        ]);
        //2 - 4
        DB::table('games')->insert([
            'user_id' => 1,
            'enemy_elo' => 130,
            'difficulty' => 1,
            'result' => 1,
            'enemy_name' => 'PlayerTwo',
            'created_at' => Carbon::now()->subMonth(3),
            'updated_at' => Carbon::now()->subMonth(3),
        ]);
        //2 - 5
        DB::table('games')->insert([
            'user_id' => 1,
            'enemy_elo' => 900,
            'difficulty' => 5,
            'result' => 2,
            'enemy_name' => 'PlayerTwo',
            'created_at' => Carbon::now()->subMonth(1),
            'updated_at' => Carbon::now()->subMonth(1),
        ]);
        //1 - 6
        DB::table('games')->insert([
            'user_id' => 1,
            'enemy_elo' => 1300,
            'difficulty' => 1,
            'result' => 1,
            'enemy_name' => 'PlayerOne',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        //3 - 7
        DB::table('games')->insert([
            'user_id' => 1,
            'enemy_elo' => 750,
            'difficulty' => 2,
            'result' => 1,
            'enemy_name' => 'PlayerThree',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        //1 - 8
        DB::table('games')->insert([
            'user_id' => 1,
            'enemy_elo' => 300,
            'difficulty' => 1,
            'result' => 2,
            'enemy_name' => 'PlayerOne',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
