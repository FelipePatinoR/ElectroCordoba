<?php echo $this->extend('Tienda/t_navbar.php'); ?>
<?php echo $this->section('navbar'); ?>
<br>
<div class="container">
    <div class="row">
        <div class="card col-md-4">
            <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="light">
                <img src="<?php echo base_url()?>img/Equipos_de_Soldadura/accesorios-y-consumibles.jpg" class="img-fluid" />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            <div class="card-body">
                <h5 class="card-title">ACCESORIOS Y CONSUMIBLES</h5>
                <p class="card-text"></p>
                <a href="#!" class="btn btn-primary">
                    <!-- <i class="fas fa-shopping-cart"></i> -->
                    Ver mas
                </a>
            </div>
        </div>
        <br>
        <div class="card col-md-4">
            <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="light">
                <img src="<?php echo base_url()?>img/Equipos_de_Soldadura/proceso-arco-manual.jpg" class="img-fluid" />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(100, 153, 200, 0.15);"></div>
                </a>
            </div>
            <div class="card-body">
                <h5 class="card-title">PROCESO ARCO MANUAL</h5>
                <p class="card-text"></p>
                <a href="#!" class="btn btn-primary">
                    <!-- <i class="fas fa-shopping-cart"></i> -->
                    Ver mas
                </a>
            </div>
        </div>
        <br>
        <div class="card col-md-4">
            <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="light">
                <img src="<?php echo base_url()?>img/Equipos_de_Soldadura/proceso-mig.jpg" class="img-fluid" />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(100, 153, 200, 0.15);"></div>
                </a>
            </div>
            <div class="card-body">
                <h5 class="card-title">PROCESO MIG</h5>
                <p class="card-text"></p>
                <a href="#!" class="btn btn-primary">
                    <!-- <i class="fas fa-shopping-cart"></i> -->
                    Ver mas
                </a>
            </div>
        </div>
        <br>
        <div class="col-md-4"></div>
        <div class="card col-md-4">
            <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="light">
                <img src="<?php echo base_url()?>img/Equipos_de_Soldadura/proceso-tig.jpg" class="img-fluid" />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(100, 153, 200, 0.15);"></div>
                </a>
            </div>
            <div class="card-body">
                <h5 class="card-title">PROCESO TIG</h5>
                <p class="card-text"></p>
                <a href="#!" class="btn btn-primary">
                    <!-- <i class="fas fa-shopping-cart"></i> -->
                    Ver mas
                </a>
            </div>
        </div>
        <br>
    </div>
</div>
<?php echo $this->endSection(); ?>