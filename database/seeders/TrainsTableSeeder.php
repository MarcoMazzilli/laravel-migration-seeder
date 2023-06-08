<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0 ; $i < 20 ; $i++ ) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->word();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->isbn10();
            $newTrain->numero_carrozze = rand(1,30);
            $newTrain->in_orario = rand(0,1);
            $newTrain->cancellato = rand(0,1);

            $newTrain->save();
        }
    }
}
