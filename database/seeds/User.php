<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'bellagio_manager',
            'email' => 'bellagio_us@gmail.com',
            'password' => bcrypt('secret')
        ]);
    }
}
