<?php echo $this->extend('Tienda/t_navbar'); ?>
<?php echo $this->section('navbar'); ?>
<br>
<div>
    <center>
        <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url() ?>img/Carrusel_Main_Tienda/Slide1.jpg" class="d-block w-70"
                        alt="Wild Landscape" />
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url() ?>img/Carrusel_Main_Tienda/Slide2.jpg" class="d-block w-60"
                        alt="Camera" />
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url() ?>img/Carrusel_Main_Tienda/Slide3.jpg" class="d-block w-60"
                        alt="Exotic Fruits" />
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url() ?>img/Carrusel_Main_Tienda/Slide4.jpg" class="d-block w-60"
                        alt="Exotic Fruits" />
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url() ?>img/Carrusel_Main_Tienda/Slide5.jpg" class="d-block w-60"
                        alt="Exotic Fruits" />
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url() ?>img/Carrusel_Main_Tienda/Slide6.jpg" class="d-block w-60"
                        alt="Exotic Fruits" />
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url() ?>img/Carrusel_Main_Tienda/Slide7.jpg" class="d-block w-60"
                        alt="Exotic Fruits" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
                data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
                data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </center>
</div>

<?php echo $this->endSection(); ?>