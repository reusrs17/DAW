<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Estudiantes</h2>
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Dirección</th>
                    <th>Accciones</th>
                </thead>
                <tbody>
                <?php foreach($estudiantes as $estudiante): ?>
                    <tr>
                        <td><?=$estudiante->nombre ?></td>
                        <td><?=$estudiante->fechaNacimiento ?></td>
                        <td><?=$estudiante->direccion ?></td>
                        <td>    
                            <a href="<?=base_url('index.php/estudiante/delete/'.$estudiante->estudianteID);?>">Eliminar</a>
                            <a href="<?=base_url('index.php/estudiante/editar/'.$estudiante->estudianteID);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>


