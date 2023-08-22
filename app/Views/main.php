<?php echo $this->extend('index'); ?>
<?php echo $this->section('content'); ?>
<div>
    <center>
        <div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active data-mdb-interval='1'">
                    <img src="<?php base_url() ?>img/Carrusel_Main/Slide_1.jpg" class="d-block w-90"
                        alt="Wild Landscape"/>
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: white">ElectroCordoba</h1>
                        <p style="color: white">Bienvenid@ a la tienda virtual de la mejor ferretería del país</p>
                    </div>
                </div>
                <div class="carousel-item data-mdb-interval='1'">
                    <img src="<?php base_url() ?>img/Carrusel_Main/Slide_2.jpg" class="d-block w-90" alt="Camera" />
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: black">Garantía y Calidad</h1>
                        <p style="color: black">Productos garantizados y de la mejor calidad</p>
                    </div>
                </div>
                <div class="carousel-item data-mdb-interval='1'">
                    <img src="<?php base_url() ?>img/Carrusel_Main/Slide_3.jpg" class="d-block w-90"
                        alt="Exotic Fruits" />
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: white">Personal Capacitado</h1>
                        <p>Acérquese para darnos el gusto de atenderlo</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions"
                data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions"
                data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>
        <h2>¿Quiéres saber más de nosotros?</h2>
        <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark">Conócenos</button>
    </center>
</div>
<?php echo $this->endSection(); ?>