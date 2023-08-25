<?php

namespace App\Controllers;
use App\Models\ProductoModel;

class Producto extends BaseController
{
    public function index()
    {
        $producto = new ProductoModel();
        $data2 = $producto->findAll();
        $data2 = ['data2' => $data2];
        return view('productos/listado', $data2);
    }

    public function form_registro()
    {
        return view('productos/form_registro');
    }

    public function registrar()
    {
        $producto = new ProductoModel();
        $data2 = [
            'nombre' => $this->request->getPost('nombre'),
            'cantidad' => $this->request->getPost('cantidad'),
            'precio' => $this->request->getPost('precio'),
            'subcategoria' => $this->request->getPost('subcategoria'),

        ];
        $producto->insert($data2);
        return redirect()->to(base_url().'productos');
    }


}
