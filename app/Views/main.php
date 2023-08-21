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
                    <img src="<?php base_url() ?>img/Carrusel_Main/Slide1.jpg" class="d-block w-50"
                        alt="Wild Landscape" />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item data-mdb-interval='1'">
                    <img src="<?php base_url()?>img/Carrusel_Main/Slide2.jpg" class="d-block w-50" alt="Camera" />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Productos garantizados y de la mejor calidad</p>
                    </div>
                </div>
                <div class="carousel-item data-mdb-interval='1'">
                    <img src="<?php base_url() ?>img/Carrusel_Main/Slide3.jpg" class="d-block w-50"
                        alt="Exotic Fruits" />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Acerquese para darnos el gusto de atenderlo</p>
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
    </center>
</div>
<?php echo $this->endSection(); ?>