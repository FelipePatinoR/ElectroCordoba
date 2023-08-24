<?php
namespace App\Controllers;

class Usuario extends BaseController
{
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
        return redirect()->to(base_url() . 'usuario');
    }

}