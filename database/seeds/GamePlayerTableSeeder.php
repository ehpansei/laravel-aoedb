<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GamePlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //castro
        DB::table('game_player')->insert([
            'game_id' => 1,
            'player_id' => 1,
        ]);
        DB::table('game_player')->insert([
            'game_id' => 2,
            'player_id' => 1,
        ]);
        DB::table('game_player')->insert([
            'game_id' => 3,
            'player_id' => 1,
        ]);
        DB::table('game_player')->insert([
            'game_id' => 4,
            'player_id' => 2,
        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 5,
//            'player_id' => 2,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 6,
//            'player_id' => 1,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 7,
//            'player_id' => 3,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 8,
//            'player_id' => 1,
//        ]);
//        //joana
//        DB::table('game_player')->insert([
//            'game_id' => 9,
//            'player_id' => 1,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 10,
//            'player_id' => 4,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 11,
//            'player_id' => 1,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 12,
//            'player_id' => 5,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 13,
//            'player_id' => 2,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 14,
//            'player_id' => 1,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 15,
//            'player_id' => 3,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 16,
//            'player_id' => 1,
//        ]);
//        //andrew
//        DB::table('game_player')->insert([
//            'game_id' => 17,
//            'player_id' => 1,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 18,
//            'player_id' => 1,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 19,
//            'player_id' => 1,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 20,
//            'player_id' => 2,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 21,
//            'player_id' => 2,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 22,
//            'player_id' => 2,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 23,
//            'player_id' => 3,
//        ]);
//        DB::table('game_player')->insert([
//            'game_id' => 24,
//            'player_id' => 1,
//        ]);
    }
}
