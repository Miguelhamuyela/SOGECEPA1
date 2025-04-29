<footer>

    <div class="financity-footer-wrapper container-fluid">
        <div class="financity-footer-container financity-container mx-auto">




            <div class="financity-footer-column financity-item-pdlr financity-column-15">
                <div id="text-2" class="widget widget_text financity-widget">
                    <div class="textwidget">
                        <p><img src="/site/assets/upload/governo_logo.png" class="img-fluid" width="200"
                                alt="Logo" /></p>
                        <p>
                            <i class="fa fa-location-arrow" style="font-size: 16px;color: #ffb400; margin-right: 10px;">
                            </i>
                            Av. 4 de Fevereiro, Rua da Alfândega n.10, Luanda - Angola <br />
                            <span class="gdlr-core-space-shortcode" style="margin-top: 10px"></span>

                            <span class="gdlr-core-space-shortcode" style="margin-top: 10px"></span>
                            <i class="fa fa-envelope-open-o" style="font-size: 16px;color: #ffb400;margin-right: 10px;">
                            </i>geral@angolahoje.ao
                        </p>

                        <div class="financity-top-bar-right-social">
                            <a href="{{ $configuration->facebook }}" target="_blank"
                                class="financity-top-bar-social-icon" title="facebook">
                                <i class="fa fa-facebook">
                                </i>
                            </a>

                            <a href="{{ $configuration->linkedin }}" target="_blank"
                                class="financity-top-bar-social-icon" title="linkedin">
                                <i class="fa fa-linkedin">
                                </i>
                            </a>


                            <a href="{{ $configuration->instagram }}" target="_blank"
                                class="financity-top-bar-social-icon" title="instagram">
                                <i class="fa fa-instagram">
                                </i>
                            </a>


                        </div>
                    </div>


                </div>


            </div>




            <div class="financity-footer-column financity-item-pdlr financity-column-15">
                <div id="nav_menu-1" class="widget widget_nav_menu financity-widget">
                    <h3 class="financity-widget-title">Economia</h3>
                    <div class="menu-useful-links-container">
                        <ul id="menu-useful-links" class="menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5507">
                                <a href="{{ route('site.banking') }}">Sector Bancário</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5507">
                                <a href="{{ route('site.miningResources') }}">Recursos Minerais
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5506">
                                <a href="{{ route('site.oilGa') }}">Petróleo e Gás</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5512">
                                <a href="{{ route('site.blueEconomy') }}">Economia Azul</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5509">
                                <a href="{{ route('site.energyWater') }}">Energia e Água</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="financity-footer-column financity-item-pdlr financity-column-15">
                <div id="nav_menu-1" class="widget widget_nav_menu financity-widget">
                    <h3 class="financity-widget-title">Link Úteis</h3>
                    <div class="menu-useful-links-container">
                        <ul id="menu-useful-links" class="menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5507">
                                <a href="https://www.aipex.gov.ao/PortalAIPEX/#!/"target="_blank">AIPEX</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5506">
                                <a href="https://anpg.co.ao/"target="_blank">ANPG</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5512">
                                <a href="http://www.cmc.ao/"target="_blank">CMC</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5509">
                                <a href="https://www.bodiva.ao/" target="_blank">BODIVA</a>
                            </li>

                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5509">
                                <a href="https://www.jornaldeangola.ao/ao/" target="_blank">Jornal de Angola</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5509">
                                <a href="https://rna.ao/rna.ao/" target="_blank">RNA</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5509">
                                <a href="https://angop.ao/" target="_blank">ANGOP</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>


            <div class="financity-footer-column financity-item-pdlr financity-column-15">
                <div id="text-4" class="widget widget_text financity-widget">
                    <h3 class="financity-widget-title">Entre Contacto</h3>
                    <div class="textwidget">
                        <div role="form" class="wpcf7" id="wpcf7-f5505-o2" lang="en-US" dir="ltr">

                            <div class="row">

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="post" action="{{ route('site.help.email') }}">

                                    @csrf

                                    <div class="col-md-12 col-12">
                                        <input type="text" placeholder="Nome" name="name" class="form-control">
                                    </div>

                                    <div class="col-md-12 col-12 mt-3">
                                        <input type="email" name="email" placeholder="Email" class="form-control">
                                    </div>

                                    <div class="col-md-12 col-12 mt-3">
                                        <input type="text" placeholder="Assunto" name="subject"
                                            class="form-control">
                                    </div>

                                    <div class="col-md-12 col-12 mt-3">
                                        <textarea class="form-control" name="msg" id="" cols="5" rows="5"></textarea>
                                    </div>

                                    <div class="col-md-12 col-12 mt-3">
                                        <input style="background: #ffb400;" class="btn btn-sm rounded-pill text-dark"
                                            type="submit" value="Submeter">
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div id="footer-bottom" class="border-top border-gray py-3">
        <div class="container">
            <div class="row justify-content-between small">
                <div class="col-md-auto">
                    <a href="{{ route('site.policyPrivacy') }}" class="text-reset">Termos de Uso</a> | <a
                        href="{{ route('site.policyPrivacy') }}" class="text-reset">Políticas de Privacidade</a>
                </div>
                <div class="col-md-auto ">


                    <a href="#" class="floating-btn" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });"
                        title="Ir para o topo">
                        <svg id="bottonUp" width="20" fill="#ff0000" height="20"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <title>arrow-button-up-1</title>
                            <path
                                d="M12,10.416a2.643,2.643,0,0,1,1.875.775l9.541,9.541a1.768,1.768,0,0,1-2.5,2.5l-8.739-8.739a.25.25,0,0,0-.354,0L3.084,23.232a1.768,1.768,0,0,1-2.5-2.5l9.541-9.541A2.643,2.643,0,0,1,12,10.416Z">
                            </path>
                            <path
                                d="M12,.25a2.643,2.643,0,0,1,1.875.775l9.541,9.541a1.768,1.768,0,0,1-2.5,2.5L12.177,4.327a.25.25,0,0,0-.354,0L3.084,13.066a1.768,1.768,0,0,1-2.5-2.5l9.541-9.541A2.643,2.643,0,0,1,12,.25Z">
                            </path>
                        </svg>
                    </a>

                </div>
                <div class="col-md-auto">
                    <span>Todos os Direitos Reservados</span>
                </div>
            </div>
        </div>

    </div>

