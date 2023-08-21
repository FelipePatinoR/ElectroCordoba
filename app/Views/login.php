<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title> ElectroCordoba </title>
    <link rel="stylesheet" href="<?php base_url() ?>css/style.css">

</head>

<body>
    <div class="container">
        <div class="box"></div>
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
                                    <button type="submit" class="abc">Iniciar Sesion</button>
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
                                <!-- Usuario -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="usuario_signin" class="form-control" placeholder="Usuario" />
                                </div>
                                <!-- Correo Electronico -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="correo_signin" class="form-control"
                                        placeholder="Correo Electronico" />
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
                                <div type="submit" class="btn">
                                    Crear Cuenta
                                    <!-- <button type="submit" class="btn btn-primary btn-block mb-4">Crear Cuenta</button> -->
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