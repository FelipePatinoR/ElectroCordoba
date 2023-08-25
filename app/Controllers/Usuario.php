<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use SebastianBergmann\Environment\Console;

class Usuario extends BaseController
{
    public function login() {

		$correo = $this->request->getPost('email');
		$password = $this->request->getPost('pass');
		$Usuario = new UserModel();

		$datosUsuario = $Usuario->obtenerUsuario(['correo' => $correo]);

		if (count($datosUsuario) > 0 && 
			password_verify($password, $datosUsuario[0]['contraseña'])) {

			$data = [
						"correo" => $datosUsuario[0]['correo'],
						"tipo" => $datosUsuario[0]['tipo']
					];

			$session = session();
			$session->set($data);

			return redirect()->to(base_url('/login'))->with('mensaje','Sesion iniciada correctamente');

		} else {
			return redirect()->to(base_url('/main'))->with('mensaje','Datos Incorrectos');
		}

	}

	public function salir() {
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}
}