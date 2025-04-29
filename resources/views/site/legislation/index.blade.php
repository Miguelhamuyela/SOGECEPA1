@extends('layouts.merge.site')
@section('titulo', 'Legislação')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">

        <div class="gdlr-core-pbf-wrapper  " style="height: auto; width:100%;">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                    style="background-image: url(/site/assets/upload/img-background-page.png);background-size: cover;background-position: top center;height:500pxwdth:100%;
                data-parallax-speed=0">
                </div>
            </div>
            <div class="financity-page-title-wrap  financity-style-custom financity-left-align">
                <div class="financity-header-transparent-substitute"></div>
                <div class="financity-page-title-overlay"></div>
                <div class="financity-page-title-container financity-container">
                    <div class="financity-page-title-content financity-item-pdlr">
                        <h1 class="financity-page-title">Legislação</h1>

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
                                    href="#" class="post post-page"><span property="name">Política
                                        Institucional</span></a>


                                •<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                        href="{{ route('site.legislation') }}" class="post post-page"><span
                                            property="name">Legislação</span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">

            <div class="row my-5 flex-column-reverse flex-lg-row">

                <div class="col-md-4 col-12 ">
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



                    <div style="text-align: justify;" class="">
                        {!! html_entity_decode($legislationText->body) !!}
                    </div>

                    @foreach ($legislation as $item)
                        <div class="col-xs-6 col-md-12 mt-4">


                            <div class="accordion" id="accordionExample-{{ $item->id }}">


                                <div class="accordion-item">
                                    <h2 class="accordion-header bg-light" id="heading-{{ $item->id }}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-{{ $item->id }}" aria-expanded="true"
                                            aria-controls="collapse-{{ $item->id }}">
                                            {{ $item->title }}
                                        </button>
                                    </h2>

                                    <div id="collapse-{{ $item->id }}" class="accordion-collapse collapse bg-light"
                                        aria-labelledby="heading-{{ $item->id }}"
                                        data-bs-parent="#accordionExample-{{ $item->id }}">
                                        <div class="accordion-body">

                                            <p>
                                                {!! html_entity_decode($item->body) !!}
                                            </p>

                                            <a style="background:rgba(138, 29, 29,0.1) !important;" target="_blank"
                                                class="btn  text-dark" href="/storage/{{ $item->file }}">
                                                <i class="bi bi-download"></i> {{ $item->nameFile }}
                                            </a>

                                        </div>
                                    </div>

                                </div>


                            </div>
                    @endforeach
                    <!-- End Row -->
                    <div class="row">
                        <div class="col-lg-4 mx-auto mt-5">
                            <h4 class="text-center"><b>{{ $legislation->links() }}</b></h4>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section>
@endsection
