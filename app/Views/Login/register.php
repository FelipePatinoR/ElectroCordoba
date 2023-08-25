<!DOCTYPE html>
<html lang="es_ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ElectroCordoba </title>
    <!-- MDBoostrap -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

    <style>
        @font-face {
            font-family: 'ArtBrush';
            src: url('<?php echo base_url() ?>fonts/Artbrush.ttf') format('truetype');
            font-style: normal;
            font-weight: normal;
        }

        body {
            background-image: url('<?php echo base_url('img/Fondo.jpg') ?>');
        }
    </style>
    <!-- Boostrap -->
    <link rel="shortcut icon" href="<?php echo base_url('img/icon_pestana_white.png') ?>" />
</head>

<body>
    <div style="text-align: center;">
        <img style="height: 150px;" src="<?php echo base_url('img/icon_pestana_white.png') ?>">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4 border">
            <br>
            <form method="post" action="<?php echo base_url('register') ?>">
                <!-- Email input -->
                <div class="form-outline mb-4 bg-light border border-5 border-white">
                    <input type="email" id="email" name="email" class="form-control" />
                    <label class="form-label " for="email">Correo Electronico</label>
                </div>
                <!-- Name input -->
                <div class="form-outline mb-4 bg-light border border-5 border-white">
                    <input type="text" id="name" name="name" class="form-control" />
                    <label class="form-label" for="name">Nombre</label>
                </div>
                <!-- telefono input -->
                <div class="form-outline mb-4 bg-light border border-5 border-white">
                    <input type="telefono" id="tel" name="tel" class="form-control" />
                    <label class="form-label" for="tel">Telefono</label>
                </div>
                <!-- Password input -->
                <div class="form-outline mb-4 bg-light border border-5 border-white">
                    <input type="password" id="pass" name="pass" class="form-control" />
                    <label class="form-label" for="pass">Contraseña</label>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Registrarse</button>
                <a href="<?php echo base_url('login') ?>">
                    <button type="button" class="btn btn-primary btn-block mb-4">Iniciar Sesion</button>
                </a>
            </form>
        </div>
    </div>
</body>

</html>