<?php echo $this->extend('Tienda/t_navbar.php'); ?>
<?php echo $this->section('navbar'); ?>
<br>
<div class="container">
    <div class="row">
        <div class=" col-md-4">
            <div class="card">
                <h5 class="card-header">ACCESORIOS Y CONSUMIBLES</h5>
                <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="dark">
                    <img src="<?php echo base_url() ?>img/Equipos_de_Soldadura/accesorios-y-consumibles.jpg"
                        class="img-fluid" />
                    <a href="<?php echo base_url() ?>tienda/equipo_de_soldadura/accesorios">
                        <div class="mask" style="background-color: rgba(250, 250, 250, 0.5); color: black">
                            <br>
                            <br>
                            <br>
                            <b>Ver mas</b>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="<?php echo base_url() ?>tienda/equipo_de_soldadura/accesorios" class="btn btn-primary">
                        <!-- <i class="fas fa-shopping-cart"></i> -->
                        Ver mas
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">PROCESO ARCO MANUAL</h5>
                <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="dark">
                    <img src="<?php echo base_url() ?>img/Equipos_de_Soldadura/proceso-arco-manual.jpg"
                        class="img-fluid" />
                    <a href="<?php echo base_url() ?>tienda/equipo_de_soldadura/arco_manual">
                        <div class="mask" style="background-color: rgba(250, 250, 250, 0.5); color: black">
                            <br>
                            <br>
                            <br>
                            <b>Ver mas</b>
                        </div>
                    </a>
                </div>
                <div class="card-body">

                    <a href="<?php echo base_url() ?>tienda/equipo_de_soldadura/arco_manual" class="btn btn-primary">
                        <!-- <i class="fas fa-shopping-cart"></i> -->
                        Ver mas
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">PROCESO MIG</h5>
                <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="dark">
                    <img src="<?php echo base_url() ?>img/Equipos_de_Soldadura/proceso-mig.jpg" class="img-fluid" />
                    <a href="<?php echo base_url() ?>tienda/equipo_de_soldadura/mig">
                        <div class="mask" style="background-color: rgba(250, 250, 250, 0.5); color: black">
                            <br>
                            <br>
                            <br>
                            <b>Ver mas</b>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="<?php echo base_url() ?>tienda/equipo_de_soldadura/mig" class="btn btn-primary">
                        <!-- <i class="fas fa-shopping-cart"></i> -->
                        Ver mas
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>