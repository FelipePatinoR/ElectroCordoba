<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Usuario extends BaseController
{
	public function login()
	{

		$correo = $this->request->getPost('email');
		$password = $this->request->getPost('pass');
		$Usuario = new UserModel();

		$datosUsuario = $Usuario->obtenerUsuario(['correo' => $correo]);

		if (
			count($datosUsuario) > 0  &&
			$password == $datosUsuario[0]['contraseña']
		) {

			$data = [
				"correo" => $datosUsuario[0]['correo']
			];

			$session = session();
			$session->set($data);


			return redirect()->to(base_url() . 'main');
		} else {
			return redirect()->to(base_url(). 'login');
		}


	}

	public function salir()
	{
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}



	public function register()
	{

		$Usuario = new UserModel();
		$data = [
			'correo' => $this->request->getPost('email'),
			'nombre' => $this->request->getPost('name'),
			'telefono' => $this->request->getPost('tel'),
			'contraseña' => $this->request->getPost('pass'),

		];
		$Usuario->insert($data);
		return redirect()->to(base_url() . 'login');

	}


}