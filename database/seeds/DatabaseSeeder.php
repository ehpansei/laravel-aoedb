<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

//        factory(App\User::class, 50)->create()->each(function ($u) {
//            $u->enemies()->save(factory(App\Player::class)->make());
//
//        });
//        factory(App\User::class,50)->create()->each(function($u) {
//            $u->enemies()->save(factory(App\Player::class)->create()->each(function($p) {
//                $p->games()->save(factory(App\Game::class)->make());
//            }));
//        });
        $this->call([
            UsersTableSeeder::class,

            PlayersTableSeeder::class,

            GamesSeeder::class,

            PlayerUserTableSeeder::class,

//            CastroGamesTableSeeder::class,
//            JoanaGamesTableSeeder::class,
//            AndrewGamesTableSeeder::class,

            GamePlayerTableSeeder::class,

//            FriendUserTableSeeder::class,


        ]);

    }
}
