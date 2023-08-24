<?php echo $this->extend('index'); ?>
<?php echo $this->section('content'); ?>

<div class="container mt-5 custom-container">
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <img src="<?php echo base_url() ?>img/icon_usuario.jpg" alt="" style="height: 250px;">
                    <h3 class="card-title"><br>Nombre de Usuario</h3>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Datos de usuarios</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Correo: </b>correo@example.com</li>
                    <li class="list-group-item"><b>Telefono: </b>3125488548</li>
                    <li class="list-group-item"><b>Direccion: </b>Ciudad, País</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>