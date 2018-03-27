<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Hotel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            'name' => 'Belaggio',
            'description' => 'This should be a really long description',
            'street' => 'Sesamestreet 123',
            'postcode' => '55555',
            'city' => 'New York City',
            'country' => 'USA',
            'hours' => '24/7',
            'user' => 1
        ]);
    }
}
