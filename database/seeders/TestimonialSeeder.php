<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                "name"=>"ArnaudTsamere",
                "job"=>"Freelancer",
                "text"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
                "photo"=>"img/testimonials/testimonials-1.jpg"
            ],
            [
                "name"=>"ArnaudTsamere",
                "job"=>"Boulanger",
                "text"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
                "photo"=>"img/testimonials/testimonials-2.jpg"
            ],
            [
                "name"=>"ArnaudTsamere",
                "job"=>"Boulet",
                "text"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
                "photo"=>"img/testimonials/testimonials-3.jpg"
            ],
            [
                "name"=>"ArnaudTsamere",
                "job"=>"Boucher",
                "text"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
                "photo"=>"img/testimonials/testimonials-4.jpg"
            ],
        ]);
    }
}
