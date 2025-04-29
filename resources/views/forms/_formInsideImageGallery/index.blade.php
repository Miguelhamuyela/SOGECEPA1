<div class="col-md-6">
    <div class="form-group">
        <label for="title">Título da Legislação</label>
        <input type="text" name="title" id="title"
            value="{{ isset($insideImageGallery->title) ? $insideImageGallery->title : old('title') }}"
            class="form-control border-secondary" placeholder="Título da Imagem" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-6">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="images">Selecione a Image</label>
            <input type="file" class="form-control" name="path" id="images"  >

        </div>
    </div>
</div> <!-- /.col -->



<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Descrição</h5>
            <p>Digite a Descrição</p>
            <!-- Create the editor container -->
            <textarea name="description" style="min-height:300px; min-width:100%;" id="editor1">
           {{ isset($insideImageGallery->description) ? html_entity_decode($insideImageGallery->description) : old('description') }}
            </textarea>
        </div>
    </div>
</div>
