<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Usuario extends BaseController
{
    public function login()
    {
        if ($this->request->getMethod() === 'post') {
            $accion = $this->request->getPost('accion');

            if ($accion === 'iniciar_sesion') {
                // Lógica para iniciar sesión
                $correo = $this->request->getPost('correo_login');
                $contrasena = $this->request->getPost('contrasena_login');
                $Usuario = new UserModel();

                $datosUsuario = $Usuario->obtenerUsuario(['correo' => $correo]);

                if (
                    count($datosUsuario) > 0 &&
                    password_verify($contrasena, $datosUsuario['contraseña']) // Utilizamos 'contraseña'
                ) {
                    $data = [
                        'user_id' => $datosUsuario['id_usuario'],
                        'user_nombre' => $datosUsuario['nombre']
                    ];

                    $session = session();
                    $session->set($data);

                    return redirect()->to(base_url('main'))->with('mensaje', '0');
                } else {
                    return redirect()->to(base_url('login'))->with('mensaje', '1');
                }
            } elseif ($accion === 'registrar') {
                // Lógica para registrar
                $usuario = new UserModel();
                $correo = $this->request->getPost('correo_signin');
                $nombre = $this->request->getPost('usuario_signin');
                $telefono = $this->request->getPost('telefono_signin');
                $contrasena = $this->request->getPost('contrasena1_signin');

                $data = [
                    'correo' => $correo,
                    'nombre' => $nombre,
                    'telefono' => $telefono,
                    'contraseña' => $contrasena, // Utilizamos 'contraseña'
                ];

                $usuario->insert($data);

                $session = session();
                $session->setFlashdata('registro_exitoso', '¡Usuario registrado con éxito!');

                return redirect()->to(base_url('login'));
            } else {
                echo "¡Error! Acción desconocida: " . $accion;
            }
        }

        $data['registro_exitoso'] = session()->getFlashdata('registro_exitoso');

        // Verificar si el usuario ya ha iniciado sesión
        if (session()->get('user_id')) {
            return redirect()->to(base_url('main'));
        }

        // Cargar la vista con el formulario de inicio de sesión y registro
        return view('login', $data);
    }
}