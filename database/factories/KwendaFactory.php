<?php

namespace Database\Factories;

use App\Models\Kwenda;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class KwendaFactory extends Factory
{/**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kwenda::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [


            'body' => '

            O programa KWENDA, que tem como característica principal a transferência directa de renda para famílias em situação de
            vulnerabilidade e pobreza em Angola, prevê aumentar o valor da renda trimestral de 25 mil kwanzas para 33 mil kwanzas. <br/>
            <br/>

            “Esta é uma decisão que já foi tomada. O valor deverá crescer para 11 mil, por mês. No entanto, é necessário determinar o
             “timing” correcto em que essa medida deverá ser materializada", afirmou nesta quinta-feira,
             13 de Março, o director-geral do Fundo de Apoio Social (FAS)-Instituto de Desenvolvimento Local, Berlamino Jelembi.

             <br/>
             <br/>

             O responsável avançou esta informação à imprensa, após a primeira Reunião Ordinária da Comissão Intersectorial de Coordenação
             do Programa de Fortalecimento da Protecção Social KWENDA, orientada pela ministra de  Estado para a Área Social, Dalva Ringote
              Allen, a fim de analisar o estado de implementação do referido programa até Março de 2023.
              <br/>
              <br/>

              Berlamino Jelembi referiu que três anos depois da sua implementação, o programa KWENDA torna-se num mecanismo seguro, transparente
               e eficaz de transferência directa de renda para famílias em condição de pobreza e vulnerabilidade no país.

               <br/>
               <br/>

               “Também gostaríamos de registar, nesta altura, que está também gerada uma capacitação institucional importante, porque estamos a
                falar de um programa que cumpre regras e procedimentos internacionalmente estabelecidos e tem estado a ser cumprido, na íntegra,
                 por quadros angolanos e uma instituição pública angolana", realçou.

                 <br/>
                 <br/>

                 A seu ver, trata-se de um avanço fundamental para fortalecimento das instituições a nível local e criação de um processo
                  robusto de capacitação de quadros.

                  <br/>
                  <br/>

                  “Para além do apoio directo às famílias, em matéria de transferências de renda, inclusão produtiva (…), há também,
                  em paralelo, um processo de fortalecimento de capacidades no sentido de, a médio e longo prazos, continuarmos a ter
                   condições de gestão dentro de padrões internacionalmente aceites para programas de grande dimensão”, sublinhou o
                   director-geral da FAS.

                <br/>
                <br/>

                Com vista a promover direitos económicos e sociais a um grupo alvo determinado, o programa KWENDA já cadastrou mais
                 de um milhão de famílias nas 18 províncias, sendo 61 municípios, 214 comunas e mais de 90 bairros e aldeias.

                 <br/>
                 <br/>


                 “O cadastramento é feito casa a casa, com georreferenciação. Portanto, (...) nós temos uma base de dados muito robusta,
                  com mais de 3 milhões de pessoas com diferentes categorias de vulnerabilidade”, esclareceu Berlamino Jelembi.

                  <br/>
                  <br/>

            '
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
}
