<div class="container">
    <div class="row">
        <div class="col-12">
            <?php print_r($estudiantes); ?>

            <?php foreach($estudiantes  as $estudiante) : ?>
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?=$estudiante->nombre ?></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><?=$estudiante->fechaNacimiento ?></h6>
                    <p class="card-text">
                        Dirección : <?=$estudiante->direccion ?>
                        Grado : <?=$estudiante->grado?>
                        Grupo : <?=$estudiante->grupo ?>
                    </p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>
</div>