@extends('layouts.merge.site')
@section('titulo', ' Hospital Materno Infantil')
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
                        <h1 class="financity-page-title">Hospital Materno Infantil</h1>

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
                                        property="name">Hospital Materno Infantil</span></a>
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

                                O Hospital Materno Infantil Dr Manuel Pedro Azancot de Menezes, tem capacidade para 220
                                camas,
                                ocupando uma extensão de 40.484 metros quadrados, e tem um ser iço dedicado à reprodução
                                medicamente assistida.

                                <br>
                                <br>

                                O edifício é constituído por três blocos, com serviços de urgências clínicas, sala de
                                partos, obstetrícia
                                e ginecologia, pediatria, fisioterapia e reabilitação física e cirurgia.

                                <br>
                                <br>

                                Avaliado em 179 milhões de dólares, o hospital possui ainda uma unidade para queimados, para
                                terapia respiratória,
                                laboratórios para análises clínicas, sistema de imagiologia e radiodiagnóstico, uma morgue e
                                um parque de estacionamento
                                para 520 viaturas, segundo a Angop.

                                <br>
                                <br>

                                O médico Manuel Pedro Azancot de Menezes, que dá nome ao novo hospital, nasceu em São Tomé e
                                Príncipe e tornou-se especialista
                                em cirurgia-geral e ginecologia pela Universidade de Lisboa.

                                <br>
                                <br>

                                Trabalhou em Angola, Cabo Verde, Portugal, São Tomé e Príncipe e Timor- Leste. Faleceu em
                                Luanda em 1984.
                                <br>
                                <br>

                            </p>

                            <div class="col-md-6 col-12 p-2">
                                <img class="img-fluid" id="img-digitalAo"
                                    src="/site/assets/upload/hospital_infantil_1.jpeg" alt="">

                            </div>

                            <div class="col-md-6 col-12 p-2">
                                <img class="img-fluid" id="img-digitalAo"
                                    src="/site/assets/upload/hospital_infantil_2.jpeg" alt="">

                            </div>


                            <div class="col-md-6 col-12 p-2">
                                <img class="img-fluid" id="img-digitalAo"
                                    src="/site/assets/upload/hospital_infantil_3.jpeg" alt="">

                            </div>

                            <div class="col-md-6 col-12 p-2">
                                <img class="img-fluid" id="img-digitalAo"
                                    src="/site/assets/upload/hospital_infantil_4.jpeg" alt="">

                            </div>


                        </div>
                    </div>





                </div>







            </div>


        </div>





    </section>
    <!-- ====== news End ====== -->


@endsection
