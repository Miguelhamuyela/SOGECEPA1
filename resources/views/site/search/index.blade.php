@extends('layouts.merge.site')
@section('titulo', 'Pesquisar')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">

        <div class="gdlr-core-pbf-wrapper  " style="height: auto; width:100%;">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                    style="background-image: url(&quot;/site/assets/upload/img-background-page.png&quot;); background-size: cover; background-position: center top; height: 500px;">
                </div>
            </div>
            <div class="financity-page-title-wrap  financity-style-custom financity-left-align">
                <div class="financity-header-transparent-substitute" style="height: 183px;"></div>
                <div class="financity-page-title-overlay"></div>
                <div class="financity-page-title-container financity-container">
                    <div class="financity-page-title-content financity-item-pdlr">
                        <h1 class="financity-page-title">Pesquisar</h1>

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
                                    title="Go to Financity." href="http://127.0.0.1:8000" class="home"><span
                                        property="name">Início</span></a>
                                <meta property="position" content="1">
                            </span>•<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    href="{{ route('site.miningResources') }}" class="post post-page"><span
                                        property="name">Pesquisar</span></a>

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
                    </div>

                    @include('extra._VideoImage.index')

                </div>




                <div class="col-md-8 col-12 container">


                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12">


                                <form class="row" action="{{ route('site.search.find') }}">
                                    @csrf

                                    <input type="text" id="rcorners2" placeholder="Digite sua pesquisa..."
                                        value="{{ isset($search) ? $search : '' }}" name="search" required
                                        class="form-control py-2 bg-white">

                                    <button style="background-color:#ffb400;color:#222;border:none;"
                                        class="btn btn-dark my-2  w-50 mx-auto" id="buttonbtn" type="submit"> <svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-search " viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg></i></button>

                                </form>
                                @if ($errors->any())
                                    <small class="mt-1 mb-4 text-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </small>
                                @endif
                            </div>

                        </div>


                        <div class="col-lg-12 my-5">
                            <div class="row">
                                {{-- news --}}
                                @isset($news)
                                    @foreach ($news as $item)
                                        <div class="col-12 my-3">
                                            <a class="text-dark" href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                                                <b>{{ $item->title }}</b class="mb-2"> <br>
                                                <small>{!! html_entity_decode(mb_substr($item->body, 0, 250, 'UTF-8')) !!}...</small>
                                            </a>
                                            <br>
                                            <a href="{{ route('site.news') }}"><span
                                                    class="badge p-2 mt-2">Notícias</span></a>

                                            <hr class="pt-0">
                                        </div>
                                    @endforeach
                                @endisset



                                {{-- events --}}
                                @isset($events)
                                    @foreach ($events as $item)
                                        <div class="col-12 my-3">
                                            <a class="text-dark" href="{!! url('/evento/' . urlencode($item->title)) !!}">
                                                <b>{{ $item->title }}</b> <br>
                                                <small>{!! html_entity_decode(mb_substr($item->body, 0, 250, 'UTF-8')) !!}...</small>
                                            </a>
                                            <br>
                                            <a href="{{ route('site.event') }}"><span
                                                    class="badge p-2 mt-2">Eventos</span></a>

                                            <hr class="pt-0">
                                        </div>
                                    @endforeach
                                @endisset
                                {{-- events --}}




                                {{-- definitions --}}
                                @isset($definitions)
                                    @foreach ($definitions as $item)
                                        <div class="col-12 my-3">
                                            <a class="text-dark" href="{{ route('site.definition') }}">
                                                <b>{{ $item->title }}</b> <br>
                                                <small>{!! html_entity_decode(mb_substr($item->definition, 0, 250, 'UTF-8')) !!}...</small>
                                            </a>
                                            <br>
                                            <a href="{{ route('site.definition') }}"><span class="badge p-2 mt-2">Breve
                                                    Historial
                                                    da ReMA</span></a>

                                            <hr class="pt-0">
                                        </div>
                                    @endforeach
                                @endisset
                                {{-- definitions --}}





                                {{-- MediaLibrarie --}}
                                @isset($mediaLibraries)
                                    @foreach ($mediaLibraries as $item)
                                        <div class="col-12 my-3">
                                            <a class="text-dark" href="{!! url('/mediatecas/' . urlencode($item->provinces)) !!}">
                                                <b>{{ $item->provinces }}</b>
                                            </a>
                                            <br>
                                            <a href="{{ route('site.mediaLibrarires') }}"><span
                                                    class="badge p-2 mt-2">Mediatecas</span></a>
                                            <hr class="pt-0">
                                        </div>
                                    @endforeach
                                @endisset
                                {{-- events --}}




                                @isset($annonces)
                                    @foreach ($annonces as $item)
                                        <div class="col-12 my-3">
                                            <a class="text-dark" href="{!! url('/anuncios/' . urlencode($item->title)) !!}">
                                                <b>{{ $item->title }}</b> <br>
                                                <small>{!! html_entity_decode(mb_substr($item->body, 0, 250, 'UTF-8')) !!}...</small>
                                            </a>
                                            <br>
                                            <a href="{{ route('site.announcent') }}"><span
                                                    style="background: #ffb400;color:#222;"
                                                    class="badge p-2 mt-2">Anúncios</span></a>
                                            <hr class="pt-0">
                                        </div>
                                    @endforeach
                                @endisset

                                {{-- galleries --}}
                                @isset($galleries)
                                    @foreach ($galleries as $item)
                                        <div class="col-12 my-3">
                                            <a class="text-dark" href="{!! route('site.gallery.show', urlencode($item->name)) !!}">
                                                <b>{{ $item->name }}</b>
                                            </a>
                                            <br>
                                            <a href="{{ route('site.gallery') }}"><span
                                                    style="background: #ffb400;color:#222;" class="badge  mt-2">Galeria de
                                                    Fotos</span></a>
                                            <hr class="pt-0">
                                        </div>
                                    @endforeach
                                @endisset

                                {{-- slideshows --}}
                                @isset($slideshows)
                                    @foreach ($slideshows as $item)
                                        <div class="col-12 my-3">
                                            <a class="text-dark" href="{{ $item->link }}">
                                                <b>{{ $item->title }}</b>
                                            </a>
                                            <br>
                                            <a href="{{ route('site.home') }}">
                                                <span style="background: #ffb400;color:#222;" class="badge p-2 mt-2">Notícias
                                                    em Destaque</span>
                                            </a>
                                            <hr class="pt-0">
                                        </div>
                                    @endforeach
                                @endisset

                                @isset($kwenda)
                                    @foreach ($kwenda as $item)
                                        <div class="col-12 my-3">
                                            <a class="text-dark" href="{{ route('site.kwenda') }}">
                                                <p style="text-align:justify;">

                                                    {!! html_entity_decode(mb_substr($item->body, 0, 200, 'UTF-8')) !!}...
                                                </p>
                                            </a>
                                            <br>
                                            <a href="{{ route('site.kwenda') }}">
                                                <span style="background-color: #ffb400;color:#222;" class="badge p-2 mt-2">Ver
                                                    mais </span>
                                            </a>
                                            <hr class="pt-0">
                                        </div>
                                    @endforeach
                                @endisset


                                @isset($visa)
                                    @foreach ($visa as $item)
                                        <div class="col-12 my-3">
                                            <a class="text-dark" href="{{ route('site.visa') }}">
                                                <p style="text-align:justify;">

                                                    {!! html_entity_decode(mb_substr($item->body, 0, 200, 'UTF-8')) !!}...
                                                </p>
                                            </a>
                                            <br>
                                            <a href="{{ route('site.visa') }}">
                                                <span style="background-color: #ffb400;color:#222;" class="badge p-2 mt-2">Ver
                                                    mais </span>
                                            </a>
                                            <hr class="pt-0">
                                        </div>
                                    @endforeach
                                @endisset


                                @isset($cloudGovern)
                                    @foreach ($cloudGovern as $item)
                                        <div class="col-12 my-3">
                                            <a class="text-dark" href="{{ route('site.governCloud') }}">
                                                <p style="text-align:justify;">

                                                    {!! html_entity_decode(mb_substr($item->body, 0, 200, 'UTF-8')) !!}...
                                                </p>
                                            </a>
                                            <br>
                                            <a href="{{ route('site.governCloud') }}">
                                                <span style="background-color: #ffb400;color:#222;" class="badge p-2 mt-2">Ver
                                                    mais </span>
                                            </a>
                                            <hr class="pt-0">
                                        </div>
                                    @endforeach
                                @endisset



                                @isset($tourism)
                                    @foreach ($tourism as $item)
                                        <div class="col-12 my-3">
                                            <a class="text-dark" href="{{ route('site.turism') }}">
                                                <p style="text-align:justify;">

                                                    {!! html_entity_decode(mb_substr($item->body, 0, 200, 'UTF-8')) !!}...
                                                </p>
                                            </a>
                                            <br>
                                            <a href="{{ route('site.turism') }}">
                                                <span style="background-color: #ffb400;color:#222;" class="badge p-2 mt-2">Ver
                                                    mais </span>
                                            </a>
                                            <hr class="pt-0">
                                        </div>
                                    @endforeach
                                @endisset



                                @isset($angosat)
                                    @foreach ($angosat as $item)
                                        <div class="col-12 my-3">
                                            <a class="text-dark" href="{{ route('site.angoSat') }}">
                                                <p style="text-align:justify;">

                                                    {!! html_entity_decode(mb_substr($item->body, 0, 200, 'UTF-8')) !!}...
                                                </p>
                                            </a>
                                            <br>
                                            <a href="{{ route('site.angoSat') }}">
                                                <span style="background-color: #ffb400;color:#222;" class="badge p-2 mt-2">Ver
                                                    mais </span>
                                            </a>
                                            <hr class="pt-0">
                                        </div>
                                    @endforeach
                                @endisset


                                @isset($lobitoCorridor)
                                    @foreach ($lobitoCorridor as $item)
                                        <div class="col-12 my-3">
                                            <a class="text-dark" href="{{ route('site.lobitoCorridor') }}">
                                                <p style="text-align:justify;">

                                                    {!! html_entity_decode(mb_substr($item->body, 0, 200, 'UTF-8')) !!}...
                                                </p>
                                            </a>
                                            <br>
                                            <a href="{{ route('site.lobitoCorridor') }}">
                                                <span style="background-color: #ffb400;color:#222;" class="badge p-2 mt-2">Ver
                                                    mais </span>
                                            </a>
                                            <hr class="pt-0">
                                        </div>
                                    @endforeach
                                @endisset


                                @isset($damLauca)
                                    @foreach ($damLauca as $item)
                                        <div class="col-12 my-3">
                                            <a class="text-dark" href="{{ route('site.damLauca') }}">
                                                <p style="text-align:justify;">

                                                    {!! html_entity_decode(mb_substr($item->body, 0, 200, 'UTF-8')) !!}...
                                                </p>
                                            </a>
                                            <br>
                                            <a href="{{ route('site.damLauca') }}">
                                                <span style="background-color: #ffb400;color:#222;" class="badge p-2 mt-2">Ver
                                                    mais </span>
                                            </a>
                                            <hr class="pt-0">
                                        </div>
                                    @endforeach
                                @endisset

                                @isset($damCaculoCabaca)
                                    @foreach ($damCaculoCabaca as $item)
                                        <div class="col-12 my-3">
                                            <a class="text-dark" href="{{ route('site.damCaculoCabaca') }}">
                                                <p style="text-align:justify;">

                                                    {!! html_entity_decode(mb_substr($item->body, 0, 200, 'UTF-8')) !!}...
                                                </p>
                                            </a>
                                            <br>
                                            <a href="{{ route('site.damCaculoCabaca') }}">
                                                <span style="background-color: #ffb400;color:#222;" class="badge p-2 mt-2">Ver
                                                    mais </span>
                                            </a>
                                            <hr class="pt-0">
                                        </div>
                                    @endforeach
                                @endisset

                                @isset($photovoltaicPlant)
                                    @foreach ($photovoltaicPlant as $item)
                                        <div class="col-12 my-3">
                                            <a class="text-dark" href="{{ route('site.photovoltaicPlant') }}">
                                                <p style="text-align:justify;">

                                                    {!! html_entity_decode(mb_substr($item->body, 0, 200, 'UTF-8')) !!}...
                                                </p>
                                            </a>
                                            <br>
                                            <a href="{{ route('site.photovoltaicPlant') }}">
                                                <span style="background-color: #ffb400;color:#222;" class="badge p-2 mt-2">Ver
                                                    mais </span>
                                            </a>
                                            <hr class="pt-0">
                                        </div>
                                    @endforeach
                                @endisset

                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>

    </section>

@endsection
