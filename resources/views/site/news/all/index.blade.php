@extends('layouts.merge.site')
@section('titulo', ' Notícias')
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
                        <h1 class="financity-page-title">Notícias</h1>

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
                                    href="{{ route('site.news') }}" class="post post-page"><span
                                        property="name">Notícias</span></a>

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
                                                    href="#">{{ date('d-m-Y', strtotime($item->dateEvent)) }}</a></span><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach




                        </div>
                    </div>


                    @include('extra._VideoImage.index')




                </div>




                <div class="col-md-8 col-12 container float-left">

                    <div
                        class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                        <div
                            class="gdlr-core-pbf-sidebar-content  gdlr-core-column-60 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right">
                            <div class="gdlr-core-pbf-background-wrap" style="background-color:  ;"></div>
                            <div class="gdlr-core-pbf-sidebar-content-inner">
                                <div class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full-with-frame">
                                        <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix"
                                            data-layout="fitrows">

                                            @foreach ($news as $item)
                                                <div
                                                    class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-pdlr gdlr-core-style-left">
                                                    <div style="border-radius:2%;"
                                                        class="gdlr-core-blog-thumbnail gdlr-core-media-image   gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                                                            <img src="/storage/{{ $item->path }}" class="img-fluid"
                                                                alt="" width="900" height="500">

                                                        </a>
                                                    </div>
                                                    <div style="border-radius:2%;"
                                                        class="gdlr-core-blog-full-frame gdlr-core-skin-e-background shadow-sm">
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class="gdlr-core-blog-full-head-right">

                                                                <div class="row">
                                                                    <div class="container">

                                                                        <div class="col-md-12 col-12">
                                                                            <div>
                                                                                <h5 class="text-dark">
                                                                                    <a class="text-dark"
                                                                                        href="{!! url('/noticia/' . urlencode($item->title)) !!}">{{ $item->title }}</a>
                                                                                </h5>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                    <span
                                                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                                                            class="gdlr-core-head"><i
                                                                                class="icon_clock_alt"></i></span><a
                                                                            href="#">{{ date('d-m-Y', strtotime($item->date)) }}</a></span>
                                                                    <span
                                                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span
                                                                            class="gdlr-core-head"><i
                                                                                class="icon_documents_alt"></i></span><a
                                                                            href="#"
                                                                            rel="author">{{ $item->typewriter }}</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="text-align: justify;" class="gdlr-core-blog-content">
                                                            {!! html_entity_decode(mb_substr($item->body, 0, 200, 'UTF-8')) !!}...
                                                            <div class="clear"></div>

                                                            <a class="btn bg-dark text-white "
                                                                href="{!! url('/noticia/' . urlencode($item->title)) !!}">Ler mais</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach


                                            <div class="col-12">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-4 py-5">
                                                        <b>{{ $news->links() }}</b>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>



                                    </div>
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
