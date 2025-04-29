@extends('layouts.merge.site')
@section('titulo', ' Notícia')
@section('content')


    <section class="ud-page-banner bg-white">

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
                        <h6 class="text-white">{{ $news->title }}</h6>
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
                                                    href="#">{{ date('d-m-Y', strtotime($item->dateEvent)) }}
                                                </a></span><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach




                        </div>

                        @include('extra._VideoImage.index')

                    </div>


                </div>



                <div class="col-md-8 col-12 container">

                    <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-60 gdlr-core-column-first">
                        <div class="gdlr-core-blog-grid ">
                            <div style="border-radius:1%;"
                                class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                <a href="#"><img id="img-news" src="/storage/{{ $news->path }}" alt=""
                                        width="700" height="450"></a>
                            </div>
                            <div class="gdlr-core-blog-grid-content-wrap">
                                <div class="gdlr-core-blog-grid-date"><span
                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                            class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a
                                            href="#">{{ date('d m Y', strtotime($news->date)) }}</a></span>
                                </div>
                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                    style="font-size: 23px;font-weight: 600;letter-spacing: 0px;"><a
                                        href="#">{{ $news->title }}</a></h3>
                                <div class="gdlr-core-blog-content"> {!! html_entity_decode($news->body) !!}
                                    <div class="clear"></div><a
                                        class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                        href="#">Read More</a>
                                </div>
                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"
                                    data-sync-height-offset=""><span
                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span
                                            class="gdlr-core-head"><i class="icon_documents_alt"></i></span><a
                                            href="#" rel="author">{{ $news->typewriter }}</a></span><span
                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><span
                                            class="gdlr-core-head"></span></span><span
                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment-number">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>



    </section>


@endsection
