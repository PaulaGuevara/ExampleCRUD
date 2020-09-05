<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //generador de datos aleatorios
use App\Models\Categories;

class CategoriesTableSeeder extends Seeder
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
            $categ= new Categories;
            $categ->name = $faker->word;
            $categ->status_id =1;
            $categ->save();
        }
    }
}
