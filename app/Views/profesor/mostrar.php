<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Profesores</h2>
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Especialidad</th>
                <tbody>
                <?php foreach($profesores as $profesor): ?>
                    <tr>
                        <td><?=$profesor->nombre ?></td>
                        <td><?=$profesor->especialidad ?></td>  
                            <a href="<?=base_url('index.php/profesor/delete/'.$profesor->profesorID);?>">Eliminar</a>
                            <a href="<?=base_url('index.php/profesor/editar/'.$profesor->profesorID);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>


