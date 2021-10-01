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
        $this->call([
            ContactSeeder::class,
            TestimonialSeeder::class,
            ServiceSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            TitleDescriptionSeeder::class,
            AboutSeeder::class,
            About2Seeder::class,
            FeatureSeeder::class,
            TeamSeeder::class,
            PortfolioSeeder::class
            
        ]
        );
    }
}
