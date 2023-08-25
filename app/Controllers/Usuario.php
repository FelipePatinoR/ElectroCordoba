<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Usuario extends BaseController
{
    public function iniciar_sesion()
    {
        $correo = $this->request->getPost('correo_login');
        $contrasena = $this->request->getPost('contrasena_login');
        $Usuario = new UserModel();

        $datosUsuario = $Usuario->obtenerUsuario(['correo' => $correo]);

        if (
            count($datosUsuario) > 0 &&
            password_verify($contrasena, $datosUsuario[0]['contraseña'])
        ) {

            $data = [
                'user_id' => $datosUsuario[0]['id_usuario'],
                'user_nombre' => $datosUsuario[0]['nombre']
            ];

            $session = session();
            $session->set($data);

            return redirect()->to(base_url('/main'))->with('mensaje', '0');
        } else {
            return redirect()->to(base_url('/login'))->with('mensaje', '1');
        }
    }

    public function registrar()
{
    $usuario = new UserModel();

    // Obtener valores del formulario
    $correo = $this->request->getPost('correo_signin');
    $nombre = $this->request->getPost('usuario_signin');
    $telefono = $this->request->getPost('telefono_signin');
    $contrasena = $this->request->getPost('contrasena1_signin');

    // Crear un array con los valores obtenidos
    $data = [
        'correo' => $correo,
        'nombre' => $nombre,
        'telefono' => $telefono,
        'contraseña' => $contrasena,
    ];

    // Imprimir los valores para depuración
    echo "Valores del formulario:";
    echo "<pre>";
    var_dump($data);
    echo "</pre>";

    // Insertar en la base de datos
    $usuario->insert($data);

    return redirect()->to(base_url() . 'login');
}

}