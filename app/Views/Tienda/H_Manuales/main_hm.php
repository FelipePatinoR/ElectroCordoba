<?php echo $this->extend('Tienda/t_navbar.php'); ?>
<?php echo $this->section('navbar'); ?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">ALICATES Y PINZAS</h5>
                <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="dark">
                    <img src="<?php echo base_url() ?>img/Herramientas_Manuales/alicates-y-pinzas.jpg"
                        class="img-fluid" />
                    <br>
                    <a href="<?php echo base_url() ?>tienda/herramientas_manuales/alicates_y_pinzas">
                        <div class="mask" style="background-color: rgba(250, 250, 250, 0.5); color: black">
                            <br>
                            <br>
                            <br>
                            <b>Ver mas</b>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="<?php echo base_url() ?>tienda/herramientas_manuales/alicates_y_pinzas" class="btn btn-primary">
                        <!-- <i class="fas fa-shopping-cart"></i> -->
                        Ver mas
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">DESTORNILLADORES</h5>
                <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="dark">
                    <img src="<?php echo base_url() ?>img/Herramientas_Manuales/destornilladores.jpg"
                        class="img-fluid" />
                    <a href="<?php echo base_url() ?>tienda/herramientas_manuales/destornilladores">
                        <div class="mask" style="background-color: rgba(250, 250, 250, 0.5); color: black">
                            <br>
                            <br>
                            <br>
                            <b>Ver mas</b>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="<?php echo base_url() ?>tienda/herramientas_manuales/destornilladores" class="btn btn-primary">
                        <!-- <i class="fas fa-shopping-cart"></i> -->
                        Ver mas
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">MARTILLOS</h5>
                <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="dark">
                    <img src="<?php echo base_url() ?>img/Herramientas_Manuales/martillos.jpg" class="img-fluid" />
                    <a href="<?php echo base_url() ?>tienda/herramientas_manuales/martillos">
                        <div class="mask" style="background-color: rgba(250, 250, 250, 0.5); color: black">
                            <br>
                            <br>
                            <br>
                            <b>Ver mas</b>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="<?php echo base_url() ?>tienda/herramientas_manuales/martillos" class="btn btn-primary">
                        <!-- <i class="fas fa-shopping-cart"></i> -->
                        Ver mas
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>