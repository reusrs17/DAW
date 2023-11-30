
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=base_url('index.php/estudiante/buscar/'); ?>" method="GET">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" name="direccion">
                <input type="submit" 
                class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>
    <?php
    if(isset($estudiantes)){
        //print_r($estudiantes);
    }
    ?>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Dirección</th>
                </thead>
                <tbody>
                <?php foreach($estudiantes as $estudiante) : ?>
                    <tr>
                        <td><?=$estudiante->nombre ?></td>
                        <td><?=$estudiante->direccion ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>