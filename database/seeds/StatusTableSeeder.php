<?php

use Illuminate\Database\Seeder;
use App\Models\Statuses;
use Faker\Factory as Faker; //generador de datos aleatorios

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = array(
            ['status' => 'Activo'],
            ['status' => 'Inactivo']
        );
        $faker= Faker::create();
        foreach ($statuses as $value) {
            $status = new Statuses;
            $status->name = $value['status'];
            $status->type_status_id = $faker->randomDigitNot(5);
            $status->save();
        }
    }
}
