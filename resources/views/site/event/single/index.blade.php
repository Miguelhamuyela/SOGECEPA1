@extends('layouts.merge.site')
@section('titulo', ' Eventos')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">

        <div class="gdlr-core-pbf-wrapper  gdlr-core-hide-in-mobile shadow-sm" style="height:500px; width:100%;">
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
                        <h1 class="financity-page-title">Eventos</h1>

                    </div>
                </div>
            </div>
        </div>


        <div class="gdlr-core-pbf-wrapper " style="padding: 10px 0px 10px 40px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color:#ffb400;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-breadcrumbs-item gdlr-core-item-pdlr gdlr-core-item-pdb ">

                            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    title="Go to Financity." href="{{ route('site.home') }}" class="home"><span
                                        property="name">Início</span></a>
                                <meta property="position" content="1">
                            </span>


                            •
                            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    href="#" class="post post-page"><span property="name">Cultura e Turismo</span></a>

                            </span>

                            •


                            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    href="#" class="post post-page"><span property="name">Turismo</span></a>

                            </span>



                            •

                            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    href="{{ route('site.event') }}" class="post post-page"><span
                                        property="name">Eventos</span></a>

                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row my-5 flex-column-reverse flex-lg-row">

                <div class="col-md-4 col-12 mobile-left-side">
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



                    <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-60 gdlr-core-column-first">
                        <div class="gdlr-core-blog-grid ">
                            <div style="border-radius:1%;"
                                class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                <a href="#"><img id="img-news" src="/storage/{{ $events->path }}" alt=""
                                        width="700" height="450"></a>
                            </div>
                            <div class="gdlr-core-blog-grid-content-wrap">


                                <div class="container my-4">
                                    <div class="row">

                                        <div class="col-12 col-md-4">
                                            <b style="color: #222;">Data: </b>
                                            {{ date('d - m - Y', strtotime($events->dateEvent)) }}


                                        </div>

                                        <div class="col-12 col-md-4">
                                            <b style="color: #222;">Horário: </b> {{ $events->startTime }}h -
                                            {{ $events->endTime }}h


                                        </div>

                                        <div class="col-12 col-md-4">
                                            <b style="color:#222;">Local: </b> {{ $events->localization }}
                                        </div>

                                    </div>
                                </div>

                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                    style="font-size: 23px;font-weight: 600;letter-spacing: 0px;"><a
                                        href="#">{{ $events->title }}</a></h3>
                                <div style="text-align:justify;" class="gdlr-core-blog-content"> {!! html_entity_decode($events->body) !!}
                                    <div class="clear"></div>
                                </div>
                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"
                                    data-sync-height-offset="">

                                    <span
                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><span
                                            class="gdlr-core-head"></span></span><span
                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment-number">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row ">


                            <div class="col-lg-1 button-share-event">
                                <div class="fb-share-button"
                                    data-href="https://angolahoje.ao/evento/{{ $events->title }}" data-layout="button"
                                    data-size="large">
                                    <a style="background: rgba(57,87,155,255);" class="p-3 text-white" target="_blank"
                                        href="https://www.facebook.com/sharer/sharer.php?u=https://angolahoje.ao/evento/{{ $events->title }}&amp;src=sdkpreparse"
                                        class="fb-xfbml-parse-ignore">

                                        <i class="fa fa-facebook"></i>

                                    </a>
                                </div>
                            </div>




                            <div class="col-lg-1 button-share-event">
                                <div id="linkedin-share-button" onclick="shareOnLinkedIn()">
                                    <a style="background: rgba(0,117,184,255);" class="p-3 text-white" target="_blank"
                                        class="fb-xfbml-parse-ignore">

                                        <i class="fa fa-linkedin"></i>

                                    </a>
                                </div>
                            </div>






                        </div>


                    </div>

                </div>




            </div>

        </div>


    </section>



@endsection
