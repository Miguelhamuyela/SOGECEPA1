@isset($gallery->images)

<form action="{{ url("admin/imageGallery/delete/{$item->id}") }}" id="deleteForm">
    @method('DELETE')
    @csrf
    <div class="modal fade p-5" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="deletemodal"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger" id="deletemodal">
                        Tem a Certeza que deseja Eliminar esta galeria?
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="card border-0 bg-transparent my-3">
                        <div class="card-img-top img-fluid rounded"
                            style='background-image:url("/storage/{{ $gallery->path }}");background-position:center;background-size:cover;height:400px;'>
                        </div>

                    </div>

                    <div class="col-12 text-right">
                        <button class="btn btn-dark " data-dismiss="modal" aria-label="Close">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
@endisset
