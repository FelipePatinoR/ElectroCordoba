<?php echo $this->extend('index'); ?>
<?php echo $this->section('content'); ?>
<div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container-fluid" style="background-color: rgba(255, 255, 255, 0.0);">
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
              <li><a class="dropdown-item" href="<?php echo base_url() ?>tienda/herramientas_manuales/alicates_y_pinzas">Alicates y Pinzas</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url() ?>tienda/herramientas_manuales/destornilladores">Destornilladores</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url() ?>tienda/herramientas_manuales/martillos">Martillos</a></li>
          </div>
        </li>
        <li class="nav-item">
          <div class="btn-group">
            <a type="button" class="nav-link" href="<?php echo base_url() ?>tienda/equipo_de_soldadura">EQUIPO DE SOLDADURA</a>
            <a type="button" class="nav-link dropdown-toggle dropdown-toggle-split" data-mdb-toggle="dropdown"
              aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo base_url() ?>tienda/equipo_de_soldadura/accesorios">Accesorios y Consumibles</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url() ?>tienda/equipo_de_soldadura/arco_manual">Proceso Arco Manual</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url() ?>tienda/equipo_de_soldadura/mig">Proceso MIG</a></li>
          </div>
        </li>
        <li class="nav-item">
          <div class="btn-group">
            <a type="button" class="nav-link" href="<?php echo base_url() ?>tienda/herramientas_electricas">HERRAMIENTAS ELECTRICAS</a>
            <a type="button" class="nav-link dropdown-toggle dropdown-toggle-split" data-mdb-toggle="dropdown"
              aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo base_url() ?>tienda/herramientas_electricas/atornilladores">Atornilladores</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url() ?>tienda/herramientas_electricas/taladros">Taladros</a></li>

          </div>
        </li>
        <li class="nav-item">
          <div class="btn-group">
            <a type="button" class="nav-link" href="<?php echo base_url() ?>tienda/equipo_jardineria">EQUIPO PARA JARDINERIA</a>
          </div>
        </li>
        <li class="nav-item">
          <div class="btn-group">
            <a type="button" class="nav-link" href="<?php echo base_url() ?>tienda/equipos_medicion_nivelacion">EQUIPOS DE MEDICION Y NIVELACION</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  
</div>
<?php echo $this->renderSection('navbar'); ?>
<?php echo $this->endSection(); ?>

