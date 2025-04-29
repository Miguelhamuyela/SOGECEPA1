@extends('layouts.merge.site')
@section('titulo', 'Sobre Nos')
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
                    <div class="financity-page-title-content financity-item-pdlr">
                        <h1 class="financity-page-title">Sobre Nós</h1>

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
                            </span>•<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    href="{{ route('site.aboutus') }}" class="post post-page"><span property="name">Sobre
                                        Nós</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="ud-page-banner">

            <div class="container">

                <div class="row my-5 flex-column-reverse flex-lg-row">

                    <div class="col-md-4 col-12">
                        <div class=" shadow p-3 mb-5 bg-white rounded"
                            style="width: 280px; border-top: 3px solid #ffb400 ; ">

                            <ul class="list-unstyled ps-0">
                                <h6 class=""> Angola Hoje</h6>
                                <hr style="color: #ffb400; padding:2px;" class="">

                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                        aria-expanded="false">
                                        Início
                                    </button>
                                    <div class="collapse" id="dashboard-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="{{ route('site.home') }}" class="link-dark rounded text-dark"> <i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Início</a></li>

                                        </ul>
                                    </div>
                                </li>


                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#dashboard-about" aria-expanded="false">
                                        Sobre Nós
                                    </button>

                                    <div class="collapse" id="dashboard-about">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="http://127.0.0.1:8000" class="link-dark text-dark rounded"><i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Sobre Nós</a></li>

                                        </ul>
                                    </div>
                                </li>


                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#dashboard-angola" aria-expanded="false">
                                        Angola
                                    </button>
                                    <div class="collapse" id="dashboard-angola">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="http://127.0.0.1:8000" class="link-dark text-dark rounded"><i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Sobre Angola</a></li>
                                            <li><a href="http://127.0.0.1:8000" class="link-dark text-dark rounded"><i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Turismo</a></li>
                                            <li><a href="http://127.0.0.1:8000" class="link-dark text-dark rounded"><i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Legislação</a></li>
                                            <li><a href="http://127.0.0.1:8000" class="link-dark text-dark rounded"><i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Angosat</a></li>

                                        </ul>
                                    </div>
                                </li>

                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#dashboard-news" aria-expanded="false">
                                        Notícias
                                    </button>
                                    <div class="collapse" id="dashboard-news">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="http://127.0.0.1:8000/noticias"
                                                    class="link-dark text-dark rounded"> <i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Notícias</a></li>

                                        </ul>
                                    </div>
                                </li>



                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#dashboard-angola-today"
                                        aria-expanded="false">
                                        Angola Hoje
                                    </button>
                                    <div class="collapse" id="dashboard-angola-today">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <p class="mt-2">
                                            </p>
                                            <h6> <b>Economia</b></h6>
                                            <hr style="color: #ffb400; padding:2px;" class="">
                                            <p></p>

                                            <li><a href="http://127.0.0.1:8000/noticias"
                                                    class="link-dark text-dark rounded"> <i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Mineração</a></li>
                                            <li><a href="http://127.0.0.1:8000/noticias"
                                                    class="link-dark text-dark rounded"> <i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Petróleo e Gás</a></li>
                                            <li><a href="http://127.0.0.1:8000/noticias"
                                                    class="link-dark text-dark rounded"> <i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Economia Azul</a></li>
                                            <li><a href="http://127.0.0.1:8000/noticias"
                                                    class="link-dark text-dark rounded"> <i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Economia Verde</a></li>
                                            <li><a href="http://127.0.0.1:8000/noticias"
                                                    class="link-dark text-dark rounded"> <i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Energia e Águas</a></li>

                                            <li><a href="http://127.0.0.1:8000/noticias"
                                                    class="link-dark text-dark rounded"> <i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Educação Financeira</a></li>

                                            <p class="mt-2">
                                            </p>
                                            <h6><b>Empreendedorismo</b></h6>
                                            <hr style="color: #ffb400; padding:2px;" class="">
                                            <p></p>

                                            <li><a href="http://127.0.0.1:8000/noticias"
                                                    class="link-dark text-dark rounded"> <i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Agronegócio</a></li>
                                            <li><a href="http://127.0.0.1:8000/noticias"
                                                    class="link-dark text-dark rounded"> <i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> TIC</a></li>

                                            <p class="mt-2">
                                            </p>
                                            <h6><b>Investimentoss</b></h6>
                                            <hr style="color: #ffb400; padding:2px;" class="">
                                            <p></p>

                                            <li><a href="http://127.0.0.1:8000/noticias"
                                                    class="link-dark text-dark rounded"> <i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Externo</a></li>
                                            <li><a href="http://127.0.0.1:8000/noticias"
                                                    class="link-dark text-dark rounded"> <i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Diplomático</a></li>
                                            <li><a href="http://127.0.0.1:8000/noticias"
                                                    class="link-dark text-dark rounded"> <i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Economico</a></li>
                                            <li><a href="http://127.0.0.1:8000/noticias"
                                                    class="link-dark text-dark rounded"> <i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Como Investir em Angola</a></li>


                                            <p class="mt-2">
                                            </p>
                                            <h6><b>Galeria</b></h6>
                                            <hr style="color: #ffb400; padding:2px;" class="">
                                            <p></p>

                                            <li><a href="http://127.0.0.1:8000/galerias"
                                                    class="link-dark text-dark rounded"> <i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Galeria de Imagens</a></li>
                                            <li><a href="http://127.0.0.1:8000/galerias"
                                                    class="link-dark text-dark rounded"> <i
                                                        style="font-size: 12px;color:#ffb400;"
                                                        class="bi bi-chevron-right "></i> Galeria de Videos</a></li>

                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>




                    <div class="col-md-8 col-12 container">



                        <div style="text-align: justify;" class="">
                            Texto em Legislação
                        </div>

                        <!-- End Row -->
                        <div class="row">
                            <div class="col-lg-4 mx-auto mt-5">
                                <h4 class="text-center"><b></b></h4>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </section>




    </section>
    <!-- ====== Contact End ====== -->


@endsection
