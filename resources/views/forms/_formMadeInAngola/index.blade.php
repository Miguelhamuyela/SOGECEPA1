
<!-- /.col -->
<div class="col-md-12">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="image">Seleccione a Imagem</label>
            <input type="file" class="form-control" name="image" value="{{ old('image') }}" id="image">

        </div>
    </div>
</div> <!-- /.col -->




<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Descrição</h5>
            <p>Digite a Descrição</p>
            <!-- Create the editor container -->
            <textarea name="body" style="min-height:300px; min-width:100%" id="editor1">
           {{ isset($madeInAngola->body) ? html_entity_decode($madeInAngola->body) : old('body') }}
            </textarea>
        </div>
    </div>
</div>
