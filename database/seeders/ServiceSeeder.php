<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
        [
            "icon"=>"bell",
            "title"=>"Basket",
            "text"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi"
        ],
        [
            "icon"=>"file",
            "title"=>"Basket",
            "text"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi"
        ],
        [
            "icon"=>"tachometer",
            "title"=>"Basket",
            "text"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi"
        ],
        [
            "icon"=>"layer",
            "title"=>"Basket",
            "text"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi"
        ]
    ]);
    }
}