</footer>


</div>

</div>


@if (session('helpCreate'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Mensagem enviada com sucesso!',
            showConfirmButton: true,
            timer: 25000,
            customClass: 'prioritized-alert'
        })
    </script>
@endif



<script type="text/javascript" src="/site/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="/site/assets/js/jquery/jquery.js"></script>
<script type="text/javascript" src="/site/assets/js/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="/site/assets/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js">
</script>
<script type="text/javascript"
    src="/site/assets/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js"></script>

<!--[if lt IE 9]>
<script type="text/javascript" src="https://demo.goodlayers.com/financity/wp-content/themes/financity/js/html5.js">
</script>
<![endif]-->

<script type="text/javascript" src="/site/assets/js/jquery/ui/effect.min.js"></script>
<script type="text/javascript">
    var financity_script_core = {
        home_url: "index.html//",
    };
</script>


{{-- MAP --}}
<script src="/site/assets/js/governo.gov.ao_public_app-assets_js_functions.js"></script>
<script src="/site/assets/js/jquery-2.2.4.min.js"></script>
<script src="/site/assets/js/governo.gov.ao_public_app-assets_js_common_scripts.min"></script>

<script type="text/javascript" src="/site/assets/js/script-core.js"></script>

<script type="text/javascript" src="/site/assets/plugins/goodlayers-core/plugins/combine/script.js"></script>
<script type="text/javascript">
    var gdlr_core_pbf = {
        admin: "",
        video: {
            width: "640",
            height: "360",
        },
        ajax_url: "https:////demo.goodlayers.com//financity//wp-admin//admin-ajax.php",
        ilightbox_skin: "dark",
    };
