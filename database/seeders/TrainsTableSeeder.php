<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
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
        for ($i = 0; $i < 10; $i++) {
        $new_Train = new Train();
        $new_Train->azienda =$faker->company(); 
        $new_Train->stazione_di_partenza=$faker->catchPhrase();
        $new_Train->stazione_di_arrivo=$faker->catchPhrase();
        $new_Train->orario_di_partenza=$faker->time();
        $new_Train->orario_di_arrivo=$faker->time();
        $new_Train->codice_treno=$faker->numerify("AS###");
        $new_Train->numero_carrozze=$faker->randomElement([1,2,3,4,5,6,7,8]);
        $new_Train->prezzo_biglietto=$faker->randomFloat(2,5,200);
        $new_Train->in_orario=1;
        $new_Train->cancellato=0;
        $new_Train->tipo_di_treno=$faker->randomElement(['italo','trenitalia','freccia_rossa']);
        $new_Train->disponibilità_posti=$faker->numberBetween(0,250);
        $new_Train->save();
    }
}}
