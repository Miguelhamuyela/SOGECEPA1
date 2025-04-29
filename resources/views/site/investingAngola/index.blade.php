@extends('layouts.merge.site')
@section('titulo', 'Como Investir em Angola')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">

        <div class="gdlr-core-pbf-wrapper  size" style="height:auto; width:100%;">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                    style="background-image: url(&quot;/site/assets/upload/img-background-page.png&quot;); background-size: cover; background-position: center top; height: 500px;">
                </div>
            </div>
            <div class="financity-page-title-wrap  financity-style-custom financity-left-align">
                <div class="financity-header-transparent-substitute" style="height: 183px;"></div>
                <div class="financity-page-title-overlay"></div>
                <div class="financity-page-title-container financity-container">
                    <div class="financity-page-title-content financity-item-pdlr">
                        <h1 class="financity-page-title">Como Investir em Angola</h1>

                    </div>
                </div>
            </div>
        </div>

        <div class="gdlr-core-pbf-wrapper " style="padding: 10px 0px 10px 40px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color:#ffb400;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-breadcrumbs-item gdlr-core-item-pdlr gdlr-core-item-pdb "> <span
                                property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    title="Go to Financity." href="http://127.0.0.1:8000" class="home"><span
                                        property="name">Início</span></a>
                                <meta property="position" content="1">
                            </span>
                            •<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    href="#" class="post post-page"><span property="name">Economia</span></a>

                            </span>


                            •<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    href="{{ route('site.investingAngola') }}" class="post post-page"><span
                                        property="name">Como Investir em Angola</span></a>

                            </span></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">

            <div class="row my-5 flex-column-reverse flex-lg-row">

                <div class="col-md-4 col-12">

                    @include('extra._calendar.index')
                    @include('extra._tags.index')

                    @include('extra._publicity.index')

                    <div id="gdlr-core-recent-post-widget-4 "
                        class="widget widget_gdlr-core-recent-post-widget financity-widget mt-4">
                        <h6 class="financity-widget-title">Últimas Notícias</h6>
                        <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">

                            @foreach ($lastedNews as $item)
                                <div class="gdlr-core-recent-post-widget clearfix">
                                    <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img
                                            src="/storage/{{ $item->path }}" alt="" width="150" height="150">
                                    </div>
                                    <div class="gdlr-core-recent-post-widget-content">
                                        <div class="gdlr-core-recent-post-widget-title"><a
                                                href="{!! url('/noticia/' . urlencode($item->title)) !!}">{{ $item->title }}</a></div>
                                        <div class="gdlr-core-recent-post-widget-info"><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                                    class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a
                                                    href="#">{{ date('d-m-Y', strtotime($item->date)) }}</a></span><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach




                        </div>


                        <h6 class="financity-widget-title mt-5">Últimos Eventos</h6>
                        <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">

                            @foreach ($lastedEvents as $item)
                                <div class="gdlr-core-recent-post-widget clearfix">
                                    <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img
                                            src="/storage/{{ $item->path }}" alt="" width="150" height="150">
                                    </div>
                                    <div class="gdlr-core-recent-post-widget-content">
                                        <div class="gdlr-core-recent-post-widget-title"><a
                                                href="{!! url('/evento/' . urlencode($item->title)) !!}">{{ $item->title }}</a></div>
                                        <div class="gdlr-core-recent-post-widget-info"><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                                    class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a
                                                    href="#">{{ date('d-m-Y', strtotime($item->dateEvent)) }}
                                                </a></span><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach




                        </div>
                    </div>

                    @include('extra._VideoImage.index')
                </div>


                <div class="col-md-8 col-12 container">


                    <p class="h5">Como Investir</p>

                    <p style="text-align: justify;">
                        A sociedade por via da qual é implementado o projecto de investimento privado
                        deve estar previamente constituída, devendo de seguida para efeitos de pedido de registo de
                        investimento privado nos regimes de investimento previstos na Lei do Investimento Privado
                        (LEI N.º 10/18 de 26 de Junho), apresentar os documentos seguintes:

                    <ol style="">
                        <li> Aceder a nossa plataforma pelo portal http://jui.aipex.gov.ao</li>
                        <p>Solicitar o pedido de registo e validar o email;</p>
                        <li> Aceder a sua conta JUI e começar a registar o projecto devendo para o efeito
                            na aba “documentos” juntar a seguinte documentação:</li>
                        <br>

                        <ul>
                            <li>Cópias da identificação dos proponentes (Bilhete de Identidade ou Passaporte),
                                no caso de tratar-se pessoas individuais;</li>
                            <br>

                            <li>Cópia da Certidão do Registo Comercial, no caso de se tratar de pessoa colectiva;</li>
                            <br>

                            <li>A acta deliberativa da decisão de registo do projecto de investimento;</li>
                            <br>

                            <li>Documento comprovativo da existência de fundos ou das outras formas de realização do
                                projecto de investimento privado declarado (Declaração Bancária: para forma de realização
                                em meios monetários e documento idóneo passado na origem por uma entidade de avaliação de
                                activos,
                                devidamente certificada, para a forma de realização em máquinas e equipamentos);</li>
                            <br>

                            <li>Plano de formação e de substituição gradual da força de trabalho estrangeira pela nacional,
                                nos termos do disposto no n.º 3 do artigo 46.º da Lei do Investimento Privado;</li>

                            <br>

                            <li>Cronograma de implementação do projecto de investimento;</li>
                            <br>
                            <li>Procuração, em caso de representação do proponente.</li>
                        </ul>
                    </ol>

                    <br>

                    Nota 1: Os documentos referidos no presente artigo podem ser apresentados nas línguas portuguesa,
                    inglesa ou francesa, devendo sempre que possível serem feitas traduções oficiais em língua portuguesa.


                    <p class="my-3 text-center"><b class="text-dark">Regimes de Investimento</b></p>

                    <div class="row">
                        <div class="col-md-4 col-12">

                            <p class="text-decoration-underline"><b class="text-dark">REGIME DE DECLARAÇÃO PRÉVIA</b></p>

                            <div class="my-3">
                                <ul>
                                    <li class="mt-3">
                                        Incluem-se neste regime as Propostas de Investimento enquadradas em sectores não
                                        prioritários;
                                    </li>

                                    <li class="mt-3">
                                        Para o registro de Propostas de Investimento, as empresas devem estar previamente
                                        constituídas
                                        e para tanto não é necessária a apresentação do CRIP;
                                    </li>

                                    <li class="mt-3">
                                        Os benefícios e incentivos fiscais são concedidos automaticamente.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-12">

                            <p class="text-decoration-underline">
                                <b class="text-dark">REGIME ESPECIAL</b>
                            </p>

                            <div class="my-3">
                                <ul>
                                    <li>
                                        Propostas de Investimento enquadradas nos sectores prioritários;
                                    </li>

                                    <li>
                                        Benefícios e incentivos são concedidos automaticamente e graduados em função
                                        da Zona de Desenvolvimento onde o projecto é implementado.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <p class="text-decoration-underline">
                                <b class="text-dark">REGIME CONTRATUAL</b>
                            </p>

                            <div class="my-3">
                                <ul>
                                    <li>
                                        Projetos com impacto estrutural no desenvolvimento econômico do país;
                                    </li>

                                    <li>
                                        Permite a negociação de benefícios e incentivos entre o Investidor e o Governo
                                        Angolano;
                                    </li>

                                    <li>
                                        Impulsionar os incentivos à produção nacional e à diversificação das exportações.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <p class="my-3"><b class="text-dark">Benefícios fiscais ao abrigo do regime de Declaração-Prévia</b>
                    </p>

                    <div>
                        PREDIAL: pela Aquisição de imoveis destinados ao escritório e ao establecimento do investimento;
                        <br>

                        Industrial: É cobrado sobre os lucros obtidos no exercício de qualquer actividade de natureza
                        comercial ou industrial, mesmo que acidental
                        <br>
                        Aplicação do capital: É cobrado sobre os rendimentos provenientes da simples aplicação de capital
                        <br>

                        Selo: Diz respeito a todos os actos, contratos, documentos, títulos, livros, papéis e operações
                    </div>

                    <div class="row">
                        <div class="col-md-4 ool-12 my-4">
                            <p class="text-bold">
                                <b class="text-dark">Tipo de Imposto</b>
                            </p>

                            <div class="my-3">
                                <p>Predial pela Aquisição de Imóveis</p>

                                <p class="my-2">
                                    Industrial
                                </p>

                                <div class="my-3">
                                    <ul>
                                        <li>Geral à 25%</li>
                                        <li>Agricultura à 10%</li>
                                        <li>Provisório à 2%</li>
                                    </ul>


                                </div>

                                <p class="my-2">
                                    Imposto s/ aplicação de capital
                                </p>

                                <p class="my-2">
                                    Selo à 1%
                                </p>
                            </div>


                        </div>

                        <div class="col-md-4 col-12 my-4">
                            <p class="text-bold">
                                <b class="text-dark">Período</b>
                            </p>

                            <div class="my-3">
                                <p>N/A</p>

                                <p>
                                    2 anos
                                </p>

                                <p>
                                    2 anos
                                </p>

                                <p style="">
                                    2 anos
                                </p>
                            </div>


                        </div>

                        <div class="col-md-4 col-12 my-4">
                            <p class="text-bold">

                                <b class="text-dark">Redução</b>
                            </p>

                            <div class="my-3">
                                <p>
                                    50%</p>

                                <p>
                                    20%
                                </p>

                                <p>
                                    25%
                                </p>

                                <p style="">
                                    50%
                                </p>
                            </div>


                        </div>

                    </div>

                    <p class="my-3">
                        <b class="text-dark">Benefícios fiscais ao abrigo do regime especial</b>

                    </p>

                    <div class="container ">
                        <div class="row my-3">


                            <div class="col-md-3 col-12">

                                <p>

                                    Imposto
                                </p>

                                <ul>
                                    <li>
                                        <b class="text-dark">Aquisição de imóveis destinados ao investimento (Predial)
                                            (2%)</b>
                                    </li>

                                    <li><b class="text-dark">Imposto Industrial (Geral, Agricultura, Provisório)
                                            (25%;10%,2%)</b></li>

                                    <li><b class="text-dark">Aplicação do capital (10%)</b> </li>

                                    <li><b class="text-dark">Detenção de ímóveis destinados ao investimento (Predial) (0,5%
                                            < AKZ 5 million)</b>
                                    </li>
                                </ul>
                            </div>


                            <div class="col-md-2 col-12">

                                <p>

                                    <b class="text-dark">Zona A</b>
                                </p>

                                <ul>
                                    <li>
                                        50% por um período de 2 anos
                                    </li>

                                    <li class="mt-4">20% por um período de 2 anos</li>

                                    <li class="mt-4">25% por um período de 2 anos</li>

                                    <li class="mt-4">N/A</li>
                                </ul>
                            </div>

                            <div class="col-md-2 col-12">

                                <p>


                                    <b class="text-dark">Zona B</b>
                                </p>

                                <ul>
                                    <li>
                                        75%
                                    </li>

                                    <li>60% por um período de 4 anos</li>

                                    <li class="mt-4">60% por um período de 4 anos</li>

                                    <li class="mt-4">50% por um período de 4 anos</li>
                                </ul>
                            </div>

                            <div class="col-md-2 col-12">

                                <p>

                                    <b class="text-dark">Zona C</b>
                                </p>

                                <ul>
                                    <li>
                                        85%
                                    </li>

                                    <li>80% por um período de 8 anos</li>

                                    <li class="mt-4">80% por um período de 8 anos</li>

                                    <li class="mt-4">75% por um período de 8 anos</li>
                                </ul>
                            </div>

                            <div class="col-md-3 col-12">

                                <p>

                                    <b class="text-dark">Zona D</b>
                                </p>

                                <ul>
                                    <li>
                                        92,5%
                                    </li>

                                    <li>90% por um período de 8 anos</li>

                                    <li class="mt-4">90% por um período de 8 anos</li>

                                    <li class="mt-5">82,5% por um período de 8 anos</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <p class="my-3">
                        <b class="text-dark">Benefícios Fiscais para o Regime Contratual</b>
                    </p>

                    <p class="my-3">
                        Redução de taxas do Imposto Industrial (final e provisória), do Imposto Predial Urbano,
                        do Imposto sobre a Aplicação de Capitais e do Imposto de Selo, por um período de até 15 anos.

                        <br><br>

                        Crédito fiscal de até 50% do valor de investimento, por um período de até 10 anos;

                        <br> <br>
                        Aumento das taxas de amortizações e reintegrações de até 80%, por um período máximo de 10 anos,
                        para os projectos localizados nas zonas de desenvolvimento B, C e D.

                        <br><br>

                        Diferimento no tempo de pagamento de impostos;

                        <br> <br>
                        Considerar como custo 80% do valor das despesas de investimentos destinadas a criação de
                        infraestrutura,
                        necessárias a execução do projecto, que pela sua natureza devem ser providas pelo Estado

                        <br>

                    <p class="my-3">
                        <b class="text-dark">Outros benefícios e facilidades</b>

                        <br>

                    <p>
                        <b class="text-dark">Aduaneiros:</b>
                        <br>

                    <p>
                        Isenção do pagamento de direitos aduaneiros na importação de bens e equipamentos necessários
                        à execução do projeto, com exceção do IVA.
                    </p>

                    <b class="text-dark">Facilidades:</b>
                    <br>


                    <p class="my-3">
                        Isenção do pagamento de taxas e emolumentos devidos por qualquer serviço solicitado, incluindo
                        alfândega,
                        por entidade pública não empresarial, apenas para projectos abrangidos pelo Regime Especial
                    </p>

                    <p>
                        Assessoria na implementação de projectos em todas as etapas do processo de investimento através da
                        Janela Única do Investidor.

                    </p>

                    </p>

                    </p>



                    </p>


                    <p>Para mais informação </p>
                    <a style="background: #ffb400;" href="https://www.aipex.gov.ao/PortalAIPEX/#!" target="_blank"
                        class="btn btn-sm bg-warning text-dark rounded-pill p-2"> acessar o website da AIPEX</a>
                    </p>




                </div>

            </div>
        </div>

    </section>

@endsection