</script>
<script type="text/javascript" src="/site/assets/plugins/goodlayers-core/include/js/page-builder.js"></script>

<script type="text/javascript"
    src="/site/assets/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript"
    src="/site/assets/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js">
</script>
<script type="text/javascript"
    src="/site/assets/plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript"
    src="/site/assets/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript"
    src="/site/assets/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script>
    /*<![CDATA[*/
    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
    var htmlDivCss = "";
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement("div");
        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
        document
            .getElementsByTagName("head")[0]
            .appendChild(htmlDiv.childNodes[0]);
    } /*]]>*/
</script>
<script>
    /*<![CDATA[*/
    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
    var htmlDivCss = "";
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement("div");
        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
        document
            .getElementsByTagName("head")[0]
            .appendChild(htmlDiv.childNodes[0]);
    } /*]]>*/
</script>
<script type="text/javascript">
    /*<![CDATA[*/
    var setREVStartSize = function() {
        try {
            var e = new Object(),
                i = jQuery(window).width(),
                t = 9999,
                r = 0,
                n = 0,
                l = 0,
                f = 0,
                s = 0,
                h = 0;
            e.c = jQuery("#rev_slider_1_1");
            e.gridwidth = [1300];
            e.gridheight = [790];
            e.sliderLayout = "auto";
            if (
                (e.responsiveLevels &&
                    (jQuery.each(e.responsiveLevels, function(e, f) {
                            f > i && ((t = r = f), (l = e)),
                                i > f && f > r && ((r = f), (n = e));
                        }),
                        t > r && (l = n)),
                    (f = e.gridheight[l] || e.gridheight[0] || e.gridheight),
                    (s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth),
                    (h = i / s),
                    (h = h > 1 ? 1 : h),
                    (f = Math.round(h * f)),
                    "fullscreen" == e.sliderLayout)
            ) {
                var u = (e.c.width(), jQuery(window).height());
                if (void 0 != e.fullScreenOffsetContainer) {
                    var c = e.fullScreenOffsetContainer.split(",");
                    if (c)
                        jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u;
                        }),
                        e.fullScreenOffset.split("%").length > 1 &&
                        void 0 != e.fullScreenOffset &&
                        e.fullScreenOffset.length > 0 ?
                        (u -=
                            (jQuery(window).height() *
                                parseInt(e.fullScreenOffset, 0)) /
                            100) :
                        void 0 != e.fullScreenOffset &&
                        e.fullScreenOffset.length > 0 &&
                        (u -= parseInt(e.fullScreenOffset, 0));
                }
                f = u;
            } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
            e.c.closest(".rev_slider_wrapper").css({
                height: f,
            });
        } catch (d) {
            console.log("Failure at Presize of Slider:" + d);
        }
    };
    setREVStartSize();
    var tpj = jQuery;
    var revapi1;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_1_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1_1");
        } else {
            revapi1 = tpj("#rev_slider_1_1")
                .show()
                .revolution({
                    sliderType: "standard",
                    jsFileLocation: "//demo.goodlayers.com/financity/demo2/wp-content/plugins/revslider/public/assets/js/",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: "",
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0,
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0,
                            },
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            style: "uranus",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 30,
                            space: 10,
                            tmp: '<span class="tp-bullet-inner"></span>',
                        },
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1300,
                    gridheight: 790,
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "enterpoint",
                        speed: 400,
                        levels: [
                            5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55,
                        ],
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    },
                });
        }
    }); /*]]>*/
