<!DOCTYPE html>
<html lang="es_ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ElectroCordoba </title>
    <link rel="stylesheet" href="<?php base_url() ?>css/style.css">

</head>

<body>
    <div>
        <h1>ElectroCordoba</h1>
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
                            <form>
                                <!-- Correo Electronico -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="correo_login" class="form-control"
                                        placeholder="Correo Electronico" />
                                </div>
                                <!-- Contraseña -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="contrasena_login" class="form-control"
                                        placeholder="Contraseña" />
                                </div>
                                <!-- Boton Iniciar Sesion -->
                                <div class="btn">
                                    <a type="button" href="<?php echo base_url() ?>main">
                                        Iniciar Sesion
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Formulario de Registro -->
                <div class="form-item sign-up">
                    <div class="table">
                        <div class="table-cell">
                            <form>
                                <!-- Correo Electronico -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="correo_signin" class="form-control"
                                        placeholder="Correo Electronico" />
                                </div>
                                <!-- Usuario -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="usuario_signin" class="form-control" placeholder="Usuario" />
                                </div>
                                <!-- Telefono -->
                                <div class="form-outline mb-4">
                                    <input type="tel" id="telefono_signin" class="form-control"
                                        placeholder="Telefono" />
                                </div>
                                <!-- Contraseña -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="contrasena1_signin" class="form-control"
                                        placeholder="Contraseña" />
                                </div>
                                <!-- Confirmar Contraseña -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="contrasena2_signin" class="form-control"
                                        placeholder="Confirmar Contraseña" />
                                </div>
                                <!-- Submit button -->
                                <div class="btn">
                                    <a type="button" href="<?php echo base_url() ?>main">
                                        Crear Cuenta
                                    </a>
                                </div>

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