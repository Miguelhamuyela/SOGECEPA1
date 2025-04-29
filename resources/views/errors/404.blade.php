 @extends('layouts.merge.site')
 @section('titulo', 'Error 404')
 @section('content')

     <section class="ud-page-banner">





         <div class="containerfluid">
            <div class="row">

                <div class="financity-page-wrapper" id="financity-page-wrapper">
                    <div class="financity-not-found-wrap" id="financity-full-no-header-wrap">
                        <div style="background: url('/site/assets/upload/img-background-page.png');" class="financity-not-found-background"></div>
                        <div class="financity-not-found-container financity-container">
                            <div class="financity-header-transparent-substitute" style="height: 0px;"></div>
                            <div class="financity-not-found-content financity-item-pdlr">
                                <h1 class="financity-not-found-head">404</h1>
                                <h3 class="financity-not-found-title financity-content-font">Página não encontrada</h3>
                                <div style="color: #ffb400;">Desculpa, não podemos encontrar a página que está a procura.</div>

                                <div class="financity-not-found-back-to-home"><a href="{{route('site.home')}}">Clique aqui para voltar a página Home</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
         </div>


     </section>
     <!-- ====== Error 404 End ====== -->

 @endsection
