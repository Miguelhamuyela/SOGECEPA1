<?php

namespace Database\Factories;

use App\Models\Angosat;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AngosatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Angosat::class;

    public function definition()
    {
        return [
            'body' => '

            <h4>O projecto</h4>
            <p class="my-3">É um satélite de comunicações para fornecer serviços de telecomunicações.
               O desenho e construção começou em Dezembro de 2019 em que a empresa ISS Reshtnev
                tem o papel de constructor principal.</p>

                <div class="row my-3">
                    <div class="col">

                        <img src="/site/assets/upload/angosat-img-open.png" alt="" class="img-fluid">

                    </div>

                    <div class="col">
                        <img src="/site/assets/upload/angosat-img-closed.png" alt="" class="img-fluid">
                    </div>
                </div>

                <p>
                    Foi desenhado e construído para cobrir todo o Continente Africano e parte significativa do Sul da Europa, na Banda-C,
                     e cobertura quase total da parte sul de África na Banda-Ku. A Banda-Ka servirá somente para a Gateway que estará em Luanda.

                     <br>
                     <br>

                     Durante cerca de 30 meses foram construídos e testados os mais diversos equipamentos que envolveu a fase de construção dos equipamentos,
                    a estrutura da plataforma e da carga útil.A posterior, o ANGOSAT-2 passou com sucesso para a fase de montagem, integração e testes.

                    <br>
                    <br>

                    Foi lançado com sucesso, no dia 12 de Outubro, no Cosmódromo de Baikonur, Cazaquistão, às 20 horas locais, 16 horas em Angola,
                     e encontra-se em órbita, na posição 23E.Actualmente, todos os testes foram concluídos com sucesso e verificados todos os parâmetros
                      telemétricos do ANGOSAT-2.

                      <br><br>

                      De ressaltar que o ANGOSAT-2 é um satélite HTS (Altas Taxas de Transmissão, da sigla em inglês) projectado para fornecer serviços de
                      Internet de banda larga. A sua cobertura nas diferentes bandas estão descritas nas figuras abaixo:
                </p>

                <div class="row my-3">
                    <div class="col">

                        <img src="/site/assets/upload/banda-c.png" alt="" class="img-fluid">

                    </div>

                    <div class="col">
                        <img src="/site/assets/upload/banda-ku.png" alt="" class="img-fluid">
                    </div>
                </div>

                <p>
                    <h5>Benefícios</h5>

                    <ol style="list-style-type: disc;">
                        <li>Mais uma fonte de geração de receitas, tendo em vista que o ANGOSAT-2
                            cobre todo o Continente Africano e parte significativa do
                             Sul da Europa, na Banda-C, e cobertura quase total da parte sul de África na Banda-Ku;</li>

                             <li>
                                Diminuição da exclusão digital de Angola e do continente africano;
                             </li>

                             <li>
                                Expansão dos serviços de telecomunicações às zonas mais recônditas do país a preços competitivos;
                             </li>

                             <li>
                                Possibilidade de maior desenvolvimento da telemedicina à nível nacional;
                             </li>

                             <li>
                                Criação de novas oportunidades de emprego nas áreas ligadas à tecnologia espacial, como exemplo, manutenção e instalação de antenas VSAT.
                             </li>
                    </ol>
                </p>

                <br>


                <p>
                    <h5>Capacidades do ANGOSAT-2</h5>


                    O ANGOSAT-2 é um satélite de comunicações que foi lançado a 12 de outubro de 2022 e encontra-se na posição orbital 23E para disponibilizar capacidade
                    espacial disponível nos transponders na banda C em megahertzs (MHz) e Ku em megabits por segundo (Mbps).

                    <br>
                    <br>

                    Em Novembro de 2022, os testes em órbita foram finalizados com sucesso. Em Janeiro de 2023 foi concluído com sucesso o teste dos serviços de telecomunicações
                     com destaque às províncias de Cabinda, Uíge, Luanda, Cuando Cubango, Moxico, Huila e Lunda Sul.

                     <br>
                     <br>

                     A capacidade comercial se resume em 6 transponderes na banda C que cobrem toda África e parte do sul da Europa e 24 feixes na banda Ku que cobrem a região
                    austral e parcialmente o centro do continente Africano.

                    <br>
                    <br>

                    Devido às características acima descritas o ANGOSAT-2 é considerado um satélite de altas taxas de transmissão, ou seja, garante maior largura de banda
                     para o serviço de dados com destaque à internet.

                     <br>
                     <br>

                     O GGPEN (Gabinete de Gestão do Programa Espacial Nacional) opera o satélite ANGOSAT-2, a partir do MCC (Centro de Controlo e Missão de Satélites)
                      e é também responsável pela comercialização a grosso das capacidades do satélite para o mercado nacional e internacional segundo o despacho
                       presidencial nº 11/23 de 23 de janeiro.


                </p>



                <div class="row my-3">
                    <div class="col-md-12 col-12">

                        <img src="/site/assets/upload/img-angosat-3.png" alt="" class="img-fluid">

                    </div>
                </div>

                <p>

                    <h5>Disponibilidade</h5>

                        <div class="row">

                            <div class="col">
                                <h5 class="my-3">BANDA C</h5>
                                <ol style="list-style-type: disc;">
                                    <li>33% em Exploração;</li>
                                    <li>47% reservado;</li>
                                    <li>20 % disponível.</li>
                                </ol>

                            </div>


                            <div class="col">
                                <h5 class="my-3">BANDA KU</h5>

                                <ol style="list-style-type: disc;">

                                    <li>Mais de 2000 Mbps reservado.</li>
                                </ol>


                            </div>
                        </div>
                </p>



                <p>

                    <h5>Contactos</h5>


                    <b>E-mail:</b> comercial.angosat@ggpen.gov.ao
                    <br>
                    <b>Tel.:</b>  (+244) 949 867 377

                    <br>


                </p>

            '
        ];
    }
}
