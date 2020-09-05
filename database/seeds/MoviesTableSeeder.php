<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //generador de datos aleatorios
use App\Models\Movie; 
 
class MoviesTableSeeder extends Seeder
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
            $categ= new Movie;
            $categ->name = $faker->name;
            $categ->description=$faker->sentence(7,true);
            $categ->user_id=$faker->randomDigitNot(5);
            $categ->status_id =1;
            $categ->save();
        }
    }
}
