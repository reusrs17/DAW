<div class="container">
    <div class="row">
    <?php print_r($profesor); ?>
    <?php echo $profesor->nombre ?>
        <div class="col-8">
            <h2>Editar profesor</h2>
            <form action="<?= base_url('profesor/update'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name ="id" value="<?= $profesor->profesorID ?>" />
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" 
                    name="nombre" id="nombre" value="<?= $profesor->nombre ?>">
                </div>
                
                <div class="mb-3">
                    <label for="especialidad" class="form-label">Especialidad </label>
                    <input type="date" class="form-control" name="especialidad" 
                    id="especialidad" value="<?= $profesor->especialidad ?>">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>