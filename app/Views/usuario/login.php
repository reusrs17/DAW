<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
<form action="<?php base_url('/curso/mostrar'); ?>" method="POST">
<?= csrf_field() ?>
  <div class="mb-3">
    <label for="email" class="form-label">Dirección de correo electrónico</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="col-auto">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
      <label class="form-check-label" for="autoSizingCheck2">
      No olvidarme
      </label>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
        </div>
        <div class="col"></div>
    </div>
</div>


