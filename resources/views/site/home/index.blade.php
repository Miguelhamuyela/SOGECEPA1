@extends('layouts.merge.site')
@section('titulo', 'Oficial')
@section('content')



    <div class="gdlr-core-pbf-wrapper" style="padding: 58px 0px 0px 0px" id="gdlr-core-wrapper-1">
        <div class="gdlr-core-pbf-background-wrap" style="background-color: #222;"></div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb"
                        style="padding-bottom: 0px">
                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                            data-source="gallery"
                            style="margin: 0px auto; padding: 0px;margin-top: 0px;margin-bottom: 0px;">
                            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner"
                                style="display: none;border-image: linear-gradient(to left, #D7181E 1%, #FECD29 50%, #D7181E 100%) 0 0 100% 0/0 0 6px 0 stretch !important;"
                                data-version="5.4.1">
                                <ul>

                                    @foreach ($slideshows as $item)
                                        <li data-index="rs-{{ $item->id }}" data-transition="fade"
                                            data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                            data-easein="default" data-easeout="default" data-masterspeed="300"
                                            data-thumb="/storage/{{ $item->path }}" data-rotate="0"
                                            data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                                            data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                            data-param8="" data-param9="" data-param10="" data-description="">

                                            <div class="img-gradient">
                                                <img src="/storage/{{ $item->path }}" alt="" title="Homepage 2"
                                                    data-bgposition="center top" data-kenburns="on" data-duration="10000"
                                                    data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110"
                                                    data-rotatestart="0" data-rotateend="0" data-blurstart="0"
                                                    data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0"
                                                    data-bgparallax="off" class="rev-slidebg" data-no-retina="" />
                                            </div>

                                            <div class="tp-caption tp-resizeme" id="slide-2-layer-1" data-x="28"
                                                data-y="center" data-voffset="-20" data-width="['auto']"
                                                data-height="['auto']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style=" z-index: 5; white-space: nowrap; font-size: 128px;  font-weight: 700;color: #ffffff; letter-spacing: 0px; font-family:cambay;">
                                                {{ $item->title }}
                                            </div>
                                            <div class="tp-caption tp-resizeme" id="slide-2-layer-6" data-x="37"
                                                data-y="center" data-voffset="-95" data-width="['auto']"
                                                data-height="['auto']" data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style="  z-index: 6; white-space: nowrap; font-size: 60px;font-weight: 400; color: rgb(255, 180, 0);letter-spacing: 0px; font-family: cambay; ">

                                            </div>
                                            <div class="tp-caption tp-resizeme" id="slide-2-layer-2" data-x="38"
                                                data-y="center" data-voffset="107" data-width="['724']" data-height="['65']"
                                                data-type="text" data-responsive_offset="on"
                                                data-frames='[{"delay":280,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                data-textalign="['inherit','inherit','inherit','inherit']"
                                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                style=" z-index: 7; min-width: 724px; max-width: 724px; max-width: 65px;max-width: 65px;  white-space: normal;  font-size: 20px;line-height: 32px; font-weight: 400;color: #fff;letter-spacing: 0px;  ">
                                                O seu Portal de Informação

                                                <p class="mt-3">
                                                    <a style="background:#ffb400; " target="_blank"
                                                        href="{{ $item->link }}"
                                                        class="btn rounde-circle  text-white">{{ $item->button }}</a>

                                                </p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto bg-dark ">
        <marquee behavior="scroll" class="ng-scope">
            <!-- ngRepeat: not in noticiasRecentes -->
            <span ng-repeat="not in noticiasRecentes" class="ng-scope">

                @if ($news)
                    @foreach ($news as $item)
                        <a class="" target="_blank" href="{!! url('/noticia/' . urlencode($item->title)) !!}"> {!! $item->title !!} </a> |
                    @endforeach

                @endif
            </span>
        </marquee><!-- end ngIf: (noticiasRecentes.length > 0) -->
    </div>

    <div
        style="background-image: url('/site/assets/upload/patern.jpg'); height:9px;  box-shadow: inset 0 0 0 1000px rgb(0 0 0 / 10%); ">

    </div>

    <div class="gdlr-core-pbf-wrapper " style="margin: 10px 0px 0px 0px;padding: 90px 0px 20px 0px;">
        <div class="gdlr-core-pbf-background-wrap">
            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                style="background-repeat: no-repeat;background-position: center;" data-parallax-speed="0.04">
            </div>
        </div>

        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                        style="padding-bottom: 26px;" id="gdlr-core-title-item-id-30511">
                        <div class="gdlr-core-title-item-title-wrap ">
                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                style="font-size: 44px;font-weight: 600;letter-spacing: 0px;text-transform: none;color: #212121;">
                                Investimentos<span
                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                            </h3>
                        </div>
                        <p style="color:#747474">Saiba como investir em Angola</p>
                        </a>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-normal"
                        style="padding-bottom: 55px;">
                        <div class="gdlr-core-divider-container gdlr-core-center-align" style="max-width: 54px;">
                            <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                style="border-color: #ffb400;border-bottom-width: 4px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gdlr-core-pbf-wrapper " style="margin: -15px 0px 0px 0px;padding: 0px 0px 20px 0px;"
        data-skin="Hp2 Cases">
        <div class="gdlr-core-pbf-background-wrap" style="background-color: #363636 ;">
            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" data-parallax-speed="0.1"></div>
        </div>


        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix  gdlr-core-portfolio-item-style-grid-no-space gdlr-core-item-pdlr"
                        style="padding-bottom: 40px;">
                        <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="carousel" data-column="4"
                            data-nav="bullet" data-nav-parent="gdlr-core-portfolio-item" data-disable-autoslide="1">
                            <ul class="slides">
                                <li>
                                    <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-normal">

                                        <div
                                            class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-margin-icon">
                                            <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover">
                                                <img src="/site/assets/upload/img-invest-1.jpg" alt=""
                                                    width="700" height="660">
                                                <span
                                                    class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js gdlr-core-with-margin">
                                                    <span class="gdlr-core-image-overlay-content">
                                                        <span class="gdlr-core-portfolio-icon-wrap">
                                                            <a href="{{ route('site.external') }}">
                                                                <i class="gdlr-core-portfolio-icon fa fa-search">
                                                                </i>
                                                            </a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                            <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title"
                                                style="font-size: 21px;font-weight: 600;letter-spacing: 0px;text-transform: none;">
                                                <a href="{{ route('site.external') }}">
                                                    <p style="color:#ffb400">Diplomático/Externo<p>
                                                </a>
                                            </h3>
                                            <div class="gdlr-core-portfolio-content">
                                                <p style="color: #fff">
                                                    O nosso governo está aberto para o investimento diplomático/externo,
                                                    em varias esfera social e refletindo na manutenção das relações entre
                                                    estados.
                                                </p>
                                            </div>
                                            <div class="gdlr-core-portfolio-read-more-wrap">
                                                <a class="gdlr-core-portfolio-read-more"
                                                    href="{{ route('site.external') }}">
                                                    <span style="color:#ffb400;">
                                                        Ler Mais
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-normal">
                                        <div class="gdlr-core-portfolio-thumbnail   gdlr-core-style-margin-icon">
                                            <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover">
                                                <img src="/site/assets/upload/img-invest-4.jpg" alt=""
                                                    width="700" height="660">
                                                <span
                                                    class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js gdlr-core-with-margin">
                                                    <span class="gdlr-core-image-overlay-content">
                                                        <span class="gdlr-core-portfolio-icon-wrap">
                                                            <a href="{{ route('site.culturalAndTouristic') }}">
                                                                <i class="gdlr-core-portfolio-icon fa fa-search">
                                                                </i>
                                                            </a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                            <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title"
                                                style="font-size: 21px;font-weight: 600;letter-spacing: 0px;text-transform: none;">
                                                <a href="{{ route('site.culturalAndTouristic') }}">
                                                    <p style="color:#ffb400">Cultural/Turístico<p>
                                                </a>
                                            </h3>
                                            <div class="gdlr-core-portfolio-content">
                                                <p style="color: #fff">

                                                    O nosso Governo definiu o Turismo e potencial cultural como umas
                                                    das prioridades para a diversificação da economia do país.

                                                </p>
                                            </div>
                                            <div class="gdlr-core-portfolio-read-more-wrap">
                                                <a class="gdlr-core-portfolio-read-more"
                                                    href="{{ route('site.culturalAndTouristic') }}">
                                                    <span style="color:#ffb400;">Ler Mais
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-normal">
                                        <div
                                            class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-margin-icon">
                                            <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover">
                                                <img src="/site/assets/upload/img-invest-3.jpg" alt=""
                                                    width="700" height="660">
                                                <span
                                                    class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js gdlr-core-with-margin">
                                                    <span class="gdlr-core-image-overlay-content">
                                                        <span class="gdlr-core-portfolio-icon-wrap">
                                                            <a href="{{ route('site.economic') }}"
                                                                data-ilightbox-group="gdlr-core-img-group-1">
                                                                <i class="gdlr-core-portfolio-icon fa fa-search">
                                                                </i>
                                                            </a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                            <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title"
                                                style="font-size: 21px;font-weight: 600;letter-spacing: 0px;text-transform: none;">
                                                <a href="{{ route('site.economic') }}">
                                                    <p style="color:#ffb400">Económico<p>
                                                </a>
                                            </h3>
                                            <div class="gdlr-core-portfolio-content">
                                                <p style="color: #fff">
                                                    A nossa economia está a abrir-se aos investidores,
                                                    impulsionando a diversificação e atrair o interesse de empresas
                                                    estrangeiras activas.
                                                </p>
                                            </div>
                                            <div class="gdlr-core-portfolio-read-more-wrap">
                                                <a class="gdlr-core-portfolio-read-more"
                                                    href="{{ route('site.economic') }}">
                                                    <span style="color:#ffb400;">Ler
                                                        Mais
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-normal">
                                        <div
                                            class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-margin-icon">
                                            <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover">
                                                <img src="/site/assets/upload/img-invest.jpg" alt=""
                                                    width="700" height="660">
                                                <span
                                                    class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js gdlr-core-with-margin">
                                                    <span class="gdlr-core-image-overlay-content">
                                                        <span class="gdlr-core-portfolio-icon-wrap">
                                                            <a href="{{ route('site.investingAngola') }}"
                                                                data-ilightbox-group="gdlr-core-img-group-1">
                                                                <i class="gdlr-core-portfolio-icon fa fa-search">
                                                                </i>
                                                            </a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                            <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title"
                                                style="font-size: 21px;font-weight: 600;letter-spacing: 0px;text-transform: none;">
                                                <a href="{{ route('site.investingAngola') }}">
                                                    <p style="color:#ffb400">Como Investir em Angola<p>
                                                </a>
                                            </h3>
                                            <div class="gdlr-core-portfolio-content">
                                                <p style="color: #fff">

                                                    Para o efeito, deverá conhecer a lei angolana sobre o investimento
                                                    privado,
                                                    estudar o mercado e suas necessidades e empreender.

                                                </p>
                                            </div>
                                            <div class="gdlr-core-portfolio-read-more-wrap">
                                                <a class="gdlr-core-portfolio-read-more"
                                                    href="{{ route('site.investingAngola') }}">
                                                    <span style="color:#ffb400;">Ler Mais
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- ULTIMAS NOTICIAS -->
    <div class="gdlr-core-pbf-wrapper " style="margin: 0px 0px 0px 0px;padding: 95px 0px 0px 0px;">
        <div class="gdlr-core-pbf-background-wrap">
            <div class="gdlr-core-pbf-background gdlr-corfe-parallax gdlr-core-js"
                style="background-repeat: no-repeat;background-position: center;" data-parallax-speed="0.04">
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                        style="padding-bottom: 25px;" id="gdlr-core-title-item-id-65105">
                        <div class="gdlr-core-title-item-title-wrap ">
                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                style="font-size: 44px;font-weight: 600;letter-spacing: 0px;text-transform: none;color: #262626;">
                                Notícias
                                <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                            </h3>
                        </div>
                        <p style="#747474">ÚLTIMAS NOTÍCIAS</p>

                    </div>
                </div>


                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-normal"
                        style="padding-bottom: 42px;">
                        <div class="gdlr-core-divider-container gdlr-core-center-align" style="max-width: 54px;">
                            <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                style="border-color: #ffb400;border-bottom-width: 4px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="gdlr-core-pbf-wrapper " data-skin="Hp2 Blog">
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-column-with-frame gdlr-core-item-pdlr"
                        style="">
                        <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="carousel" data-column="3"
                            data-nav="bullet" data-nav-parent="gdlr-core-blog-item">
                            <ul class="slides" style="width: 1000%; margin-left: 0px;">

                                @foreach ($news as $item)
                                    <li class="gdlr-core-item-mglr"
                                        style="width: 320.333px; margin-right: 40px; float: left; display: block;">
                                        <div class="gdlr-core-blog-grid  gdlr-core-blog-grid-with-frame gdlr-core-item-mgb  gdlr-core-outer-frame-element"
                                            style="box-shadow: 0 0 30px rgba(10, 10, 10,0.07); -moz-box-shadow: 0 0 30px rgba(10, 10, 10,0.07); -webkit-box-shadow: 0 0 30px rgba(10, 10, 10,0.07); ">
                                            <div
                                                class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                <a href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                                                    <img class="img-fluid card-img-top"
                                                        src="/storage/{{ $item->path }}" alt=""
                                                        id="card-img-angola-hoje">
                                                </a>
                                            </div>
                                            <div class="gdlr-core-blog-grid-frame gdlr-core-skin-e-background gdlr-core-js"
                                                data-sync-height="blog-grid-with-frame" style="height: 133px;">
                                                <div class="gdlr-core-blog-grid-date">
                                                    <span
                                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                        <span class="gdlr-core-head">
                                                            <i class="icon_clock_alt"></i>
                                                        </span>
                                                        <a href="#">
                                                            {{ date('d-m-Y', strtotime($item->date)) }}
                                                        </a>
                                                    </span>
                                                </div>
                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                    style="font-size: 18px;font-weight: 600;letter-spacing: 0px;">
                                                    <a style="color:#ffb400;" href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                                                        {{ $item->title }}
                                                    </a>
                                                </h3>
                                                <div style="text-align:justify; ">
                                                    {!! html_entity_decode(mb_substr($item->body, 0, 150, 'UTF-8')) !!}...
                                                    <hr>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ULTIMAS NOTICIAS -->


    <div class="gdlr-core-pbf-wrapper" style="margin: 95px 0px 0px 0px; padding: 110px 0px 225px 0px"
        data-skin="Hp2 Column Service">
        <div class="gdlr-core-pbf-background-wrap">
            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                style="
            background-image: url(/site/assets/upload/img-angosat.png);
            background-size: cover;
            background-position: center;
            /storage/slideshows/rSXlF67dprAVVChEuV2KX5GNMvquNT7CEjEHQNbs.jpg);
             box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 0px 1000px inset;
          "
                data-parallax-speed="0.1"></div>
        </div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js"
                        style=" margin: -210px 0px 0px 0px; padding: 0px 0px 10px 0px;">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                            <div class="gdlr-core-pbf-element">
                                <div
                                    class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align empreende-mobile">
                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-round"
                                        style="background-image:url(/site/assets/upload/Angosat6.jpg);width:731;height:443; box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 0px 1000px inset;">
                                        <div style="height: 300px;">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div
                        class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                        <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"
                            style=" font-size: 15px;
                            font-style: normal;
                            letter-spacing: 1px;
                            text-transform: uppercase;
                            color: #fff;">NOSSO SATÉLITE DE ALTO DESEMPENHO
                        </span>
                        <div class="gdlr-core-title-item-title-wrap">
                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                style="
                                font-size: 44px;
                                font-style: normal;
                                letter-spacing: 0px;
                                text-transform: none;
                                color: #ffffff;">
                                ANGOSAT-2<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-columnize-item gdlr-core-item-pdlr gdlr-core-item-pdb"
                        style="padding-bottom: 20px">
                        <div class=""
                            style="
                            font-size: 19px;
                            font-style: normal;
                            color:#fffffffb;">
                            <p class="">
                                O ANGOSAT-2 é um satélite de alta taxa de transmissão para o mercado Africano, e Sul da
                                Europa. Optimizado para clientes que operam serviços de banda larga, dados, telecomunicações
                                e vídeo...
                            </p>
                        </div>
                        <p class=" mt-5">
                        <div
                            class="d-flex justify-content-center gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                            <a id="button-white"
                                class="gdlr-core-button gdlr-core-button-transparent gdlr-core-button-with-border"
                                href="{{ route('site.angoSat') }}" style=""><span class="gdlr-core-content">Saiba
                                    Mais</span></a>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="gdlr-core-pbf-wrapper" style="margin: -160px 0px 0px 0px; padding: 0px 0px 0px 0px"
        data-skin="Purple Personnel">
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container ">
                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" data-sync-height="half-height"
                        data-sync-height-center="">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #232323;">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="
                        background-image: url(/site/assets/upload/shutterstock_372393523.jpg);
                        opacity: 0.6;
                        background-size: cover;
                        background-position: center;
                      "
                                data-parallax-speed="0"></div>
                        </div>
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js gdlr-core-sync-height-content">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align empreende-mobile"
                                    style="padding-bottom: 0px">
                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle empreende-mobile-video-icon"
                                        style="border-width: 0px">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="gdlr-core-pbf-column gdlr-core-column-30">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 80px 40px 60px 50px"
                        data-sync-height="half-height">
                        <div class="gdlr-core-pbf-background-wrap"
                            style="
                      box-shadow: 0 0 74px rgba(12, 12, 12, 0.07);
                      -moz-box-shadow: 0 0 74px rgba(12, 12, 12, 0.07);
                      -webkit-box-shadow: 0 0 74px rgba(12, 12, 12, 0.07);
                      background-color: #ffffff;
                    ">
                        </div>
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js gdlr-core-sync-height-content">
                            <div class="gdlr-core-pbf-element">
                                <div
                                    class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                    <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"
                                        style="
                            font-size: 15px;
                            font-style: normal;
                            letter-spacing: 2px;
                            text-transform: uppercase;
                            color: #747474;
                          ">O
                                        empreendedorismo</span>
                                    <div class="gdlr-core-title-item-title-wrap">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                            style="
                              font-size: 43px;
                              font-weight: 600;
                              letter-spacing: 0px;
                              text-transform: none;
                              color: black;
                            ">
                                            Telecomunicações e Tecnologias da Informação <span
                                                class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                                    style="padding-bottom: 16px">
                                    <div class="gdlr-core-text-box-item-content" style="font-size: 17px; color: #8285b3">
                                        <p>
                                        <p style="color:#747474">Telecomunicações e Tecnologias da Informação pode ser
                                            definida como um conjunto de recursos
                                            tecnológicos, utilizados de
                                            forma integrada, com um objetivo comum.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div
                                    class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                    <a id="turism-button"
                                        class="gdlr-core-button gdlr-core-button-transparent gdlr-core-button-with-border"
                                        href="{{ route('site.tic') }}"><span class="gdlr-core-content">Saiba
                                            Mais</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">

                    <div class="row">


                        <div class="gdlr-core-pbf-column gdlr-core-column-30 agro-business-letter col-md-6 order-md-2">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js"
                                style="padding: 95px 0px 55px 65px" data-sync-height="half-height-2"
                                data-sync-height-center="">
                                <div class="gdlr-core-pbf-background-wrap" style="background-color: #232323"></div>
                                <div
                                    class="gdlr-core-pbf-column-content clearfix gdlr-core-js gdlr-core-sync-height-content">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                            style="padding-bottom: 10px">
                                            <div class="gdlr-core-title-item-title-wrap">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                                    style="
                              font-size: 42px;
                              font-weight: 600;
                              letter-spacing: 0px;
                              text-transform: none;
                              color: #ffffff;
                            ">
                                                    Agronegócio<span
                                                        class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                                            style="padding-bottom: 7px">
                                            <div class="gdlr-core-text-box-item-content"
                                                style="font-size: 20px; color: #ffffff">
                                                <p>
                                                    O agronegócio se refere a todas as actividades económicas relacionadas
                                                    ao
                                                    comércio de produtos agrícolas.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb">
                                            <ul>
                                                <li class="gdlr-core-skin-divider">
                                                    <span class="gdlr-core-icon-list-icon-wrap"><i
                                                            class="gdlr-core-icon-list-icon icon_check"
                                                            style="
                                  color: #ffffff;
                                  font-size: 17px;
                                  width: 17px;
                                "></i></span><span
                                                        class="gdlr-core-icon-list-content"
                                                        style="color: #bcbcbc; font-size: 17px">O que é e como funciona o
                                                        agronegócio?</span>
                                                </li>
                                                <li class="gdlr-core-skin-divider">
                                                    <span class="gdlr-core-icon-list-icon-wrap"><i
                                                            class="gdlr-core-icon-list-icon icon_check"
                                                            style="
                                  color: #ffffff;
                                  font-size: 17px;
                                  width: 17px;
                                "></i></span><span
                                                        class="gdlr-core-icon-list-content"
                                                        style="color: #bcbcbc; font-size: 17px">A importância do setor do
                                                        agronegócio</span>
                                                </li>
                                                <li class="gdlr-core-skin-divider">
                                                    <span class="gdlr-core-icon-list-icon-wrap"><i
                                                            class="gdlr-core-icon-list-icon icon_check"
                                                            style="
                                  color: #ffffff;
                                  font-size: 17px;
                                  width: 17px;
                                "></i></span><span
                                                        class="gdlr-core-icon-list-content"
                                                        style="color: #bcbcbc; font-size: 17px">O agronegócio em
                                                        Angola</span>
                                                </li>
                                                <li class="gdlr-core-skin-divider">
                                                    <span class="gdlr-core-icon-list-icon-wrap"><i
                                                            class="gdlr-core-icon-list-icon icon_check"
                                                            style="
                                  color: #ffffff;
                                  font-size: 17px;
                                  width: 17px;
                                "></i></span><span
                                                        class="gdlr-core-icon-list-content"
                                                        style="color: #bcbcbc; font-size: 17px">O uso da tecnologia e sua
                                                        importância no agronegócio</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div
                                            class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <a id="white-agro-button"
                                                class="gdlr-core-button gdlr-core-button-solid gdlr-core-button-no-border"
                                                href="{{ route('site.agribusiness') }}"
                                                style="

                            color: #0a0a09;
                            background: #ffffff;
                          "><span
                                                    class="gdlr-core-content">Saiba Mais</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="gdlr-core-pbf-column gdlr-core-column-30 agro-business col-md-6 order-md-1">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js mobile-img-agroBusiness"
                                data-sync-height="half-height-2" data-sync-height-center
                                style="background-image: url(/site/assets/upload/shutterstock_361397258.jpg);
                background-size: cover;
                background-position: center; padding: 95px 0px 55px 65px; height: 581px;">
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>


    <div class="gdlr-core-pbf-wrapper" style="margin: 10px 0px 0px 0px;padding: 90px 0px 20px 0px;">
        <div class="gdlr-core-pbf-background-wrap">
            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                style="
      background-repeat: no-repeat;
      background-position: center;
      color:white;
    "
                data-parallax-speed="0.04"></div>
        </div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                        style="padding-bottom: 27px">
                        <div class="gdlr-core-title-item-title-wrap">
                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                style="
              font-size: 44px;
              font-weight: 600;
              letter-spacing: 0px;
              text-transform: none;
              color: #232323;
            ">
                                Economia<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                            </h3>
                        </div>
                        <span
                            style="
            font-size: 14px;
            font-style: normal;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-top: 5px;

          ">
                            Saiba mais sobre a economia em Angola</span>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-normal"
                        style="padding-bottom: 25px">
                        <div class="gdlr-core-divider-container gdlr-core-center-align" style="max-width: 54px">
                            <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                style="
              border-color: #ffb400;
              border-bottom-width: 4px;
            ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gdlr-core-pbf-wrapper" style="margin: 10px 0px 0px 0px;padding: 90px 0px 20px 0px;">
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-element">

                    <div class="gdlr-core-hover-box-item gdlr-core-item-pdb clearfix gdlr-core-left-align"
                        style="padding-bottom: 20px; border-radius: 10px;">
                        <div id="card-img-angola-hoje-economy"
                            class="gdlr-core-hover-box-column gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-20 card_economy gdlr-core-column-first card_economy ">
                            <div class="gdlr-core-hover-box gdlr-core-outer-frame-element clearfix"
                                style="
              box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
              -moz-box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
              -webkit-box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
            ">
                                <div class="gdlr-core-hover-box-thumbnail-top gdlr-core-media-image">
                                    <img src="/site/assets/upload/hp2-service-1.jpg" alt="" width="700"
                                        height="423" />
                                </div>
                                <div class="gdlr-core-hover-box-content-wrap" style="padding-left: 35px">
                                    <h3 class="gdlr-core-hover-box-title gdlr-core-skin-title"
                                        style="
                  font-size: 20px;
                  text-transform: none;
                  color: #ffb400;

                ">
                                        Economia Azul
                                    </h3>
                                    <div class="gdlr-core-hover-box-content gdlr-core-skin-content"
                                        style="color: #898989">

                                        Pode significar, para o país, a médio e longo prazo um crescimento de 23 por
                                        cento do Produto Interno Bruto (PIB).
                                        <br>
                                        <br>

                                        </p>
                                    </div>
                                </div>
                                <a class="gdlr-core-hover-box-link" href="{{ route('site.blueEconomy') }}"></a>
                            </div>
                        </div>

                        <div id="card-img-angola-hoje-economy"
                            class="gdlr-core-hover-box-column gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-20 card_economy card_economy">
                            <div class="gdlr-core-hover-box gdlr-core-outer-frame-element clearfix"
                                style="
              box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
              -moz-box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
              -webkit-box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
            ">
                                <div class="gdlr-core-hover-box-thumbnail-top gdlr-core-media-image">
                                    <img src="/site/assets/upload/hp2-service-22.jpg" alt="" width="700"
                                        height="423" />
                                </div>
                                <div class="gdlr-core-hover-box-content-wrap" style="padding-left: 35px">
                                    <h3 class="gdlr-core-hover-box-title gdlr-core-skin-title"
                                        style="
                  font-size: 20px;
                  text-transform: none;
                  color: #ffb400;
                ">
                                        Petróleo e Gás
                                    </h3>
                                    <div class="gdlr-core-hover-box-content gdlr-core-skin-content"
                                        style="color: #898989">
                                        <p>
                                            A extracção está concentrada na província de Cabinda mas,
                                            existem reservas offshore bem como onshore noutras partes do país.
                                            <br>
                                            <br>
                                        </p>
                                    </div>
                                </div>
                                <a class="gdlr-core-hover-box-link" href="{{ route('site.oilGa') }}"></a>
                            </div>
                        </div>

                        <div id="card-img-angola-hoje-economy"
                            class="gdlr-core-hover-box-column gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-20 card_economy">
                            <div class="gdlr-core-hover-box gdlr-core-outer-frame-element clearfix"
                                style="
              box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
              -moz-box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
              -webkit-box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
            ">
                                <div class="gdlr-core-hover-box-thumbnail-top gdlr-core-media-image">
                                    <img src="/site/assets/upload/hp2-service-3.jpg" alt="" width="700"
                                        height="423" />
                                </div>
                                <div class="gdlr-core-hover-box-content-wrap" style="padding-left: 35px">
                                    <h3 class="gdlr-core-hover-box-title gdlr-core-skin-title"
                                        style="
                  font-size: 20px;
                  text-transform: none;
                  color: #ffb400;
                ">
                                        Economia Verde
                                    </h3>
                                    <div class="gdlr-core-hover-box-content gdlr-core-skin-content"
                                        style="color: #898989">
                                        <p>
                                            Angola tem como o foco na utilização de energias limpas e a emergência
                                            de uma indústria transformadora.
                                            <br>
                                            <br>

                                        </p>
                                    </div>
                                </div>
                                <a class="gdlr-core-hover-box-link" href="{{ route('site.greenEconomy') }}"></a>
                            </div>
                        </div>


                        <div id="card-img-angola-hoje-economy"
                            class="gdlr-core-hover-box-column gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-20 card_economy gdlr-core-column-first">
                            <div class="gdlr-core-hover-box gdlr-core-outer-frame-element clearfix"
                                style="
              box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
              -moz-box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
              -webkit-box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
            ">
                                <div class="gdlr-core-hover-box-thumbnail-top gdlr-core-media-image">
                                    <img src="/site/assets/upload/hp2-service-4.jpg" alt="" width="700"
                                        height="423" />
                                </div>
                                <div class="gdlr-core-hover-box-content-wrap" style="padding-left: 35px">
                                    <h3 class="gdlr-core-hover-box-title gdlr-core-skin-title"
                                        style="
                  font-size: 20px;
                  text-transform: none;
                  color: #ffb400;
                ">
                                        Sector Bancário
                                    </h3>
                                    <div class="gdlr-core-hover-box-content gdlr-core-skin-content"
                                        style="color: #898989">
                                        <p>
                                            Apresenta um crescimento de 7,3% em número de activos, 6,7%
                                            em número de agências e 6,4% em número de colaboradores.

                                        </p>
                                    </div>
                                </div>
                                <a class="gdlr-core-hover-box-link" href="{{ route('site.bankingArea') }}"></a>
                            </div>
                        </div>
                        <div id="card-img-angola-hoje-economy"
                            class="gdlr-core-hover-box-column gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-20 card_economy">
                            <div class="gdlr-core-hover-box gdlr-core-outer-frame-element clearfix"
                                style="
              box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
              -moz-box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
              -webkit-box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
            ">
                                <div class="gdlr-core-hover-box-thumbnail-top gdlr-core-media-image">
                                    <img src="/site/assets/upload/hp2-service-5526.jpg" alt="" width=""
                                        height="" />
                                </div>
                                <div class="gdlr-core-hover-box-content-wrap" style="padding-left: 35px">
                                    <h3 class="gdlr-core-hover-box-title gdlr-core-skin-title"
                                        style="
                  font-size: 20px;
                  text-transform: none;
                  color: #ffb400;
                ">
                                        Recursos Minerais
                                    </h3>
                                    <div class="gdlr-core-hover-box-content gdlr-core-skin-content"
                                        style="color: #898989">
                                        <p>
                                            Angola possui 36 dos 51 minerais considerados mais críticos ao nível do mundo.
                                            <br>
                                            <br>
                                        </p>
                                    </div>
                                </div>
                                <a class="gdlr-core-hover-box-link" href="{{ route('site.miningResources') }}"></a>
                            </div>
                        </div>
                        <div id="card-img-angola-hoje-economy"
                            class="gdlr-core-hover-box-column gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-20 card_economy">
                            <div class="gdlr-core-hover-box gdlr-core-outer-frame-element clearfix"
                                style="
              box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
              -moz-box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
              -webkit-box-shadow: 0 0 74px rgba(10, 10, 10, 0.07);
            ">
                                <div class="gdlr-core-hover-box-thumbnail-top gdlr-core-media-image">
                                    <img src="/site/assets/upload/hp2-service-66.jpg" alt="" width="700"
                                        height="423" />
                                </div>
                                <div class="gdlr-core-hover-box-content-wrap" style="padding-left: 35px">
                                    <h3 class="gdlr-core-hover-box-title gdlr-core-skin-title"
                                        style="
                  font-size: 20px;
                  text-transform: none;
                  color: #ffb400;
                ">
                                        Energia e Águas
                                    </h3>
                                    <div class="gdlr-core-hover-box-content gdlr-core-skin-content"
                                        style="color: #898989">
                                        <p>
                                            Tem se levado a cabo vários projectos no sector da energia e
                                            águas para continuar na senda da melhor satisfação para o cidadão.
                                            <br>
                                            <br>
                                        </p>
                                    </div>
                                </div>
                                <a class="gdlr-core-hover-box-link" href="{{ route('site.energyWater') }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gdlr-core-pbf-wrapper" style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px">
        <div class="gdlr-core-pbf-background-wrap" style="background-color: #f3f3f3"></div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">


                <div class="gdlr-core-pbf-column gdlr-core-column-30">

                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" data-sync-height="quote-height">
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js mobile-tourism-section"
                            style="
                    background-image: url(/site/assets/upload/home-1-quote.jpg);
                    opacity: 0.9;
                    background-size: cover;
                    background-position: center;
                    width:100%;
                    ">

                        </div>
                    </div>
                </div>


                <div class="gdlr-core-pbf-column gdlr-core-column-30">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js"
                        style="min-height: 500px; padding: 90px 30px 80px 75px" data-sync-height="quote-height"
                        data-sync-height-center="">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js gdlr-core-sync-height-content">
                            <div class="gdlr-core-pbf-element">
                                <div
                                    class="gdlr-core-blockquote-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-large-size">
                                    <div class="gdlr-core-blockquote gdlr-core-info-font">

                                        <div style="font-size: 170px;"
                                            class="gdlr-core-blockquote-item-quote gdlr-core-quote-font gdlr-core-skin-icon">

                                            Turismo
                                        </div>

                                        <div class="gdlr-core-blockquote-item-content-wrap">
                                            <div
                                                class="gdlr-core-blockquote-item-content gdlr-core-skin-content container">
                                                <p style="font-weight: 700;">Em Angola</p>
                                                <p style="font-size: 18px;color:#747474;">

                                                    Conheça as 7 Maravilhas de Angola: Fenda da Tundavala - Huíla, Floresta
                                                    do Mayombe - Cabinda,
                                                    Grutas do Nzenzo - Uíge, Lagoa Carumbo - Lunda Norte, Morro do Môco -
                                                    Huambo, Quedas de Kalandula - Malanje,
                                                    Quedas do Rio Chiumbe - Lunda Sul e muitas outras belezas de Angola.
                                                </p>

                                            </div>
                                            <div class="gdlr-core-pbf-element container">
                                                <div
                                                    class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">

                                                    <a id="turism-button"
                                                        class="gdlr-core-button gdlr-core-button-transparent gdlr-core-button-with-border"
                                                        href="{{ route('site.turism') }}"><span
                                                            class="gdlr-core-content">Saiba Mais</span></a>
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
        </div>
    </div>




    <div class="gdlr-core-pbf-wrapper" style="margin: 10px 0px 0px 0px;padding: 90px 0px 20px 0px;">
        <div class="gdlr-core-pbf-background-wrap">
            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                style="
      background-repeat: no-repeat;
      background-position: center;
      color:white;
    "
                data-parallax-speed="0.04"></div>
        </div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                        style="padding-bottom: 27px">
                        <div class="gdlr-core-title-item-title-wrap">
                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                style="
              font-size: 44px;
              font-weight: 600;
              letter-spacing: 0px;
              text-transform: none;
              color: #232323;
            ">
                                EVENTOS<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                            </h3>
                        </div>
                        <span
                            style="
            font-size: 14px;
            font-style: normal;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-top: 5px;

          ">
                            Saiba sobre os eventos em Angola</span>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div
                        class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-normal">
                        <div class="gdlr-core-divider-container gdlr-core-center-align" style="max-width: 54px">
                            <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                style="
              border-color: #ffb400;
              border-bottom-width: 4px;
            ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="gdlr-core-pbf-wrapper">
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-hover-box-item gdlr-core-item-pdb clearfix gdlr-core-left-align">


                        {{-- Here goes the event --}}



                        <div class="row">

                            @foreach ($event as $item)
                                <div class="example-1  detail grid-item branding col-md-4 col-lg-4 col-12 px-3 mb-5">
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





                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="gdlr-core-pbf-background-wrap">
            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                style="
