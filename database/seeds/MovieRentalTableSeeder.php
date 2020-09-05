<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //generador de datos aleatorios
use App\Movie_rental; 

class MovieRentalTableSeeder extends Seeder
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
            $categ= new Movie_rental;
            $categ->movie_id = $faker->biasedNumberBetween(2,10);
            $categ->rental_id = $faker->biasedNumberBetween(1,10);
            $categ->price= $faker->randomDigitNotNull;
            $categ->observations=$faker->sentence(7,true);
            $categ->save();
        }
    }
}
