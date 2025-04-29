<?php

namespace Database\Factories;

use App\Models\Tourism;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TourismFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model= Tourism::class;
    public function definition()
    {
        return [
            'body' => '

            <h5 class="text-dark">Conheça as As 7 Maravilhas de Angola, escolhidas numa votação popular e muitas outras belezas de Angola.</h5>



            <div class="col-md-12 my-4">
            <h6>1 - Fenda da Tundavala, Huíla</h6>

            <p>A Fenda da Tundavala é situado na Serra da Leba, a 18 km do Lubango, na província da Huíla, em Angola.
                 A Fenda da Tundavala situa-se a pouco mais de 2.000 metros de altitude, rodeada de imponentes falésias
                  sobre a cordilheira da Chela.
                </p>

                <img src="/site/assets/upload/tundavala.jpg"  class="img-fluid rounded" alt="">
            </div>

            <div class="col-md-12 my-5">
               <h6>2 -Floresta do Mayombe, Cabinda</h6>

                <p>A Floresta do Maiombe é a segunda maior floresta do mundo. Está integrada na Reserva Florestal de Kakongo – uma
                        extensa área protegida que faz fronteira a norte com a República Democrática do Congo. Esta grande floresta tropical,
                         uma das maiores do continente africano, cobre uma área de 290.000 hectares e impressiona qualquer visitante que por
                        ela se aventure: uma paisagem de um verde forte e penetrante, matas densas e um ecossistema diverso e pujante.

                     <br>
                     <br/>

                    A fauna está constituída de animais de grande porte como os Elefantes, Rinocerontes, Pacaças, vários primatas como os gorilas,
                     chimpanzés, pequenos macacos e preguiças, vários tipos de roedores, aves raras como o papagaio cinzento e periquitos.
                    </p>

                   <img src="/site/assets/upload/maiombe.jpg"  class="img-fluid rounded" alt="">
                </div>

                <div class="col-md-12 my-5">
                <h6>3 - Grutas do Nzenzo, Uíge</h6>

                <p>

                    As Grutas do Nzenzo a sua beleza ainda virgem e completamente preservada, foi descoberta pelo Governo
                     Provincial do Uíge, através da Direcção Provincial da Hotelaria e Turismo.

                     <br>
                     <br/>

                    As grutas fazem parte do projecto Turi-Uíge, com a realização de acções destinadas a descobrir, fazer o
                    levantamento e aproveitar os locais turísticos existentes, que pode impulsionar as Grutas do Nzenzo no sector
                     turístico.

                </p>

                    <img src="/site/assets/upload/nzenzo.jpg"  class="img-fluid rounded" alt="">
            </div>

            <div class="col-md-12 my-5">
                <h6>4 - Lagoa Carumbo, Lunda Norte</h6>


                        <p>
                            Também conhecida como Lagoa Nakarumbo, as águas do rio Luxiko correm lentamente sobre a lagoa
                            proporcionando um visual bastante agradável a todos que se deslocam àquela localidade.

                            <br>
                            <br/>

                            É habitat de 338 espécies de plantas e 195 espécies de aves vistas naquele local das quais 13 são
                             raras e sete são desconhecidas em Angola.
                        </p>
                    <img src="/site/assets/upload/carumbo.jpg"  class="img-fluid rounded" alt="">
            </div>



            <div class="col-md-12 my-5">
                <h6>5 - Morro do Môco, Huambo</h6>

                    <p>
                        O Morro do Môco é refúgio de várias espécies raras e de espécies endémicas, como o Francolim de Swierstra.
                        Do ponto de vista do turismo de natureza sustentável, é um desafio para os praticantes de rappel e canyoning.

                        <br>
                        <br/>

                        É o ponto mais alto de Angola. Situa-se na província do Huambo, no município de Londuimbali e tem 2.620 m de altitude.
                         Aqui permanecem 85 hectares de floresta de montanha, o habitat mais ameaçado de Angola.

                    </p>

                    <img src="/site/assets/upload/moco.jpg"  class="img-fluid rounded" alt="">
            </div>


            <div class="col-md-12 my-5">
                <h6>6 - Quedas de Kalandula, Malanje</h6>

                        <p>

                            As Quedas de Kalandula são postal de visita de Angola, estão localizadas no rio Lucala,
                             o mais importante afluente do rio Cuanza, na bacia do Cuanza.

                                <br>
                                <br/>

                             Ficam a cerca de 80 km da cidade de Malanje, capital da província e a 420 km de Luanda, a capital do país.
                             Com uma extensão de 410 metros e uma altura de 105, são as segundas maiores de África.
                        </p>


                    <img src="/site/assets/upload/calandula.jpg"  class="img-fluid rounded" alt="">
            </div>


            <div class="col-md-12 my-5">
                <h6>7 - Quedas do Rio Chiumbe, Lunda Sul</h6>

                    <p>
                        Estão situadas próximo do município de Dala, ao lado da ponte que liga a estrada da Província da Lunda Sul ao Moxico.

                        <br>
                        <br/>

                         Ninguém fica indiferente à sua passagem, onde o rio que lhes dá o nome cria uma paisagem de rara beleza.
                    </p>

                    <img src="/site/assets/upload/chiumbe.jpg"  class="img-fluid rounded" alt="">
            </div>

            <div class="col-md-12 my-5">
                <h6>Conheça o Projecto Okavango/Zambeze</h6>

                    <p>
                        O projecto Okavango/Zambeze é um projecto transfronteiriço que abrange cinco países e que tem uma dimensão de 278 mil quilómetros quadrados, dos quais Angola possui 87 mil quilómetros quadrados.
                        <br>
                        <br>
                        De acordo com a directora do Gabinete de Intercâmbio do Ministério da Hotelaria e Turismo, o projecto facilitará também a integração e protecção das comunidades, o desenvolvimento socioeconómico e protecção da biodiversidade dos países membros e, em particular, o crescimento da província do Kuando Kubango.
                        <br>
                        <br>
                        Estes objectivos têm a ver com a partilha de benefícios provenientes dos recursos da biodiversidade, através das melhores práticas de gestão, da conservação, do turismo e de oportunidades alargadas de meios de subsistência para as populações das áreas circunscritas ao projecto.
                    </p>

                    <img src="/site/assets/upload/ocavango.jpg"  class="img-fluid rounded" alt="">
            </div>

            '
        ];
    }
}
