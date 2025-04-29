<div class="col-md-6">
    <div class="form-group">
        <label for="title">Título da Legislação</label>
        <input type="text" name="title" id="title"
            value="{{ isset($legislation->title) ? $legislation->title : old('title') }}"
            class="form-control border-secondary" placeholder="Título da Legislação" required>
    </div>
</div> <!-- /.col -->



<div class="col-md-6">
    <div class="form-group">
        <label for="nameFile">Título do Arquivo</label>
        <input type="text" name="nameFile" id="nameFile"
            value="{{ isset($legislation->nameFile) ? $legislation->nameFile : old('nameFile') }}"
            class="form-control border-secondary" placeholder="Título do Arquivo" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-12">
    <div class="form-group">
        <label for="file">Selecione o Aqruivo</label>
        <input type="file" class="form-control border-secondary" name="file" value="{{ old('file') }}" id="file">
    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Descrição</h5>
            <p>Digite o Corpo do Texto</p>
            <!-- Create the editor container -->
            <textarea name="body" style="min-height:300px; min-width:100%" id="editor1">
           {{ isset($legislation->body) ? html_entity_decode($legislation->body) : old('body') }}
            </textarea>
        </div>
    </div>
</div>


