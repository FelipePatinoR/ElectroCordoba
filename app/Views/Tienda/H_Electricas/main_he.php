<?php echo $this->extend('Tienda/t_navbar.php'); ?>
<?php echo $this->section('navbar'); ?>
<br>
<div class="container">
    <div class="row">
    <div class="col-md-1"></div>
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">ATORNILLADORES</h5>
                <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="dark">
                    <img src="<?php echo base_url() ?>img/Herramientas_Electricas/atornilladores.jpg"
                        class="img-fluid" />
                    <a href="<?php echo base_url() ?>tienda/herramientas_electricas/atornilladores">
                        <div class="mask" style="background-color: rgba(250, 250, 250, 0.5); color: black">
                            <br>
                            <br>
                            <br>
                            <b>Ver mas</b>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="<?php echo base_url() ?>tienda/herramientas_electricas/atornilladores" class="btn btn-primary">
                        <!-- <i class="fas fa-shopping-cart"></i> -->
                        Ver mas
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">TALADROS</h5>
                <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="dark">
                    <img src="<?php echo base_url() ?>img/Herramientas_Electricas/taladros.jpg" class="img-fluid" />
                    <a href="<?php echo base_url() ?>tienda/herramientas_electricas/taladros">
                        <div class="mask" style="background-color: rgba(250, 250, 250, 0.5); color: black">
                            <br>
                            <br>
                            <br>
                            <b>Ver mas</b>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="<?php echo base_url() ?>tienda/herramientas_electricas/taladros" class="btn btn-primary">
                        <!-- <i class="fas fa-shopping-cart"></i> -->
                        Ver mas
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>