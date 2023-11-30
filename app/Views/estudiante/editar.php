<div class="container">
    <div class="row">
    <?php print_r($estudiante); ?>
    <?php echo $estudiante->nombre ?>
        <div class="col-8">
            <h2>Editar Estudiante</h2>
            <form action="<?= base_url('estudiante/update'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name ="id" value="<?= $estudiante->estudianteID ?>" />
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" 
                    name="nombre" id="nombre" value="<?= $estudiante->nombre ?>">
                </div>
                
                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha de nacimiento </label>
                    <input type="date" class="form-control" name="fechaNacimiento" 
                    id="fechaNAcimiento" value="<?= $estudiante->fechaNacimiento ?>">
                </div>

                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" 
                    name="direccion" id="direccion" value="<?= $estudiante->direccion ?>">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>