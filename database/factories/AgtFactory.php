<?php

namespace Database\Factories;

use App\Models\Agt;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Agt::class;


    public function definition()
    {
        return [
            'body' => '

            <div ="container">
                    Actualmente a ferramenta auxilia o contribuinte no processo de inscrição de imóveis, permitindo:

                    <ul>
                        <li>Localizar o imóvel apartir de imagens de satélite;</li>
                        <li>Georeferenciação automática (coordenadas geográficas) dos prédios urbanos;</li>
                        <li>Cálculo automático da área coberta do imóvel.</li>
                    </ul>

                    <br/>

                    <div ="container">
                    <img class="img-fluid" src="/site/assets/upload/agt.jpeg">
                    </div>

                    <br/> <br/>

                    Nota: para poder fazer um teste deve seguir os seguintes passos:

                    <br/><br/>

                    <ul>
                        <li>1- Se registar usando o NIF ou os seus dados do portal do contribuinte.</li>
                        <li>2- Depois do login feito, selecione inscrever imóvel, prédio urbano, na identificação do declarante selecione na qualidade de proprietário.</li>
                        <li>3- A ferramenta estará disponível na aba localização. Selecione a província, município, comuna ou distrito, e navegue no mapa selecionando o polígono vermelho que representa a sua residência.</li>
                    </ul>

                    </div>
            '
        ];
    }
}
