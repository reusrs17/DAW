<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mapaches</a>
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Cursos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/curso/agregar') ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/curso/mostrar'); ?>">Mostrar</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Alumnado
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/estudiante/agregar') ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/estudiante/mostrar'); ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/estudiante/buscar'); ?>">Buscar</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Docentes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/profesor/agregar') ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/profesor/mostrar'); ?>">Mostrar</a></li>
            </ul>
      </ul>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url("usuario/login");?>">Cerrar sesión</a>
          </li>
    </div>
  </div>
</nav>