@isset($slideshow)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Imagem Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $slideshow->path }}");background-position:center;background-size:cover;height:200px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-12">
    <div class="form-group">
        <label for="title">Nome do Parceiro</label>
        <input type="text" name="partner" id="partner" value="{{ isset($slideshow->partner) ? $slideshow->partner : '' }}"
            class="form-control border-secondary" placeholder="Nome do Parceiro">
    </div>
</div> <!-- /.col -->
<div class="col-md-6">
    <div class="form-group">
        <label for="link">Link do Parceiro</label>
        <input type="text" name="partnerlink" id="link" value="{{ isset($slideshow->partnerlink) ? $slideshow->partnerlink : '' }}"
            class="form-control border-secondary" placeholder="Link do Parceiro">
    </div>
</div> <!-- /.col -->
<div class="col-md-6">
    <div class="form-group">
        <label for="image">Selecione a Imagem</label>
        <input type="file" class="form-control" name="image" id="image">
    </div>
</div> <!-- /.col -->

 <!-- /.col -->
