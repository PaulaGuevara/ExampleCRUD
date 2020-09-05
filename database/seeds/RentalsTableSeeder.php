<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //generador de datos aleatorios
use App\Models\Rentals;
class RentalsTableSeeder extends Seeder
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
            $categ= new Rentals;
            $categ->start_date = $faker->date;
            $categ->end_date = $faker->date;
            $categ->total= $faker->randomDigitNotNull;
            $categ->user_id=$faker->randomDigitNot(5);
            $categ->status_id =1;
            $categ->save();
        }
    }
}
