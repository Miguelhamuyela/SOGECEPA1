<div class="col-md-6">
    <div class="form-group">
        <label for="name">Categoria da Galeria</label>
        <input type="text" name="category" id="category" value="{{ isset($gallery->category) ? $gallery->category : '' }}"
            class="form-control border-secondary" placeholder="Categoria da Galeria" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <label for="cover">Capa a carregar</label>
        <div class="custom-file">
            <input value="{{ isset($gallery->cover) ? $gallery->cover : '' }}" class="form-control border-secondary"
                type="file" name="cover" id="cover" >

        </div>
    </div>
</div> <!-- /.col -->
