<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table('players')->insert([
            'name' => 'PlayerOne',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // 2
        DB::table('players')->insert([
            'name' => 'PlayerTwo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // 3
        DB::table('players')->insert([
            'name' => 'PlayerThree',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // 4
        DB::table('players')->insert([
            'name' => 'PlayerFour',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // 5
        DB::table('players')->insert([
            'name' => 'PlayerFive',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
