@extends('layouts.merge.site')
@section('titulo', ' Galeria de Imagens')
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
                        <h1 class="financity-page-title">Galeria de Imagens</h1>

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
                            </span>•

                            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    title="Go to Financity." href="#" class="home"><span
                                        property="name">Angola</span></a>
                                <meta property="position" content="1">
                            </span> •
                            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    title="Go to Financity." href="#" class="home"><span
                                        property="name">Galeria</span></a>
                                <meta property="position" content="1">
                            </span>


                            •<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    title="Go to Our Services." href="{{ route('site.gallery') }}"
                                    class="post post-page"><span property="name">Galeria de Imagens</span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- Here Goes The content of page --}}


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

                    <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix  gdlr-core-portfolio-item-style-modern"
                                style="padding-bottom: 10px;">
                                <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 clearfix"
                                    data-layout="fitrows">



                                    @foreach ($galleries as $item)
                                        <div class="gdlr-core-item-list  gdlr-core-column-30 ">
                                            <div class="gdlr-core-portfolio-modern">
                                                <div
                                                    class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title">
                                                    <div class="gdlr-core-portfolio-thumbnail-image-wrap "><img
                                                            src="/storage/{{ $item->cover }}" alt="{{ $item->name }}"
                                                            id="card-img-angola-hoje-news"><span
                                                            class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"><span
                                                                class="gdlr-core-image-overlay-content"
                                                                style="margin-top: -12px;"><span
                                                                    class="gdlr-core-portfolio-title gdlr-core-title-font"
                                                                    style="font-size: 17px;font-weight: 600;letter-spacing: 1px;text-transform: none;"><a
                                                                        href="{!! url('/galeria-de-imagens/' . urlencode($item->name)) !!}">{{ $item->name }}</a></span></span>
                                                        </span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach







                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>





    </section>
    <!-- ====== news End ====== -->



@endsection