background-repeat: no-repeat;
background-position: center;
" data-parallax-speed="0.04"></div>
        </div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">


                <div class="gdlr-core-pbf-element">
                    <div
                        class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-normal">
                        <div class="gdlr-core-divider-container gdlr-core-center-align" style="max-width: 54px">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="gdlr-core-pbf-wrapper" data-skin="HP Testimonial">
        <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffb400">
            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                style="
      background-image: url(/site/assets/upload/depoiment-1.png);
      background-size: cover;
      background-position: center;
    "
                data-parallax-speed="0.2"></div>
        </div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" style="max-width: 800px">
                <div class="gdlr-core-pbf-element">
                    <div
                        class="gdlr-core-testimonial-item gdlr-core-item-pdb clearfix gdlr-core-testimonial-style-center gdlr-core-item-pdlr">
                        <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 gdlr-core-nav-style-middle-large"
                            data-type="carousel" data-column="1" data-nav="bullet" data-vcenter-nav="1"
                            data-disable-autoslide="1">
                            <div class="gdlr-core-block-item-title-wrap gdlr-core-center-align gdlr-core-item-mglr"
                                style="margin-bottom: 30px">
                                <div class="gdlr-core-block-item-title-wrap  gdlr-core-center-align gdlr-core-item-mglr"
                                    style="margin-bottom: 30px;">
                                    <div class="gdlr-core-block-item-title-inner">
                                        <h3 class="gdlr-core-block-item-title"
                                            style="font-size: 40px; font-weight: 600; text-transform: none; letter-spacing: 0px; color: rgb(255, 255, 255);"
                                            data-orig-font="48px">Legislação</h3>
                                    </div>
                                    <div
                                        class="gdlr-core-flexslider-nav gdlr-core-round-style gdlr-core-absolute-center gdlr-core-right">

                                    </div>
                                </div>
                                <div
                                    class="gdlr-core-flexslider-nav gdlr-core-round-style gdlr-core-absolute-center gdlr-core-right">
                                </div>
                            </div>
                            <ul class="slides">

                                @foreach ($legislation as $item)
                                    <li class="gdlr-core-item-mglr">
                                        <div class="gdlr-core-testimonial clearfix">
                                            <div class="gdlr-core-testimonial-content-wrap">
                                                <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content "
                                                    style="font-size: 21px; color: #fff">

                                                </div>


                                                <div style=" color: #fff">
                                                    {!! html_entity_decode($item->body) !!}
                                                </div>
                                                <div class="gdlr-core-testimonial-author-wrap clearfix">
                                                    <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon"
                                                        style="color: #ffffff">
                                                        &#8220;
                                                    </div>
                                                    <div class="gdlr-core-testimonial-author-content">
                                                        <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title"
                                                            style="color: #ffffff">
                                                            {{ $item->title }} <br>



                                                        </div>




                                                    </div>



                                                </div>
                                                <br>

                                                <a style="background:#ffb400;" href="{{ route('site.legislation') }}"
                                                    class="btn text-dark rounded-pill">Ver Mais</a>



                                            </div>
                                        </div>
                                    </li>
                                @endforeach



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gdlr-core-pbf-wrapper" style="padding: 90px 0px 60px 0px">
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">

            <div class="gdlr-core-pbf-wrapper" style="margin: 0px 0px 0px 0px; padding: 70px 0px 30px 0px">
                <div class="gdlr-core-pbf-background-wrap" style="background-color: #f2f2f2"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">




                    <div class="clients-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            @foreach ($partner as $item)
                                <div class="swiper-slide">
                                    <a target="_blank" href="{{ $item->link }}">
                                        <img src="/storage/{{ $item->image }}" alt="{{ $item->name }}"
                                            id="img-partners" class="img-fluid">
                                    </a>

                                </div>
                            @endforeach


                        </div>

                    </div>




                </div>
            </div>
        </div>
    </div>





@endsection
