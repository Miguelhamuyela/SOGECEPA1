@extends('layouts.merge.site')
@section('titulo', 'Telecomunicações e Tecnologias da Informação')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">



        <div class="gdlr-core-pbf-wrapper  " style="height: auto; width:100%;">
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

                    <div class="financity-page-title-content financity-item-pdlr ">
                        <h1 style="font-weight: 500;" class="text-white ">Telecomunicações e Tecnologias da Informação</h1>

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
                                    href="{{ route('site.tic') }}" class="post post-page"><span
                                        property="name">Telecomunicações e Tecnologias da Informação</span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="ud-page-banner">

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
                                                src="/storage/{{ $item->path }}" alt="" width="150"
                                                height="150">
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
                                                src="/storage/{{ $item->path }}" alt="" width="150"
                                                height="150">
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




                    <div class="col-md-8 col-12 container container">



                        <p class="mb-4 my-5">
                            <img style="height:40px;" src="/site/assets/upload/infosi.png" class="img-fluid" alt="">

                        <p style="text-align: justify;">
                            Instituto Nacional de Fomento da Sociedade da Informação (INFOSI) é Instituto público de
                            prestação de serviço
                            com carácter científico e desenvolvimento tecnológico, tutelado pelo Ministério das
                            Telecomunicações Tecnologias
                            de Informação e Comunicação Social,cuja missão é promover e fomentar o desenvolvimento da
                            Sociedade da Informação
                            em Angola.

                            <br>
                            <br>

                            <a style="background: #ffb400;" href="https://www.infosi.gov.ao/" target="_blank"
                                class="btn btn-sm bg-warning text-dark rounded-pill p-2"> Aceder ao Website</a>
                        </p>
                        </p>

                        <p class="mb-4 my-5">
                            <img src="/site/assets/upload/digital.png" style="height:100px;" class="img-fluid"
                                alt="">

                        <p style="text-align: justify;">
                            O Digital.ao oferece um conjunto completo de serviços de Tecnologias de Informação na
                            infraestrutura robusta e
                            confiável dos seus Datacenter, sendo um deles o maior do País.

                            <br>
                            <br>

                            <a style="background: #ffb400;" target="_blank" href="https://www.digital.ao/ao/"
                                class="btn btn-sm bg-warning text-dark rounded-pill p-2"> Aceder ao Website</a>
                        </p>
                        </p>

                        <p class="mb-4 my-5">
                            <img src="/site/assets/upload/fadcom.png" style="height:150px;" class="img-fluid"
                                alt="">

                        <p style="text-align: justify;">
                            O Fundo de Apoio ao Desenvolvimento das Comunicações FADCOM é uma estrutura pública tutelada
                            pelo MINTTICS, voltado
                            ao apoio de iniciativas, projectos, acções que visam o reforço das competência técnicas e
                            profissionais bem como a
                            promoção e desenvolvimento do sector das telecomunicações e tecnologias de informação.


                            <br>
                            <br>

                            <a style="background: #ffb400;" target="_blank" href="http://www.fadcom.co.ao/"
                                class="btn btn-sm bg-warning text-dark rounded-pill p-2"> Aceder ao Website</a>

                        </p>
                        </p>

                        <p class="mb-4 my-5">
                            <img src="/site/assets/upload/ggpen.png" style="height:120px;" class="img-fluid"
                                alt="">

                        <p style="text-align: justify;">
                            O Gabinete de Gestão do Programa Espacial Nacional (GGPN) é uma estrutura autónoma tutelada pelo
                            MINTTICS responsável
                            pela promoção, uso pacífico do espaço, bem como conduzir estudos estratégicos que visam
                            estabelecer acordos de cooperação
                            com instituições técnicas e científicas do domínio espacial, assegurando a criação de
                            competências tecnológicas e humanas
                            nacionais e a transferência de tecnologia e do saber fazer no quadro do Programa Espacial
                            Nacional.


                            <br>
                            <br>

                            <a style="background: #ffb400;" target="_blank" href="https://ggpen.gov.ao/"
                                class="btn btn-sm bg-warning text-dark rounded-pill p-2"> Aceder ao Website</a>


                        </p>
                        </p>


                        <p class="mb-4 my-5">
                            <img src="/site/assets/upload/inacon.png" style="height:100px;" class="img-fluid"
                                alt="">

                        <p style="text-align: justify;">
                            O Instituto Angolano das Telecomunicações (INACOM) é uma instituição pública tutelada pelo
                            MINTTICS com responsável por Assessorar
                            e representar o Executivo através da regulação, supervisão e fiscalização do Sector das
                            Comunicações, incluindo as comunicações
                            electrónicas e os serviços postais, assegurando a qualidade de serviço num ambiente de
                            concorrência saudável.

                            <br>
                            <br>

                            <a style="background: #ffb400;" target="_blank" href="https://www.inacom.gov.ao/ao/"
                                class="btn btn-sm bg-warning text-dark rounded-pill p-2"> Aceder ao Website</a>



                        </p>
                        </p>

                        <p class="mb-4 my-5">
                            <img src="/site/assets/upload/Logo-AngolaCables-scaled.png" style="height:100px;"
                                class="img-fluid" alt="">

                        <p style="text-align: justify;">
                            A Angola Cables é uma multinacional de telecomunicações, tecnologia e conexões, com
                            escritórios
                            em mais de 3 países, 5 cidades e 135 colaboradores, de vários horizontes e culturas.

                            <br>
                            <br>

                            <a style="background: #ffb400;" target="_blank" href="https://www.angolacables.co.ao/"
                                class="btn btn-sm bg-warning text-dark rounded-pill p-2"> Aceder ao Website</a>



                        </p>
                        </p>

                    </div>

                </div>
            </div>

        </section>




    </section>
    <!-- ====== Contact End ====== -->


@endsection
