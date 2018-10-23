<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FriendUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // castro -> joana
        DB::table('friend_user')->insert([
            'friend_id' => 1,
            'user_id' => 2,
        ]);
        // joana -> castro
        DB::table('friend_user')->insert([
            'friend_id' => 2,
            'user_id' => 1,
        ]);

        //joana->andrew
        DB::table('friend_user')->insert([
            'friend_id' => 3,
            'user_id' => 2,
        ]);
        //andrew->joana
        DB::table('friend_user')->insert([
            'friend_id' => 2,
            'user_id' => 3,
        ]);
    }
}
