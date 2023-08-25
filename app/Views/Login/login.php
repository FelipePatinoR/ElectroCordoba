<!DOCTYPE html>
<html lang="es_ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ElectroCordoba </title>
    <link rel="stylesheet" href="<?php base_url() ?>css/style.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>img/icon_pestana_white.png" />

    <style>
        body {
            background-image: url("<?php echo base_url() ?>img/Fondo.jpg");

        }
    </style>
</head>

<body>

    <div style="text-align: center;">
        <img style="height: 150px;" src="<?php echo base_url() ?>img/icon_pestana_white.png" id="logo">

    </div>
    <div class="container">
        <div class="container-forms">
            <div class="container-info">
                <div class="info-item">
                    <div class="table">
                        <div class="table-cell">
                            <p>
                                ¿Tienes una cuenta?
                            </p>
                            <div class="btn">
                                Iniciar Sesion
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-item">
                    <div class="table">
                        <div class="table-cell">
                            <p>
                                ¿No tienes una cuenta?
                            </p>
                            <div class="btn">
                                Crear Cuenta
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-form">
                <!-- Formulario de Inicio de Sesion -->
                <div class="form-item log-in">
                    <div class="table">
                        <div class="table-cell">
                            <form method="POST" action="<?php echo base_url() ?>login">
                                <!-- Correo Electronico -->
                                <div class="form-outline mb-4">
                                    <input required type="email" id="correo_login" name="correo_login" class="form-control"
                                        placeholder="Correo Electronico" />
                                </div>
                                <!-- Contraseña -->
                                <div class="form-outline mb-4">
                                    <input required type="password" id="contrasena_login" name="contrasena_login" class="form-control"
                                        placeholder="Contraseña" />
                                </div>
                                <!-- Boton Iniciar Sesion -->
                                <input type="submit" value="Iniciar Sesion"></input>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Formulario de Registro -->
                <div class="form-item sign-up">
                    <div class="table">
                        <div class="table-cell">
                            <form method="post" action="<?php echo base_url() ?>login">
                                <!-- Correo Electronico -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="correo_signin" name="correo_signin" class="form-control"
                                        placeholder="Correo Electronico" />
                                </div>
                                <!-- Usuario -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="usuario_signin" name="usuario_signin" class="form-control"
                                        placeholder="Usuario" />
                                </div>
                                <!-- Telefono -->
                                <div class="form-outline mb-4">
                                    <input type="tel" id="telefono_signin" name="telefono_signin" class="form-control"
                                        placeholder="Telefono" />
                                </div>
                                <!-- Contraseña -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="contrasena1_signin" name="contrasena1_signin"
                                        class="form-control" placeholder="Contraseña" />
                                </div>
                                <!-- Confirmar Contraseña -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="contrasena2_signin" name="contrasena2_signin"
                                        class="form-control" placeholder="Confirmar Contraseña" />
                                </div>
                                <!-- Submit button -->
                                <input type="submit" value="Crear Cuenta"> </input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="<?php base_url() ?>js/script.js"></script>

</body>

</html>