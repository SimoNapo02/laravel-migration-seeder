<?php

use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        $aziende = ['trenitalia','trenord','italo'];
        //50 treni con data generica
        for($i = 0; $i< 50 ; $i++){

            $newTrain = new Train();
            $newTrain->azienda = $aziende[rand(0, count($aziende) - 1)];
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->giorno_di_partenza = $faker->date();
            $newTrain->codice_treno = $faker->regexify('[A-Z]{2}[0-4]{3}');
            $newTrain->numero_carrozze = rand(1,20);
            $newTrain->in_orario = rand(0,1);
            $newTrain->cancellato = rand(0,1);
            $newTrain->save();
        }
        //10 treni odierni
        for($i = 0; $i< 10 ; $i++){

            $newTrain = new Train();
            $newTrain->azienda = $aziende[rand(0, count($aziende) - 1)];
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->giorno_di_partenza = date("Y-m-d");
            $newTrain->codice_treno = $faker->regexify('[A-Z]{2}[0-4]{3}');
            $newTrain->numero_carrozze = rand(1,20);
            $newTrain->in_orario = rand(0,1);
            $newTrain->cancellato = rand(0,1);
            $newTrain->save();
        }

    }
}