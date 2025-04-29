<?php

namespace Database\Factories;

use App\Models\Visa;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Visa::class;

    public function definition()
    {
        return [
            'body' => '

                <h6> Turistas portugueses e de mais 97 países ficam isentos de visto para entrar em Angola </h6>

                <p>

                Turistas portugueses e de mais 97 países podem, a partir de agora, entrar em Angola sem necessidade de visto,
                 por um período de 90 dias, segundo um Decreto Presidencial de 29 de Setembro. A medida, que se enquadra na
                 estratégia do Executivo para promover o Turismo e aumentar o volume de receitas do sector no Orçamento Geral
                 do estado, ainda dependente do sector petrolífero, que representa cerca de 47 por cento do Produto Interno Bruto
                 (PIB) total, 98 por cento das receitas de exportação e 75 por cento das receitas do Governo.

                 <br/>
                 <br/>


                 A isenção aplica-se exclusivamente a vistos de turismo. Na Europa, além de Portugal, estão contemplados pela medida cidadãos
                  de outros 34 países: Suíça, Federação Russa, Alemanha, Suécia, Estado do Vaticano, República Checa, Grão-Ducado de Luxemburgo,
                   Hungria, Países Baixos, Principado do Mónaco, Bélgica, Dinamarca, Espanha, Grã-Bretanha, Irlanda do Norte, Noruega, Áustria,
                    Bulgária, Croácia, Eslováquia, Estónia, Finlândia, França, Grécia, Irlanda, Letónia, Lituânia, Malta, Polónia, Roménia,
                    Turquia, Chipre, Eslovénia, Islândia e Itália


                <br/>
                <br/>


                Em África, estão contemplados 14 países: Eswatini, Marrocos, Lesotho, Rwanda, Zimbabwe, Guiné Equatorial, Botswana, Madagáscar,
                Malawi, Ilhas Maurícias e Sychelles, Cabo Verde, Argélia e Tanzânia. Para o continente asiático, estão isentos 11 países:
                Emirados Árabes Unidos, Israel, Qatar, Japão, Arábia Saudita, Coreia do Sul, Índia, Indonésia, Singapura, Timor-Leste e China.

                <br/>
                <br/>

                No continente americano, foram seleccionados oito países: Estados Unidos da América, México, Argentina, Canadá, Chile, Panamá, Uruguai
                e Brasil. Na Oceânia, constam do Decreto Presidencial a Austrália, Ilhas Fiji, Ilhas Marshall, Ilhas Salomão, Estados Federados da
                 Micronésia, República de Nauru, Nova Zelândia, República de Palau, Papua Nova Guiné, Estados Unidos Independentes de Samoa,
                 Reino do Tonga, Tuvalu, República de Vanuatu e Niue.


                <br/>
                <br/>

                Já na região das Caraíbas e Pacífico, foram escolhidos 16 países, designadamente Antígua e Barbuda, Bahamas, Barbados, Belize,
                Grenada, República Cooperativa da Guiana, República do Haiti, Ilhas Cook, Jamaica, República de Kiribati e República Dominicana.
                 Na mesma região, foram, ainda, incluídos Santa Lúcia, Federação de São Cristóvão e Neves, São Vicente e Granadinas, República do
                 Suriname e República de Trinidad e Tobago. O Decreto Presidencial orienta o Ministério das Relações Exteriores a comunicar aos
                  países beneficiários sobre a isenção de vistos de turismo e o processo simplificado de obtenção de vistos.

                  <br/>
                  <br/>


                No caso de trabalho, estudo, tratamento médico ou autorização de residência, os cidadãos estrangeiros devem solicitar o visto
                correspondente, junto das missões diplo missões diplomáticas e consulares da República de Angola devem garantir um atendimento
                simplificado e desburocratizado, com um prazo máximo de três dias úteis para a concessão do visto de turismo.

                <br/>
                <br/>

                    <h6>Tipos de Visto</h6>
                <br/>


                <h6>VISTO DIPLOMÁTICO, OFICIAL E DE CORTESIA</h6>

                <br/>

                São concedidos pelo Ministério das Relações Exteriores, através das Missões diplomáticas ou consulares, autorizadas para o
                 efeito, ao titular de passaporte diplomático, de serviço, especial ou ordinário que se desloque à República de Angola em
                 visita diplomática, de serviço ou de carácter oficial. 2. Os vistos referidos no número anterior devem ser utilizados no
                 prazo de 60 dias, subsequentes à data da sua concessão, permitem um total de permanência em Angola até 30 dias e são
                 válidos para uma ou duas entradas. 3. Em casos devidamente fundamentados, podem ser vistos diplomático, oficial e de
                 cortesia ser concedidos para múltiplas entradas com permanência até 90 dias.

                 <br/>
                 <br/>


                 <h6>VISTO DE TURISMO</h6>

                 <br/>



                 É concedido pelas Missões diplomáticas e consulares angolanas ao cidadão estrangeiro que pretenda entrar na República de Angola,
                 em visita de carácter recreativo, desportivo ou cultural. O visto de turismo deve ser utilizado no prazo de 60 dias subsequentes
                 à data da sua concessão, é válido para uma ou múltiplas entradas e permite a permanência em Angola por um período de até 30 dias,
                 sendo prorrogável uma única vez, por igual período. O visto de turismo não permite ao seu titular a fixação de residência em Angola,
                 nem o exercício de qualquer actividade remunerada.
                 <br/>
                 <br/>


                 <h6>VISTO DE CURTA DURAÇÃO</h6>
                 <br/>


                 É concedido pelas Missões diplomáticas e consulares angolanas ao cidadão estrangeiro que, por razões de urgência, tenha necessidade
                 de entrar em Angola. O visto de curta duração, deve ser utilizado no prazo de 72 horas subsequentes a data da sua concessão, permite
                  ao seu titular a permanência até sete (7) dias e é prorrogável por igual período de tempo. III. O visto de curta duração não
                  permite ao seu titular a fixação de residência em Angola, nem o exercício de qualquer actividade remunerada.

                <br/>
                <br/>


                <h6>VISTO ORDINÁRIO</h6>
                <br/>

                É concedido pelas Missões diplomáticas e consulares angolanas ao cidadão estrangeiro e destina- se a permitir a entrada em Angola
                por razões familiares e prospecção de negócios. O visto ordinário deve ser utilizado no prazo de 60 dias, subsequentes à data da
                sua concessão e permite o seu titular a permanência até 30 dias e pode ser prorrogável duas vezes, por igual período de tempo.
                O visto ordinário não permite ao seu titular a fixação de residência em Angola, nem o exercício de qualquer actividade remunerada.

                <br/>
                <br/>

                <h6>VISTO DE FRONTEIRA</h6>
                <br/>

                É concedido pela Autoridade Migratória nos postos de Fronteira e destina-se a permitir a entrada em território nacional ao cidadão
                estrangeiro que por razões imprevistas e devidamente fundamentadas não tenha solicitado visto num Posto Consular e venha, nomeadamente,
                 para proceder à montagem de equipamentos, para prestar assistência técnica pós venda, para desenvolver outra actividade semelhante.
                  O Visto de Fronteira é valido para uma entrada e permite a permanência do beneficiário em território nacional por um período de 15
                   dias, não prorrogáveis. O Visto de fronteira não permite ao seu titular afixação de residência no País, nem o exercício de qualquer
                   actividade remunerada.

                   <br/>
                   <br/>

                   Para solicitar o visto
                   <br/>



                </p>

            '
        ];
    }
}
