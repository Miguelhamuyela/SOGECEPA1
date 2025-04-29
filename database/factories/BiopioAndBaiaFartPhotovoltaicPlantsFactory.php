<?php

namespace Database\Factories;

use App\Models\BiopioAndBaiaFartPhotovoltaicPlants;
use Illuminate\Database\Eloquent\Factories\Factory;

class BiopioAndBaiaFartPhotovoltaicPlantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = BiopioAndBaiaFartPhotovoltaicPlants::class;

    public function definition()
    {
        return [

            'body' => '

            No dia 22 de Julho de 2022, foram inauguradas pelo Presidente da república, João Manuel Gonçalves Lourenço,
            as Centrais fotovoltaicas da Baía Farta com (96MWdc) e do Biópio (188 MW dc) respetivamente localizadas nos
            municípios com os mesmos nomes, na Província de Benguela.

            <br/>
            <br/>

            A Central Solar do Biópio encontra-se em operação com as respectivas potências, com capacidade composta por
            188,9 MWp com uma estrutura composta por 509, 040 painéis solares, enquanto a Central da Baia Farta possui
            uma capacidade de 96,7Mwp com 261 mil painéis solares. A construção das duas Centrais Solares Fotovoltaicas
            estão situadas na província de Benguela, fazem parte do projecto de executivo Angolano representado pelo
            Ministério da Energia e Águas.


            '
        ];
    }
}
