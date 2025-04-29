<?php

namespace Database\Factories;

use App\Models\CloudGovern;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CloudGovernFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = CloudGovern::class;

    public function definition()
    {
        return [
            'body' => '


            <div style="text-align:justify";>

            <b style="color:#222;" class="text-dark">Objetivo de construção do projeto</b>: Construir uma infraestrutura de TIC fiável e
            uma nuvem governamental unida como pedras angulares e motores para capacitar a nova era
            do governo digital. Além disso, irá melhorar a infraestrutura nacional de TIC, apoiando
            o desenvolvimento da economia de dados e da administração pública eletrónica, melhorando
            a eficiência dos serviços, reforçando a partilha e a segurança dos dados entre os departamentos
            governamentais, aumentando a confiança do público na capacidade de governação do atual governo
            e melhorando a estabilidade social.
            <br/>
            <br/>

            <p>Âmbito do projeto:</p>
            <br/>

            <b class="text-dark">1 - Solução para instalações de centros de dados governamentais:</b>

            <br/>


            Está planeada a implementação em Luanda de um centro de dados modular pré-fabricado, chave na mão.
            O projeto e a implementação são baseados nas melhores práticas e nos princípios da topologia Tier
            III do Uptime Institute. O centro de dados principal está planeado para construir um novo parque
            de escritórios com 6.225 m2 de área no Camama, Luanda.

            <br/>
            <br/>

            O novo centro de dados irá fornecer 208 racks de TI, NOC e sala de escritório para a equipa de operação e manutenção.
            52 racks de 208 racks estão planeados para serem implementados para a nuvem do governo e outros racks estão implementados
            para o serviço de co-localização e expansão futura.

            <br/>
            <br/>

            O edifício principal do centro de dados será uma estrutura pré-fabricada de duas camadas, incluindo sala de TI, sala de energia,
             sala de baterias, etc. no interior. A área externa do edifício principal está equipada com gerador, etc. para apoiar o funcionamento
              do centro de dados.

              <br/>
              <br/>

              Os centros de dados de salvaguarda utilizam a sala de servidores CNTI existente para modificações destinadas a satisfazer
              as funções de redundância do sistema.

              <br/>
              <br/>

            <b class="text-dark">2 - Solução de rede dedicada para o governo:</b>
              <br/>
              <br/>

              Está planeado um sistema de rede para ligar o CD Camama e o CD Backup, com fibra 10GE. Está planeada a implementação de um
              total de 50 km de novas fibras e a reutilização das fibras existentes da AT e de outros ministérios.

              <br/>
              <br/>

            <b class="text-dark">3 - Solução de escritório inteligente para o governo:</b>

              <br/>
              <br/>

              Neste projeto, está prevista a instalação de 690 pontos de acesso WIFI-6 e 96 redes relacionadas com o MATRX.
              O MATRX é um quadro inteligente que pode ser instalado no escritório e na sala de reuniões. Pode fornecer a
              função múltipla, como terminal de videoconferência, quadro branco, TV de projeção, etc.

              <br/>
              <br/>

            <b class="text-dark">4 - Plataforma governamental de computação em nuvem:</b>

              <br/>
              <br/>

              A plataforma de computação em nuvem será implantada utilizando nós de computação em nuvem (por exemplo, servidores e armazenamento)
             e dispositivos de rede (por exemplo, switch e firewalls). Foi concebida com 260 nós de computação em nuvem, incluindo 168 nós no sítio
             principal e 92 nós no sítio de reserva.

             <br/>
             <br/>

             Mais de 80 serviços ecológicos serão oferecidos pela plataforma de computação em nuvem, incluindo serviço de computação,
              serviço de armazenamento, serviço de rede, serviço de contentor, serviço de grandes volumes de dados, serviço de DR & backup,
              serviços de segurança e ferramenta de operação & manutenção.

              <br/>
              <br/>

            <b class="text-dark">5 - Aplicação governamental em nuvem:</b>
              <br/>
              <br/>

              A Plataforma Analítica Presight (AP) da G42 foi planeada para ser implementada no acesso a várias fontes de dados e cria relações
              significativas entre elas sempre que possível, construindo o conceito central em torno de uma pessoa. A pesquisa de fontes de dados
              cruzadas, o mapa, a análise de ligações e o painel de controlo recuperam os resultados sob a forma de perfis de uma pessoa,
              disponíveis para análise multidimensional.
              <br/>


            </div>


            '
        ];
    }
}
