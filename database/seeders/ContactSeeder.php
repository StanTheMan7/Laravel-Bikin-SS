<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            "address"=>"Rue de lalalalalal 58, 1020, Laeken",
            "mail1"=>"lolololol@test.com",
            "mail2"=>"lellelell@test.com",
            "num1"=>"111322138218",
            "num2"=>"052344234234",
        ]);
    }
}
