<?php echo $this->extend('Tienda/t_navbar.php'); ?>
<?php echo $this->section('navbar'); ?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">TALADRO PERCUTOR 3/8 PULG 550W BLACK AND DECKER</h5>
                <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="dark">
                    <img src="<?php echo base_url() ?>img/Herramientas_Electricas/Taladros/taladro-percutor-38-pulg-550w-black-and-decker.jpg"
                        class="img-fluid" />
                    <br>
                    <a href="" data-mdb-toggle="modal" data-mdb-target="#modal_1">
                        <div class="mask" style="background-color: rgba(250, 250, 250, 0.5); color: black">
                            <br>
                            <br>
                            <br>
                            <b>Vista rapida</b>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="#!" class="btn btn-primary">
                        <i class="fas fa-shopping-cart"></i>
                        Agregar al carrito
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">TALADRO PERCUTOR 1/2" 710 W EINHELL</h5>
                <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="dark">
                    <img src="<?php echo base_url() ?>img/Herramientas_Electricas/Taladros/taladro-percutor-12-710-w-einhell.jpg"
                        class="img-fluid" />
                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#modal_2">
                        <div class="mask" style="background-color: rgba(250, 250, 250, 0.5); color: black">
                            <br>
                            <br>
                            <br>
                            <b>Vista rapida</b>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="#!" class="btn btn-primary">
                        <i class="fas fa-shopping-cart"></i>
                        Agregar al carrito
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
<!-- MODALS (VENTANAS EMERGENTES) -->
<!-- MODAL 1 -->
<div class="modal fade" tabindex="-1" id="modal_1" _mstvisible="0">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="container-fluid">
                    <div class="row text-start">
                        <h5 class="modal-title">TALADRO PERCUTOR 3/8 PULG 550W BLACK AND DECKER
                        </h5>
                    </div>
                    <div class="row text-start">
                        <label>Referencia:</label>
                    </div>
                </div>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-md-4">
                    <img style="height: 350px;"
                        src="<?php echo base_url() ?>img/Herramientas_Electricas/Taladros/taladro-percutor-38-pulg-550w-black-and-decker.jpg"
                        alt="">
                </div>
                <div class="container-fluid">
                    <div class="row">
                    </div>
                </div>
                <p></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-shopping-cart"></i>
                    Añadir al Carrito
                </button>
            </div>
        </div>
    </div>
</div>
<!-- MODAL 2 -->
<div class="modal fade" tabindex="-1" id="modal_2" _mstvisible="0">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="container-fluid">
                    <div class="row text-start">
                        <h5 class="modal-title">TALADRO PERCUTOR 1/2" 710 W EINHELL</h5>
                    </div>
                    <div class="row text-start">
                        <label>Referencia:</label>
                    </div>
                </div>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-md-4">
                    <img style="height: 350px;"
                        src="<?php echo base_url() ?>img/Herramientas_Electricas/Taladros/taladro-percutor-12-710-w-einhell.jpg" alt="">
                </div>
                <div class="container-fluid">
                    <div class="row">
                    </div>
                </div>
                <p></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-shopping-cart"></i>
                    Añadir al Carrito
                </button>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>