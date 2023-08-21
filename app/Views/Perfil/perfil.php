<?php echo $this->extend('index'); ?>
<?php echo $this->section('content'); ?>

        <div class="container mt-5 custom-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <img src="imagen_de_perfil.jpg" class="card-img-top" alt="Imagen de Perfil">
                        <div class="card-body">
                            <h5 class="card-title">Nombre de Usuario</h5>
                            <p class="card-text">Descripción del usuario.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Correo: correo@example.com</li>
                            <li class="list-group-item">Ubicación: Ciudad, País</li>
                            <li class="list-group-item">Sitio Web: <a href="https://www.ejemplo.com">www.ejemplo.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

   
<?php echo $this->endSection(); ?>