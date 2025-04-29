@extends('layouts.merge.site')
@section('titulo', ' Hospital dos Queimados')
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
                        <h1 class="financity-page-title">Hospital dos Queimados</h1>

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
                                    href="#" class="post post-page"><span property="name">Economia</span></a>

                            </span>

                            •<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    href="#" class="post post-page"><span property="name">Investimentos</span></a>

                            </span>


                            •<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    href="#" class="post post-page"><span property="name">Hospitais</span></a>

                            </span>

                            •<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    href="{{ route('site.firedHospital') }}" class="post post-page"><span
                                        property="name">Hospital dos Queimados</span></a>
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

                    <div class="container">
                        <div class="row">

                            <div class="col-md-12 col-12 ">

                                <p>
                                    Novo Hospital dos Queimados fica concluído em 2025
                                </p>

                                <p style="text-align: justify;">

                                    O futuro Hospital dos Queimados, em construção desde 2022, na Centralidade do Kilamba,
                                    deve estar
                                    concluído até Março de 2025, garantiu o Presidente da República,João Lourenço, à
                                    imprensa, no final
                                    da visita de constatação à empreitada, este sábado, 9 de Setembro, em Luanda.

                                    <br>
                                    <br>

                                    João Lourenço afirmou que apesar de já existir o antigo Hospital dos Queimados, no Neves
                                    Bendinha, cuja
                                    reabilitação e ampliação vão estar finalizadas nos próximos dias, o novo do Kilamba
                                    surge da necessidade
                                    de atender a demanda decorrente do preocupante elevado registo de incêndios no país,
                                    especialmente em Luanda.

                                    <br>
                                    <br>

                                    “Infelizmente tem havido muitos sinistros de incêndios domiciliares e não só, que
                                    atingem pessoas de todas as idades,
                                    até crianças, e isso preocupou-nos”.

                                    <br>
                                    <br>

                                    De acordo com o Presidente, para as outras províncias, o Executivo prevê alas dentro dos
                                    hospitais gerais para atender os
                                    doentes desta área de saúde, uma vez que não será possível trazer todos os sinistrados
                                    queimados de todo o país, para Luanda.

                                    <br>
                                    <br>

                                    Por seu lado, o engenheiro Eric Ceita, ligado à obra, anunciou, como novidade, ao
                                    Presidente da República, a implementação de
                                    câmaras bariátricas para tratamento de queimados, que fornecem 100 por cento de oxigénio
                                    em condições e ajudam na alimentação
                                    do sangue ou de transporte de oxigénio pelo sangue.


                                    <br>
                                    <br>

                                    O Hospital Geral dos Queimados está a ser erguido numa área de implantação de 9.5
                                    hectares. O espaço de construção compreende 48
                                    mil metros quadrados. Tem seis pisos e quatro edifícios auxiliares, seis blocos
                                    operatórios e um auditório para 224 pessoas.

                                    <br>
                                    <br>


                                </p>




                            </div>

                            <div class="col-md-6 col-12 p-2">
                                <img class="img-fluid" id="img-digitalAo" src="/site/assets/upload/fired_hospital_1.jpg"
                                    alt="">

                            </div>


                            <div class="col-md-6 col-12 p-2">
                                <img class="img-fluid" id="img-digitalAo" src="/site/assets/upload/fired_hospital_2.jpg"
                                    alt="">

                            </div>

                        </div>
                    </div>





                </div>







            </div>


        </div>





    </section>
    <!-- ====== news End ====== -->


@endsection
