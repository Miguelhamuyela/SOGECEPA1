
<div id="gdlr-core-recent-portfolio-widget-3" class="widget widget_gdlr-core-recent-portfolio-widget financity-widget mt-4">
    <h6 class="financity-widget-title mt-4">Galeria de Imagens</h6>
    <div class="gdlr-core-recent-portfolio-widget-wrap clearfix">

        @foreach ($gallerieImage as $item)

        <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
            <a href="{!! url('/galeria-de-imagens/' . urlencode($item->name)) !!}"><img src="/storage/{{ $item->cover }}" alt="{{ $item->name }}" id="img-portfolio" ><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon icon_link_alt gdlr-core-size-15"></i></span></a>
        </div>

        @endforeach


    </div>
</div>

<div id="gdlr-core-recent-portfolio-widget-3" class="widget widget_gdlr-core-recent-portfolio-widget financity-widget mt-3">
    <h6 class="financity-widget-title mt-4">Galeria de Vídeos</h6>
    <div class="gdlr-core-recent-portfolio-widget-wrap clearfix">

        <div class="row">
        @foreach ($gallerieVideo as $item)




            <div class="col-md-4 col-12 mt-3">

                <iframe width="auto" height="300" src="{{ $item->link }}" frameborder="0" allowfullscreen></iframe>
            </div>




        @endforeach
    </div>




    </div>
</div>
