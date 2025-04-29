 @extends('layouts.merge.site')
 @section('titulo', 'Error 500')
 @section('content')

     <!-- ====== Banner Start ====== -->
     <section class="ud-page-banner">

         <div class="gdlr-core-pbf-wrapper  " style="height: auto; width:100%;">
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
                         <h1 class="financity-page-title">Galerias</h1>

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
                                     href="{{ route('site.gallery') }}" class="post post-page"><span
                                         property="name">Galeria</span></a>

                         </div>
                     </div>
                 </div>
             </div>
         </div>


     </section>
     <!-- ====== Banner End ====== -->

     <!-- ====== Error 404 Start ====== -->
     <section class="ud-404">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="ud-404-wrapper">
                         <div class="ud-404-content">
                             <h2 class="ud-404-title">500 - Aconteceu um erro no servidor.</h2>
                             <h5 class="ud-404-subtitle">Talvez você possa encontrar o que precisa aqui?
                             </h5>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- ====== Error 404 End ====== -->

 @endsection
