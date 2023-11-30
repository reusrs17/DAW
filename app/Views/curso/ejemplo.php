<section id="estudiantes" class="mt-5">
    <div class="container fluid">
        <div class="row">
            <div class="col-12">
                <a class="btn btn-success btn-sm" href="<?= base_url('curso/agregar'); ?>">Agregar</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <table class="table  table-bordered table-striped table-sm" style="font-size:10pt">
                    <thead>
                        <th>Curso</th>
                        <th colspan="2">Acciones</th>
                    </thead>
                    <tbody>
                        <?php foreach ($cursos as $key ) : ?>
                        <tr>
                            <td><?php echo $key->nombreCurso?></td>
                           
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $key->cursoID; ?> ">
                                Borrar
                                </button>
                            </td>
                            <td>
                                <a href="<?= base_url('curso/editar/'.$key->cursoID);  ?>" class="btn btn-primary">Editar</a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

            </div>
        </div>

        <?php 
            print $totalCursos;
            $porPagina=5;
            $pagina= $totalCursos/$porPagina;

        ?>

        <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                    </li>
                <?php for($i=1;$i<=$pagina;$i++ ): ?>
                    <li class="page-item"><a class="page-link" href="<?= base_url('index.php/curso/mostrar/'.$i)?>"><?= $i?></a></li>
                <?php endfor ?>
                </ul>
                </nav>
            </div>
        </div>






<?php foreach($cursos as $key):?>
<div class="modal fade" id="exampleModal<?php echo $key->cursoID; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Advertencia</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <p>¿Está seguro de que desea eliminar el registro?</p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a class="btn btn-danger" href="<?= base_url('curso/borrar/'.$key->cursoID);  ?>" >Eliminar</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>


    </div>
</section>

