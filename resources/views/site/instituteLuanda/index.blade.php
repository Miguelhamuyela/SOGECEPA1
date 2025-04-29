@extends('layouts.merge.site')
@section('titulo', ' Instituto Hematológico Pediátrico de Luanda')
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
                        <h1 class="financity-page-title">Instituto Hematológico Pediátrico de Luanda</h1>

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
                                    href="{{ route('site.hospitalMaternoInfantil') }}" class="post post-page"><span
                                        property="name">Instituto Hematológico Pediátrico de Luanda</span></a>
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

                                O Instituto Hematológico Pediátrico Dr. Victória do Espírito Santo é um edifício de sete
                                pisos construído de raiz
                                e dispõe de bloco operatório, unidade de cuidados intensivos, internamento pré e
                                pós-operatório, centro de
                                tratamento de medula óssea, em colaboração com o Instituto de Luta Contra o Cancro e outras
                                unidades de
                                referência, e epidemiologia, prevenção, educação e suporte familiar em colaboração com a
                                Direção Nacional
                                de Saúde Pública.

                                <br>
                                <br>

                                Dispõe, ainda, de áreas de intervenção, centro de apoio à criança com anemia falciforme com
                                capacidade para atender
                                60 por cento em serviço de urgência e 40 em consulta externa, serviço de hemoterapia
                                pediátrica, em ligação com o
                                Instituto Nacional de Sangue, farmácia, levandária, zona de depósitos de resíduos
                                hospitalares, ambulatório, análises clínicas,
                                imagiologia, serviços administrativos e formação.

                                <br>
                                <br>

                                O Instituto Hematológico Pediátrico Dra. Victória do Espírito Santo foi idealizado para dar
                                respostas a doenças
                                de origem hematológicas, como anemia falciforme, leucemias agudas e crónicas e linfomas em
                                pediatria.
                                Possui, igualmente, a componente de hemoterapia pediátrica e um centro de transplante de
                                medula óssea.

                                <br>
                                <br>


                            </p>

                            <div class="col-md-6 col-12 p-2">
                                <img class="img-fluid" id="img-digitalAo"
                                    src="/site/assets/upload/hospital_sinstitue_1.jpeg" alt="">

                            </div>

                            <div class="col-md-6 col-12 p-2">
                                <img class="img-fluid" id="img-digitalAo"
                                    src="/site/assets/upload/hospital_sinstitue_2.jpeg" alt="">

                            </div>


                            <div class="col-md-6 col-12 p-2">
                                <img class="img-fluid" id="img-digitalAo"
                                    src="/site/assets/upload/hospital_sinstitue_3.jpeg" alt="">

                            </div>

                            <div class="col-md-6 col-12 p-2">
                                <img class="img-fluid" id="img-digitalAo"
                                    src="/site/assets/upload/hospital_sinstitue_4.jpeg" alt="">

                            </div>

                        </div>
                    </div>





                </div>







            </div>


        </div>





    </section>
    <!-- ====== news End ====== -->


@endsection
