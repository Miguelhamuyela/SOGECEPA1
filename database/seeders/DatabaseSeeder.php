<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Agt::factory(1)->create();
        \App\Models\EnergieAndWater::factory(1)->create();
        \App\Models\DamCaculoCabaca::factory(1)->create();
        \App\Models\BiopioAndBaiaFartPhotovoltaicPlants::factory(1)->create();
        \App\Models\DamLauca::factory(1)->create();
        \App\Models\LobitoCorridor::factory(1)->create();
        \App\Models\Angosat::factory(1)->create();
        \App\Models\Tourism::factory(1)->create();
        \App\Models\CloudGovern::factory(1)->create();
        \App\Models\Visa::factory(1)->create();
        \App\Models\Kwenda::factory(1)->create();
        \App\Models\MadeInAngola::factory(1)->create();
        \App\Models\LegislationText::factory(1)->create();
        \App\Models\User::factory(1)->create();
        \App\Models\Configuration::factory(1)->create();
    }
}
