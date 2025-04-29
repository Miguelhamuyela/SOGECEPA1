<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Descrição</h5>
            <p>Digite o Corpo do Texto</p>
            <!-- Create the editor container -->
            <textarea name="body" style="min-height:300px; min-width:100%" id="editor1">
           {{ isset($lobitoCorridor->body) ? html_entity_decode($lobitoCorridor->body) : old('body') }}
            </textarea>
        </div>
    </div>
</div>
