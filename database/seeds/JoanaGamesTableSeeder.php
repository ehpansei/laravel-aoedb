<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class JoanaGamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1 - 9
        DB::table('games')->insert([
            'user_id' => 2,
            'enemy_elo' => 1300,
            'difficulty' => 1,
            'result' => 1,
            'enemy_name' => 'PlayerOne',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        //4 - 10
        DB::table('games')->insert([
            'user_id' => 2,
            'enemy_elo' => 300,
            'difficulty' => 3,
            'result' => 2,
            'enemy_name' => 'PlayerFour',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        //1 - 11
        DB::table('games')->insert([
            'user_id' => 2,
            'enemy_elo' => 1704,
            'difficulty' => 4,
            'result' => 1,
            'enemy_name' => 'PlayerOne',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        //5 - 12
        DB::table('games')->insert([
            'user_id' => 2,
            'enemy_elo' => 130,
            'difficulty' => 1,
            'result' => 1,
            'enemy_name' => 'PlayerFive',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        //2 - 13
        DB::table('games')->insert([
            'user_id' => 2,
            'enemy_elo' => 900,
            'difficulty' => 5,
            'result' => 2,
            'enemy_name' => 'PlayerTwo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        //1 - 14
        DB::table('games')->insert([
            'user_id' => 2,
            'enemy_elo' => 1300,
            'difficulty' => 1,
            'result' => 1,
            'enemy_name' => 'PlayerOne',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        //3 - 15
        DB::table('games')->insert([
            'user_id' => 2,
            'enemy_elo' => 750,
            'difficulty' => 2,
            'result' => 1,
            'enemy_name' => 'PlayerThree',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        //1 - 16
        DB::table('games')->insert([
            'user_id' => 2,
            'enemy_elo' => 300,
            'difficulty' => 1,
            'result' => 2,
            'enemy_name' => 'PlayerOne',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
