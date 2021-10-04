<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                "url"=>"team/team-1.jpg",
                "name"=>"Walter White",
                "job"=>"Chief Executive Officer"
            ],
            [
                "url"=>"team/team-2.jpg",
                "name"=>"Walter White",
                "job"=>"Chief Executive Officer"
            ],
            [
                "url"=>"team/team-3.jpg",
                "name"=>"Walter White",
                "job"=>"Chief Executive Officer"
            ],
            [
                "url"=>"team/team-4.jpg",
                "name"=>"Walter White",
                "job"=>"Chief Executive Officer"
            ],
            [
                "url"=>"team/team-1.jpg",
                "name"=>"Walter White",
                "job"=>"Chief Executive Officer"
            ],
            [
                "url"=>"team/team-2.jpg",
                "name"=>"Walter White",
                "job"=>"Chief Executive Officer"
            ],
            [
                "url"=>"team/team-3.jpg",
                "name"=>"Walter White",
                "job"=>"Chief Executive Officer"
            ],
            [
                "url"=>"team/team-4.jpg",
                "name"=>"Walter White",
                "job"=>"Chief Executive Officer"
            ]
        ]);
    }
}
