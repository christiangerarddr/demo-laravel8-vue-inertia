<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'demo user',
                'email' => 'demo@demo.com.au',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ymi6S4Z2Ikb9UV7NKllQ7Owz1T0y8ZZl85AIuiqQ.1Pg3QXvq.USK',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2020-10-27 19:01:41',
                'updated_at' => '2020-10-27 19:01:41',
            ),
        ));

    }
}
