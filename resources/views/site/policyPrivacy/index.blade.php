@extends('layouts.merge.site')
@section('titulo', 'Termos de Uso & Políticas de Privacidade')
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
                        <h1 class="financity-page-title">Termos de Uso & Políticas de Privacidade</h1>

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
                                    href="#" class="post post-page"><span property="name">Estatística</span></a>

                            </span>•<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    href="#" class="post post-page"><span property="name">Macroeconomia</span></a>

                            </span>•<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    href="{{ route('site.policyPrivacy') }}" class="post post-page"><span
                                        property="name">Termos de Uso & Políticas de Privacidade</span></a>

                            </span>
                        </div>
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

                    <div class="">
                        <p class="">
                            A Política de Privacidade e Proteção de Dados Pessoais, complementares aos Termos e
                            Condições de
                            Utilização,
                            destina-se a regular o processo de tratamento de dados pessoais a realizar pelo Angola Hoje por
                            conta da
                            utilização
                            deste website. <br>




                            Constituem dados recolhidos, os seguintes:
                        <ul class="mt-3">
                            <li>Dados fornecidos diretamente pelo titular;</li>
                            <li>Dados recolhidos no âmbito da relação constituída com o titular desses dados;</li>
                            <li>Dados pessoais solicitados ao titular tratados com o seu consentimento;</li>
                        </ul>
                        </p>
                        <p class="mt-2">
                            O tratamento de dados pessoais inclui o registo, recolha, consulta, utilização, adaptação,
                            alteração,
                            armazenamento, destruição dos dados, entre outras operações.
                            <br> <br>

                            <b>Finalidades</b> <br>
                            A utilização dos dados recolhidos deve tercomo finalidades:
                        <ul class="mt-3">
                            <li> A prestação de serviços solicitados pelo titular;</li>
                            <li>Fornecer informação sobre produtos, serviços, atividades de marketing,
                                campanhas,
                                promoções, fins estatísticos e conteúdos personalizados, mediante o consentimento prévio
                                para o
                                efeito.</li>
                        </ul>



                        <br><br>
                        O Angola Hoje não efetuará o tratamento de dados pessoais que revelem a origem racial ou étnica, as
                        opiniões
                        políticas, as convicções religiosas ou filosóficas, ou a filiação sindical, bem como o
                        tratamento de
                        dados genéticos, dados biométricos para identificar uma pessoa de forma inequívoca, dados
                        relativos à
                        saúde ougénero.

                        <br><br>
                        Os dados pessoais apenas poderão ser recolhidos caso: <br>
                        <ul class="mt-3">
                            <li>O utilizador efectueum registo no website;</li>
                            <li>O titular dos dados solicite um serviço, responda a um inquérito, ou mais informações
                                sobre um
                                programa através de formulário e/ou chatbot ou troque correspondência eletrónica com o
                                Angola Hoje.
                            </li>
                            <li>A recolha de informação pessoal está limitada aos visitantes que se registam
                                voluntariamente.
                            </li>
                        </ul>


                        </p>
                        <p class="mt-3">
                            <b> Consentimento para a receção de informações</b> <br>
                            O Angola Hoje dará o seu consentimento prévio relativamente à recepção de comunicações
                            comerciais
                            para fins
                            de
                            marketing, sendo-lhe conferida a
                            faculdade de oposição, a todo o tempo, mediante comunicação escrita dirigida o Angola Hoje. <br>
                            As referidas informações comerciais, poderão ser enviadas pelo Angola Hoje, através de correio
                            eletrónico,
                            telefone, SMS
                            ou qualquer outro meio de comunicação eletrónica, websites de redes sociais, Web 2.0,
                            qualquer
                            conteúdo
                            de telemóvel ou método.
                        </p>
                        <p class="mt-3">
                            <b> Transmissão</b><br>
                            Para além das obrigações referidas na Lei aplicável à proteção de dados ou à salvaguarda e
                            protecção dos seus próprios interesses, O Angola Hoje não partilhará quaisquer dados pessoais
                            com
                            entidades
                            terceiras.
                        </p>
                        <p class="mt-3">
                            É proibido o uso deste site para quaisquer fins ilegais, abusivos, difamatórios ou que
                            ameacem a
                            transmissão de qualquer vírus ou outro tipo de código informático, ficheiros ou programas
                            desenhados
                            para interromper, destruir ou danificar intencionalmente hardware ou software ou que
                            interfira no
                            funcionamento normal do site.
                        </p>
                        <p class="mt-3">
                            <b>Cookies</b><br>
                            O Angola Hoje poderá utilizar cookies no seu website com o objectivo de melhorar a qualidade do
                            serviço, as funcionalidades disponibilizadas e a experiência do utilizador, não sendo
                            utilizados
                            para
                            definição de perfis.
                        <ul class="mt-3">
                            <li>Se não permitir a utilização de cookies algumas das funcionalidades poderão não
                                corresponder ao nível de serviço esperado.</li>
                            <li>Caso pretenderremover cookies deve consultara secção
                                "Ajuda" do seu navegador de internet.</li>
                        </ul>
                        </p>
                        <p class="mt-3">
                            <b>Autoridade de Controlo</b> <br>
                            A autoridade de control é a Agência de Protecção de Dados (APD),a quem compete
                            velar pelo cumprimento da legislação sobre protecção de dados pessoais
                        </p>
                        <p class="mt-3">
                            <b> Alteração</b><br>
                            As disposições do presente termo de uso e privacidade pode ser alterado, sempre que se
                            justificar ou sempre que se registar qualquer alteração na legislação em vigor sobre a
                            matéria.
                        </p>
                        <i class="mt-5 text-left">
                            Luanda aos 20 de Abril de 2022 <br>
                            Instituto Nacional de Fomento da Sociedade de Informação <br>
                            Departamento de Cibersegurança, Chaves Públicas e Carimbo do Tempo
                        </i>
                    </div>

                </div>

            </div>
        </div>

    </section>

@endsection
