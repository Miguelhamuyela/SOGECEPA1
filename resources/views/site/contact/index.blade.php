@extends('layouts.merge.site')
@section('titulo', 'Contactos')
@section('content')

      <!-- ====== Banner Start ====== -->
      <section class="ud-page-banner">

        <div class="gdlr-core-pbf-wrapper  gdlr-core-hide-in-mobile shadow-sm" style="height:500px; width:100%;">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                    style="background-image: url(/site/assets/upload/img-background-page.png);background-size: cover;background-position: top center;height:500pxwdth:100%;
                    data-parallax-speed="0"></div>
            </div>
            <div class="financity-page-title-wrap  financity-style-custom financity-left-align">
                <div class="financity-header-transparent-substitute"></div>
                <div class="financity-page-title-overlay"></div>
                <div class="financity-page-title-container financity-container">
                    <div class="financity-page-title-content financity-item-pdlr">
                        <h1 class="financity-page-title">Contactos</h1>

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
                                     href="{{ route('site.contact') }}" class="post post-page"><span
                                        property="name">Contacto</span></a>

                            </span></div>
                    </div>
                </div>
            </div>
        </div>




        <div class="gdlr-core-pbf-wrapper " style="padding: 35px 0px 30px 0px;">
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">


                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8" style="">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 45px;"><i class=" gdlr-core-icon-item-icon fa fa-phone" style="color: #454545;font-size: 40px;min-width: 40px;min-height: 40px;"></i></div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px;font-weight: 600;letter-spacing: 0px;text-transform: none;">Telefone<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                    </div>
                                </div>

                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px;">
                                            <p><a href="#">{{ $configuration->telefone }}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8" style="">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom:  45px;"><i class=" gdlr-core-icon-item-icon fa fa-envelope-o" style="color: #454545;font-size: 40px;min-width: 40px;min-height: 40px;"></i></div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px;font-weight: 600;letter-spacing: 0px;text-transform: none;">Email<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                    </div>
                                </div>

                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px;">
                                            <p><a href="#">{{ $configuration->email }}</a></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8" style="">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 45px;"><i class=" gdlr-core-icon-item-icon fa fa-location-arrow" style="color: #454545;font-size: 40px;min-width: 40px;min-height: 40px;"></i></div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px;font-weight: 600;letter-spacing: 0px;text-transform: none;">Localização<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                    </div>
                                </div>

                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px;">
                                            <p><a href="#">{{ $configuration->address }}</a></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gdlr-core-pbf-wrapper  " style="padding: 95px 0px 50px 0px;" data-skin="Contact Form White">
            <div class="gdlr-core-pbf-background-wrap bg-light" style=""></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 760px;">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 39px;font-weight: 600;letter-spacing: 0px;text-transform: none;">Contacto<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal;">ENTRE EM CONTACTO CONOSCO</span></div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-normal" style="padding-bottom: 50px;">
                                        <div class="gdlr-core-divider-container gdlr-core-center-align" style="max-width: 40px;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #2b2b2b;border-bottom-width: 2px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <div role="form" class="wpcf7" id="wpcf7-f1319-p1964-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form class="quform" action="quform/process.php" method="post" enctype="multipart/form-data" onclick="">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <input type="text" class="form-control bg-white rounded " placeholder="Nome">
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <input type="email" class="form-control bg-white rounded " placeholder="Email">
                                                    </div>

                                                    <div class="col-md-12 col-12 mt-3">
                                                        <textarea class="bg-white rounded " placeholder="Mensagem" name="" ></textarea>
                                                    </div>

                                                    <div class="col-md-6 col-12 mx-auto">
                                                        <a href="#" style="background: #ffb400;" class="btn btn-sm rounded-pill w-100 text-dark">Submeter</a>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>








                <div class="col-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.663579286042!2d13.226919214260455!3d-8.817641093667627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f25253e39677%3A0x2b120f3839e71f8b!2sTorre%20CIF%2C%20Av.%20do%201%C2%BA%20Congresso%20do%20MPLA%2C%20Luanda!5e0!3m2!1spt-PT!2sao!4v1646321214849!5m2!1spt-PT!2sao"
                        width="100%" height="450" style="border: 0px; pointer-events: none;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>


                <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 50px 0px;">
                    <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr"><a href="mailto:#" target="_blank" class="gdlr-core-social-network-icon" title="email" style="font-size: 20px;color: #1e1e1e;"><i class="fa fa-envelope"></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 20px;color: #1e1e1e;margin-left: 40px;"><i class="fa fa-facebook"></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="google-plus" style="font-size: 20px;color: #1e1e1e;margin-left: 40px;"><i class="fa fa-google-plus"></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="font-size: 20px;color: #1e1e1e;margin-left: 40px;"><i class="fa fa-skype"></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="font-size: 20px;color: #1e1e1e;margin-left: 40px;"><i class="fa fa-linkedin"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>


    </section>
    <!-- ====== Contact End ====== -->


@endsection
