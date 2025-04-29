
<div class="shadow-sm rounded">

    <h6 class="section-title-destaque">Publicidade</h6>

    <div id="news-slider-below" class="owl-carousel owl-theme shadow-sm">

       @foreach ($banner as $item)
       <img src="/storage/{{$item->image}}" class="img-fluid">
       @endforeach

    
    </div>

</div>

