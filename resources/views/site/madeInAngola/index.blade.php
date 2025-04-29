@extends('layouts.merge.site')
@section('titulo', ' Feito em Angola')
@section('content')
    <!-- ====== Banner Start ====== -->
    <section style="background: #ffff;" class="ud-page-banner">

        <div class="gdlr-core-pbf-wrapper    shadow-sm" style="height: auto; width:100%;">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                    style="background-image: url(/site/assets/upload/img-background-page.png);background-size: cover;background-position: top center;height:500pxwdth:100%;
                    data-parallax-speed="0">
                </div>
            </div>
            <div class="financity-page-title-wrap  financity-style-custom financity-left-align">
                <div class="financity-header-transparent-substitute"></div>
                <div class="financity-page-title-overlay"></div>
                <div class="financity-page-title-container financity-container">
                    <div class="financity-page-title-content financity-item-pdlr">
                        <h1 class="financity-page-title">Feito em Angola</h1>

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
                                    title="Go to Financity." href="{{ route('site.home') }}" class="home"><span
                                        property="name">Início</span></a>
                                <meta property="position" content="1">
                            </span>

                            •<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    href="#" class="post post-page"><span property="name">Angola</span></a>

                            </span>

                            •<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    href="{{ route('site.madeInAngola') }}" class="post post-page"><span
                                        property="name">Feito em Angola</span></a>
                            </span>
                        </div>
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




                <div class="col-md-8 col-12 container ">

                    <div class="row">
                        <div class="container">
                            <p>SERVIÇO FEITO EM ANGOLA</p>

                            <div class="my-2">

                                <div class="my-1">
                                    <a target="_blank" href="https://feitoemangola.gov.ao/" class="text-dark">
                                        <p>Expo Feito em Angola</p>
                                    </a>

                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-12 mb-3 ">
                                        <a target="_blank" href="https://feitoemangola.gov.ao/">
                                            <img width="400" src="/site/assets/upload/fa_seo_1200.jpg" class="img-fluid"
                                                alt="">
                                        </a>

                                    </div>

                                    <div class="col-md-4 col-12 mb-3">

                                        <a target="_blank" href="https://feitoemangola.gov.ao/">
                                            <img width="200" src="/site/assets/upload/efa.png" class="img-fluid"
                                                alt="">
                                        </a>

                                    </div>




                                </div>



                            </div>

                            <div>

                                <div style="text-align: justify;">
                                    O Executivo, reconhecendo a importância do fomento e valorização da produção nacional
                                    para o desenvolvimento da economia e do emprego nacional, estabeleceu o serviço Feito em
                                    Angola.

                                    <br>
                                    <br>

                                    Este serviço é uma iniciativa de incentivo e promoção do que é produzido a nível
                                    nacional,
                                    para acelerar de forma focada e efectiva a diversificação da produção nacional e
                                    mobilizar
                                    o país para o aumento do consumo do que é produzido em Angola.

                                    <br>
                                    <br>

                                    Outra característica distintiva do Feito em Angola, é colocar em destaque uma aliança
                                    estratégica
                                    entre o Estado e o sector privado, e em face disto, esta iniciativa aproveita o que de
                                    melhor foi
                                    proposto e/ou esteja em curso. No entanto, reconhece e tenta contribuir para a correção
                                    dos vários
                                    constrangimentos que obstam o sucesso das iniciativas de fomento da produção nacional.

                                    <br>
                                    <br>

                                    O serviço Feito em Angola reconhece de forma explícita a natureza dinâmica e interactiva
                                    das actividades
                                    económicas e a necessidade de adaptação da sua intervenção, prevendo assim a sua revisão
                                    e melhoria contínua.

                                    <br>
                                    <br>

                                    Com efeito, com a implementação do Feito em Angola, foi desenvolvido ao longo dos dez
                                    (10) anos de existência deste serviço,
                                    um conjunto de iniciativas ligadas a uma maior promoção da produção nacional.

                                    <br>
                                    <br>

                                    As acções de promoção envolveram:
                                    <br>
                                    <br>

                                    <ul>
                                        <li>A realização de sessões de formação dirigidas aos produtores nacionais em
                                            matérias ligadas à gestão.</li>
                                        <li>O reforço da relação entre os aderentes e entes públicos através da priorização
                                            das empresas aderentes ao fornecimento de bens e serviços aos grandes
                                            consumidores públicos.</li>
                                        <li>Um forte engajamento no processo de criação do Código de Barras em Angola.</li>
                                    </ul>

                                    É importante destacar que o Feito em Angola se fundamenta no vértice do Acesso ao
                                    Mercado,
                                    dando assim visibilidade e valorização à produção nacional existente e que venha a
                                    existir.

                                    <br>
                                    <br>

                                    Por outro lado, este serviço sublinha igualmente a necessidade dessa actividade assumir
                                    cada vez mais o seu papel,
                                    que é de produzir mais, aprender e organizar-se de maneira contínua, certificar e
                                    fomentar a qualidade dos produtos
                                    e serviços, elevar os níveis de cooperação e de partilha de boas práticas.

                                    <br>
                                    <br>

                                    Tendo em conta a diversidade de programas que concorrem para a concretização do
                                    desiderato de promover as empresas
                                    enquanto instrumentos de sustentabilidade das economias, considera-se indispensável
                                    criar um instrumento de carácter
                                    transversal, com a possibilidade de estimular a competitividade das empresas nacionais,
                                    bem como, prover a qualidade
                                    dos produtos nacionais.

                                    <br>
                                    <br>

                                    O Serviço Feito em Angola tem como objectivo mobilizar as empresas para o desígnio do
                                    crescimento económico, procurando
                                    melhorar a competitividade dos bens e serviços nacionais e contribuir para o equilíbrio
                                    sustentado da balança comercial.

                                    <br>
                                    <br>


                                    É assim que, no contexto actual, o país está orientado para o relançamento da economia,
                                    tendo como pilar fundamental o PRODESI,
                                    voltado para a diversificação da economia, pelo que, é necessário que um programa desta
                                    natureza corresponda aos objectivos da
                                    diversificação da economia, trazendo valor acrescentado no fomento da produção nacional,
                                    geração de emprego e riqueza,
                                    agregando valor aos produtos a exportar, o que tem impacto directo no aumento da
                                    competitividade e no crescimento económico.

                                    <br>
                                    <br>


                                    Deste modo, espera-se que a reestruturação do Serviço Feito em Angola, venha fomentar o
                                    aumento da produção nacional
                                    de matérias-primas e principalmente de produtos acabados e de serviços, promover os
                                    produtos com Valor Acrescentado
                                    Nacional (VAN) acima dos 30% e igualmente que possa incentivar o consumo de produtos
                                    nacionais, por via da melhoria
                                    da qualidade, preços competitivos, transmitindo desta forma uma maior confiança aos
                                    consumidores.

                                    <br>
                                    <br>

                                    O “Feito em Angola”, incide sobre três (3) domínios fundamentais:
                                    <br>
                                    <br>
                                    <ul>
                                        <li>Organização administrativa do serviço.</li>
                                        <li>Organização tecnológica.</li>
                                        <li>Comunicação e marketing.</li>
                                    </ul>





                                </div>


                            </div>






                        </div>
                    </div>


                </div>

                <br>





            </div>


        </div>





    </section>
    <!-- ====== news End ====== -->


@endsection
