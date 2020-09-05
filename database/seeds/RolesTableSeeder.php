<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //generador de datos aleatorios
use App\Models\Roles;

class RolesTableSeeder extends Seeder
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
            $rol= new Roles;
            $rol->name = $faker->word;
            $rol->status_id =1;
            $rol->save();
        }
    }
}
