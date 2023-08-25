<?php

namespace App\Controllers;
use App\Models\ProductoModel;

class Producto extends BaseController
{
    public function index()
    {
        $producto = new ProductoModel();
        $electrocordoba= $producto->findAll();
        $electrocordoba= ['data2' => $electrocordoba];
        return view('productos/listado', $electrocordoba);
    }

    public function form_registro()
    {
        return view('productos/form_registro');
    }

    public function registrar()
    {
        $producto = new ProductoModel();
        $electrocordoba = [
            'nombre' => $this->request->getPost('nombre'),
            'cantidad' => $this->request->getPost('cantidad'),
            'precio' => $this->request->getPost('precio'),
            'id_subcategoria' => $this->request->getPost('id_subcategoria'),

        ];
        $producto->insert($electrocordoba);
        return redirect()->to(base_url().'productos/registrar');
    }


}
