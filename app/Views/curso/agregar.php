<div class="container">
    <div class="row">
  
        <div class="col-12">
            <form action="<?= base_url('index.php/curso/agregar');?>"  method="POST">
            <?= csrf_field() ?>
            <div class="mb-3">
                    <label for="nombreCurso" class="form-label">Nombre del curso</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>

            <input type="submit" class="btn btn-success">
                  

        
        </form>
        </div>
    </div>
</div>