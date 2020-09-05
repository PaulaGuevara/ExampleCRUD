<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //generador de datos aleatorios
use App\Category_movie; 

class CategoryMovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();

        for ($i=0; $i < 10; $i++) { 
            $categ= new Category_movie;
            $categ->movie_id = $faker->biasedNumberBetween(2,10);
            $categ->category_id =$faker->biasedNumberBetween(11,21);
            $categ->save();
        }
    }
}
