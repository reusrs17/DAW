<div class="container">
    <div class="row">

        <div class="col-8">
            <form action="<?= base_url('profesor/insert'); ?>" method="POST">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                
                <div class="mb-3">
                    <label for="especialidad" class="form-label">Especialidad </label>
                    <input type="text" class="form-control" name="especialidad" 
                    id="especialidad">
                </div>

                
               
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>