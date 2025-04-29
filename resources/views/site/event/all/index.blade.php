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
                                    href="{{ route('site.event') }}" class="post post-page"><span
                                        property="name">Eventos</span></a>

                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <div class="container">
        <div class="row my-5 flex-column-reverse flex-lg-row">


            <div class="col-md-4 col-12 ">
                @include('extra._calendar.index')

                @include('extra._tags.index')
                @include('extra._publicity.index')





                <div id="gdlr-core-recent-post-widget-4 "
                    class="widget widget_gdlr-core-recent-post-widget financity-widget mt-5">
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


                    <h6 class="financity-widget-title">Últimos Eventos</h6>
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

                <div class="row">

                    @if ($events)
                        @foreach ($events as $item)
                            <div class="example-1  detail grid-item branding col-md-6 col-lg-6 col-12 px-3 mb-5">
                                <div class="wrapper shadow-sm  image"
                                    style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;   box-shadow: 0 5px 30px 10px rgba(0, 0, 0, 0.3);'>
                                    <div class="date">
                                        <span class="day">{{ date('d', strtotime($item->dateEvent)) }}</span>
                                        <span class="month">{{ date('m', strtotime($item->dateEvent)) }}</span>
                                        <span class="year">{{ date('Y', strtotime($item->dateEvent)) }}</span>
                                    </div>
                                    <div class="data">
                                        <div class="content" style="border-radius: 5px;">

                                            <h5 class="title "><a href="{!! url('/evento/' . urlencode($item->title)) !!}">
                                                    {!! mb_substr($item->title, 0, 30, 'UTF-8') !!}... </a>
                                            </h5>
                                            <p class="">
                                            <div class="">

                                                <b style="color: #222;">Horário: </b> {{ $item->startTime }}h -
                                                {{ $item->endTime }}h <br>
                                                <b style="color:#222;">Local: </b> {{ $item->localization }} <br>

                                                <a style="background: #ffb400;" href="{!! url('/evento/' . urlencode($item->title)) !!}"
                                                    class="btn btn-sm text-white mb-3">Saiba mais</a>
                                            </div>



                                            </p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
                @endif

                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 py-5">
                            <b>{{ $events->links() }}</b>
                        </div>
                    </div>
                </div>


            </div>



        </div>



    </div>

@endsection
