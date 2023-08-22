<?php

namespace App\Controllers;

class Tienda extends BaseController
{
    public function tienda(): string
    {
        return view('Tienda/tienda_virtual');
    }

}