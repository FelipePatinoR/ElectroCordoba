<?php echo $this->extend('index'); ?>
<?php echo $this->section('content'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
          data-mdb-toggle="dropdown" aria-expanded="false">
          HERRAMIENTAS MANUALES
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="#">Alicates y Pinzas</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Cajas y Soportes para Herramientas</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Candados y Cerrajeria</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Cinceles</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Destornilladores</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Martillos</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button"
          data-mdb-toggle="dropdown" aria-expanded="false">
          EQUIPO PARA JARDINERIA
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
          data-mdb-toggle="dropdown" aria-expanded="false">
          EQUIPOS DE SODADURA
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="#">Accesorios y Consumibles</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Proceso Arco Manual</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Proceso MIG</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Proceso TIG</a>
          </li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
          data-mdb-toggle="dropdown" aria-expanded="false">
          HERRAMIENTAS ELECTRICAS
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="#">Atornilladores</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Cizallas</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Conrtadoras de Concreto</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Lijadoras</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Mezcladoras</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Taladros</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button"
          data-mdb-toggle="dropdown" aria-expanded="false">
          EQUIPOS DE MEDICION Y NIVELACION
        </a>
      </li>
    </ul>
  </div>
</nav>
<?php echo $this->endSection(); ?>

<?php echo $this->renderSection('navbar'); ?>