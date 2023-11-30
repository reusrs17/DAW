<div class="container">
    <div class="row">

        <div class="col-8">
            <form action="<?= base_url('estudiante/insert'); ?>" method="POST">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                
                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha de nacimiento </label>
                    <input type="date" class="form-control" name="fechaNacimiento" 
                    id="fechaNAcimiento">
                </div>

                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" name="direccion" id="direccion">
                </div>
                </div>
                <div class="mb-3">
                    <select name="idGrado" class="form-control">
                        <?php foreach($grados as $grado) : ?>
                            <option value="<?=$grado->idGrado ?>"><?=$grado->grado ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="mb-3">
                <select name="idGrupo" class="form-control">
                        <?php foreach($grupos as $grupo) : ?>
                            <option value="<?=$grupo->idGrupo ?>"><?=$grupo->grupo ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>