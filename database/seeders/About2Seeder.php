<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class About2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about2s')->insert([
            [
            "icone"=>"receipt",
            "title"=>"Corporis voluptates sit",
            "description"=>"Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip"
            ],
            [
            "icone"=>"receipt",
            "title"=>"Corporis voluptates sit",
            "description"=>"Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip"
            ],
            [
            "icone"=>"receipt",
            "title"=>"Corporis voluptates sit",
            "description"=>"Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip"
            ],
            [
            "icone"=>"receipt",
            "title"=>"Corporis voluptates sit",
            "description"=>"Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip"
            ],
        ]);
    }
}
