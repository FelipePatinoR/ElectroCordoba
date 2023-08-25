<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;


class Usuario extends BaseController
{
    public function iniciar_sesion()
    {
        $mensaje = session('mensaje');
        $correo = $this->request->getPost('correo_login');
        $contrasena = $this->request->getPost('contrasena_login');
        $Usuario = new UserLoginModel();

        $datosUsuario = $Usuario->obtenerUsuario(['correo_login' => $correo]);

        if (
            count($datosUsuario) > 0 &&
            password_verify($contrasena, $datosUsuario[0]['contrasena_login'])
        ) {

            $data = [
                "correo" => $datosUsuario[0]['correo_login']
            ];

            $session = session();
            $session->set($data);

            return redirect()->to(base_url('/main'))->with('mensaje', '0 ');
        } else {
            return redirect()->to(base_url('/login'))->with('mensaje', '1');
        }

    }

    public function obtenerUsuario($data)
    {
        $Usuario = $this->db->table('usuario');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
    }
    public function registrar()
    {
        $usuario = new UserModel();
        $data = [
            'email_usu' => $this->request->getPost('correo_signin'),
            'nombre_usu' => $this->request->getPost('usuario_signin'),
            'tel_usu' => $this->request->getPost('telefono_signin'),
            'cont_usu' => $this->request->getPost('contrasena1_signin'),
        ];
        $usuario->insert($data);
        return redirect()->to(base_url() . 'login');
    }



}