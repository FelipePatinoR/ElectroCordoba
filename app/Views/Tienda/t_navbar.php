<?php echo $this->extend('index'); ?>
<?php echo $this->section('content'); ?>
<div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <!-- Dropdown -->
        <li class="nav-item dropdown">
        <li class="nav-item">
          <div class="btn-group">
            <a type="button" class="nav-link" href="<?php echo base_url() ?>tienda/herramientas_manuales">HERRAMIENTAS
              MANUALES</a>
            <a type="button" class="nav-link dropdown-toggle dropdown-toggle-split" data-mdb-toggle="dropdown"
              aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Alicates y Pinzas</a></li>
              <li><a class="dropdown-item" href="#">Cajas y Soportes para Herramientas</a></li>
              <li><a class="dropdown-item" href="#">Candados y Cerrajeria</a></li>
              <li><a class="dropdown-item" href="#">Cinceles</a></li>
              <li><a class="dropdown-item" href="#">Destornilladores</a></li>
              <li><a class="dropdown-item" href="#">Martillos</a></li>
          </div>
        </li>
        <li class="nav-item">
          <div class="btn-group">
            <a type="button" class="nav-link">EQUIPO DE SOLDADURA</a>
            <a type="button" class="nav-link dropdown-toggle dropdown-toggle-split" data-mdb-toggle="dropdown"
              aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Accesorios y Consumibles</a></li>
              <li><a class="dropdown-item" href="#">Proceso Arco Manual</a></li>
              <li><a class="dropdown-item" href="#">Proceso MIG</a></li>
              <li><a class="dropdown-item" href="#">Proceso TIG</a></li>
          </div>
        </li>
        <li class="nav-item">
          <div class="btn-group">
            <a type="button" class="nav-link">HERRAMIENTAS ELECTRICAS</a>
            <a type="button" class="nav-link dropdown-toggle dropdown-toggle-split" data-mdb-toggle="dropdown"
              aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Atornilladores</a></li>
              <li><a class="dropdown-item" href="#">Cizallas</a></li>
              <li><a class="dropdown-item" href="#">Cortadoras de Concreto</a></li>
              <li><a class="dropdown-item" href="#">Lijadoras</a></li>
              <li><a class="dropdown-item" href="#">Mezcladoras</a></li>
              <li><a class="dropdown-item" href="#">Taladros</a></li>

          </div>
        </li>
        <li class="nav-item">
          <div class="btn-group">
            <a type="button" class="nav-link">EQUIPO PARA JARDINERIA</a>
          </div>
        </li>
        <li class="nav-item">
          <div class="btn-group">
            <a type="button" class="nav-link">EQUIPOS DE MEDICION Y NIVELACION</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  
</div>
<?php echo $this->renderSection('navbar'); ?>
<?php echo $this->endSection(); ?>

