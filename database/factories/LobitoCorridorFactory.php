<?php

namespace Database\Factories;

use App\Models\LobitoCorridor;
use Illuminate\Database\Eloquent\Factories\Factory;

class LobitoCorridorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = LobitoCorridor::class;

    public function definition()
    {
        return [

            'body' => '

              O Corredor do Lobito, também conhecido como Caminho-de-Ferro de Benguela (CFB),
              representa uma rota de transporte importante que conecta o interior africano ao
              Oceano Atlântico, incluindo nações sem acesso ao mar como a Zâmbia e a RDC.

              <br/> <br/>

              Não é apenas uma rota comercial, mas também uma porta vital que abre esses países para
              os mercados globais, facilitando a exportação de minerais, produtos agrícolas e bens
              manufacturados.

              <br/><br/>

              As vantagens de utilizar vias férreas, como o Caminho-de-Ferro de Benguela, para o transporte
              de minerais são muitas. As ferrovias são mais eficientes para mover grandes volumes em longas
              distâncias em comparação com camiões.

              <br/><br/>

              Elas oferecem uma maior capacidade de carga por viagem, são mais eficientes em termos de consumo de
              combustível por tonelada de carga e têm um menor risco de acidentes e avarias, reduzindo assim a
              probabilidade de atrasos e danos à carga.

              <br/><br/>

              Além disso, os comboios são um meio de transporte mais amigo do ambiente, emitindo menos emissões de
              carbono por tonelada de carga. As ferrovias também desempenham um papel significativo na redução do
              congestionamento rodoviário, levando a tempos de entrega mais rápidos e confiáveis.

              <br/> <br/>


            '
        ];
    }
}
