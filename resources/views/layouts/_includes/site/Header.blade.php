<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="UTF-8">

    <title>Angola Hoje - Portal de Informação - @yield('titulo')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="title" content="Portal de Informação" />
    <meta name="description" content="Portal de Informação" />
    <meta name="keywords" content="Portal de Informação" />

    <meta property="og:title" content="Portal de Informação" />
    <meta property="og:site_name" content="Portal de Informação" />
    <meta property="og:description" content="Portal de Informação" />
    <meta property="og:type" content="article" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/logotipo/icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/logotipo/icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/logotipo/icon.png">


    {{-- That is Sweetalert --}}
    {{-- sweetalert --}}
    <link rel="stylesheet" href="/css/sweetalert2.css">
    <script src="/js/sweetalert2.all.min.js"></script>



    <!-- ===== All CSS files ===== -->
    <!-- CSS do Bootstrap (coloque no head) -->
    <link rel="stylesheet" href="/site/css/bootstrap.min.css">


    <link rel="stylesheet" href="/site/assets/plugins/revslider/public/assets/css/settings.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="/site/assets/css/style-core.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/site/assets/css/financity-style-custom.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/site/assets/plugins/goodlayers-core/plugins/combine/style.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="/site/assets/plugins/goodlayers-core/include/css/page-builder.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="/site/css/owl.carousel.min.css">

    <link rel="stylesheet"
        href="/site/css/cdnjs.cloudflare.com_ajax_libs_OwlCarousel2_2.3.4_assets_owl.theme.default.min.css" />

    <link rel="stylesheet" href="/site/css/bootstrap.min.css">



    <link rel="stylesheet" href="/site/assets/font/bootstrap-icons.css" type="text/css" media="all" />

    <link rel="stylesheet" href="/site/assets/css/swipper.css">


    {!! RecaptchaV3::initJs() !!}



    <style>
        .province {
            color: #000000;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            font-stretch: normal;
            font-size: medium;
            line-height: normal;
            font-family: sans-serif;
            font-variant-ligatures: normal;
            font-variant-position: normal;
            font-variant-caps: normal;
            font-variant-numeric: normal;
            font-variant-alternates: normal;
            font-variant-east-asian: normal;
            font-feature-settings: normal;
            font-variation-settings: normal;
            text-indent: 0;
            text-align: start;
            text-decoration: none;
            text-decoration-line: none;
            text-decoration-style: solid;
            text-decoration-color: #000000;
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            writing-mode: lr-tb;
            direction: ltr;
            text-orientation: mixed;
            dominant-baseline: auto;
            baseline-shift: baseline;
            text-anchor: start;
            white-space: normal;
            shape-padding: 0;
            shape-margin: 0;
            inline-size: 0;
            clip-rule: nonzero;
            display: inline;
            overflow: visible;
            visibility: visible;
            isolation: auto;
            mix-blend-mode: normal;
            color-interpolation: sRGB;
            color-interpolation-filters: linearRGB;
            solid-color: #000000;
            solid-opacity: 1;
            vector-effect: none;
            fill: orange;
            fill-opacity: 1;
            fill-rule: nonzero;
            /* stroke:none;
            stroke-width:1; */
            stroke: white;
            stroke-width: 20;
            stroke-linecap: butt;
            stroke-linejoin: miter;
            stroke-miterlimit: 4;
            stroke-dasharray: none;
            stroke-dashoffset: 0;
            stroke-opacity: 1;
            color-rendering: auto;
            image-rendering: auto;
            shape-rendering: auto;
            text-rendering: auto;
            enable-background: accumulate;
            stop-color: #000000;
        }

        .province:hover {
            fill: #D7181E;
            stroke: red;
        }

        .tooltip-inner {
            background-color: #222;
            /* Cor de fundo */
            color: #FECD29;
            /* Cor do texto */
            border: 1px solid #FECD29;
            /* Borda do Tooltip */
            white-space: pre-line; /* Permite quebras de linha */
        }
    </style>


    @yield('CSSJS')


    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0PTLWLWJ7E"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0PTLWLWJ7E');
</script>

</head>

<body>

    @include('extra._translate.index')