</script>
<script>
    /*<![CDATA[*/
    var htmlDivCss = unescape(
        "%23rev_slider_1_1%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_1_1%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_1_1%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A%23rev_slider_1_1%20.uranus%20.tp-bullet%7B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C%20255%2C%20255%2C%200%29%3B%0A%20%20-webkit-transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20background%3Atransparent%3B%0A%20%20width%3A15px%3B%0A%20%20height%3A15px%3B%0A%7D%0A%23rev_slider_1_1%20.uranus%20.tp-bullet.selected%2C%0A%23rev_slider_1_1%20.uranus%20.tp-bullet%3Ahover%20%7B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C%20255%2C%20255%2C1%29%3B%0A%20%20border%3Anone%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background%3Atransparent%3B%0A%7D%0A%0A%23rev_slider_1_1%20.uranus%20.tp-bullet-inner%20%7B%0A%20%20-webkit-transition%3A%20background-color%200.3s%20ease%2C%20-webkit-transform%200.3s%20ease%3B%0A%20%20transition%3A%20background-color%200.3s%20ease%2C%20transform%200.3s%20ease%3B%0A%20%20top%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20height%3A%20100%25%3B%0A%20%20outline%3A%20none%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20background-color%3A%20rgba%28255%2C%20255%2C%20255%2C%200.3%29%3B%0A%20%20text-indent%3A%20-999em%3B%0A%20%20cursor%3A%20pointer%3B%0A%20%20position%3A%20absolute%3B%0A%7D%0A%0A%23rev_slider_1_1%20.uranus%20.tp-bullet.selected%20.tp-bullet-inner%2C%0A%23rev_slider_1_1%20.uranus%20.tp-bullet%3Ahover%20.tp-bullet-inner%7B%0A%20transform%3A%20scale%280.4%29%3B%0A%20-webkit-transform%3A%20scale%280.4%29%3B%0A%20background-color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%7D%0A"
    );
    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement("div");
        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
        document
            .getElementsByTagName("head")[0]
            .appendChild(htmlDiv.childNodes[0]);
    } /*]]>*/
</script>

<script>
    var _paq = window._paq = window._paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u = "//plataformacipra.gov.ao/analytics/";
        _paq.push(['setTrackerUrl', u + 'matomo.php']);
        _paq.push(['setSiteId', '3']);
        var d = document,
            g = d.createElement('script'),
            s = d.getElementsByTagName('script')[0];
        g.async = true;
        g.src = u + 'matomo.js';
        s.parentNode.insertBefore(g, s);
    })();
</script>



<script src="/site/js/cdnjs.cloudflare.com_ajax_libs_jquery_3.7.1_jquery.min.js"></script>

<script src="/site/js/cdnjs.cloudflare.com_ajax_libs_OwlCarousel2_2.3.4_owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        $("#news-slider-below").owlCarousel({
            items: 1,
            singleItem: true,
            loop: true,
            autoplay: true,
            slideTransition: 'linear',
            autoplaySpeed: 500,
            autoplayHoverPause: false,

        });
    });
</script>


<script>
    < script src = "js/jquery.js" >
</script>

<!-- Inclua o SDK do Facebook -->
<script src="/site/js/connect.facebook.net_en_US_sdk.js#xfbml=1&version=v7.0"></script>

<script async src="/site/js/platform.twitter.com_widgets.js" charset="utf-8"></script>

</script>

<script>
    twttr.ready(function() {
        // Initialize the Twitter share button
        twttr.widgets.createShareButton(
            'https://example.com',
            document.getElementById('twitter-share-button'), {
                text: 'Check out this awesome content!', // Optional: Default tweet text
                size: 'large', // Optional: Button size (small, large)
            }
        );
    });
</script>



<script>
    var iframe = document.querySelector('#iframe-container iframe');
    iframe.onload = function() {
        iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
    };
</script>



<script src="/site/assets/js/swipper.js"></script>

<script src="/js/sweetalert2.all.min.js"></script>




<!-- JS do Bootstrap (coloque no final do body) -->
<!-- JS do Bootstrap (coloque no final do body) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-pzjw8q+ua/cWVgD5l3s2k9tc0z3Uf9ODC+0Zz1aF9A1XLXv/DAFCXeSTFqBZ4Kpt" crossorigin="anonymous"></script>


<script src="/site/assets/js/main.js"></script>

</body>

<!-- Mirrored from max-themes.net/demos/financity/demo2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Sep 2023 11:16:13 GMT -->
<script>
    // Inicializar o Tooltip
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip({
        title: function () {
          return $(this).attr('data-original-title');
        }
      });
    });
  </script>
  
</body>

</html>
