<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            [
                'url'=>'img/portfolio/portfolio-1.jpg',
                'title'=>'App1',
                'description'=>'App'
            ],
            [
                'url'=>'img/portfolio/portfolio-2.jpg',
                'title'=>'Web3',
                'description'=>'Web'
            ],
            [
                'url'=>'img/portfolio/portfolio-3.jpg',
                'title'=>'App2',
                'description'=>'App'
            ],
            [
                'url'=>'img/portfolio/portfolio-4.jpg',
                'title'=>'Card2',
                'description'=>'Card'
            ],
            [
                'url'=>'img/portfolio/portfolio-5.jpg',
                'title'=>'Web2',
                'description'=>'Web'
            ],
            [
                'url'=>'img/portfolio/portfolio-6.jpg',
                'title'=>'App3',
                'description'=>'App'
            ],
            [
                'url'=>'img/portfolio/portfolio-7.jpg',
                'title'=>'Card1',
                'description'=>'Card'
            ],
            [
                'url'=>'img/portfolio/portfolio-8.jpg',
                'title'=>'Card3',
                'description'=>'Card'
            ],
            [
                'url'=>'img/portfolio/portfolio-9.jpg',
                'title'=>'Web3',
                'description'=>'Web'
            ]
        ]);
    }
}
