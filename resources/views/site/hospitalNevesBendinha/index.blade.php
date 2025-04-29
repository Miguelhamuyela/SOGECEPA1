@extends('layouts.merge.site')
@section('titulo', ' Hospital Especializado Neves Bendinha')
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
                        <h1 class="financity-page-title">Hospital Especializado Neves Bendinha</h1>

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
                                    href="{{ route('site.hospitalNevesBendinha') }}" class="post post-page"><span
                                        property="name">Hospital Especializado Neves Bendinha</span></a>
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

                            <p style="text-align: justify;">

                                Hospital Geral Especializado no tratamento de queimaduras e suas sequelas físicas e
                                psicológicas.

                                A unidade sanitária, de referência no país e com a missão de oferecer serviços humanizados
                                aos utentes com queimaduras ganha,
                                com a reabilitação e ampliação, uma área de 1.500 metros quadrados, 93 novas camas, três
                                laboratórios, UTI e Telemedicina.

                                <br>
                                <br>

                                Após reabilitação e ampliação, o bloco 1 passa a abrigar um laboratório de última geração,
                                esterilização, depósito de medicamentos
                                com fármacos específicos para queimaduras e outros de uso corrente, auditório com capacidade
                                de 81 lugares e áreas administrativas.

                                <br>
                                <br>

                                O Bloco 2 possui uma biblioteca e sala de reuniões com videoconferência, enquanto o Bloco 3
                                acolhe os serviços de manutenção e apoio.
                                Já o Bloco Operatório conta com duas salas cirúrgicas e duas de recobro com equipamentos de
                                alta tecnologia.

                                <br>
                                <br>

                                A ala Sul agora abriga consultórios, uma nova sala de ecografia, sala de Raio X, 2 salas de
                                observação, morgue com 8 gavetas, farmácia,
                                lavandaria e refeitório, enquanto a ala Norte do hospital inclui diversas secções, tais como
                                hemoterapia, enfermarias, sala de curativos,
                                pós-operatório, Central de Oxigénio e de gases medicinais.

                                <br>
                                <br>

                                A Unidade de Cuidados Intensivos (UCI) conta com 13 camas, sendo três de isolamento para
                                patologias infecciosas ou doentes
                                imuno-deprimidos.
                                E o Serviço de Laboratório conta com três salas, sendo duas de análises clínicas (interna e
                                externa) e uma de microbiologia.

                                <br>
                                <br>

                                No Bloco 4 estão um posto de transformação de energia independente e dois grupos geradores
                                para assegurar a continuidade dos serviços
                                e o Bloco 5 alberga as áreas de Fisioterapia e Serviços Administrativos.

                            </p>

                            <div class="col-md-6 col-12 p-2">
                                <img class="img-fluid" id="img-digitalAo" src="/site/assets/upload/hospital_neves_1.jpeg"
                                    alt="">

                            </div>

                            <div class="col-md-6 col-12 p-2">
                                <img class="img-fluid" id="img-digitalAo" src="/site/assets/upload/hospital_neves_2.jpeg"
                                    alt="">

                            </div>


                            <div class="col-md-6 col-12 p-2">
                                <img class="img-fluid" id="img-digitalAo" src="/site/assets/upload/hospital_neves_3.jpeg"
                                    alt="">

                            </div>

                            <div class="col-md-6 col-12 p-2">
                                <img class="img-fluid" id="img-digitalAo" src="/site/assets/upload/hospital_neves_4.jpeg"
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
