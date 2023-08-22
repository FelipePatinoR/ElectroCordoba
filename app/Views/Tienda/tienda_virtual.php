<?php echo $this->extend('Tienda/t_navbar'); ?>
<?php echo $this->section('navbar'); ?>
<br>
<div class="container">
    <div class="row">
        <div class="card col-md-4">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid" />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="#!" class="btn btn-primary">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
        </div>
        <div class="card col-md-4">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid" />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(100, 153, 200, 0.15);"></div>
                </a>
            </div>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="#!" class="btn btn-primary">Button</a>
            </div>
        </div>

    </div>
</div>

<?php echo $this->endSection(); ?>