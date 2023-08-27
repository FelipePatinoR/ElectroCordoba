<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class Producto extends BaseController
{
    public function index()
    {
        $producto = new ProductoModel();
        $data = $producto->findAll();
        $data = ['data' => $data];
        return view(base_url().'productos/listado', $data);
    }

    public function form_registro()
    {
        return view('productos/form_registrar');
    }

    public function registrar()
    {
        $producto = new ProductoModel();
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'cantidad' => $this->request->getPost('cantidad'),
            'precio' => $this->request->getPost('precio'),
            'id_subcategoria' => $this->request->getPost('id_subcategoria'),

        ];
        $producto->insert($data);
        return redirect()->to(base_url() . 'productos/form_registrar');
    }


}