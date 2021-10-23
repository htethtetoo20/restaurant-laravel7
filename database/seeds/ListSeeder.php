<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('list')->insert([
        [
            'name' => "KFC",
            'email' => 'kfc@gmail.com',
            'address' =>"Hlaing Township",
        ],
        [
            'name' => "SushiBar",
            'email' => 'sushibar@gmail.com',
            'address' => "Kamayut Township",
        ],
        [
            'name' => "GongCha",
            'email' => 'goingcha@gmail.com',
            'address' => "Hledan Township",
        ],
        [
            'name' => "HotPot City",
            'email' => 'hotpotcity@gmail.com',
            'address' => "8 mile Township",
        ]
        ]);

    }
   
}
