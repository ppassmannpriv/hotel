<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Room extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'hotel' => 1,
            'name' => 'Presidential Suite',
            'description' => 'Again - some long promotional text',
            'short_description' => 'Prez suite boi - max. 140 chars just like a tweet',
            'wifi' => true,
            'smoking' => true,
            'guests' => 5,
            'singleBeds' => 3,
            'twinBeds' => 1,
            'tv' => true,
            'minibar' => true,
            'shower' => true,
            'bathtub' => true,
            'bathrooms' => 2,
            'breakfast' => true,
            'conciergeServices' => true
        ]);

        DB::table('rooms')->insert([
            'hotel' => 1,
            'name' => 'Honeymoon Suite',
            'description' => 'Again - some long promotional text',
            'short_description' => 'Bunga bunga',
            'wifi' => true,
            'smoking' => true,
            'guests' => 2,
            'singleBeds' => 0,
            'twinBeds' => 1,
            'tv' => true,
            'minibar' => true,
            'shower' => true,
            'bathtub' => true,
            'bathrooms' => 1,
            'breakfast' => true,
            'conciergeServices' => true
        ]);

        DB::table('rooms')->insert([
            'hotel' => 1,
            'name' => 'Double room',
            'description' => 'Again - some long promotional text',
            'short_description' => 'regular ass room boi',
            'wifi' => true,
            'smoking' => false,
            'guests' => 2,
            'singleBeds' => 2,
            'twinBeds' => 0,
            'tv' => true,
            'minibar' => false,
            'shower' => true,
            'bathtub' => false,
            'bathrooms' => 1,
            'breakfast' => true,
            'conciergeServices' => false
        ]);
    }
}
